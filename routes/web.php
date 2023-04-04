<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');})->name('dashboard');
    // Route::get('addproducts', function () {
    //     return view('add-products')->name('add-products');
    // });

    Route::get('/setup', function () {
          return view('setup');
    })->name('setup');

    Route::get('/product-upload', function () {
        return view('product-upload');
    })->name('product-upload');
});

// Route::get('/addproducts' , function(){
//     return view('add-products')->name('add-products');
// });

// Route::get('/addproducts' , PagesController::class , 'PagesController@index')->name('add-product');

//make four cards in bootstrap in one row?




