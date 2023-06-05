<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\addProduct;
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
Route::get('/viewCategory', [App\Http\Controllers\HomeController::class, 'viewCategory'])->name('viewCategory');

Route::get('/', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/login', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/addcategory', function () {
    return view('pages.addcategory');
});
Route::get('/editCategory', function () {
    return view('pages.editCategory');
});
Route::get('/viewProduct', function () {
    return view('pages.viewProduct');
});
Route::get('/addProduct', function () {
    return view('pages.addProduct');
});
Route::get('/editProduct', function () {
    return view('pages.editProduct');
});

 
 
require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/viewCategory',[App\Http\Controllers\addCategory::class,'viewCategory']);

Route::post('/addcategory',[App\Http\Controllers\addCategory::class,'getCategory'])->name('getCategory');

Route::get('deleteCategory/{id}',[App\Http\Controllers\addCategory::class,'deleteCategory']);

Route::get('editCategory/{id}',[App\Http\Controllers\addCategory::class,'editCategory'])->name('editCategory');

Route::post('/updateCategory',[App\Http\Controllers\addCategory::class,'updateCategory'])->name('updateCategory');


Route::get('/getProduct',[addProduct::class,'getProduct'])->name('getProduct');
Route::get('/viewProduct',[addProduct::class,'viewProduct'])->name('viewProduct');
Route::post('/addProduct',[addProduct::class,'getProduct'])->name('getProduct');
Route::get('deleteProduct/{id}',[addProduct::class,'deleteProduct'])->name('deleteProduct');
Route::get('editProduct/{id}',[addProduct::class,'editProduct'])->name('editProduct');
Route::post('/updateProduct',[addProduct::class,'updateProduct'])->name('updateProduct');
