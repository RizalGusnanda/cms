<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PrakController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//Praktikum 1
// Route::get('/', function () {
//     return "Hi! Selamat Datang di Website Laravel";
// });

// Route::get('/about', function () {
//     return "
//     NIM     : 2041720015
//     Nama    : Muchamad Rizal Gusnanda Atmaja
//     Kelas   : TI - 2G";
// });

// Route::get('/articles/{id}', function ($id) {
//     return "Ini adalah halaman Artikel dengan id " . $id;
// });

//Praktikum 2
//nomer 2
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

//nomer 5
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

//Praktilkum 3
// Route::get('/',[prak3Controller::class,'index']);
// Route::get('/', function () {
//     echo "Selamat Datang Di Home Company";
// });


// Route::prefix('product') -> group(function(){
//     Route::get("", function(){
//         echo "Menampilkan macam-macam product<br><br>";
        
//         echo "marbel-and-friends-kids-games<br>";
//         echo "riri-story-books<br>";
//         echo "kolak-kids-songs<br>";
//         echo "marbel-edu-games";
//     });
// });

// Route::prefix('news') -> group(function(){

//     Route::get("", function(){
//         echo "Menampilkan daftar berita<br><br>";

//         echo "educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19<br>";
//         echo "educa-studio-penggalangan-dana-untuk-bencana-banjir";
//     });
    
// });

// Route::prefix('program') -> group(function(){

//     Route::get("", function(){
//         echo "Menampilkan daftar program<br><br>";

//         echo "program/karir<br>";
//         echo "program/magang<br>";
//         echo "program/kunjungan-industri<br>";
//     });
    
// });


// Route::get("/about-us" , function(){
//     echo " Nama  : Muchamad Rizal Gusnanda Atmaja<br>";
//     echo " Nim   : 2041720015<br>";
//     echo " Kelas : TI 2G";
// });
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [PrakController::class, 'index']);
// Route::get('/contact-us', function(){
//     return view('contact');
// });
// Route::get('/team', function(){
//     return view('team');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
