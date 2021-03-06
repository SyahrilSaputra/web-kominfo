<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    LoginController,
    ContactController,
    DashboardController,
    VisimisiController,
    TentangkamiController,
    PimpinanController,
    GaleriController,
    UserController,
    LandingController,
    InformasiController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Landing Route
Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::group(['prefix' => 'profile'], function(){
    Route::get('/tentang-kami', [TentangkamiController::class, 'tentang'])->name('tentang');
    Route::get('/visi-misi', [VisimisiController::class, 'visi_misi'])->name('visimisi');
    Route::get('/pimpinan', [PimpinanController::class, 'pimpinan_user'])->name('pimpinan.user');
});
Route::get('/galeri', [GaleriController::class, 'galeri_user'])->name('galeri.user');
Route::get('/kontak', [ContactController::class, 'kontak_user'])->name('kontak.user');
Route::get('/informasi', [InformasiController::class, 'informasi_user'])->name('informasi.user');
Route::get('/detail-informasi/{informasi:slug}', [InformasiController::class, 'informasi_detail'])->name('informasi.detail.user');
// End Landing Route
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
// Route::group(['middleware' => ['auth', 'cekrole:admin,superadmin']], function () {

// }

Route::group(['middleware' => ['auth', 'cekrole:admin,superadmin']], function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::group(['prefix' => 'contact'], function(){
            Route::get('/', [ContactController::class, 'index'])->name('contact');
            Route::get('/create-contact', [ContactController::class, 'create'])->name('contact.create');
            Route::post('/store-contact', [ContactController::class, 'store'])->name('contact.store');
            Route::get('/edit-contact/{contact:slug}', [ContactController::class, 'edit'])->name('contact.edit');
            Route::patch('/update-contact/{contact:slug}', [ContactController::class, 'update'])->name('contact.update');
            Route::get('/delete-contact/{contact:slug}', [ContactController::class, 'destroy'])->name('contact.delete');
        });
        Route::group(['prefix' => 'profile'], function(){
            Route::group(['prefix' => 'visi-misi'], function(){
                Route::get('/', [VisimisiController::class, 'visiMisi'])->name('visiMisi');
                Route::get('/edit-visi-misi/{visimisi:uuid}', [VisimisiController::class, 'edit'])->name('visiMisi.edit');
                Route::patch('/update-visimisi/{visimisi:uuid}', [VisimisiController::class, 'update'])->name('visiMisi.update');
            });
            Route::group(['prefix' => 'tentang-kami'], function(){
                Route::get('/', [TentangkamiController::class, 'index'])->name('tentangKami');
                Route::get('/edit-tentang-kami/{tentangkami:uuid}', [TentangkamiController::class, 'edit'])->name('tentangKami.edit');
                Route::patch('/update-tentangkami/{tentangkami:uuid}', [TentangkamiController::class, 'update'])->name('tentangKami.update');
            });
            Route::group(['prefix' => 'pimpinan'], function(){
                Route::get('/', [PimpinanController::class, 'index'])->name('pimpinan');
                Route::get('/edit-pimpinan/{pimpinan:uuid}', [PimpinanController::class, 'edit'])->name('pimpinan.edit');
                Route::patch('/update-pimpinan/{pimpinan:uuid}', [PimpinanController::class, 'update'])->name('pimpinan.update');
            });
        });
        Route::group(['prefix' => 'galeri'], function(){
            Route::get('/', [GaleriController::class, 'index'])->name('galeri');
            Route::get('add-galeri', [GaleriController::class, 'create'])->name('galeri.add');
            Route::post('/galeri-store', [GaleriController::class, 'store'])->name('galeri.store');
            Route::get('/galeri-show/{galeri:uuid}', [GaleriController::class, 'show'])->name('galeri.show');
            Route::get('/galeri-delete/{id}', [GaleriController::class, 'destroy']);
        });
        Route::group(['prefix' => 'informasi'], function(){
            Route::get('/', [InformasiController::class, 'index'])->name('informasi');
            Route::get('create-informasi', [InformasiController::class, 'create'])->name('informasi.add');
            Route::post('add-informasi', [InformasiController::class, 'store'])->name('informasi.store');
            Route::get('/detail-informasi/{informasi:slug}', [InformasiController::class, 'show'])->name('informasi.detail');
            Route::get('/edit-informasi/{informasi:slug}', [InformasiController::class, 'edit'])->name('informasi.edit');
            Route::patch('/update-informasi/{informasi:slug}', [InformasiController::class, 'update'])->name('informasi.update');
            Route::get('/informasi-img-delete/{informasi_image:id}', [InformasiController::class, 'deleteImg'])->name('informasiImg.delete');
            Route::get('/informasi-delete/{informasi:slug}', [InformasiController::class, 'destroy'])->name('informasi.delete');
        });
        Route::get('/edit-profil/{user:id}', [UserController::class, 'edit_profile'])->name('edit.profil');
        Route::patch('/update-profile/{user:id}', [UserController::class, 'update_profile'])->name('profil.update');
        Route::get('/change-password/{user:id}', [UserController::class, 'change_password'])->name('change.password');
        Route::patch('/update-password/{user:id}', [UserController::class, 'update_password'])->name('password.update');
    });
});
Route::group(['middleware' => ['auth', 'cekrole:superadmin']], function () {
    Route::group(['prefix' => 'dashboard'], function(){
        Route::group(['prefix' => 'admin'], function(){
            Route::get('/', [UserController::class, 'index'])->name('admin');
            Route::get('/create-admin', [UserController::class, 'create'])->name('admin.create');
            Route::post('/store-admin', [UserController::class, 'store'])->name('admin.store');
            Route::get('/edit-admin/{user:id}', [UserController::class, 'edit'])->name('admin.edit');
            Route::patch('/update-admin/{user:id}', [UserController::class, 'update'])->name('admin.update');
            Route::get('/delete-admin/{user:id}', [UserController::class, 'destroy'])->name('admin.delete');
        });
    });
});