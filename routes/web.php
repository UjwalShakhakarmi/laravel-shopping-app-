<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopListController;

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
Route::get('/', [ShopListController::class ,'index']);

Route::get('/delete/{id}', [ShopListController::class ,'delete']);
Route::get('/edit/{id}', [ShopListController::class ,'edit']);
Route::post('/save-list',[ShopListController::class ,'saveList'])->name('saveList');//paila url ani class ko function ani route bata pathako name
Route::post('/edit-list',[ShopListController::class ,'update'])->name('editlist');//paila url ani class ko function ani route bata pathako name

 
