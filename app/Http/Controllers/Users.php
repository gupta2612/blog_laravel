<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index(){
        echo "Hello from controller";
    }

    public function datapass($user){
        echo $user;
    }

    public function json_format($apicall){

        return ['URL' => $apicall,'name' => "Manish", 'age' => "30", 'Place' => "Noida"];
    }
}
