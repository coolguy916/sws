<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\espController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\DeskripsiController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\FiturController;
use App\Http\Controllers\KeunggulanController;
use App\Models\Deskripsi;

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

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'HakAkses:admin']], function() {
    Route::get('/', [App\Http\Controllers\ModuleController::class, 'index'])->name('admin');
    Route::get('/user', [App\Http\Controllers\AdminController::class, 'index'])->name('data.user');
    Route::get('/deskripsi', [App\Http\Controllers\DeskripsiController::class, 'index'])->name('data.deskripsi');
    Route::post('/update-deskripsi', [DeskripsiController::class, 'update'])->name('deskripsi.update');
    Route::get('/imageslider', [App\Http\Controllers\SliderController::class, 'index'])->name('data.slider');
    Route::post('/add-imageslider', [App\Http\Controllers\SliderController::class, 'create'])->name('add.slider');
    Route::post('/update-imageslider', [App\Http\Controllers\SliderController::class, 'update'])->name('update.slider');
    Route::get('/fitur', [FiturController::class, 'index'])->name('data.fitur');
    Route::post('/add-fitur', [FiturController::class, 'create'])->name('add.fitur');
    Route::post('/update-fitur', [FiturController::class, 'update'])->name('update.fitur');
    Route::get('/keunggulan', [KeunggulanController::class, 'index'])->name('data.keunggulan');
    Route::post('/add-keunggulan', [KeunggulanController::class, 'create'])->name('add.keunggulan');
    Route::post('/update-keunggulan', [KeunggulanController::class, 'update'])->name('update.keunggulan');
    Route::get('/dokumentasi', [DokumentasiController::class, 'index'])->name('data.dokumentasi');
    Route::post('/add-dokumentasi', [DokumentasiController::class, 'create'])->name('add.dokumentasi');
    Route::post('/update-dokumentasi', [DokumentasiController::class, 'update'])->name('update.dokumentasi');
    Route::get('/kontak', [KontakController::class, 'index'])->name('data.kontak');
    // Route::post('/add-dokumentasi', [KontakController::class, 'create'])->name('add.kontak');
    // Route::post('/update-dokumentasi', [KontakController::class, 'update'])->name('update.kontak');
    Route::post('/update-user', [AdminController::class, 'update'])->name('update.user');
    Route::post('/delete-user', [AdminController::class, 'delete'])->name('delete.user');
    Route::post('/add-module', [App\Http\Controllers\ModuleController::class, 'create'])->name('add.module');
    Route::post('/post-module', [App\Http\Controllers\ModuleController::class, 'store'])->name('store.module');
    Route::post('/update-module', [ModuleController::class, 'update'])->name('update.module');
    Route::post('/delete-module', [App\Http\Controllers\ModuleController::class, 'deleted'])->name('delete.module');
});


// Route::resource('/schedule', \App\Http\Controllers\espController::class);
Route::controller(espController::class)->middleware(['auth', 'HakAkses:user'])->group(function () {
    Route::get('/schedule', 'index')->name('schedule.index');
    Route::post('schedules', 'store')->name('schedule.store');
     Route::get('fetch-usermodules', 'fetchusermodule')->name('moduleuser.fetch');
     Route::get('fetch-schedules', 'fetchschedule')->name('schedule.fetch');
    // Route::get('/schedule/create', 'create')->name('schedule.create');
    Route::get('edit-schedule/{id}', 'edit')->name('schedule.edit');
    Route::put('update-schedule/{id}', 'update')->name('schedule.update');
    Route::delete('delete-schedule/{id}', 'destroy')->name('schedule.destroy');
});
Route::controller(espController::class)->group(function(){
    Route::get('switch-statusmodule', [App\Http\Controllers\ModuleController::class, 'switchstatus'])->name('switchmodule.status');
    Route::get('/api/valve/manual/{id}', 'manual');
    Route::get('/api/valve/auto/{id}', 'auto');
    Route::get('/api/valve/time', 'timeSched');
    Route::get('/api/valve/autoDone/{id}/{status}', 'autoDone');
    Route::get('switch-statusmodule', [App\Http\Controllers\ModuleController::class, 'switchstatus'])->name('switchmodule.status');
    Route::POST('/update_status', 'updatestatus');

});
Auth::routes();

Route::get('/', function () {
    return view('landing-page.index');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
