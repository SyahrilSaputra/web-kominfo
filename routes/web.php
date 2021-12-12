<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    Route::get('/dashboard', function () {
        return view('adminViews.index');
    });
});
Route::group(['middleware' => ['auth', 'cekrole:superadmin']], function () {
});