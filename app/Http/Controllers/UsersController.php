<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

    function viewLoad() {

     //   return view('users');

      //  return view('users', ['user_name'=> ['Manish', 'Gupta', 'Brijesh']]);

      /*if and else condition*/
    //    return view('users', ['user_name'=> 'Gupta']);

    /* foreach loop */

    
    return view('users', ['user_name'=> ['Manish', 'Gupta', 'Brijesh']]);

    }
}
