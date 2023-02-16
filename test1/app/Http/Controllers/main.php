<?php

namespace App\Http\Controllers;
use App\Models\ad;

use Illuminate\Http\Request;

class main extends Controller
{
    public function index(){
        $ads = ad::latest()->take(10)->get();
        return view ('mainindex',['ads'=>$ads]);
    }
    
}
