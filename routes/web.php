<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenempatanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DaerahController;
use App\Http\Controllers\LaporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/* 

=== untuk penyimpanan foto, lakukan ini ===
php artisan storage:link

=== untuk menjalani laravel, lakukan ini ===
php artisan serve

=== untuk update composer, lakukan ini ===
composer update

=== jika menggunakan node js, lakukan ini ===
npm run dev watch

*/

Route::get('/', function () {
    return view('welcome');
});

/** URL Select Wilayah */
Route::post('/getKecamatan', [DaerahController::class, 'getKecamatan'])
    ->name('getKecamatan');
Route::post('/getDesa', [DaerahController::class, 'getDesa'])
    ->name('getDesa');

/** URL Select Lokasi */
Route::post('getLokasi', [DaerahController::class, 'getLokasi'])
    ->name('getLokasi');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

/** Laporan */
Route::get('/laporan', function () {
    return view('admin.laporan.data-laporan');
});

Route::get('/add-laporan', function () {
    return view('admin.laporan.add-laporan');
});

Route::get('/detail-laporan', function () {
    return view('admin.laporan.detail-laporan');
});

Route::get('/edit-laporan', function () {
    return view('admin.laporan.edit-laporan');
});


/** Penempatan */
Route::get('/penempatan', function () {
    return view('admin.penempatan.data-penempatan');
});

Route::get('/add-penempatan', function () {
    return view('admin.penempatan.add-penempatan');
});

Route::get('/detail-penempatan', function () {
    return view('admin.penempatan.detail-penempatan');
});

Route::get('/edit-penempatan', function () {
    return view('admin.penempatan.edit-penempatan');
});


/** SADMIN */
Route::get('/sdashboard', function () {
    return view('sadmin.dashboard');
});

Route::get('/slaporan', function () {
    return view('sadmin.laporan.data-laporan');
});

Route::get('/spenempatan', function () {
    return view('sadmin.penempatan.data-penempatan');
});

Route::get('/sdetail-laporan', function () {
    return view('sadmin.laporan.detail-laporan');
});

Route::get('/sdetail-penempatan', function () {
    return view('sadmin.penempatan.detail-penempatan');
});





/** SUPERADMIN */
Route::middleware('auth:superadmin')->prefix('sadmin')->group(function () {
    /** Dashboard */
    Route::get('/', [HomeController::class, 'dashboardSuperAdmin']);

    /** Data Penempatan */
    Route::get('penempatan', [PenempatanController::class, 'indexs'])
        ->name('penempatan.indexs');
    Route::get('penempatan/{penempatan}', [PenempatanController::class, 'shows'])
        ->name('penempatan.shows');
});

/** ADMIN */
Route::middleware('auth:admin')->prefix('admin')->group(function () {
    /** Dashboard */
    Route::get('/', [HomeController::class, 'dashboardAdmin']);
   

    /** Data Users */
    Route::resource('manage-users', UserController::class);
    Route::get('manage-users-exportpdf', [UserController::class, 'exportPDF'])
        ->name('manage-users.pdf');

    // Route::get('manage-users-exportpdfid', [UserController::class, 'exportPDFID'])
    //     ->name('manage-users.pdfid');
    Route::get('manage-users-exportexcel', [UserController::class, 'exportExcel'])
        ->name('manage-users.excel');


    /** Penempatan */
    Route::get('penempatan-exportpdf', [PenempatanController::class, 'exportPDF'])
        ->name('penempatan.pdf');
        Route::get('penempatan-exportexcel', [PenempatanController::class, 'exportExcel'])
        ->name('penempatan.excel');

    /** PDF */
    // Route::get('manage-users', [UserController::class, 'exportPDF'])->name('manage-users.pdf');

    /** Data Penempatan */
    Route::resource('penempatan', PenempatanController::class);

    /** Data Laporan */
    Route::resource('laporan', LaporanController::class);
});

/** Auth */
Route::get('/login', [AuthController::class, 'index'])
    ->name('login');
Route::post('/postlogin', [AuthController::class, 'login'])
    ->name('postlogin');
Route::post('/', [AuthController::class, 'logout'])
    ->name('logout');

/** API */
