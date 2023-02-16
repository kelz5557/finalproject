<?php

namespace App\Http\Controllers;
use App\Models\course;
use App\Models\traineesrequest;

use Illuminate\Http\Request;

class maincourses extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
        public function index(){
            return view ('ourcourses',['course'=>course::all()]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

        $request->validate([
            'firstname'=>['required','string'],
            'course'=>['required','string'],
            'edlevel'=>['required','alpha'],
            'email'=>['required','string'],
            'address'=>['required','string'],
            'phonenumber'=>['required','numeric'],
            'bday'=>['required','date'],
            'gender'=>['required','string'],
        ]);

        $trainee= new traineesrequest();
        $trainee->first_name=strip_tags($request->input('firstname'));
        $trainee->course_name=strip_tags($request->input('course'));
        $trainee->edlevel=strip_tags($request->input('edlevel'));
        $trainee->email=strip_tags($request->input('email'));
        $trainee->address=strip_tags($request->input('address'));
        $trainee->phone=strip_tags($request->input('phonenumber'));
        $trainee->b_day=strip_tags($request->input('bday'));
        $trainee->gender=strip_tags($request->input('gender'));

        $trainee->save();
       return redirect()->route('ourcourses.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ourcourse)
    {
        
        return view('requests.show',[
            'index'=>course::findorfail($ourcourse)
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
