<?php

namespace App\Http\Controllers;

use Error;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'admin' => User::where('role', 'admin')->orderBy('created_at', 'desc')->get()
        ];
        return view('adminViews.admin.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminViews.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataAdmin = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ],[
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Inputan harus email',
            'email.unique' => 'Email telah terdaftar',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password harus lebih dari 8 karakter'
        ]);
        $dataAdmin['role'] = "admin";
        $dataAdmin['email_verified_at'] = date('Y-M-d H:i:s');
        $dataAdmin['password'] = bcrypt($request->password);
        $dataAdmin['remember_token'] = Str::random(60);
        DB::beginTransaction();
        try {
            User::create($dataAdmin);
            DB::commit();
            return redirect()->route('admin')->with('success', $request->name . ' berhasil dibuat');
        } catch (Error $e) {
            DB::rollBack();
            dd($e);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data = [
            'admin' => $user
        ];
        return view('adminViews.admin.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if($request->email == $user->email){
            $validated_email = 'required|email';
        }
        else{
            $validated_email = 'required|unique:users|email';
        }
        if($request->password == null)
        {
            $validated_password = '';
        }
        else 
        {
            $validated_password = "required|min:8";
        }
        $dataAdmin = $request->validate([
            'name' => 'required',
            'email' => $validated_email,
            'password' => $validated_password,
        ],[
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Inputan harus email',
            'email.unique' => 'Email telah terdaftar',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password harus lebih dari 8 karakter'
        ]);
        $dataAdmin['role'] = "admin";
        $dataAdmin['email_verified_at'] = $user->email_verified_at;
        if($request->password == null)
        {
            $dataAdmin['password'] = $user->password;
        }
        else 
        {
            $dataAdmin['password'] = bcrypt($request->password);
        }
        $dataAdmin['remember_token'] = $user->remember_token;
        DB::beginTransaction();
        try {
            User::where('id', $user->id)->update($dataAdmin);
            DB::commit();
            return redirect()->route('admin')->with('success', $request->name . ' berhasil diganti');
        } catch (Error $e) {
            DB::rollBack();
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        DB::beginTransaction();
        try {
            User::destroy($user->id);
            DB::commit();
            return redirect()->route('admin')->with('success', $user->name . ' berhasil dibuat');
        } catch (Error $e) {
            DB::rollBack();
            dd($e);
        }
    }
    public function edit_profile(User $user){
        $data = [
            'user' => $user
        ];
        return view('adminViews.admin.editprofile', $data);
    }
    public function update_profile(Request $request, User $user){
        if($request->email == $user->email){
            $emailValid = 'required';
        }else{
            $emailValid = 'required|unique:users';
        }
        $request->validate([
            'name' => 'required',
            'email'=> $emailValid
        ],[
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.unique' => 'Email telah terdaftar',
        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email
        ];
        DB::beginTransaction();
        try {
            User::where('id', $user->id)->update($data);
            DB::commit();
            return redirect()->route('dashboard');
        } catch (Error $e) {
            DB::rollBack();
            dd($e);
        }
    }
    public function change_password(User $user){
        $data = [
            'user' => $user
        ];
        return view('adminViews.admin.changepassword', $data);
    }
    public function update_password(Request $request, User $user){
        $request->validate([
            'oldpassword' => 'required|current_password',
            'newpassword' => 'required|min:8'
        ],[
            'oldpassword.required' => 'Password lama tidak boleh kosong',
            'oldpassword.current_password' => 'Password salah',
            'newpassword.required' => 'Password baru tidak boleh kosong',
            'newpassword.min' => 'Password harus lebih dari 8 karakter'
        ]);
        $data = [
            'password' => bcrypt($request->newpassword),
        ];
        DB::beginTransaction();
        try {
            User::where('id', $user->id)->update($data);
            DB::commit();
            return redirect('logout');
        } catch (Error $e) {
            DB::rollBack();
            dd($e);
        }
    }
}
