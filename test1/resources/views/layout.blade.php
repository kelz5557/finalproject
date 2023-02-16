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

                                <a  href="#" role="button" data-toggle="dropdown">
                                 <strong>{{ Auth::user()->name }}</strong></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">الملف الشخصي </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">البريد الوارد </span>
                                    </a>
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
                            <li><a href="{{url('/register')}}">اضافة مستخدمين</a></li>
                            <li><a href="{{url('/dashboard/about')}}">حول المركز</a></li>
                            
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
                        <span class="nav-text">الاعلانات</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{url('/dashboard/ads')}}">كل اعلانات</a></li>
                        <li><a href="{{url('/dashboard/ads/create')}}"> اضافة اعلان</a></li>
                       
                    </ul>
                </li>

					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-dollar"></i>
							<span class="nav-text">الرسوم</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/dashboard/fees_collection')}}">تحصيل الرسوم</a></li>
                            <li><a href="{{url('/dashboard/create_certifcate')}}"> إضافةالرسوم</a></li>
                            <li><a href="{{url('/dashboard/fees_receipt')}}">إيصال الرسوم</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-user"></i>
                        <span class="nav-text">المدربين</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{url('/dashboard/alltrainers')}}">كل المدربين</a></li>
                        <li><a href="#">تواصل مع مدربك</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-user"></i>
                    <span class="nav-text">الارشيف</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('/dashboard/allarchives')}}">الارشيف</a></li>
                    <li><a href="{{url('/dashboard/allarchives/create')}}">إضافة للأرشيف </a></li>
                    <li><a href="{{url('/dashboard/create_certifcate')}}"> استخراج شهائد </a></li>
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
            @yield('content')
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