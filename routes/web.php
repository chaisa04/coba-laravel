<?php

use App\Models\category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;


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

Route::get('/', function () {
    return view ('/home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Jasmine Meijers",
        "umur" => "umur 17 tahun",
        "image" => "sofia.jpeg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        "active" => "categories",
        'categories' => category::all()
    ]);
});
Route::get('/laporan', function(){
    return view('laporan', [
        'title' => 'Post laporan',
        "active" => "laporan",
        "image" => "logo ti baru (2).png"
    ]);
});
Route::get('/lpp', function(){
    return view('lpp', [
        'title' => 'Post lpp',
        "active" => "lpp",
        "image" => "2sd.jpg",
        "ime" => "2.jpg",
        "im" => "titi.jpg",
        "ini" => "ligi.jpg"
    ]);
});
Route::get('/end', function(){
    return view('end', [
        'title' => 'Post end',
        "active" => "end"
    ]);
});
Route::get('/destgs', function(){
    return view('destgs', [
        'title' => 'Post destgs',
        "active" => "destgs",
        "image" => "vs.png",
        "ime" => "wbn.png",
        "im" => "xampp.png",
        "aku" => "gb.jpeg",
        "kaka" => "laragon.png",
        "ini" => "tbl.png",
        "lala" => "gbw.png",
        "li" => "detail.png",
        "la" => "control.png"
    ]);
});

Route::get('/logbook', function(){
    return view('logbook', [
        'title' => 'Post logbook',
        "active" => "logbook"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

