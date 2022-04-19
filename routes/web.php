<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminController;
use App\Http\Controllers\AdminPanel\TeachersController;

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

Route::get('/', [HomeController::class,'index'])->name('index');

Route::get('/admin', [AdminController::class,'index'])->name('admin');

Route::get('/admin/teachers', [TeachersController::class,'index'])->name('teachers');
Route::get('/admin/teachers/create', [TeachersController::class,'create'])->name('create');
Route::get('/admin/teachers/create2', [TeachersController::class,'create'])->name('create');
Route::post('/admin/teachers/store', [TeachersController::class,'store'])->name('store');
Route::get('/admin/teachers/edit/{id}', [TeachersController::class,'edit'])->name('store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
