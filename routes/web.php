<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// route for news
Route::get('/create/news', [newsController::class , 'create']) ->name('news.create') ;
Route::get('/store/news', [newsController::class , 'store']) ->name('news.store') ;
Route::put('/update/news/{id}', [newsController::class , 'update']) ->name('news.update') ;
Route::get('/edit/news/{id}', [newsController::class , 'edit']) ->name('news.edit') ;
Route::get('/d', [newsController::class , 'index']) ->name('news.index') ;

// route for category
Route::get('/create/category', [categoryController::class , 'create']) ->name('category.create') ;
Route::post('/store/category', [categoryController::class , 'store']) ->name('category.store') ;
Route::put('/update/category/{id}', [categoryController::class , 'update']) ->name('category.update') ;
Route::get('/edit/category/{id}', [categoryController::class , 'edit']) ->name('category.edit') ;

;
