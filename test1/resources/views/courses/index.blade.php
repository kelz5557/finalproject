@extends('layout')
@section('content')
<div class="container-fluid">
				    
                    <div class="row page-titles mx-0">
                        <div class="col-sm-6 p-md-0">
                            <div class="welcome-text">
                                <h4>كل الدورات</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">لوحة التحكم</a></li>
                                <li class="breadcrumb-item active"><a href="javascript:void(0);">الدورات</a></li>
                                <li class="breadcrumb-item active"><a href="javascript:void(0);">كل الدورات</a></li>
                            </ol>
                        </div>
                    </div>
                    
                    <div class="row">
                        <?php $i=0 ?>
                        @foreach($test as $index)
                        <?php $i++ ?>
                        <div class="col-xl-3 col-xxl-4 col-lg-6 col-md-6">
                            <div class="card">
                                <img class="img-fluid" src="images/courses/pic1.jpg" alt="">
                                <div class="card-body">
                                    <h4><a href="{{route('allcourses.show',['allcourse'=>$index['id']])}}">{{$index['course_name']}}</a></h4>
                                    <ul class="list-group mb-3 list-group-flush">
                                        <li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0 text-muted">{{$index['start_date']}}</span>
                                        <li class="list-group-item px-0 d-flex justify-content-between">
                                            <span class="mb-0">مدة الدورة</span><strong> {{$index['duration']}} يوم </strong></li>
                                        <li class="list-group-item px-0 d-flex justify-content-between">
                                            <span><i class="fa fa-graduation-cap text-primary mr-2"></i>عدد المتدربين</span><strong>{{$index['max']}}</strong></li>
                                    </ul>
                                    <a href="#" class="btn btn-primary">المزيد من التفاصيل</a>
                                    <form action="{{route('allcourses.destroy',['allcourse'=>$index['id']])}}" method="POST" >
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="حذف" class="btn btn-sm btn-danger"></input>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                </div>
@endsection