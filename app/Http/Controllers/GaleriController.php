<?php

namespace App\Http\Controllers;

use Error;
use Ramsey\Uuid\Uuid;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'galeri' => Galeri::all()
        ];
        return view('adminViews.galeri.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminViews.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpg,png,jpeg|file|max:1024',
            'title' => 'required',
        ],[
            'title.required' => 'Judul Harus diisi',
            'img.required' => 'Gambar harus diisi',
            'img.image' => 'File harus gambar',
            'img.mimes' => 'File harus gambar',
            'img.max' => 'Ukuran gambar terlalu besar',
        ]);
        $image = $request->file('img')->hashName();
        $data = [
            'uuid' => Uuid::uuid4()->getHex(),
            'title' => $request->title,
            'img' => $image,
        ];
        DB::beginTransaction();
        try {
            Galeri::create($data);
            $request->file('img')->move(public_path() . '/storage/photos/galeri-img', $image);
            DB::commit();
            return redirect()->route('galeri')->with('success', $request->title . ' berhasil dibuat');
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
    public function show(Galeri $galeri)
    {
        $data = [
            'galeri' => $galeri
        ];
        return view('adminViews.galeri.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Galeri::find($id);
        DB::beginTransaction();
        try {
            File::delete("storage/photos/galeri-img/$galeri->img");
            Galeri::destroy($id);
            DB::commit();
            return redirect()->route('galeri')->with('success', $galeri->title . ' berhasil dihapus');
        } catch (Error $e) {
            DB::rollBack();
            dd($e);
        }
    }
    public function galeri_user(){
        $data = [
            'galeri' => Galeri::all()
        ];
        return view('userViews.galeri', $data);
    }
}
