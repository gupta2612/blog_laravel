<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFlashController extends Controller
{
    //
    function flashSession(Request $req){

        $data = $req->input('name');
        $req->session()->flash('name', $data);
        return redirect('/users');
    }
}
