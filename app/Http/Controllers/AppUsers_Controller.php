<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\AppUsers;

class AppUsers_Controller extends Controller
{
    function ShowData(){

        $data = AppUsers::paginate(10);
        return  view('home', ['collection'=>$data]);

    }



}
