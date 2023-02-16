@extends('layout')
@section('content')
<div class="container-fluid">
				    
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4> كل الارشيف</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">لوحة التحكم</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">الارشيف</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">كل الأرشيف</a></li>
                        </ol>
                    </div>
                </div>
				
	<div class="row">
					
		<div class="col-lg-12">
			<div class="row tab-content">
				<div id="list-view" class="tab-pane fade active show col-lg-12">
					<div class="card">
                        <div class="card-header">
                            <h4 class="card-title">أرشيف المركز</h4>
                            <a href="{{url('/dashboard/allarchives/create')}}" class="btn btn-primary">+ اضافة للارشيف</a>
                        </div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="example3" class="display" style="min-width: 845px">
									<thead>
													<tr>
														<th>#</th>
														<th>الاسم</th>
														<th>الدورة</th>
                                                        <th>نسبة النجاح</th>
														<th>تاريخ بداية الدورة</th>
														<th>تاريخ نهاية الدورة</th>
														<th>رقم الهاتف</th>
														<th>تعديل</th>
                                                        <th>حذف</th>
													</tr>
									</thead>
									<tbody>
                                        <?php $i=0 ?>
                                        @foreach ($test as $t)
                                            
                                        <?php $i++ ?>
                                            <tr>
                                                <td><strong>{{$i}}</strong></td>
                                                <td><a href="{{route('allarchives.show',['allarchive'=>$t['id']])}}">{{$t['name']}}</a></td>
                                                 <td>{{$t['course_name']}}</td>
                                                <td><strong>{{$t['percentage']}}%</strong></td>
                                               
                                                <td>{{$t['start_date']}}</td>
                                                <td>{{$t['end_date']}}</td>
                                                <td>{{$t['phone']}}</td>
                                                <td>
                                                    <a href="{{route('allarchives.edit',$t['id'])}}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                </td>
                                                <td>
                                                    <form action="{{route('allarchives.destroy',['allarchive'=>$t['id']])}}" method="POST" >
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" value="حذف" class="btn btn-sm btn-danger"></input>
                                                    </form>
                                                </td>												
                                            </tr>
                                            @endforeach
                                           
									</tbody>
								</table>
							</div>
						</div>
                    </div>
                </div>
			</div>
		</div>
	</div>		   
 </div>
            @endsection 