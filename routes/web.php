<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Users;

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

/*
|--------------------------------------------------------------------------
| Make Controller
|--------------------------------------------------------------------------
|   Go to the terminal and create controller
|
|    - php artisan make:controller <Controller Name>
|
|   Find this controller
|       - app/http/controllers/
|
|
*/

/*
|--------------------------------------------------------------------------
| Make Function in controller
|--------------------------------------------------------------------------
|   Find this controller
|       - app/http/controllers/Users.php
|
|    and create function line no. - 10 to 12
|
*/

//  Call Controller from Routing
Route::get('users',[Users::class,'index']);
//  End

// Pass Params with URL
Route::get('users/{user}',[Users::class,'datapass']);

// API Call and Json format output
Route::get('ap/{apicall}',[Users::class,'json_format']);

//  End
