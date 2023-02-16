<?php

namespace App\Http\Controllers;
use App\Models\archive;

use Illuminate\Http\Request;

class archivescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('archives.index',[
            'test'=> archive::all()
                    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('archives.create');
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
            'name'=>['required','string'],
            'coursename'=>['required','string'],
            'phone'=>['required','numeric'],
            'grade'=>['required','string'],
            'percentage'=>['required','integer'],
            'startdate'=>['required','date'],
            'enddate'=>['required','date'],
            'gender'=>['required','string'],
        ]);            
        $arhive= new archive();
        $arhive->course_name=strip_tags($request->input('coursename'));
        $arhive->name=strip_tags($request->input('name'));
        $arhive->end_date=strip_tags($request->input('enddate'));
        $arhive->start_date=strip_tags($request->input('startdate'));
        $arhive->grade=strip_tags($request->input('grade'));
        $arhive->phone=strip_tags($request->input('phone'));
        $arhive->percentage=strip_tags($request->input('percentage'));
        $arhive->gender=strip_tags($request->input('gender'));

        

            $arhive->save();
            return redirect()->route('allarchives.create');
     
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($allarchive)
    {
        return view('archives.show',[
            'index'=>archive::findorfail($allarchive)
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
        return view ('archives.edit',[
            'index'=> archive::findorfail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $allarchive)
    {
        $request->validate([
            'name'=>['required','string'],
            'coursename'=>['required','string'],
            'phone'=>['required','numeric'],
            'grade'=>['required','string'],
            'percentage'=>['required','integer'],
            'startdate'=>['required','date'],
            'enddate'=>['required','date'],
            'gender'=>['required','string'],
        ]);            
        $to_update= archive::findorfail($allarchive);
        $to_update->course_name=strip_tags($request->input('coursename'));
        $to_update->name=strip_tags($request->input('name'));
        $to_update->end_date=strip_tags($request->input('enddate'));
        $to_update->start_date=strip_tags($request->input('startdate'));
        $to_update->grade=strip_tags($request->input('grade'));
        $to_update->phone=strip_tags($request->input('phone'));
        $to_update->percentage=strip_tags($request->input('percentage'));
        $to_update->gender=strip_tags($request->input('gender'));

        

            $to_update->save();
            return redirect()->route('allarchives.index');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($allarchive)
    {
        
        $to_delete=archive::findorfail($allarchive);
        $to_delete->delete();
        return redirect()->route('allarchives.index');
    }
}
