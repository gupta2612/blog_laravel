<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\AppUsers;

class AppUsers_Controller extends Controller
{
    function AddData(Request $req){

        $add = new AppUsers;
        $add->name=$req->name;
        $add->username=$req->username;
        $add->password=$req->password;
        $add->token_key=$req->_token;
        $add->save();

        return redirect('apply');
    }
}
