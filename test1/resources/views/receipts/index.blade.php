@extends('layout')
@section('content') 

            <div class="container-fluid">
				
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>تحصيل الرسوم</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">لوحة التحكم</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">الرسوم</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">تحصيل الرسوم</a></li>
                        </ol>
                    </div>
                </div>
				
                <div class="row">
					<div class="col-lg-12">
						<div class="card">
                            <div class="card-header">
                                <h4 class="card-title">كل الرسوم</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example4" class="display" style="min-width: 950px">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>اسم المتدرب</th>
                                                <th>اسم الدورة</th>
                                                <th>رقم الايصال</th>
                                                <th>المبلغ</th>
                                                <th>التاريخ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=0 ?>
                                            <?php  $cost=0 ?>
                                            @foreach ($r as $receipt)
                                            <?php $i++ ?>  
                                            <?php $cost+=$receipt->cost ?>
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td> {{$receipt->trainee_name}}</td>
                                                <td> {{$receipt->course_name}}</td>
                                                <td>{{$receipt->id}}</td>
                                                <td><span class="badge badge-success">{{$receipt->cost}}</span></td>
                                                <td>{{$receipt->created_at}}</td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td><strong>اجمالي الرسوم</strong></td>
                                                <td><span class="badge badge-success">{{$cost}}</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
   


   

@endsection 