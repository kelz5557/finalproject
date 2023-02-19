<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon"href="images/logo2.png">
    <title>الصفحة الرئيسية لمركز الحاسوب</title>

    <!-- CSS -->


    <link href="{{url('main_assets/css/reset.css')}}" rel="stylesheet">
    <link href="{{url('main_assets/css/fonts.css')}}" rel="stylesheet">
    <link href="{{url('main_assets/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('main_assets/assets/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{url('main_assets/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('main_assets/assets/magnific-popup/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{url('main_assets/assets/iconmoon/css/iconmoon.css')}}" rel="stylesheet">
    <link href="{{url('main_assets/assets/owl-carousel/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('main_assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{url('main_assets/css/custom.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

</head>

<body>

    <!-- ==============================================
    ** Preloader **
    =================================================== -->
    <div id="loading">
        <div class="element">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>

    <!-- ==============================================
    ** Header **
    =================================================== -->
    <header>
        <!-- Start Header top Bar -->
        <div class="header-top">
            <div class="container clearfix">
                <ul class="follow-us hidden-xs">
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
                <div class="right-block clearfix">
                    <ul class="top-nav hidden-xs">
                        <li><a href="#">التسجيل</a></li>
                        <li><a href="#">التسجيل عبر الموقع</a></li>
                        <li><a href="#">عن المركز</a></li>
                        <li><a href="#">التساؤلات</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Header top Bar -->
        <!-- Start Header Middle -->   

        <div class="container header-middle">
            <div class="row"> <span class="col-xs-6 col-sm-3"><a href="#"><img src="{{url('main_assets/images/logo2.png')}}" class="img-responsive" alt="" width="75" height="75"><img src="{{url('main_assets/images/logo3-with.png')}}" class="img-responsive" alt="" width="100" height="100"></a></span>
                <div class="col-xs-6 col-sm-3"></div>
                <div class="col-xs-6 col-sm-9">
                    <div class="contact clearfix">
                        <a href="{{url('/login')}}" class="login">تسجيل الدخول <span class="icon-more-icon"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Middle -->
        <!-- Start Navigation -->
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <form class="navbar-form navbar-right">
                        <input type="text" placeholder="ابحث هنا" class="form-control">
                        <button class="search-btn"><span class="icon-search-icon"></span></button>
                    </form>
                    <ul class="nav navbar-nav">
                        <li class="dropdown"> <a data-toggle="dropdown" href="#">الصفحة الرئيسية <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                           
                        </li>
                        <li> <a href="{{url('/aboutus')}}">عن المركز</a></li>
                        <li class="dropdown"> <a data-toggle="dropdown" href="">دوراتنا <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('/ourcourses')}}">كل الدورات</a></li>
                            </ul>
                        </li>
                   </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>

    <!-- ==============================================
    ** Banner Carousel **
    =================================================== -->
    <div class="banner-outer">
        <div class="banner-slider">
            <div class="slide1">
                <div class="container">
                    <div class="content animated fadeInRight">
                        <div class="fl-right">
                            <h1 class="animated fadeInRight">تعرف على  <span class="animated fadeInRight">مركز  الحاسوب وتقنية المعلومات بالزاوية</span> </h1>
                            <p class="animated fadeInRight"></p>
                            <a href="#" class="btn animated fadeInRight">اعرف المزيد <span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide2">
                <div class="container">
                    <div class="content">
                        <h1 class="animated fadeInUp">تعرف على </h1>
                        <p class="animated fadeInUp">مركز الحاسوب وتقنية المعلومات بجامعة الزاوية</p>
                        <a href="#" class="btn animated fadeInUp">اقرأ المزيد <span class="icon-more-icon"></span></a>
                        <a href="#" class="btn white animated fadeInUp hidden-xs">تواصل معنا <span class="icon-more-icon"></span></a>
                    </div>
                </div>
            </div>
            <div class="slide3">
                <div class="container">
                    <div class="content animated fadeInLeft">
                        <h1 class="animated fadeInLeft">تواصل الان</h1>
                        <p class="animated fadeInLeft">جامعة الزاوية.</p>
                        <a href="#" class="btn animated fadeInLeft">اعرف المزيد <span class="icon-more-icon"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==============================================
    ** Our Cources **
    =================================================== -->
    <section class="our-cources padding-lg">

        <div class="container">
            <h2> الدورات التي يقدمها المركز </h2>
            <ul class="course-list owl-carousel">
                @foreach ($ads as $ad)
                    
                
              <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{url('main_assets/images/pic1.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$ad['title']}}</h5>
          <p class="card-text">{{$ad['description']}}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        
      </div>
      @endforeach
      
            </ul>
        </div>
    </section>
    
    <!-- ==============================================
    ** Footer **
    =================================================== -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="container">
            <div class="row row1">
                <div class="col-sm-9 clearfix">
                    <div class="foot-nav">
                        <h3>حول </h3>
                        <ul>
                            <li><a href="#">مركز الحاسوب وتقنية المعلومات</a></li>
                            <li><a href="#">جامعة الزاوية</a></li>
                            <li><a href="#">قسم الموارد البشرية</a></li>
                            <li><a href="#">قسم التدريب</a></li>
                            <li><a href="#">قسم الصيانة</a></li>
                        </ul>
                    </div>
                    <div class="foot-nav">
                        <h3>الدورات</h3>
                        <ul>
                            <li><a href="#">دورات متكاملة حول الحاسوب</a></li>
                            <li><a href="#">دورات سكرتارية</a></li>
                            <li><a href="#">دورات برمجية</a></li>
                            <li><a href="#">دورات الفن والابداع</a></li>
                            <li><a href="#">دورات حسب الطلب</a></li>
                        </ul>
                    </div>
                    <div class="foot-nav">
                        <h3>تواصل معنا</h3>
                        <ul>
                            <li><a href="#">البريد الالكتروني</a> ***@****.org</li>
                            <li><a href="#">رقم الهاتف </a>09*******</li>
                            <li><a href="#">عنوان المركز  </a>الزاوية\ليبيا</li>
                            <li><a href="#">الفرع الاول  </a>المركب الجامعي الشمالي</li>
                            <li><a href="#">الفرع الثاني  </a>المركب الجامعي الجنوبي</li>
                        </ul>
                    </div>
                    
                    
                </div>
                <div class="col-sm-3">
                    <div class="footer-logo hidden-xs"><a href="index.html"><img src="{{url('main_assets/images/logo2.png')}}" class="img-responsive" alt=""></a></div>
                        <span>مركز الحاسوب وتقنية المعلومات</span>
                        <p>الزاوية\ليبيا</p>
                   
                </div>
            </div>
        </div>
        <!-- End Footer Top -->
         </footer>
    <!-- Scroll to top -->
    <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
    <!-- Optional JavaScript -->
    
    <script src="{{url('main_assets/js/jquery.min.js')}}"></script>
    <script src="{{url('main_assets/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('main_assets/assets/select2/js/select2.min.js')}}"></script>
    <script src="{{url('main_assets/assets/matchHeight/js/matchHeight-min.js')}}"></script>
    <script src="{{url('main_assets/assets/bxslider/js/bxslider.min.js')}}"></script>
    <script src="{{url('main_assets/assets/waypoints/js/waypoints.min.js')}}"></script>
    <script src="{{url('main_assets/assets/counterup/js/counterup.min.js')}}"></script>
    <script src="{{url('main_assets/assets/magnific-popup/js/magnific-popup.min.js')}}"></script>
    <script src="{{url('main_assets/assets/owl-carousel/js/owl.carousel.min.js')}}"></script>
    <script src=" {{url('main_assets/js/modernizr.custom.js')}}"></script>
    <script src="{{url('main_assets/js/custom.js')}}"></script>
</body>

</html>
