<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\DB;


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

Route::get('/',[AboutController::class,'index']);

//Route::get('/ajay', 'AboutController@index');
Route::get("ajay",[AboutController::class,'akv']);
Route::get("contactus",[AboutController::class,'vijay']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
