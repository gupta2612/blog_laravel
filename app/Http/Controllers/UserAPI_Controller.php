<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserAPI_Controller extends Controller
{
    //

    function index(){

        $data = Http::get('https://reqres.in/api/users?page=2');
        return view('home', ['collection'=>$data['data']]);

    }
}
