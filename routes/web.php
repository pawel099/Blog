<?php

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

Route::get('/',[App\Http\Controllers\ProgramController::class, 'index'])->name('key_index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/template', function () {
    return view('template');

})->middleware(['auth'])->name('template');

Route::get('/konta/', [App\Http\Controllers\PostsController::class, 'index'])->name('index')->middleware(['auth']) ;
Route::get('/konta/edits/{posts}', [App\Http\Controllers\PostsController::class, 'edit'])->name('edit')->middleware(['auth']) ;
Route::post('/dodaj/', [App\Http\Controllers\PostsController::class, 'store'])->name('add')->middleware(['auth']) ;
Route::get('/dodaj/', [App\Http\Controllers\PostsController::class, 'create'])->name('creates')->middleware(['auth']) ;
Route::post('/konta/{posts}', [App\Http\Controllers\PostsController::class, 'update'])->name('UpdatesPost')->middleware(['auth']) ;
Route::delete('/konta/{id}', [App\Http\Controllers\PostsController::class, 'destroy'])->name('deletePost')->middleware(['auth']) ;
Route::get('/posty/{id}', [App\Http\Controllers\PostsController::class, 'article'])->name('coments');
Route::post('/comment/{id}', [App\Http\Controllers\AplikacjaController::class, 'store'])->name('add_coment');
require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
