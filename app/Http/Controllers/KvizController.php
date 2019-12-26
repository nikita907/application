<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\Qustion;
use Auth;


class KvizController extends Controller
{
public function getCreate(){
    return view('kviz_create');
}
public function getAll(){
    $objs=Quiz::where('user_id',Auth::user()->id)->orderBy('id','DESC')->paginate(10);
    return view('my_kviz',compact('objs'));
}
    public function getShow($id=null){
        $obj=Quiz::where('user_id',Auth::user()->id)->where('id',$id)->first();
        return view('blank',compact('obj'));
    }

    public function postAdd(){
        $obj=new Quiz;
        $obj->header=$_POST['header'];
        $obj->previous=$_POST['previous'];
        $obj->next=$_POST['next'];
        $obj->thank=$_POST['thank'];
        $obj->user_id=(Auth::user())?Auth::user()->id:0;
        $obj->save();
        if($_POST['question_name']){
            $quest=new Qustion;
            $quest->quiz_id=$obj->id;
            $quest->question_name=$_POST['question_name'];
            $quest->question_discription=$_POST['question_discription'];
            $quest->question_tip=$_POST['question_tip'];
            $quest->user_id=(Auth::user())?Auth::user()->id:0;
            $quest->save();
        }
        return redirect()->back();
    }
}
