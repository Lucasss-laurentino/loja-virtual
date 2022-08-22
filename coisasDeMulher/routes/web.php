<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UserController;

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

Route::resource('/produtos', ProdutosController::class)->only([
    'index'
]);

/* Route users */

Route::get('/login/{provider}', [UserController::class, 'redirectToProvider'])->name('social.login');
Route::get('/login/{provider}/callback', [UserController::class, 'callback'])->name('social.callback');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
