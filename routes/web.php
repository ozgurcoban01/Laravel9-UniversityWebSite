<?php

use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\ContentController;
use App\Http\Controllers\AdminPanel\CoursesController;
use App\Http\Controllers\AdminPanel\DegreeController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\UserController;
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
Route::get('/eventlist', [HomeController::class,'eventlist'])->name('eventlist');
Route::get('/teacher/{id}', [HomeController::class,'teacher'])->name('teacher');
Route::get('/teacherlist', [HomeController::class,'teacherlist'])->name('teacherlist');
Route::get('/announcelist', [HomeController::class,'announcelist'])->name('announcelist');
Route::get('/newslist', [HomeController::class,'newslist'])->name('newslist');
Route::get('/announce/{id}', [HomeController::class,'announce'])->name('announce');
Route::get('/news/{id}', [HomeController::class,'news'])->name('news');
Route::get('/event/{id}', [HomeController::class,'event'])->name('event');
Route::get('/faculty/{id}', [HomeController::class,'faculty'])->name('faculty');

Route::post('/storecomment', [AdminController::class,'storecomment'])->name('storecomment');

Route::post('/storeeventcomment', [AdminController::class,'storeeventcomment'])->name('storeeventcomment');

Route::get('/aboutus', [HomeController::class,'aboutus'])->name('aboutus');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/termsofuse', [HomeController::class,'termsofuse'])->name('termsofuse');
Route::get('/privacy', [HomeController::class,'privacy'])->name('privacy');
Route::get('/logoutuseradmin',[HomeController::class,'logoutuseradmin'])->name('logoutuseradmin');
Route::view('/loginuser','home.login')->name('loginuser');
Route::view('/registeruser','home.register')->name('registeruser');
Route::get('/logoutuser',[HomeController::class,'logout'])->name('logoutuser');
Route::get('/logoutuseradmin',[HomeController::class,'logoutuseradmin'])->name('logoutuseradmin');
Route::view('/loginadmin','admin.login')->name('loginadmin');
Route::post('/loginadmincheck',[HomeController::class,'loginadmincheck'])->name('loginadmincheck');

Route::get('/faqs', [HomeController::class,'faqs'])->name('faqs');

Route::get('/ourteachers', [HomeController::class,'ourteachers'])->name('ourteachers');

Route::post('/storemessage', [HomeController::class,'storemessage'])->name('storemessage');




Route::middleware('auth')->group(function (){

    Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/comments','comments')->name('comments');
        Route::get('/commentdestroy/{id}','commentdestroy')->name('commentdestroy');

        Route::get('/faculties','faculties')->name('faculties');
        Route::get('/facultiesform','facultiesform')->name('facultiesform');
        Route::post('/facultiesstore','facultiesstore')->name('facultiesstore');
        Route::get('/facultiesdestroy/{id}','facultiesdestroy')->name('facultiesdestroy');

        Route::get('/contents','contents')->name('contents');
        Route::get('/contentsform','contentsform')->name('contentsform');
        Route::post('/contentsstore','contentsstore')->name('contentsstore');
        Route::get('/contentsdestroy/{id}','contentsdestroy')->name('contentsdestroy');

    });

    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function(){

        Route::get('/', [AdminController::class,'index'])->name('index');

        Route::get('/settings', [AdminController::class,'settings'])->name('settings');
        Route::post('/settings', [AdminController::class,'update'])->name('settings.update');


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

        Route::prefix('faq')->name('faq.')->controller(FaqController::class)->group(function(){
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
            Route::get('/description/{id}','description')->name('description');

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
            Route::get('/description/{id}','description')->name('description');

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
            Route::get('/description/{id}','description')->name('description');

        });

        Route::prefix('content')->name('content.')->controller(ContentController::class)->group(function(){
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

        Route::prefix('courses')->name('courses.')->controller(CoursesController::class)->group(function(){
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
            Route::get('/description/{id}','description')->name('description');
        });

        Route::prefix('message')->name('message.')->controller(MessageController::class)->group(function(){

            Route::get('/', 'index')->name('list');
            Route::get('/create','create')->name('create');
            Route::post('/store','store')->name('store');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/sshow/{id}','sshow')->name('sshow');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::get('/description/{id}','description')->name('description');

        });

        Route::prefix('comment')->name('comment.')->controller(CommentController::class)->group(function(){

            Route::get('/', 'index')->name('list');
            Route::get('/create','create')->name('create');
            Route::post('/store','store')->name('store');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/sshow/{id}','sshow')->name('sshow');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::get('/description/{id}','description')->name('description');

        });

        Route::prefix('image')->name('image.')->controller(AdminImage::class)->group(function(){
            Route::get('/{nid}', 'index')->name('index');
            Route::post('/store/{nid}','store')->name('store');
            Route::get('/edit/{nid}/{id}','edit')->name('edit');
            Route::get('/sedit/{id}','sedit')->name('sedit');
            Route::post('/update/{nid}/{id}','update')->name('update');
            Route::post('/supdate/{nid}/{id}','supdate')->name('supdate');
            Route::get('/show/{nid}/{id}','show')->name('show');
            Route::get('/destroy/{nid}/{id}','destroy')->name('destroy');
        });

        Route::prefix('user')->name('user.')->controller(AdminUserController::class)->group(function(){
            Route::get('/', 'index')->name('list');
            Route::get('/create','create')->name('create');
            Route::post('/store','store')->name('store');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/sshow/{id}','sshow')->name('sshow');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::get('/description/{id}','description')->name('description');
            Route::post('/addrole/{id}','addrole')->name('addrole');
            Route::get('/destroyrole/{uid}/{rid}','destroyrole')->name('destroyrole');
        });


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
