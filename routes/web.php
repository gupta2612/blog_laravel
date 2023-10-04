<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\usersController;

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


// Call View
Route::get('/users', function(){
    return view('users');
});
// Route::view('/users', 'users');

// Pass Data in view
Route::get('/users/{name}', function($name){
    return view('users', ['abc'=>$name]);
});


// Pass to view page in Controller and static data pass
Route::get('/users-controller', [usersController::class, 'loadPage']);

// Pass to view page in Controller dynamic data pass
Route::get('/users-controller/{name}', [usersController::class, 'dynamicPage']);

// End
