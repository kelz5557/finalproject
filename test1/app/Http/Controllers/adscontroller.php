<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ad;
use App\Models\course;
class adscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('ads.index',['test'=>ad::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('ads.create',['test'=>course::all()]);
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
            'title'=>['required','string'],
            'coursename'=>['required','integer'],
            'description'=>['required','string'],
            'startdate'=>['required','date'],
            'enddate'=>['required','date'],
        ]);            
        $ad= new ad();
        $ad->title=strip_tags($request->input('title'));
        $ad->course_id=strip_tags($request->input('coursename'));
        $ad->description=strip_tags($request->input('description'));
        $ad->end_date=strip_tags($request->input('enddate'));
        $ad->start_date=strip_tags($request->input('startdate'));
        $ad->user_id=auth()->user()->id;



            $ad->save();
            return redirect()->route('ads.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view ('ads.edit',[
            'index'=> ad::findorfail($id)
        ],['test'=>course::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ad)
    {
        
        $request->validate([
            'title'=>['required','string'],
            'coursename'=>['required','integer'],
            'description'=>['required','string'],
            'startdate'=>['required','date'],
            'enddate'=>['required','date'],
        ]);            
        $to_update=  ad::findorfail($ad);
        $to_update->title=strip_tags($request->input('title'));
        $to_update->course_id=strip_tags($request->input('coursename'));
        $to_update->description=strip_tags($request->input('description'));
        $to_update->end_date=strip_tags($request->input('enddate'));
        $to_update->start_date=strip_tags($request->input('startdate'));
        $to_update->user_id=auth()->user()->id;



            $to_update->save();
            return redirect()->route('ads.index');
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
