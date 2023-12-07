<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilder extends Controller
{

    // All Data show in Direct DB Method
    function operations_1(){
        $data = DB::table('app_users')->get();
        return view('QueryBuilder', ['collection'=>$data]);
    }

    // All Where Condition
    function operations_2(){

        $data = DB::table('app_users')
        ->where('id', 60)
        ->get();
        return view('QueryBuilder', ['collection'=>$data]);
    }

    // All find condition
    function operations_3(){

        return (array)DB::table('app_users')
        ->find(2);

    }

    // All Count
    function operations_4(){
        return DB::table('app_users')
        ->count();
    }

    // All Insert Data
    function operations_5(){
        return DB::table('app_users')
        ->insert([
            'name'=>'Manish',
            'username'=>'Manish@dmo',
            'password'=>'123456'
        ]);
    }


    // All Update Data
    function operations_6(){
        return DB::table('app_users')
        ->where('id', 58)
        ->update([
            'name'=>'Manish',
            'username'=>'Manish@demo',
            'password'=>'123456'
        ]);
    }

        // All Delete Data
    function operations_7(){
        return DB::table('app_users')
        ->where('id', 139)
        ->delete();
    }

}
