
@extends('layout')
@section('content') 

<div class="container-fluid">
	<div class="certifcate">
    <div class="certifcate-header">
        
                <img  id="img1" src="{{url('dashboard_assets/images/logo2.png')}}" alt="">
              
                <img id="img2" src="{{url('dashboard_assets/images/logocre.jpg')}}" alt="">
        
  
        </div>
     <div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                           
							<div class="card-body">
                                <form action="#" method="post">
									
                                            <div class="cert">	
                                                <p>يشهد مركز الحاسوب والمعلومات بجامعة الزاوية بان الاخ/الاخت:</p>
												<input type="text" class="form-certifcate">
											
												<p>قد التحق بدورة </p>
												<input type="text" class="form-certifcate">
                                            </div>
                                      
                                      
                                        
											<div class="cert">
                                                <p>المنعقدة في الفترة من :</p>
												<input type="date" name="date" class="datepicker form-certifcate" id="datepicker1">
											
                                                <p>الى:</p>
												<input type="date" name="createdate" class="datepicker form-certifcate" id="datepicker1">
                                            </div>
                                       
                                      
											<div class="cert">
                                                <p>واجتاز مقررات الدورة بنجاح بتقدير عام:</p>
												<input type="text" class="form-certifcate">
									
                                                <p>وبنسبة :</p>
												<input type="text" class="form-certifcate">
                                            </div>
                                           
                                            <div class="cert c1">
                                                <p >اعطيت له هذه الشهادة لاستعمالها في الاغراض المسموح بها قانونا</p>
                                            </div>
                                            <div class="cert c2"><p>قسم التدريب والتاهيل بالمركز</p></div>
                                            <div class="cert c3"> <p> مدير مركز الحاسوب والمعلومات</p></div>
                                            <div class="cert c4"> <p>يعتمد:</p></div>
                                            <div class="cert c5"> <p>رئيس الجامعة</p></div>
                                           
                                            
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                <center>
                                                    <button onclick="javascript:window.print();" class="btn btn-sm btn-primary" type="button"> <i class="fa fa-print"></i> طباعة</button>
                                                    <button type="submit" class="btn btn-light">إلغاء</button>
                                                    </center>
                                                </div>
                                            
								</form>
                            </div>
                        </div>
                    </div>
</div>
</div>              
</div>

@endsection 


