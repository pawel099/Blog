<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
 
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

//Route::get('/', function () {
   // return view('page');
//});


 Route::get('/', [PostsController::class,'index']);
 Route::get('/post/{id}', [PostsController::class, 'article'])->name('view_article');
 Route::post('/comment/{id}', [PostsController::class, 'comments'])->name('comment');