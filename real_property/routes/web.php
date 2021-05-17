<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/properties',[PageController::class,'getproperties']);
Route::get('/contactus',[PageController::class,'getcontact']);
Route::get('/aboutus',[PageController::class,'getabout']);
Route::get('/single-property',[PageController::class,'getsingleproperty']);

Route::get('/admin', function () {
    return view('backendpages.dashboard');
 });

 Route::get('/error', function () {
    return view('backendpages.404');
 });
