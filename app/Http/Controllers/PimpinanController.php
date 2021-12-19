<?php

namespace App\Http\Controllers;

use Error;
use App\Models\Pimpinan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PimpinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'pimpinan' => Pimpinan::first()
        ];
        return view('adminViews.profile.pimpinan.index', $data);
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
    public function edit(Pimpinan $pimpinan)
    {
        $data = [
            'pimpinan' => $pimpinan
        ];
        return view('adminViews.profile.pimpinan.edit', $data); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pimpinan $pimpinan)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg|file|max:1024'
        ],[
            'nama.required' => 'Nama tidak boleh kosong',
            'jabatan.required' => 'Jabatan tidak boleh kosong',
            'image.image' => 'File harus gambar',
            'image.mimes' => 'File harus gambar',
            'image.max' => 'Ukuran gambar terlalu besar',
        ]);
        if($request->file('image'))
        {
            $cover = $request->file('image')->hashName();
        }else {
            $cover = $pimpinan->cover;
        }
        $data = [
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'image' => $cover
        ];
        DB::beginTransaction();
        try {
            Pimpinan::where('id', $pimpinan->id)->update($data);
            if($request->file('image'))
            {
                File::delete("storage/photos/pimpinan-img/$pimpinan->image");
                $request->file('image')->move(public_path() . '/storage/photos/pimpinan-img', $cover);
                // $request->file('cover')->store('photos/information-img');
            }
            DB::commit();
            return redirect()->route('pimpinan')->with('toast_success',$request->nama . ' berhasil diganti');
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
