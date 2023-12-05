<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\AppUsers;

class AppUsers_Controller extends Controller
{
    // Models database


      /**  Single Table fatch **/
    function getData(){

        return  AppUsers::all();
    }

    /**  Multiple Table fatch **/

    // function getData(){
    //     $multi = array('users'=>AppUsers::all(), 'blogs'=>AppUsers::all());
    //     return  $multi;
    // }


}
