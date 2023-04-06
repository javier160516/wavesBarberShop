<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/', function () {
    return view('index');
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/updateInfo', 'updateInfo');

Route::get('store', [App\Http\Controllers\StoreController::class, 'index'])->name('store');
Route::get('store/{name}', [App\Http\Controllers\StoreController::class, 'showCategories'])->name('store.showCategories');

Route::get('/galery', [App\Http\Controllers\GaleryController::class, 'index'])->name('galery');

Route::view('/productview', 'productview');

Route::view('/products','products');

Route::view('/address','address');

Route::view('/payment', 'payment');

Route::view('/summary', 'summary');

// Route::view('/date', 'date');
Route::get('/date', [App\Http\Controllers\DateController::class,'index' ]);
Route::post('/date', [App\Http\Controllers\DateController::class,'create']);

Route::get('services', [App\Http\Controllers\ServicesController::class, 'index'])->name('services');
Route::get('services/{id}', [App\Http\Controllers\ServicesController::class, 'showHair'])->name('services.showHair');

/*
|--------------------------------------------------------------------------
|Administrador
|--------------------------------------------------------------------------
|
*/
Route::get('admin/dates', [App\Http\Controllers\Admin\DateAdminController::class, 'index']);
Route::delete('/dates/delete/{id}', [App\Http\Controllers\Admin\DateAdminController::class, 'delete']);


Route::view('admin/index', 'admin/index');

Route::view('admin/store', 'admin/store');
Route::view('admin/services', 'admin/services');
Route::view('admin/galery', 'admin/galery');
Route::view('admin/settings', 'admin/settings');
Route::view('admin/users', 'admin/users');