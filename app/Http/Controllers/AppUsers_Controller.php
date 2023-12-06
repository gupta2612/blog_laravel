<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\AppUsers;

class AppUsers_Controller extends Controller
{
    function ShowData(){

        $data = AppUsers::paginate(10);
        return  view('addData', ['collection'=>$data]);

    }
    function deleteData($id){

        $data = AppUsers::find($id);
        $data->delete();
        return redirect('/list');

    }

    // function AddData(Request $req){

    //     $add = new AppUsers;
    //     $add->name=$req->name;
    //     $add->username=$req->username;
    //     $add->password=$req->password;
    //     $add->token_key=$req->_token;
    //     $add->save();

    //     return redirect('apply');
    // }
}
