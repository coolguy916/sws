<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\espController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\StatisticModuleController;
use App\Models\StatisticModule;
use App\Http\Controllers\DeskripsiController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\FiturController;
use App\Http\Controllers\KeunggulanController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\ChartDataController;
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

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'HakAkses:admin']], function () {
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
    Route::post('/add-kontak', [KontakController::class, 'create'])->name('add.kontak');
    Route::post('/update-kontak', [KontakController::class, 'update'])->name('update.kontak');
    Route::get('/testimoni', [TestimonialController::class, 'index'])->name('data.testimoni');
    Route::post('/add-testimoni', [TestimonialController::class, 'create'])->name('add.testimoni');
    Route::post('/update-testimoni', [TestimonialController::class, 'update'])->name('update.testimoni');
    Route::get('/footer', [FooterController::class, 'index'])->name('data.footer');
    Route::post('/add-footer', [FooterController::class, 'create'])->name('add.footer');
    Route::post('/update-footer', [FooterController::class, 'update'])->name('update.footer');
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
    Route::get('/dashboard', 'dashboard')->name('schedule.dashboard');
    Route::post('schedules', 'store')->name('schedule.store');
    Route::get('fetch-usermodules', 'fetchusermodule')->name('moduleuser.fetch');
    Route::get('fetch-schedules', 'fetchschedule')->name('schedule.fetch');
    // Route::get('/schedule/create', 'create')->name('schedule.create');
    Route::get('edit-schedule/{id}', 'edit')->name('schedule.edit');
    Route::put('update-schedule/{id}', 'update')->name('schedule.update');
    Route::delete('delete-schedule/{id}', 'destroy')->name('schedule.destroy');
});
Route::controller(espController::class)->group(function () {
    Route::get('switch-statusmodule', [App\Http\Controllers\ModuleController::class, 'switchstatus'])->name('switchmodule.status');
    Route::get('/api/valve/manual/{id}', 'manual');
    Route::get('/api/valve/auto/{id}', 'auto');
    Route::get('/api/valve/time', 'timeSched');
    Route::get('/api/valve/autoDone/{id}/{status}', 'autoDone');
    Route::get('switch-statusmodule', [App\Http\Controllers\ModuleController::class, 'switchstatus'])->name('switchmodule.status');
    Route::POST('/update_status', 'updatestatus');
    Route::get('/api/counter/kwh/{kwh}/{power}/{arus}/{id_module}', 'dailyPZem');
    Route::post('/api/counter/schedule/{kwh}/{power}/{id_module}', 'scheduledCounter');
    Route::post('/api/counter/daily/{kwh}/{power}/{id_module}', 'dailyCounter');
    Route::put('/api/counter/Realtime/{kwh}/{power}/{voltage}/{ampere}/{id_module}', 'realtimeCounter');


});

Route::controller(StatisticModuleController::class)->middleware(['auth', 'HakAkses:user'])->group(function () {
    Route::get('/module-statistic', 'index')->name('statistic.index');
});

Route::controller(StatisticModuleController::class)->group(function () {
    Route::get('/api/getDynamicChartData', 'getDynamicChartData')->name('statisticdata');
});

Auth::routes();

Route::get('/', [LandingpageController::class, 'index'])->name('landingpage');


// template Baru

// admin


Route::get('/tables-new', function () {
    return view('template2.Admin.tables');
});

Route::get('/form-new', function () {
    return view('template2.Admin.form');
});
Route::get('/chart-data', [ChartDataController::class, 'getChartData']);

// user 

Route::get('/dashboard-user', function () {
    return view('template2.User.dashboard');
});

Route::get('/tables-user', function () {
    return view('template2.User.tables');
});

Route::get('/form-user', function () {
    return view('template2.User.form');
});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
