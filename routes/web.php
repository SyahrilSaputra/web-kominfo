<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    LoginController,
    ContactController,
    DashboardController,
    VisimisiController
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



Route::get('/login', function () { return view('loginViews.login'); })->name('login');
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
                Route::get('/', [ProfileController::class, 'tentang-kami'])->name('tentangKami');
            });
            Route::group(['prefix' => 'pimpinan'], function(){
                Route::get('/', [ProfileController::class, 'pimpinan'])->name('pimpinan');
            });
        });
    });
});
Route::group(['middleware' => ['auth', 'cekrole:superadmin']], function () {
});