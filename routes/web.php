<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminController;
use App\Http\Controllers\AdminPanel\TeachersController;
use App\Http\Controllers\AdminPanel\EventsController;
use App\Http\Controllers\AdminPanel\AdminImage;

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

Route::prefix('admin')->name('admin.')->group(function(){

    Route::get('/', [AdminController::class,'index'])->name('index');

    Route::prefix('teachers')->name('teachers.')->controller(TeachersController::class)->group(function(){
        Route::get('/', 'index')->name('list');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/sedit/{id}','sedit')->name('sedit');
        Route::post('/update/{id}','update')->name('update');
        Route::post('/supdate/{id}','supdate')->name('supdate');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');

    });

    Route::prefix('events')->name('events.')->controller(EventsController::class)->group(function(){
        Route::get('/', 'index')->name('list');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/sedit/{id}','sedit')->name('sedit');
        Route::post('/update/{id}','update')->name('update');
        Route::post('/supdate/{id}','supdate')->name('supdate');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');

    });

    Route::prefix('image')->name('image.')->controller(AdminImage::class)->group(function(){
        Route::get('/{tid}', 'index')->name('list');
        Route::get('/create/{tid}','create')->name('create');
        Route::post('/store/{tid}','store')->name('store');
        Route::get('/edit/{tid}/{id}','edit')->name('edit');
        Route::get('/sedit/{id}','sedit')->name('sedit');
        Route::post('/update/{tid}/{id}','update')->name('update');
        Route::post('/supdate/{tid}/{id}','supdate')->name('supdate');
        Route::get('/show/{tid}/{id}','show')->name('show');
        Route::get('/destroy/{tid}/{id}','destroy')->name('destroy');

    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
