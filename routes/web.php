<?php

use App\Http\Controllers\demoController;
use App\Http\Controllers\photoController;
use App\Http\Controllers\singleActionController;
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

Route::get('/', [demoController::class, 'index']);
Route::get('courses', singleActionController::class);
Route::resource('/photo', photoController::class);
