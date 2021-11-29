<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
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

//created and coded by Andriatama Bagaskara
Route::get('/', [HomeController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'index']);
Route::get('/detail/{id}', [DetailController::class, 'index']);
Route::get('/contact', function () {
    return view('contact');
});
