<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\trainer;

class coursecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('courses.index',[
            'test'=> course::all()
                    ]);
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create',[
            'trainer'=> trainer::all()
                    ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fdate = $request->startdate;
        $tdate = $request->enddate;
        $datetime1 = strtotime($fdate); // convert to timestamps
        $datetime2 = strtotime($tdate); // convert to timestamps
        $days = (int)(($datetime2 - $datetime1)/86400);

        $request->validate([
            'coursename'=>['required','string'],
            'coursedetails'=>['required','string'],
            'trainer'=>['required','integer'],
            'cost'=>['required','numeric'],
            'startdate'=>['required','date'],
            'enddate'=>['required','date'],
            'max'=>['required','numeric'],
        ]);            
        $course= new course();
        $course->course_name=strip_tags($request->input('coursename'));
        $course->description=strip_tags($request->input('coursedetails'));
        $course->end_date=strip_tags($request->input('enddate'));
        $course->start_date=strip_tags($request->input('startdate'));
        $course->cost=strip_tags($request->input('cost'));
        $course->trainer_id=strip_tags($request->input('trainer'));
        $course->max=strip_tags($request->input('max'));
        $course->duration=$days;

            $course->duration=$days;

            $course->save();
            return redirect()->route('allcourses.create');
     
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($allcourse)
    {
           return view('courses.show',[
            'index'=>course::findorfail($allcourse)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view ('courses.edit',[
            'index'=> course::findorfail($id)
        ],[
            'trainer'=> trainer::all()
        ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $allcourse)
    {
        $fdate = $request->startdate;
        $tdate = $request->enddate;
        $datetime1 = strtotime($fdate); // convert to timestamps
        $datetime2 = strtotime($tdate); // convert to timestamps
        $days = (int)(($datetime2 - $datetime1)/86400);
        $request->validate([
            'coursename'=>['required','string'],
            'coursedetails'=>['required','string'],
            'trainer'=>['required','integer'],
            'cost'=>['required','numeric'],
            'startdate'=>['required','date'],
            'enddate'=>['required','date'],
            'max'=>['required','numeric'],
        ]);            
            $to_update=  course::findorfail($allcourse);
            $to_update->course_name=strip_tags($request->input('coursename'));
            $to_update->description=strip_tags($request->input('coursedetails'));
            $to_update->end_date=strip_tags($request->input('enddate'));
            $to_update->start_date=strip_tags($request->input('startdate'));
            $to_update->cost=strip_tags($request->input('cost'));
            $to_update->trainer_id=strip_tags($request->input('trainer'));
            $to_update->max=strip_tags($request->input('max'));
            $to_update->duration=$days;

            $to_update->save();
            return redirect()->route('allcourses.show',$allcourse);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($allcourse)
    {
        $to_delete=course::findorfail($allcourse);
        $to_delete->delete();
        return redirect()->route('allcourses.index');
    }
}
