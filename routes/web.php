<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenempatanController;
use App\Http\Controllers\DaerahController;

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

/** SUPERADMIN */
Route::middleware('auth:superadmin')->prefix('sadmin')->group(function () {
    /** Dashboard */
    Route::get('/', [HomeController::class, 'dashboardSuperAdmin']);
});

/** ADMIN */
Route::middleware('auth:admin')->prefix('admin')->group(function () {
    /** Dashboard */
    Route::get('/', [HomeController::class, 'dashboardAdmin']);
   
    /** Data Users */
    Route::resource('manage-users', UserController::class);
   
    /** Data Penempatan */
    Route::resource('penempatan', PenempatanController::class);
});

/** Auth */
Route::get('/login', [AuthController::class, 'index'])
    ->name('login');
Route::post('/postlogin', [AuthController::class, 'login'])
    ->name('postlogin');
Route::post('/', [AuthController::class, 'logout'])
    ->name('logout');

/** API */
