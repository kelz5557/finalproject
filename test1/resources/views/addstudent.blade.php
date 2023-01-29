<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Edumin - Bootstrap Admin Dashboard" />
	<meta property="og:title" content="Edumin - Bootstrap Admin Dashboard" />
	<meta property="og:description" content="Edumin - Bootstrap Admin Dashboard" />
	<meta property="og:image" content="https://edumin.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
		
	<!-- FAVICONS ICON -->
	<link rel="icon" href="dashboard_assets/images/logo2.png" type="image/x-icon" />
	<link rel="shortcut icon" type="dashboard_assets/image/x-icon" href="images/logo2.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>لوحة التحكم لمركز الحاسوب</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="dashboard_assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="dashboard_assets/css/style.css">

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
            <a href="index.html" class="brand-logo">
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
                                    <a href="#" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">الملف الشخصي </span>
                                    </a>
                                    <a href="#" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">البريد الوارد </span>
                                    </a>
                                    <a href="#" class="dropdown-item ai-icon">
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
                            <li><a href="index.html">لوحة التحكم1</a></li>
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
                            <li><a href="all-students.html">كل المتدربين</a></li>
                            <li><a href="add-student.html">إضافة المتدربين</a></li>
                            <li><a href="#">تعديل المتدربين</a></li>
                            <li><a href="#">حول المتدربين</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-graduation-cap"></i>
							<span class="nav-text">الدورات</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-courses.html">كل الدورات</a></li>
                            <li><a href="add-courses.html">إضافةالدورات </a></li>
                            <li><a href="#">تعديل الدورات</a></li>
                            <li><a href="#">حول الدورات</a></li>
                        </ul>
                    </li>
					
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-building"></i>
							<span class="nav-text">الأقسام</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-departments.html">كل الأقسام</a></li>
                            <li><a href="add-departments.html">إضافة الأقسام</a></li>
                            <li><a href="edit-departments.html">تعديل الأقسام</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">الموظفين</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-staff.html">كل الموظفين</a></li>
                            <li><a href="add-staff.html">إضافة الموظفين</a></li>
                            <li><a href="edit-staff.html">تعديل الموظفين</a></li>
                            <li><a href="staff-profile.html">حسابات الموظفين</a></li>
                        </ul>
                    </li>
					
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-dollar"></i>
							<span class="nav-text">الرسوم</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="fees-collection.html">تحصيل الرسوم</a></li>
                            <li><a href="add-fees.html"> إضافةالرسوم</a></li>
                            <li><a href="fees-receipt.html">إيصال الرسوم</a></li>
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
				
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>اضافة المتدربين</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">لوحة التحكم</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">المتدربين</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">إضافة المتدربين</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
								<h5 class="card-title">البيانات الاساسية</h5>
							</div>
							<div class="card-body">
                                <form action="#" method="post">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">الاسم الاول</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">الاسم الاخير</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">البريد الالكتروني</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">تاريخ التسجيل</label>
												<input name="datepicker" class="datepicker-default form-control" id="datepicker">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">ت ر.</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">الدورة</label>
												<select class="form-control">
													<option value="Class">الدورة</option>
													<option value="html">HTML</option>
													<option value="css">CSS</option>
													<option value="javascript">JavaScript</option>
													<option value="angular">Angular</option>
													<option value="angular">React</option>
													<option value="vuejs">Vue.js</option>
													<option value="ruby">Ruby</option>
													<option value="php">PHP</option>
													<option value="asp">ASP.NET</option>
													<option value="python">Python</option>
													<option value="mysql">MySQL</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Gender</label>
												<select class="form-control">
													<option value="Gender">Gender</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Mobile Number</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Parents Name</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Parents Mobile Number</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Date of Birth</label>
												<input name="datepicker" class="datepicker-default form-control" id="datepicker1">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Blood Group</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Address</label>
												<textarea class="form-control" rows="5"></textarea>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group fallback w-100">
												<input type="file" class="dropify" data-default-file="">
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

	<!-- Svganimation scripts -->
    <script src="dashboard_assets/vendor/svganimation/vivus.min.js"></script>
    <script src="dashboard_assets/vendor/svganimation/svg.animation.js"></script>
    
	
	<!-- pickdate -->
    <script src="dashboard_assets/vendor/pickadate/picker.js"></script>
    <script src="dashboard_assets/vendor/pickadate/picker.time.js"></script>
    <script src="dashboard_assets/vendor/pickadate/picker.date.js"></script>
	
	<!-- Pickdate -->
    <script src="dashboard_assets/js/plugins-init/pickadate-init.js"></script>
	
</body>
</html>