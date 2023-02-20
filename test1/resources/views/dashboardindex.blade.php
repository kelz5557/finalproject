<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="dashboard_assets/images/logo2.png" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="dashboard_assets/images/logo2.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>لوحة التحكم لمركز الحاسوب</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{url('dashboard_assets/vendor/jqvmap/css/jqvmap.min.css')}}">
	<link rel="stylesheet" href="{{url('dashboard_assets/vendor/chartist/css/chartist.min.css')}}">
	<link href="{{url('dashboard_assets/vendor/summernote/summernote.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{url('dashboard_assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{url('dashboard_assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('dashboard_assets/css/skin-3.css')}}">
	
</head>	
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{url('/')}}" class="brand-logo">
                <img class="logo-abbr" src="{{url('dashboard_assets/images/logo2.png')}}" alt="">
                <img class="logo-compact" src="{{url('dashboard_assets/images/logo3-with.png')}}" alt="">
                <img class="brand-title" src="{{url('dashboard_assets/images/logo3-with.png')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="إبحث هنا" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                        
                            <li class="nav-item dropdown header-profile">
                                <a  href="#"  role="button" data-toggle="dropdown">
                                    <strong>{{ Auth::user()->name }}</strong></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                   
                                   
                                    <div> <a class="dropdown-item ai-icon" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                              <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
    
                                         {{ __('تسجيل الخروج') }}
                                        </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                              @csrf
                                             </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">القائمة الرئيسية</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-home"></i>
							<span class="nav-text">لوحة التحكم</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/dashboard')}}">لوحة التحكم</a></li>
                            @if(Auth::user() && Auth::user()->level==1)
                            <li><a href="{{url('/register')}}">إضافة مستخدمين</a></li>
                            @endif
                        </ul>
                    </li>
					
					
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">المتدربين</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/dashboard/allstudents')}}">كل المتدربين</a></li>
                            <li><a href="{{url('/dashboard/allstudents/create')}}">إضافة المتدربين</a></li>
                            <li><a href="{{url('/dashboard/requests')}}"> طلبات الاتحاق بالمركز</a></li>

                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-graduation-cap"></i>
							<span class="nav-text">الدورات</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/dashboard/allcourses')}}">كل الدورات</a></li>
                            <li><a href="{{url('/dashboard/allcourses/create')}}">إضافةالدورات </a></li>
                       </ul>
                    </li>
					

					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-dollar"></i>
							<span class="nav-text">الرسوم</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/dashboard/fees')}}"> كل الرسوم</a></li>
                            
                            
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-user"></i>
                        <span class="nav-text">المدربين</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{url('/dashboard/alltrainers')}}">كل المدربين</a></li>
                       
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-dollar"></i>
                    <span class="nav-text">الاعلانات</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('/dashboard/ads')}}">كل اعلانات</a></li>
                    <li><a href="{{url('/dashboard/ads/create')}}"> اضافة اعلان</a></li>
                   
                </ul>
            </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-user"></i>
                    <span class="nav-text">الارشيف</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('/dashboard/allarchives')}}">الارشيف</a></li>
                    <li><a href="{{url('/dashboard/allarchives/create')}}">إضافة للأرشيف </a></li>
                    <li><a href="{{url('/dashboard/create_certifcate')}}">إستخراج شهادة </a></li>
                </ul>
            </li>
                  					
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
        
            <!-- row -->
            <div class="container-fluid">
				    
                <div class="row">
                    @foreach ($course as $c)
					<div class="col-xl-3 col-xxl-4 col-lg-6 col-md-6">
						<div class="card">
							<img class="img-fluid" src="{{url('dashboard_assets/images/courses/pic1.jpg')}}" alt="">
							<div class="card-body">
								<h4><a href="#">{{$c['course_name']}}</a></h4>
								<ul class="list-group mb-3 list-group-flush">
									<li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0 text-muted">{{$c['start_date']}}</span>
                                    </li>
										<li><span><i class="fa fa-graduation-cap text-primary mr-2"></i>عدد المتدربين المسموح به   :       </span><strong>{{$c['max']}}</strong></li>
								</ul>
								
							</div>
						</div>
					</div>
                    @endforeach
					
					
					
					
					
					<div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">قائمة المتدربين الجدد</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">ت ر .</th>
                                                <th scope="col">الاسم</th>
                                                <th scope="col">تاريخ القبول</th>
                                                <th scope="col">الحالة</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=0?>
                                            <tr>
                                                @foreach ($trainee as $t)
                                                <?php $i++?>
                                            
                                                <td>{{$i}}</td>
												<td>{{$t['first_name']}} </td>
                                                <td> {{$t['created_at']}}</td>
                                                <td><span class="badge badge-rounded badge-primary" style="background-color: green">تم القبول</span></td>
                                                
                                                
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
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>مركز الحاسوب وتقنية المعلومات -- جامعة الزاوية</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

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
	
	<!-- Chart sparkline plugin files -->
    <script src="{{url('dashboard_assets/vendor/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
	<script src="{{url('dashboard_assets/js/plugins-init/sparkline-init.js')}}"></script>
	
	<!-- Chart Morris plugin files -->
    <script src="{{url('dashboard_assets/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{url('dashboard_assets/vendor/morris/morris.min.js')}}"></script> 
	
    <!-- Init file -->
    <script src="{{url('dashboard_assets/js/plugins-init/widgets-script-init.js')}}"></script>
	
	<!-- Demo scripts -->
    <script src="{{url('dashboard_assets/js/dashboard/dashboard.js')}}"></script>
	
	<!-- Summernote -->
    <script src="{{url('dashboard_assets/vendor/summernote/js/summernote.min.js')}}"></script>
    <!-- Summernote init -->
    <script src="{{url('dashboard_assets/js/plugins-init/summernote-init.js')}}"></script>
	
	<!-- Svganimation scripts -->
    <script src="{{url('dashboard_assets/vendor/svganimation/vivus.min.js')}}"></script>
    <script src="{{url('dashboard_assets/vendor/svganimation/svg.animation.js')}}"></script>
    
		
</body>
</html>