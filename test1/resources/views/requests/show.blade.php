<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<!--<meta name="description" content="Edumin - Bootstrap Admin Dashboard" />
	<meta property="og:title" content="Edumin - Bootstrap Admin Dashboard" />
	<meta property="og:description" content="Edumin - Bootstrap Admin Dashboard" />
	<meta property="og:image" content="https://edumin.dexignlab.com/xhtml/social-image.png" />-->
	<meta name="format-detection" content="telephone=no">
	
		
	<!-- FAVICONS ICON -->
    <link rel="icon" href="{{url('dashboard_assets/images/logo2.png ')}}" type="image/x-icon/">
	<link rel="shortcut icon" type="{{url('dashboard_assets/image/x-icon')}}" href="{{url('dashboard_assets/images/logo2.png')}}" />
   
	<!-- PAGE TITLE HERE -->
	<title>لوحة التحكم لمركز الحاسوب</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{url('dashboard_assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{url('dashboard_assets/css/style.css')}}">
</head>
<body><div class="container-fluid">
				
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div  class="welcome-text">
                <h2>التسجيل في دورة  <strong>{{$index['course_name']}}</strong></h2>
            </div>
        </div>

    </div>
    
    <div class="row">
        <div class="col-xl-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">البيانات الاساسية</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('ourcourses.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label">الاسم  </label>
                                <input name="firstname" value="{{old('firstname')}}"  type="text" class="form-control">
                                @error('firstname')
                                    <div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
                                @enderror
                            </div>
                        </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">المستوى التعليمي    </label>
                                    <input name="edlevel" value="{{old('edlevel')}}" type="text" class="form-control">
                                    @error('edlevel')
                                    <div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
                                @enderror
                                </div>
                            </div>
                            
                                
                            
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">البريد الالكتروني</label>
                                    <input  name="email" value="{{old('email')}}" type="text" class="form-control">
                                    @error('email')
                                    <div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">العنوان</label>
                                    <input  name="address" value="{{old('address')}}" type="text" class="form-control">
                                    @error('address')
                                    <div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
                                @enderror
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">الدورة</label>
                                    
                                        
                                        <input name="course" class="form-control" value="{{$index['course_name']}}" readonly>
                                        
                                        

                                        
                                    </select>
                                    @error('course')
                                    <div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label   class="form-label">الجنس</label>
                                    <select name="gender" class="form-control">
                                        <option value="" disabled selected>الجنس</option>
                                        <option value="ذكر">ذكر</option>
                                        <option value="انثى">انثى</option>
                                    </select>
                                    @error('gender')
                                    <div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">رقم الهاتف</label>
                                    <input name="phonenumber" value="{{old('phonenumber')}}" type="text" class="form-control">
                                    @error('phonenumber')
                                    <div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">تاريخ الميلاد</label>
                                    <input type="date" name="bday" value="{{old('bday')}}" class="datepicker form-control" id="datepicker1">
                                    @error('bday')
                                    <div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
                                @enderror
                                </div>
                                
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" class="btn btn-light">Cencel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
	<script src="{{url('dashboard_assets/vendor/global/global.min.js')}}"></script>
	<script src="{{url('dashboard_assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src=" {{url('dashboard_assets/js/custom.min.js')}}"></script>
	<script src="{{url('dashboard_assets/js/dlabnav-init.js')}}"></script>

	<!-- Svganimation scripts -->
    <script src="{{url('dashboard_assets/vendor/svganimation/vivus.min.js')}}"></script>
    <script src="{{url('dashboard_assets/vendor/svganimation/svg.animation.js')}}"></script>
    
	
	<!-- pickdate -->
    <script src="{{url('dashboard_assets/vendor/pickadate/picker.js')}}"></script>
    <script src="{{url('dashboard_assets/vendor/pickadate/picker.time.js')}}"></script>
    <script src="{{url('dashboard_assets/vendor/pickadate/picker.date.js')}}"></script>
	
	<!-- Pickdate -->
    <script src="{{url('dashboard_assets/js/plugins-init/pickadate-init.js')}}"></script>
	
</body>
</html> 

  