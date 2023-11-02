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




Route::controller(espController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/add', 'add')->name('add');
    Route::post('/add', 'store')->name('data.store');
    Route::get('/edit/{$id}', 'edit')->name('data.edit');
    Route::get('/delete/{$id}', 'delete')->name('data.delete');

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
