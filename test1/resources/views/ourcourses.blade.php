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
            <div class="row"> <span class="col-xs-6 col-sm-3"><a href="index.html"><img src="{{url('main_assets/images/logo2.png')}}" class="img-responsive" alt="" width="75" height="75"><img src="{{url('main_assets/images/logo3-with.png')}}" class="img-responsive" alt="" width="100" height="100"></a></span>
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
                    <ul class="nav navbar-nav">
                        <li > <a  href="{{url('/')}}">الصفحة الرئيسية <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            
                        </li>
                        <li> <a href="{{url('/aboutus')}}">عن المركز</a></li>
                        <li> <a  href="{{url('/ourcourses')}}">دوراتنا <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                           
                        </li>
                        
                    </ul>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <section class="our-cources padding-lg"style="background-color: rgb(124, 114, 111);">
        <div class="container">
           <ul class="course-list owl-carousel">
            @foreach ($course as $c)
               <div class="card" style="width: 25rem;">
               <img class="card-img-top" src="{{url('main_assets/images/pic1.jpg')}}" alt="Card image cap">
               <div class="card-body">
               <h5 class="card-title">{{$c['course_name']}}</h5>
               <p class="card-text">{{$c['description']}}</p>
               <a href="{{route('ourcourses.show',['ourcourse'=>$c['id']])}}" class="btn btn-primary"><strong>الالتحاق بالدورة</strong></a>
               

               </div>
              </div>
              @endforeach
            </ul>
        </div>
   </section>
</body>
</html>