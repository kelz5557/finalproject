<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trainer;
class trainercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('trainers.index',[
            'test'=> trainer::all()
                    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
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
            'lastname'=>['required','alpha'],
            'email'=>['required','string'],
            'specialization'=>['required','string'],
            'phonenumber'=>['required','numeric'],
        ]);

        $trainee= new trainer();
        $trainee->first_name=strip_tags($request->input('firstname'));
        $trainee->last_name=strip_tags($request->input('lastname'));
        $trainee->email=strip_tags($request->input('email'));
        $trainee->specialization=strip_tags($request->input('specialization'));
        $trainee->phone=strip_tags($request->input('phonenumber'));
        $trainee->save();
       return redirect()->route('alltrainers.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($alltrainer)
    {
        return view('trainers.show',[
            'index'=>trainer::findorfail($alltrainer)
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
        return view ('trainers.edit',[
            'index'=> trainer::findorfail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $alltrainer)
    {
       
     

        $request->validate([
            'firstname'=>['required','alpha'],
            'lastname'=>['required','alpha'],
            'email'=>['required','string'],
            'specialization'=>['required','string'],
            'phonenumber'=>['required','numeric'],
        ]);

        $to_update= trainer::findorfail($alltrainer);
        $to_update->first_name=strip_tags($request->input('firstname'));
        $to_update->last_name=strip_tags($request->input('lastname'));
        $to_update->email=strip_tags($request->input('email'));
        $to_update->specialization=strip_tags($request->input('specialization'));
        $to_update->phone=strip_tags($request->input('phonenumber'));
        $to_update->save();
       return redirect()->route('alltrainers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($alltrainer)
    {
       
        $to_delete=trainer::findorfail($alltrainer);
        $to_delete->delete();
        return redirect()->route('alltrainers.index');
    }
}
