<?php

namespace App\Http\Controllers;

use App\Maintext;

class StaticController extends Controller
{
    public function getindex($url=null){
		$obj=Maintext::where("url",$url)->first();
	return view('static',compact('obj'));
	}
}
