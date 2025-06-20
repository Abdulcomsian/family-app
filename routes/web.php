<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\AlbumController;
use App\Http\Controllers\User\ChatController;
use App\Http\Controllers\User\EventController;
use App\Http\Controllers\User\GiftsController;
use App\Http\Controllers\User\MemberController;
use App\Http\Controllers\User\StoreController;
use App\Http\Controllers\User\TaskController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('/custom-login', [LoginController::class, 'login'])->name('custom.login');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('add/member', [MemberController::class, 'store'])->name('add.member');
    Route::get('/event', [EventController::class, 'index'])->name('event');
    Route::post('/event', [EventController::class, 'store'])->name('create.event');
    Route::get('/gifts', [GiftsController::class, 'index'])->name('gifts');
    Route::get('/album', [AlbumController::class, 'index'])->name('album');
    Route::post('/album', [AlbumController::class, 'store'])->name('create.album');
    Route::get('/albums/{id}', [AlbumController::class, 'show'])->name('albums.show');;
    Route::get('/store', [StoreController::class, 'index'])->name('store');
    Route::get('/chat', [ChatController::class, 'index'])->name('chat');
    Route::post('/task', [TaskController::class, 'store'])->name('create.task');
});
