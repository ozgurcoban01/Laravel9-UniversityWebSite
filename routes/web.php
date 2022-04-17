<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminpanel\HomeController as AdminController;
use App\Http\Controllers\AdminPanel\teachersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Second Test Commit
*/

Route::get('/', [HomeController::class,'index'])->name('index');

Route::get('/admin', [AdminController::class,'blank'])->name('admin');

Route::get('/admin/teachers', [teachersController::class,'index'])->name('index');

Route::get('/admin/teachers/create', [teachersController::class,'create'])->name('create');

Route::post('/admin/teachers/store', [teachersController::class,'store'])->name('store');

Route::get('/admin/teachers/edit/{id}', [teachersController::class,'edit'])->name('edit');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
