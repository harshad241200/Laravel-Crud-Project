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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addblog', [App\Http\Controllers\HomeController::class, 'Addblogs'])->name('addblog');
Route::post('/submit', [App\Http\Controllers\HomeController::class, 'save'])->name('submit');
Route::get('/bloglist', [App\Http\Controllers\HomeController::class, 'viewdata'])->name('bloglist');
Route::get('/edit/{id}',[App\Http\Controllers\HomeController::class,'edit']);
Route::post('/update/{id}',[App\Http\Controllers\HomeController::class,'update']);
Route::get('/delete/{id}',[App\Http\Controllers\HomeController::class,'destroy']);
Route::get('/userblog', [App\Http\Controllers\HomeController::class, 'bloguser'])->name('userblog');




