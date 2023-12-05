<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //
    function UploadFile(Request $req){
        return $req->file('docs')->store('img');
    }
}
