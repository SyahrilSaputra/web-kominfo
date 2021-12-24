<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Contact,
    Informasi,
    Galeri,
    Pimpinan,
    Tentangkami
};
class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'jumKontak' => count(Contact::all()),
            'jumInfo' => count(Informasi::all()),
            'jumGaleri' => count(Galeri::all()),
            'galeri' => Galeri::paginate(6),
            'tentang' => Tentangkami::first(),
            'pimpinan' => Pimpinan::first(),
            'newinfo' => Informasi::orderBy('updated_at', 'desc')->first(),
            'kontak' => Contact::all(),
        ];
        return view('adminViews.dashboard.index', $data);
    }
}
