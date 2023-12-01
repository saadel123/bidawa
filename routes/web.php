<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ChangerLangController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\PresseController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\UserController;

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

Route::get('/', [IndexController::class, 'index']);
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
Route::get('/contact',[ContactController::class,'SiteIndex']);
Route::get('/media', [PresseController::class,'SiteIndex']);
Route::get('/activites', [EvenementController::class, 'SiteIndex']);
Route::get('/activite/{slug}', [EvenementController::class, 'show'])->name('evenement.details');

Route::post('/contact/store', [ContactController::class, 'store'])->name('store.contact');
Route::post('/member/store', [MemberController::class, 'store'])->name('store.member');

Auth::routes(['register' => false]);


Route::get('/changeLang', [ChangerLangController::class, 'lang_change'])->name('changeLang');
Route::get('/ar', [ChangerLangController::class, 'index']);
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // Evenements
    Route::resource('evenements', EvenementController::class);
    // Users
    Route::resource('users', UserController::class);
    // Contacts
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');
    // Membres
    Route::get('/membres', [MemberController::class, 'index'])->name('membres.index');
    Route::get('/membres/{id}', [MemberController::class, 'show'])->name('membres.show');
    // Presses
    Route::resource('presses', PresseController::class);
    // Slides
    Route::resource('slides', SlideController::class);
});
