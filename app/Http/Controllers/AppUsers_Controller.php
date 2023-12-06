<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\AppUsers;

class AppUsers_Controller extends Controller
{
    function ShowData(){

        $data = AppUsers::paginate(10);
        return  view('listData', ['collection'=>$data]);

    }
    function deleteData($id){

        $data = AppUsers::find($id);
        $data->delete();
        return redirect('/list');

    }
    function editData($id){

        $data = AppUsers::find($id);
        return view('updateData', ['collection'=>$data]);

    }
    function updateData(Request $req){

        $data = AppUsers::find($req->id);
        $data->name = $req->name;
        $data->username= $req->username;
        $data->password = $req->password;
        $data->save();
        return redirect('list');
    }
}
