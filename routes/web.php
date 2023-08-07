<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home;
use App\Http\Controllers\Admin;

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

Route::get('/', [Home::class, 'index']);
Route::post('/create_book/', [Home::class, 'createBook']);
Route::post('/delete/', [Home::class, 'deleteBook']);
Route::get('/admin/', [Admin::class, 'index']);
Route::post('/update/', [Admin::class, 'update']);