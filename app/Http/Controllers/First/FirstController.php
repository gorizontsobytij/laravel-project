<?php

namespace App\Http\Controllers\First;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\newDatabase;
class FirstController extends Controller
{
    public function show(Request $request){
        $name = "Igor";
        $arr = array('a'=>'1','b'=>2);
       // $db = newDatabase::find(1);
      //  dd($request);
        //return view('first.first',['name'=>$name]);
        return view('first.first')->withN($name);
    }
}
