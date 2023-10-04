<?php

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

Route::get('/', function () {
    return view('welcome');
});

/**----------------------------------------------**/
/** how to make routing **/

        // Route::get('/about-us', function () {
        //     return view('about');
        // });

        // Route::get('/contact-us', function () {
        //     return view('contact');
        // });

/** End **/
/** routing in short view **/
        Route::view("/about-us","about");
        Route::view("/contact-us","contact");
/** End **/
/**----------------------------------------------**/

/** Pass data with Routing **/
        Route::get('/pass-to-data/{name}', function ($name) {
            return view('data-pass',['name'=>$name]);
        });
/** End **/

/** Anchor Tag **/
    //    Looking for welcome page
/** End **/

/** Redirect **/
        Route::get('/home', function () {
            return redirect("about-us");
        });
/** End **/
