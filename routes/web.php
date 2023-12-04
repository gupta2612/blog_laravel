<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;

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

Route::post("users", [UsersController::class, 'getData']);
Route::view('login', 'users');


/**
     * Route middleware
     *
     * folder || app->Http->Middleware-> add link create MIddleware link (line no. 57)
     */


// Route middleware || Only Single Route Use

Route::view('home', 'home');
Route::view('noaccess', 'noaccess');
Route::view('checkage', 'checkAge')->middleware('protectedAge');




