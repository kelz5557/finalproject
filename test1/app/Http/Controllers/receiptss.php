<?php

namespace App\Http\Controllers;
use App\Models\receipt;
use App\Models\trainee;
use App\Models\course;
use App\Models\User;

use Illuminate\Http\Request;

class receiptss extends Controller
{
    public function index()
    {
        return view('test.index',[
            'test'=> receipt::all()
                    ]);
    }

    public function create($course_id,$trainee_id,$cost,$traineename,$coursename)
    {
        
       if( receipt::where('course_id',$course_id)->where('trainee_id',$trainee_id)->where('cost',$cost)->where('trainee_name',$traineename)->where('course_name',$coursename)->exists() ){}
       else{
        $receipt= new receipt();
        $receipt->course_id=$course_id;
        $receipt->trainee_id=$trainee_id;
        $receipt->cost=$cost;
        $receipt->trainee_name=$traineename;
        $receipt->course_name=$coursename;
        $receipt->user_id=auth()->user()->id;
        $receipt->save();
       }
            return back();
    }
}
