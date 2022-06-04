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

Route::middleware(['auth','verified'])->group(function() {


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/template', function () {
    return view('template','verified');

})->name('template');

//admin

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('administrator')->middleware(['can:isAdmin']);

Route::get('/konta/', [App\Http\Controllers\PostsController::class, 'index'])->name('index') ;
Route::get('/konta/edits/{posts}', [App\Http\Controllers\PostsController::class, 'edit'])->name('edit') ;
Route::post('/dodaj/', [App\Http\Controllers\PostsController::class, 'store'])->name('add') ;
Route::get('/dodaj/', [App\Http\Controllers\PostsController::class, 'create'])->name('creates') ;
Route::get('/panel/', [App\Http\Controllers\AdminController::class, 'adminlite'])->name('uprawnienia')  ;

Route::post('/konta/{posts}', [App\Http\Controllers\PostsController::class, 'update'])->name('UpdatesPost') ;
Route::delete('/konta/{id}', [App\Http\Controllers\PostsController::class, 'destroy'])->name('deletePost') ;
Route::delete('/admin/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('deleteuser')->middleware(['can:isAdmin']);

Route::get('/posty/{id}', [App\Http\Controllers\PostsController::class, 'article'])->name('coments');
Route::post('/comment/{id}', [App\Http\Controllers\AplikacjaController::class, 'store'])->name('add_coment');
Route::get('/settings/', [App\Http\Controllers\AdminController::class, 'show'])->name('panel');
Route::delete('/remove/{id}', [App\Http\Controllers\AdminController::class, 'delete'])->name('delete_comments');
 });

require __DIR__.'/auth.php';
Auth::routes(['verify' => true]);






