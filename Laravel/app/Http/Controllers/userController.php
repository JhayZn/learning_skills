<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function getInfos(){
        return view('info');
    }

    public function postInfos(Request $request){
        return 'le nom est '. $request->input('nom');
    }
}
