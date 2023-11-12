<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\espController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ModuleController;

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
Route::middleware(['auth', 'HakAkses:admin'])->group(function () {

Route::get('/admin', [App\Http\Controllers\ModuleController::class, 'index'])->name('admin');
Route::get('/admin.home.user', [App\Http\Controllers\AdminController::class, 'create'])->name('data_user');
Route::get('/admin_form_user', [App\Http\Controllers\AdminController::class, 'index'])->name('form_user');
Route::post('/add-module', [App\Http\Controllers\ModuleController::class, 'create'])->name('add.module');
Route::post('/post-module', [App\Http\Controllers\ModuleController::class, 'store'])->name('store.module');
Route::post('/update-module', [ModuleController::class, 'update'])->name('update.module');
Route::post('/delete-module', [App\Http\Controllers\ModuleController::class, 'deleted'])->name('delete.module');
Route::get('switch-statusmodule', [App\Http\Controllers\ModuleController::class, 'switchstatus'])->name('switchmodule.status');
});

// Route::resource('/schedule', \App\Http\Controllers\espController::class);
Route::controller(espController::class)->middleware(['auth', 'HakAkses:user'])->group(function () {
    Route::get('schedules', 'index')->name('schedule.index');
    Route::post('schedules', 'store')->name('schedule.store');
    Route::get('fetch-usermodules', 'fetchusermodule')->name('moduleuser.fetch');
    Route::get('fetch-schedules', 'fetchschedule')->name('schedule.fetch');
    // Route::get('/schedule/create', 'create')->name('schedule.create');
    Route::get('edit-schedule/{id}', 'edit')->name('schedule.edit');
    Route::put('update-schedule/{id}', 'update')->name('schedule.update');
    Route::delete('delete-schedule/{id}', 'destroy')->name('schedule.destroy');
    Route::get('/api/valve/manual/{id}', 'manual');
    Route::get('/api/valve/auto/{id}', 'auto');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
