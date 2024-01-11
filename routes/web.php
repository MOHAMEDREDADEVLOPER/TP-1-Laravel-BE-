<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController ;
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
// use App\Http\Controllers\helloController ;

// Route::get('/{nom}/{prenom}', [helloController :: class , "index"]);
// Route ::redirect("/{nom}/{prenom}" , "login" , 301) ;
// Route::get('/reda', function () {
//     return view('Hello');
// });
Route::resource('/product', ProductController::class);