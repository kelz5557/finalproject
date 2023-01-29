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
    <link rel="stylesheet" href="dashboard_assets/vendor/jqvmap/css/jqvmap.min.css">
	<link rel="stylesheet" href="dashboard_assets/vendor/chartist/css/chartist.min.css">
	<link href="dashboard_assets/vendor/summernote/summernote.css" rel="stylesheet">
	<link rel="stylesheet" href="dashboard_assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="dashboard_assets/css/style.css">
    <link rel="stylesheet" href="dashboard_assets/css/skin-3.css">
	
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
            <a href="dashboard_index.html" class="brand-logo">
                <img class="logo-abbr" src="dashboard_assets/images/logo2.png" alt="">
                <img class="logo-compact" src="dashboard_assets/images/logo3-with.png" alt="">
                <img class="brand-title" src="dashboard_assets/images/logo3-with.png" alt="">
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
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="dashboard_assets/images/profile/education/pic1.jpg" width="20" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">الملف الشخصي </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">البريد الوارد </span>
                                    </a>
                                    <a href="./page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">تسجيل الخروج </span>
                                    </a>
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
                            <li><a href="dashboard_index.html">لوحة التحكم1</a></li>
                            <li><a href="#">لوحة التحكم2</a></li>
                            <li><a href="#">لوحة التحكم3</a></li>
                        </ul>
                    </li>
					
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-user"></i>
							<span class="nav-text">المدربين</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="#">كل المدربين</a></li>
                            <li><a href="#">تواصل مع مدربك</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">المتدربين</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="dashboard_all-students.html">كل المتدربين</a></li>
                            <li><a href="/addstudent">إضافة المتدربين</a></li>
                            <li><a href="#">تعديل المتدربين</a></li>
                            <li><a href="#">حول المتدربين</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-graduation-cap"></i>
							<span class="nav-text">الدورات</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="dashboard_all-courses.html">كل الدورات</a></li>
                            <li><a href="dashboard_add-courses.html">إضافةالدورات </a></li>
                            <li><a href="#">تعديل الدورات</a></li>
                            <li><a href="#">حول الدورات</a></li>
                        </ul>
                    </li>
					
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-building"></i>
							<span class="nav-text">الأقسام</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="dashboard_all-departments.html">كل الأقسام</a></li>
                            <li><a href="dashboard_add-departments.html">إضافة الأقسام</a></li>
                            <li><a href="dashboard_edit-departments.html">تعديل الأقسام</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">الموظفين</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="dashboard_all-staff.html">كل الموظفين</a></li>
                            <li><a href="dashboard_add-staff.html">إضافة الموظفين</a></li>
                            <li><a href="dashboard_edit-staff.html">تعديل الموظفين</a></li>
                            <li><a href="dashboard_staff-profile.html">حسابات الموظفين</a></li>
                        </ul>
                    </li>
					
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-dollar"></i>
							<span class="nav-text">الرسوم</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="dashboard_fees-collection.html">تحصيل الرسوم</a></li>
                            <li><a href="dashboard_add-fees.html"> إضافةالرسوم</a></li>
                            <li><a href="dashboard_fees-receipt.html">إيصال الرسوم</a></li>
                        </ul>
                    </li>
                    <li><a class="ai-icon" href="#" aria-expanded="false">
                        <i class="la la-calendar"></i>
                        <span class="nav-text">جدول المواعيد</span>
                    </a>
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
					<div class="col-xl-3 col-xxl-4 col-lg-6 col-md-6">
						<div class="card">
							<img class="img-fluid" src="dashboard_assets/images/courses/pic1.jpg" alt="">
							<div class="card-body">
								<h4><a href="#">تعلم مبادئ تشغيل ويندوز، مجموعة مايكروسوفت أوفيس ، انترنت</a></h4>
								<ul class="list-group mb-3 list-group-flush">
									<li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0 text-muted">1 يناير</span>
										<a href="javascript:void(0);"><i class="la la-heart-o mr-1"></i><strong>2023</strong></a></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">مدة الدورة</span><strong>أربعة أشهر</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span><i class="fa fa-graduation-cap text-primary mr-2"></i>عدد المتدربين</span><strong>+20</strong></li>
								</ul>
								<a href="#" class="btn btn-primary">المزيد من التفاصيل</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-6 col-md-6">
						<div class="card">
							<img class="img-fluid" src="dashboard_assets/images/courses/pic2.jpg" alt="">
							<div class="card-body">
								<h4><a href="#">تعلم مبادئ تشغيل ويندوز ، مبادئ الطباعة</a></h4>
								<ul class="list-group mb-3 list-group-flush">
									<li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0 text-muted">1 يناير</span>
										<a href="javascript:void(0);"><i class="la la-heart-o mr-1"></i><strong>2023</strong></a></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">مدة الدورة</span><strong>أربعة أشهر</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span><i class="fa fa-graduation-cap text-primary mr-2"></i>عدد المتدربين</span><strong>+20</strong></li>
								</ul>
								<a href="#" class="btn btn-primary">المزيد من التفاصيل</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-6 col-md-6">
						<div class="card">
							<img class="img-fluid" src="dashboard_assets/images/courses/pic3.jpg" alt="">
							<div class="card-body">
								<h4><a href="#">تعليم المتدرب على الفكرة والتصميم والنشر في التصميم الدعائي والتجاري</a></h4>
								<ul class="list-group mb-3 list-group-flush">
									<li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0 text-muted">1 يناير</span>
										<a href="javascript:void(0);"><i class="la la-heart-o mr-1"></i><strong>2023</strong></a></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">مدة الدورة</span><strong>أربعة أشهر</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span><i class="fa fa-graduation-cap text-primary mr-2"></i>عدد المتدربين</span><strong>+20</strong></li>
								</ul>
								<a href="#" class="btn btn-primary">المزيد من التفاصيل</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-6 col-md-6">
                        <div class="card">
							<img class="img-fluid" src="dashboard_assets/images/courses/pic4.jpg" alt="">
							<div class="card-body">
								<h4><a href="#">رسم الخرائط باستخدام الحاسوب بمنظور ثنائي الابعاد</a></h4>
								<ul class="list-group mb-3 list-group-flush">
									<li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0 text-muted">1 يناير</span>
										<a href="javascript:void(0);"><i class="la la-heart-o mr-1"></i><strong>2023</strong></a></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">مدة الدورة</span><strong>أربعة أشهر</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span><i class="fa fa-graduation-cap text-primary mr-2"></i>عدد المتدربين</span><strong>+20</strong></li>
								</ul>
								<a href="#" class="btn btn-primary">المزيد من التفاصيل</a>
							</div>
						</div>
					</div>
					
					<div class="col-xl-6 col-xxl-6 col-lg-6 col-md-12 col-sm-12">
						<div class="card">
                            <div class="card-body">
								<form action="#" method="post">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text">الى</span>
											</div>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text">الموضوع</span>
											</div>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<div class="summernote"></div>
									</div>
									<div class="row align-items-center">
										<div class="col-lg-6">
											<div class="fallback w-100">
												<input type="file" class="dropify" data-default-file="">
											</div>
										</div>
										<div class="col-lg-6">
											<button type="button" class="btn btn-primary float-right">
												ارسال <i class="fa fa-paper-plane-o"></i>
											</button>									
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
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
                                                <th scope="col">الدورة</th>
                                                <th scope="col">الرسوم</th>
                                                <th scope="col">نعديل</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
												<td>صفاء عجينة</td>
                                                <td> 4\8\2022</td>
                                                <td><span class="badge badge-rounded badge-primary">تم القبول</span></td>
                                                <td>فوتوشوب</td>
                                                <td>220$</td>
                                                <td>
                                                    <a href="dashboard_edit-student.html" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>02 </td>
                                                <td>الحاكمة سليمان</td>
                                                
												<td>31\7\2022</td>
                                                <td><span class="badge badge-rounded badge-warning">قيد الانتظار</span></td>
                                                <td>دورة سكرتارية</td>
                                                <td>0$</td>
                                                <td>
                                                    <a href="dashboard_edit-student.html" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>03 </td>
                                                <td>قيس الغوج</td>
                                                
												<td>20\11\2021</td>
                                                <td><span class="badge badge-rounded badge-danger">ملغي</span></td>
                                                <td>دورة أوتوكاد </td>
                                                <td>320$</td>
                                                <td>
                                                    <a href="dashboard_edit-student.html" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                           
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
    <script src="dashboard_assets/vendor/global/global.min.js"></script>
	<script src="dashboard_assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="dashboard_assets/js/custom.min.js"></script>
    <script src="dashboard_assets/js/dlabnav-init.js"></script>	
	
	<!-- Chart sparkline plugin files -->
    <script src="dashboard_assets/vendor/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="dashboard_assets/js/plugins-init/sparkline-init.js"></script>
	
	<!-- Chart Morris plugin files -->
    <script src="dashboard_assets/vendor/raphael/raphael.min.js"></script>
    <script src="dashboard_assets/vendor/morris/morris.min.js"></script> 
	
    <!-- Init file -->
    <script src="dashboard_assets/js/plugins-init/widgets-script-init.js"></script>
	
	<!-- Demo scripts -->
    <script src="dashboard_assets/js/dashboard/dashboard.js"></script>
	
	<!-- Summernote -->
    <script src="dashboard_assets/vendor/summernote/js/summernote.min.js"></script>
    <!-- Summernote init -->
    <script src="dashboard_assets/js/plugins-init/summernote-init.js"></script>
	
	<!-- Svganimation scripts -->
    <script src="dashboard_assets/vendor/svganimation/vivus.min.js"></script>
    <script src="dashboard_assets/vendor/svganimation/svg.animation.js"></script>
    
		
</body>
</html>