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
                                <h4 class="card-title">تحصيل الرسوم</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example4" class="display" style="min-width: 950px">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>اسم المتدرب</th>
                                                <th>رقم الايصال</th>
                                                <th>نوع الدفع </th>
												<th>الحالة </th>
                                                <th>التاريخ</th>
                                                <th>المبلغ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>قيس الغوج</td>
                                                <td>#54605</td>
                                                 <td>نقدي</td>
                                                <td><span class="badge badge-success">مدفوع</span></td>
                                                <td>2011/04/25</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>الحاكمة سليمان</td>
                                                <td>#45695</td>
                                                 <td>نقدي</td>
                                                <td><span class="badge badge-success">مدفوع</span></td>
                                                <td>2016/08/10</td>
                                                <td><strong>225$</strong></td>
                                            </tr>
                                            <tr>
                                                <td>03</td>
                                                <td>صفاء عجينة</td>
                                                <td>#21999</td>
                                                 <td>نقدي</td>
                                                <td><span class="badge badge-success">مدفوع</span></td>
                                                <td>2021/09/02</td>
                                                <td><strong>120$</strong></td>
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