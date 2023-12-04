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




/**
     * Form Validation
     */

Route::post("users", [UsersController::class, 'getData']);
Route::view('login', 'users');


/**
     * Group Middleware
     *
     * folder || app->Http->Middleware-> add link create MIddleware link (line no. 48)
     */
Route::view('home', 'home');

Route::view('noaccess', 'noaccess');

// Group Middleware page use

Route::middleware(['protectPage'])->group(function () {
    Route::view('checkage', 'checkAge');

    Route::get('/', function () {
        return view('welcome');
    });
});