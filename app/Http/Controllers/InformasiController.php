<?php

namespace App\Http\Controllers;

use Error;
use Ramsey\Uuid\Uuid;
use App\Models\Informasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\InformasiImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;

use Illuminate\Support\Facades\File;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'informasi' => Informasi::orderBy('updated_at', 'desc')->get()
        ];
        return view('adminViews.informasi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminViews.informasi.create');
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
            'image' => '',
            'image.*' => 'image|mimes:jpg,png,jpeg',
            'title' => 'required',
            'publish_at' => 'required',
            'content' => 'required'
        ],[
            'image.image' => 'Harus Gambar1',
            'image.mime' => 'Harus Gambar',
            'image.file' => 'File anda salah',
            'title.required' => 'Judul harus diisi',
            'publish_at.required' => 'Tanggal harus diisi',
            'content.required' => 'Deskripsi harus diisi'
        ]);
        $uuid = Uuid::uuid4()->getHex();
        $data =[
            'uuid' => $uuid,
            'title' => $request->title,
            'publish_at' => $request->publish_at,
            'content' => $request->content,
            'slug' => Str::slug($request->title.$uuid),
        ];
        DB::beginTransaction();
        try {
            Informasi::create($data);
            $info = Informasi::where('uuid', $uuid)->first();
            $files = $request->file('image');
            if($request->hasFile('image')){
                foreach ($files as $file) {
                    $name = time().rand(1, 1000000).'.'.$file->extension();
                    $dataImg = [
                        'informasi_id' => $info->id,
                        'name' => $name,
                    ];
                    InformasiImage::create($dataImg);
                    $file->move(public_path() . '/storage/photos/informasi-img', $name);
                }
            }else{
                $dataImg = [
                    'informasi_id' => $info->id,
                    'name' => 'default_informasi.png',
                ];
                InformasiImage::create($dataImg);
            }
            DB::commit();
            return redirect()->route('informasi')->with('success', $request->title. ' berhasil dibuat');
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
    public function show(Informasi $informasi)
    {
        $data = [
            'informasi' => $informasi,
            'image' => InformasiImage::where('informasi_id', $informasi->id)->get()
        ];
        return view('adminViews.informasi.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasi $informasi)
    {
        $data = [
            'informasi' => $informasi,
            'image' => InformasiImage::where('informasi_id', $informasi->id)->get()
        ];
        return view('adminViews.informasi.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasi $informasi)
    {
        $request->validate([
            'image' => '',
            'image.*' => 'image|mimes:jpg,png,jpeg',
            'title' => 'required',
            'publish_at' => 'required',
            'content' => 'required'
        ],[
            'image.image' => 'Harus Gambar1',
            'image.mime' => 'Harus Gambar',
            'image.file' => 'File anda salah',
            'title.required' => 'Judul harus diisi',
            'publish_at.required' => 'Tanggal harus diisi',
            'content.required' => 'Deskripsi harus diisi'
        ]);
        $uuid = $informasi->uuid;
        $data =[
            'uuid' => $uuid,
            'title' => $request->title,
            'publish_at' => $request->publish_at,
            'content' => $request->content,
            'slug' => Str::slug($request->title.$uuid),
        ];
        DB::beginTransaction();
        try {
            Informasi::where('id', $informasi->id)->update($data);
            $info = Informasi::where('uuid', $uuid)->first();
            $files = $request->file('image');
            if($request->hasFile('image')){
                foreach ($files as $file) {
                    $name = time().rand(1, 1000000).'.'.$file->extension();
                    $dataImg = [
                        'informasi_id' => $info->id,
                        'name' => $name,
                    ];
                    InformasiImage::create($dataImg);
                    $file->move(public_path() . '/storage/photos/informasi-img', $name);
                }
            }
            DB::commit();
            return redirect()->route('informasi')->with('success', $request->title. ' berhasil dibuat');
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
    public function destroy(Informasi $informasi)
    {
        $image = InformasiImage::where('informasi_id', $informasi->id)->get();
        DB::beginTransaction();
        try {
            Informasi::destroy($informasi->id);
            foreach ($image as $img) {
                if($img->name != 'default_informasi.png'){
                    InformasiImage::destroy($img->id);
                    File::delete("storage/photos/informasi-img/$img->name");
                }
            }
            DB::commit();
            return redirect()->route('informasi')->with('success', $informasi->title. ' berhasil dihapus');
        } catch (Error $e) {
            DB::rollBack();
            dd($e);
        }
    }
    public function deleteImg(InformasiImage $informasi_image)
    {
        $if = Informasi::where('id', $informasi_image->informasi_id)->first();
        DB::beginTransaction();
        try {
            File::delete("storage/photos/informasi-img/$informasi_image->name");
            InformasiImage::destroy($informasi_image->id);
            DB::commit();
            return redirect()->route('informasi.edit', ['informasi' => $if->slug]);
        } catch (Error $e) {
            DB::rollBack();
            dd($e);
        }
    }
}
