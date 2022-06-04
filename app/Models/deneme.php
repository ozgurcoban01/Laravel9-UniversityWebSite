Route::prefix('admin')->name('admin.')->group(function () {
Route::get('/',[AdminHomeController::class,'index'])->name('index');

Route::prefix('/transfer')->name('transfer.')->controller(AdminTransferCategoryController::class)->group(function () {

Route::get('/', 'index')->name('index');
Route::get('/create', 'create')->name('create');
Route::post('/store', 'store')->name('store');
Route::get('/edit/{id}', 'edit')->name('edit');
Route::post('/update/{id}', 'update')->name('update');
Route::get('/destroy/{id}', 'destroy')->name('destroy');
Route::get('/show/{id}', 'show')->name('show');
});

Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {

Route::get('/', 'index')->name('index');
Route::get('/create', 'create')->name('create');
Route::post('/store', 'store')->name('store');
Route::get('/edit/{id}','edit')->name('edit');
Route::post('/update/{id}','update')->name('update');
Route::get('/show/{id}','show')->name('show');
Route::get('/destroy/{id}','destroy')->name('destroy');
});
});



Route::prefix('image')->name('image.')->controller(ImageController::class)->group(function () {
Route::get('/{tid}', 'index')->name('index');
Route::get('/create/{tid}', 'create')->name('create');
Route::post('/store/{tid}', 'store')->name('store');
Route::post('/update/{tid}/{id}', 'update')->name('update');
Route::get('/destroy/{tid}/{id}', 'destroy')->name('destroy');

});
