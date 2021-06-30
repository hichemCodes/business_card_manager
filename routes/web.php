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
Route::get('/me', [App\Http\Controllers\ProfileController::class, 'show'])->name('me')->middleware('auth');;
Route::PUT('/me/edit-profile/{id}',[App\Http\Controllers\ProfileController::class, 'update'])->name('edit-profile')->middleware('auth');;


Route::get('/my-labriry', [App\Http\Controllers\LibraryController ::class, 'show'])->name('my-library')->middleware('auth');;
Route::get('/create-card', [App\Http\Controllers\LibraryController ::class, 'add'])->name('create-card')->middleware('auth');;
Route::get('/card-excgange',[App\Http\Controllers\LibraryController::class, 'selectUser'])->name('card-excgange')->middleware('auth');;
Route::get('/show-user-cards/{id}',[App\Http\Controllers\LibraryController::class, 'showAlluserCards'])->name('show-user-cards')->middleware('auth');;

Route::POST('/store-card',[App\Http\Controllers\LibraryController::class, 'store'])->name('store-card')->middleware('auth');;


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


