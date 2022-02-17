<?php

use App\Http\Controllers\PostController;
use App\Http\Middleware\AreYouEvil;
use Illuminate\Support\Facades\Route;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/evilboi', function () {
    return view('evilboi');
})->name('evilboi');

Route::middleware([AreYouEvil::class])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/posts/all', [PostController::class, 'all_posts'])->name('posts.all');
    Route::get('/posts', [PostController::class, 'list'])->name('posts.list');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::post('/posts/{post}/update', [PostController::class, 'update'])->name('posts.update');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::get('/posts', [PostController::class, 'list'])->name('posts.list');
    Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}/delete', [PostController::class, 'destroy'])->name('posts.delete');
});


require __DIR__.'/auth.php';
