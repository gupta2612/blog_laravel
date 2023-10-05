<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

    /**
     * Include view in View page
     * Php in js
     * Csrf token
     * Header and Footer
     */

    function viewLoad() {
    $data =  ['Manish', 'Gupta', 'Brijesh'];
    return view('users', ['user_name'=> $data]);
    }
}
