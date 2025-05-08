<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\LoginController;

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

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


Route::get('/home', [AdminDashboardController::class, 'index'])->name('home');
Route::get('/admin/profile', [AdminDashboardController::class, 'show'])->name('admin.profile');
// Route::get('/admin/settings', [AdminDashboardController::class, 'index'])->name('admin.settings');
Route::post('/admin/logout', [AdminDashboardController::class, 'logout'])->name('admin.logout');

