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

/**
     * Form Validation
     */

// Route::post("users", [UsersController::class, 'getData']);
// Route::view('login', 'users');

// Models database

Route::get('/users', [AppUsers_Controller::class, 'getData']);

