<?php

namespace App\Http\Controllers;
use App\Models\course_trainee;
use Illuminate\Http\Request;

class deletecourse extends Controller
{
    public function destroy(Request $request)
    {
        $to_delete=course_trainee::where('course_id',$request->course_id)->where('trainee_id',$request->trainee_id)->delete();
      
        return redirect()->route('allstudents.index');
    }
}
