<?php

namespace App\Http\Controllers;

use Error;
use Ramsey\Uuid\Uuid;
use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'contact' => Contact::all()
        ];
        return view('adminViews.kontak.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminViews.kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|unique:contacts',
            'type.unique' => "Nama telah terdaftar",
            'content' => 'required',
        ],[
            'type.required' => "Nama tidak boleh kosong",
            'content.required' => "Isi tidak boleh kosong "
        ]);
        $uuid = Uuid::uuid4()->getHex();
        $data = [
            'uuid' =>  $uuid,
            'type' => $request->type,
            'content' => $request->content,
            'slug' => Str::slug($request->type.$uuid),
        ];
        DB::beginTransaction();
        try {
            Contact::create($data);
            DB::commit();
            return redirect('dashboard/contact')->with('toast_success', $request->type . ' berhasil ditambahkan');
        } catch (Error $e) {
            DB::rollBack();
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $data = [
            'contact' => $contact,
        ];
        return view('adminViews.kontak.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactRequest  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        if ($request->type == $contact->type) {
            $valType = 'required';
        }
        else{
            $valType = 'required|unique:contacts';
        }
        $request->validate([
            'type' => $valType,
            'content' => 'required',
        ],[
            'type.required' => "Nama tidak boleh kosong",
            'type.unique' => "Nama telah terdaftar",
            'content.required' => "Isi tidak boleh kosong "
        ]);
        $data = [
            'uuid' =>  $contact->uuid,
            'type' => $request->type,
            'content' => $request->content,
            'slug' => Str::slug($request->type.$contact->uuid),
        ];
        DB::beginTransaction();
        try {
            Contact::where('id', $contact->id)->update($data);
            DB::commit();
            return redirect('dashboard/contact')->with('success', $contact->type . ' berhasil diganti');
        } catch (Error $e) {
            DB::rollBack();
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        DB::beginTransaction();
        try {
            Contact::destroy($contact->id);
            DB::commit();
            return redirect('dashboard/contact')->with('success', $contact->type . ' berhasil dihapus');
        } catch (Error $e) {
            DB::rollBack();
            dd($e);
        }
    }
    public function kontak_user(){
        $data = [
            'kontak' => Contact::all()
        ];
        return view('userViews.kontak', $data);
    }
}
