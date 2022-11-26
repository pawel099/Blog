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


Route::get('/', [App\Http\Controllers\PostsController::class, 'index'])->name('index') ;
Route::get('/posty/{id}', [App\Http\Controllers\PostsController::class, 'article'])->name('coments');
Route::post('/comment/{id}', [App\Http\Controllers\PostsController::class, 'comments'])->name('add_coment')->middleware(['auth']);
 

Route::get('/dashboard', function () {
    return view('home');
})->name('dashboard');


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/template', function () {
    return view('template','verified');

})->name('template');




require __DIR__.'/auth.php';
Auth::routes(['verify' => true]);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 
