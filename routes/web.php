<?php

use App\Http\Controllers\CategoryController;
use Database\Factories\CategoryFactory;
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


Route::get('/index', function(){
    return view('index');
});


Route::get('/list_catalog', [CategoryController::class, 'listCategoriesAndProducts'])->name('list.catalog');

Route::get('/category/{id}', [CategoryController::class, 'category'])->name('category');