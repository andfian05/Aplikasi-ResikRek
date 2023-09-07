<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/datatables', function () {
    return view('admin.data.datatables');
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
});

/** Auth */
Route::get('/login', [AuthController::class, 'index'])
    ->name('login');
Route::post('/postlogin', [AuthController::class, 'login'])
    ->name('postlogin');
Route::post('/', [AuthController::class, 'logout'])
    ->name('logout');

/** API */
