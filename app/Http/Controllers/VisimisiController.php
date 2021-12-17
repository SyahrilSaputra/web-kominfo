<?php

namespace App\Http\Controllers;

use Error;
use App\Models\Visimisi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisimisiController extends Controller
{
    public function visiMisi(){
        $data = [
            'visiMisi' => Visimisi::first()
        ];
        return view('adminViews.profile.visiMisi.index', $data);
    }
    public function edit(Visimisi $visimisi){
        $data = [
            'visiMisi' => $visimisi
        ];
        return view('adminViews.profile.visimisi.edit', $data);
    }
    public function update(Request $request, Visimisi $visimisi)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ],[
            'title.required' => "Judul tidak boleh kosong",
            'content.required' => "Isi tidak boleh kosong "
        ]);
        $data = [
            'uuid' =>  $visimisi->uuid,
            'title' => $request->title,
            'content' => $request->content,
        ];
        DB::beginTransaction();
        try {
            Visimisi::where('id', $visimisi->id)->update($data);
            DB::commit();
            return redirect()->route('visiMisi')->with('success', $visimisi->title . ' berhasil diganti');
        } catch (Error $e) {
            DB::rollBack();
            dd($e);
        }
    }
}
