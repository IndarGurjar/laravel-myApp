<?php

use App\Http\Controllers\demoController;
use App\Http\Controllers\photoController;
use App\Http\Controllers\singleActionController;
use App\Models\Customer;
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


route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('register', [demoController::class, 'index']);
Route::get('courses', singleActionController::class);
Route::resource('/photo', photoController::class);

Route::post('register', [demoController::class, 'register']);

Route::get('/customer', function () {
    $customers = Customer::all();
    echo "<pre>";
    print_r($customers->toArray());
});
