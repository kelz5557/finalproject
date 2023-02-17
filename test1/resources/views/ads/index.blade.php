@extends('layout')
@section('content')
<div class="container-fluid">
				    
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4> كل الاعلانات</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">لوحة التحكم</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">الاعلانات</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">كل الاعلانات</a></li>
                        </ol>
                    </div>
                </div>
				
	<div class="row">
					
		<div class="col-lg-12">
			<div class="row tab-content">
				<div id="list-view" class="tab-pane fade active show col-lg-12">
					<div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> الاعلانات</h4>
                            <a href="{{url('/dashboard/ads/create')}}" class="btn btn-primary">+  اضافة اعلان</a>
                        </div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="example3" class="display" style="min-width: 845px">
									<thead>
													<tr>
														<th>#</th>
														<th>العنوان</th>
                                                        <th>اسم الدورة</th>
														<th>المحتوى</th>
														<th>تاريخ النشر </th>
														<th>  المستخدم الذي اضاف الاعلان</th>
														
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
                                                <td><a href="{{route('ads.show',['ad'=>$t['id']])}}">{{$t['title']}}</a></td>
                                                 <td>{{$t->course->course_name}}</td>
                                                 <td><strong>{{$t['description']}}</strong></td>
                                                <td><strong>{{$t['created_at']}}</strong></td>
                                               
                                                <td>{{$t->user->name}}</td>
                                                
                                                
                                                <td>
                                                    <a href="{{route('ads.edit',['ad'=>$t['id']])}}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                </td>
                                                <td><form action="{{route('ads.destroy',['ad'=>$t['id']])}}" method="POST" >
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