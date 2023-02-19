<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trainee;
use App\Models\course;
use App\Models\receipt;
class traineecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    

    public function index()
    {
        return view('trainees.index',[
            'test'=> trainee::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainees.create',[
            'course'=>course::all()]
    );
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
            'firstname'=>['required','alpha'],
            'edlevel'=>['required','string'],
            'email'=>['required','string'],
            'address'=>['required','string'],
            'phonenumber'=>['required','numeric'],
            'bday'=>['required','date'],
            'gender'=>['required','alpha'],
        ]);

        $trainee= new trainee();
        $trainee->first_name=strip_tags($request->input('firstname'));
        $trainee->edlevel=strip_tags($request->input('edlevel'));
        $trainee->email=strip_tags($request->input('email'));
        $trainee->address=strip_tags($request->input('address'));
        $trainee->phone=strip_tags($request->input('phonenumber'));
        $trainee->b_day=strip_tags($request->input('bday'));
        $trainee->gender=strip_tags($request->input('gender'));

        $trainee->save();

       return redirect()->route('allstudents.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($allstudent)
    {
        return view('trainees.show',[
            'index'=>trainee::findorfail($allstudent),
            'test'=>course::all(),
            'receipt'=>receipt::all()

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
        return view ('trainees.edit',[
            'index'=> trainee::findorfail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $allstudent)
    {
        $request->validate([
            'firstname'=>['required','string'],
            'edlevel'=>['required','string'],
            'email'=>['required','string'],
            'address'=>['required','string'],
            'phonenumber'=>['required','numeric'],
            'bday'=>['required','date'],
            'gender'=>['required','alpha'],
        ]);
        $to_update=trainee::findorfail($allstudent);
        $to_update->first_name=strip_tags($request->input('firstname'));
        $to_update->edlevel=strip_tags($request->input('edlevel'));
        $to_update->email=strip_tags($request->input('email'));
        $to_update->address=strip_tags($request->input('address'));
        $to_update->phone=strip_tags($request->input('phonenumber'));
        $to_update->b_day=strip_tags($request->input('bday'));
        $to_update->gender=strip_tags($request->input('gender'));

        $to_update->save();
        return redirect()->route('allstudents.show',$allstudent);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($allstudent)
    {
        $to_delete=trainee::findorfail($allstudent);
        $to_delete->delete();
        return redirect()->route('allstudents.index');
    }
}
