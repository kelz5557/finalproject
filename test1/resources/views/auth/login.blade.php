<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon" href="images/logo2.png">
    <title>تسجيل الدخول لمركز الحاسوب</title>

    <!-- CSS -->
    <link href="main_assets/css/reset.css" rel="stylesheet">
    <link href="main_assets/css/fonts.css" rel="stylesheet">
    <link href="main_assets/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="main_assets/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="main_assets/assets/iconmoon/css/iconmoon.css" rel="stylesheet">
    <link href="main_assets/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

</head>

<body class="fill-bg">

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
    ** Login **
    =================================================== -->
    <section class="login-wrapper">
        <div class="inner">
            <div class="login">
                <div class="login-logo">
                    <a href="index.html"><img src="main_assets/images/logo2.png" class="img-responsive" alt="" width="100" height="100"></a>
                </div>
                <div class="head-block">
                    <h1>تسجيل الدخول</h1>
                </div>
                <div class="cnt-block">
                    <form action="{{ route('login') }}" method="POST" class="form-outer">
                        @csrf
                        <input id="email" type="email" placeholder="البريد الالكتروني" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="password" placeholder="كلمة المرور" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    <div class="button-outer">
                        <button type="submit" class="btn btn-primary">
                            تسجيل الدخول <span class="icon-more-icon"></span></button>
                        </div>
                        <div class="remember">
                            <div class="check">
                                <input class="form-check-input" type="checkbox" name="remember" id="test1" {{ old('remember') ? 'checked' : '' }}>
                                <label for="test1">تذكرني</label>
                            </div>
                            <a href="#" class="forgot"><span>?</span>نسيت كلمة المرور</a>
                        </div>
                    </form>
                </div>
                <div class="login-footer">
                    <ul class="follow-us clearfix">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <script src="main_assets/js/jquery.min.js"></script>
    <script src="main_assets/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="main_assets/js/custom.js"></script>
</body>

</html>
