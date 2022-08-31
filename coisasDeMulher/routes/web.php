<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategories;
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

Route::get('/', function () {
    return to_route('produtos.index');
});

/* Route products */
Route::resource('/produtos', ProdutosController::class)->only([
    'index'
]);

/* Route categories */
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::post('/categories/selectCategories', [CategoryController::class, 'selectCategories'])->name('select.categories');
Route::post('/categories/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

/* Route sub categories */
Route::post('/subCategories/{id}', [SubCategories::class, 'store'])->name('subCategory.store');
Route::post('/subCategories/selectSubCategory/{id}', [SubCategories::class, 'selectSubCategory'])->name('select.subCategory');
Route::post('/subCategories/delete/{id}', [subCategories::class, 'delete'])->name('subCategory.delete');
/* Route users */
Route::get('/login/{provider}', [UserController::class, 'redirectToProvider'])->name('social.login');
Route::get('/login/{provider}/callback', [UserController::class, 'callback'])->name('social.callback');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
