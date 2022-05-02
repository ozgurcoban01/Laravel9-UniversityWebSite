<?php

use App\Http\Controllers\AdminPanel\DegreeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminController;
use App\Http\Controllers\AdminPanel\TeachersController;
use App\Http\Controllers\AdminPanel\EventsController;
use App\Http\Controllers\AdminPanel\AdminImage;
use App\Http\Controllers\AdminPanel\NewsController;
use App\Http\Controllers\AdminPanel\AnnounceController;
use App\Http\Controllers\AdminPanel\FacultyController;

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
Route::get('/event/{id}', [HomeController::class,'event'])->name('event');
Route::get('/teacher/{id}', [HomeController::class,'teacher'])->name('teacher');
Route::get('/announce/{id}', [HomeController::class,'announce'])->name('announce');
Route::get('/news/{id}', [HomeController::class,'news'])->name('news');
Route::get('/faculty/{id}', [HomeController::class,'faculty'])->name('faculty');

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
        Route::get('/description/{id}','description')->name('description');

    });

    Route::prefix('degree')->name('degree.')->controller(DegreeController::class)->group(function(){
        Route::get('/', 'index')->name('list');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/sedit/{id}','sedit')->name('sedit');
        Route::post('/update/{id}','update')->name('update');
        Route::post('/supdate/{id}','supdate')->name('supdate');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/description/{id}','description')->name('description');

    });

    Route::prefix('announce')->name('announce.')->controller(AnnounceController::class)->group(function(){
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

    Route::prefix('news')->name('news.')->controller(NewsController::class)->group(function(){
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

    Route::prefix('faculty')->name('faculty.')->controller(FacultyController::class)->group(function(){
        Route::get('/', 'index')->name('list');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/sedit/{id}','sedit')->name('sedit');
        Route::post('/update/{id}','update')->name('update');
        Route::post('/supdate/{id}','supdate')->name('supdate');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/sshow/{id}','sshow')->name('sshow');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/teacherlist/{id}','teacherlist')->name('teacherlist');
    });

    Route::prefix('image')->name('image.')->controller(AdminImage::class)->group(function(){
        Route::get('/{nid}', 'index')->name('list');
        Route::post('/store/{nid}','store')->name('store');
        Route::get('/edit/{nid}/{id}','edit')->name('edit');
        Route::get('/sedit/{id}','sedit')->name('sedit');
        Route::post('/update/{nid}/{id}','update')->name('update');
        Route::post('/supdate/{nid}/{id}','supdate')->name('supdate');
        Route::get('/show/{nid}/{id}','show')->name('show');
        Route::get('/destroy/{nid}/{id}','destroy')->name('destroy');

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
