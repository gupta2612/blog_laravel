<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppUsers_Controller;

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



// Route::post('/users', [AppUsers_Controller::class, 'AddData']);
Route::get('/list', [AppUsers_Controller::class, 'ShowData']);
Route::get('/delete/{id}', [AppUsers_Controller::class, 'deleteData']);



