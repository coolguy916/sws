<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\espController;
use App\Http\Controllers\AdminController;

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

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/admin.home.user', [App\Http\Controllers\AdminController::class, 'create'])->name('data_user');
Route::get('/admin_form_user', [App\Http\Controllers\AdminController::class, 'index'])->name('form_user');
Route::get('/add-module', [App\Http\Controllers\ModuleController::class, 'create'])->name('add.module');



// Route::resource('/schedule', \App\Http\Controllers\espController::class);
Route::controller(espController::class)->group(function () {
    Route::get('/schedule', 'index')->name('schedule.index');
    Route::get('/schedule/add', 'add')->name('schedule.create');
    Route::post('/schedule/store', 'store')->name('schedule.store');
    Route::get('/schedule/edit/{id}', 'edit')->name('schedule.edit');
    Route::delete('/schedule/{id}', 'destroy')->name('schedule.destroy');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
