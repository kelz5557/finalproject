@extends('layout')
@section('content')
<div class="container-fluid">
				    
                    <div class="row page-titles mx-0">
                        <div class="col-sm-6 p-md-0">
                            <div class="welcome-text">
                                <h4>إضافة الدورات</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">لوحة التحكم</a></li>
                                <li class="breadcrumb-item active"><a href="javascript:void(0);">الدورات</a></li>
                                <li class="breadcrumb-item active"><a href="javascript:void(0);">إضافة الدورات</a></li>
                            </ol>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">تفاصيل الدورة</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('allcourses.store')}}" method="POST">
                                    @csrf
                                        <div class="row">
                                                                         
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">إسم الدورة</label>
                                                    <input name="coursename" type="text" class="form-control">
                                                    @error('coursename')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">اسم المدرب</label>
                                                    <select name="trainer"  class="form-control" required>
                                                        
                                                        <option  disabled selected hidden>المدرب</option>
                                                        @foreach ($trainer as $index)
                                                        <option value="{{$index['id']}}">{{$index['first_name']}} {{$index['last_name']}} </option>
                                                        
                                                        @endforeach
                                                    </select>
                                                    @error('trainer')
                                                    <div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
                                                @enderror
                                                </div>
                                            </div>    
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">تفاصيل الدورة</label>
                                                    <textarea name="coursedetails" class="form-control" rows="5"></textarea>
                                                    @error('coursedetails')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">تاريخ الانتهاء </label>
												<input type="date" name="enddate" class="datepicker form-control" id="datepicker1">
                                                @error('enddate')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
                                            
										</div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">تاريخ البداية</label>
												<input type="date" name="startdate" class="datepicker form-control" id="datepicker1">
                                                @error('startdate')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
                                            
										</div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">تكلفة الدورة</label>
                                                    <input  name="cost" type="text" class="form-control">
                                                    @error('cost')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">الحد الأقصى للمتدربين</label>
                                                    <input name="max" type="number" class="form-control">
                                                    @error('max')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
                                                </div>
                                            </div>
                                        
                                            
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <button type="submit" class="btn btn-primary">تأكيد</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
@endsection