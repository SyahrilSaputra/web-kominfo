<?php

namespace App\Http\Controllers;

use Error;
use App\Models\Tentangkami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TentangkamiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'tentangKami' => Tentangkami::first()
        ];
        return view('adminViews.profile.tentangKami.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Tentangkami $tentangkami){
        $data = [
            'tentangKami' => $tentangkami
        ];
        return view('adminViews.profile.tentangkami.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tentangkami $tentangkami)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ],[
            'title.required' => "Judul tidak boleh kosong",
            'content.required' => "Isi tidak boleh kosong "
        ]);
        $data = [
            'uuid' =>  $tentangkami->uuid,
            'title' => $request->title,
            'content' => $request->content,
        ];
        DB::beginTransaction();
        try {
            Tentangkami::where('id', $tentangkami->id)->update($data);
            DB::commit();
            return redirect()->route('tentangKami')->with('success', $tentangkami->title . ' berhasil diganti');
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
    public function destroy($id)
    {
        //
    }
}
