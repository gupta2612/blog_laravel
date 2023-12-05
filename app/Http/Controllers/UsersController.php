<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

    function databaseCheck(){
        return DB::select('select * from app_users');
    }
}
