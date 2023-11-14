<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChangerLangController;
use App\Http\Controllers\IndexController;

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

Route::get('/',[IndexController::class,'index']);
Route::get('/notre-vision', function () {
    return view('site.notre-vision');
});
Route::get('/notre-mission', function () {
    return view('site.notre-mission');
});
Route::get('/nos-objectifs', function () {
    return view('site.nos-objectifs');
});
Route::get('/nos-valeurs', function () {
    return view('site.nos-valeurs');
});
Route::get('/notre-organisation', function () {
    return view('site.notre-organisation');
});
Route::get('/importance-enjeux', function () {
    return view('site.importance-enjeux');
});
Route::get('/patrimoine', function () {
    return view('site.patrimoine');
});
Route::get('/gouvernance-ville', function () {
    return view('site.gouvernance-ville');
});
Route::get('/carte-Interactive', function () {
    return view('site.carte-Interactive');
});
Route::get('/galerie-photos', function () {
    return view('site.galerie-photos');
});
Route::get('/liens-utiles', function () {
    return view('site.liens-utiles');
});
Route::get('/faire-don', function () {
    return view('site.faire-don');
});
Route::get('/devenir-membre', function () {
    return view('site.devenir-membre');
});
Route::get('/soutenir-association', function () {
    return view('site.soutenir-association');
});
Route::get('/partenariats-associatifs', function () {
    return view('site.partenariats-associatifs');
});
Route::get('/contact', function () {
    return view('site.contact');
});
Route::get('/media', function () {
    return view('site.media');
});
Route::get('/admin', function () {
    return view('admin.index');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/changeLang',[ChangerLangController::class,'lang_change'])->name('changeLang');
Route::get('/ar', [ChangerLangController::class, 'index']);