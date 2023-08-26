<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('auth');


// remove --------------------------------------------------------------------------------
Route::group(['namespace' => 'App\Http\Controllers\controller_home', 'middleware' => 'auth'], function () {
    Route::get('home', 'controller_home@controller_home_fun')->name('home');
    Route::get('home2/{id_establishment_type}', 'controller_home2@controller_home2_fun')->name('home2');
    Route::post('calcDistance', 'controller_calcDistance@calcDistance_fun')->name('calcDistance');
});
Route::post('contact_us', 'App\Http\Controllers\controller_contact_us\Contact_Us@contact_us_fun')->name('contact_us');

// Route::get('/home2/{id}', function ($id) {
//     return view('home2',['id'=>$id]);
// })->middleware('auth');

Auth::routes();
Route::fallback(function () {
    return redirect('/login');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
