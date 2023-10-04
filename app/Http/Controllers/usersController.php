<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    // View----------------------------
    // public function loadPage() {

    //     return view('usersController');
    // }

    // static data pass-------------------------
    public function loadPage() {

        return view('usersController', ['name'=>"Manish"]);
    }

    // dynamic data pass
    public function dynamicPage($name) {

        return view('usersController', ['name'=>$name]);
    }

}
