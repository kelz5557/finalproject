<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\traineecontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//auth-------------------------------------------------------------


Route::view('/login', 'auth/login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/dashboard/fees','App\Http\Controllers\receiptcontroller')->middleware('auth');

//requests-----------------------------------------------

Route::resource('/dashboard/requests','App\Http\Controllers\traineesrequestcontroller')->middleware('auth');

//student---------------------------------------------------------

Route::resource('/dashboard/allstudents','App\Http\Controllers\traineecontroller')->middleware('auth');

//course---------------------------------------------------------

Route::resource('/dashboard/allcourses','App\Http\Controllers\coursecontroller')->middleware('auth');


//trainer---------------------------------------------------------

Route::resource('/dashboard/alltrainers','App\Http\Controllers\trainercontroller')->middleware('auth');

//ads---------------------------------------------------------

Route::resource('/dashboard/ads','App\Http\Controllers\adscontroller')->middleware('auth');

//certifcate-------------------------------------------------------------

Route::view('/dashboard/create_certifcate', 'create_certifcate')->middleware('auth');

//archive--------------------------------------------------

Route::resource('/dashboard/allarchives','App\Http\Controllers\archivescontroller')->middleware('auth');

//dashboard--------------------------------------------------------

Route::resource('/dashboard','App\Http\Controllers\dashboardmain')->middleware('auth');

//mainpage------------------------------------------------------------

Route::get('/', [App\Http\Controllers\main::class,'index']);

//aboutus-----------------------------------------------

Route::view('/aboutus', 'aboutus');

//ourcourses-----------------------------------------------

Route::resource('/ourcourses','App\Http\Controllers\maincourses');



//traineecourses-----------------------------------------------


Route::delete('/deletecourses/{course_id}/{trainee_id}',[App\Http\Controllers\deletecourse::class,'destroy'])->name('deletecourses')->middleware('auth');


Route::resource('/traineecourses','App\Http\Controllers\traineecourses')->middleware('auth');

//test----------------------------------------------------------------

Route::post('/receiptss/{course_id}/{trainee_id}/{cost}/{traineename}/{coursename}',[App\Http\Controllers\receiptss::class,'create'])->name('addreceipt')->middleware('auth');





Route::resource('/dashboard/receipts','App\Http\Controllers\receipts')->middleware('auth');