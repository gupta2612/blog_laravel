<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppUsers_Controller;
use App\Http\Controllers\QueryBuilder;
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
    return view('welcome');
});


// QuilyBuild
Route::get('/query', [QueryBuilder::class, 'operations_1']);
Route::get('/query1', [QueryBuilder::class, 'operations_2']);
Route::get('/query2', [QueryBuilder::class, 'operations_3']);
Route::get('/query3', [QueryBuilder::class, 'operations_4']);
Route::get('/query4', [QueryBuilder::class, 'operations_5']);
Route::get('/query5', [QueryBuilder::class, 'operations_6']);
Route::get('/query6', [QueryBuilder::class, 'operations_7']);





