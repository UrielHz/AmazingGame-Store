<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\ImagenController;

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
    return view('inicio');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);

Route::get('/inicio', [LoginController::class,'index'])->name('login');
Route::post('/inicio', [LoginController::class,'store']);

Route::get('/dashboard', [PostController::class,'index'])->name('post.index');
Route::post('/', [LogOutController::class, 'store'])->name('logout');

Route::get('/{user:username}', [PostController::class, 'index'])->name('post.index');
Route::get('/muro/create', [PostController::class, 'create'])->name('post.create');

Route::post('/imagenes', [ImagenController::class,'store'])->name('imagenes');

Route::post('/posts',[PostController::class, 'store'])->name('posts.store');

Route::get('/{user:username}/post/{post}',[PostController::class, 'show'])->name('post.show');

