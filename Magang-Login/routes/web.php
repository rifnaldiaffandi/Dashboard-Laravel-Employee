<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CompanyStructureController;

/*
|--------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",[SesiController::class, 'index']);
Route::post("/",[SesiController::class, 'login']);
Route::get('/admin',[AdminController::class,'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');
Route::get('/dashboard/layouts', [CompanyStructureController::class, 'structure'])->name('layouts.structure')->middleware('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



