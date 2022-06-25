<!DOCTYPE html>
<html lang="en-us" id="extr-page" class="animated fadeInDown">

<head>
    <title> Login </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Basic Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css1/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css1/font-awesome.min.css">

    <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
    <link rel="stylesheet" type="text/css" media="screen" href="css1/smartadmin-production-plugins.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css1/smartadmin-production.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css1/smartadmin-skins.min.css">

    <!-- SmartAdmin RTL Support is under construction-->
    <link rel="stylesheet" type="text/css" media="screen" href="css1/smartadmin-rtl.min.css">

    <link rel="stylesheet" type="text/css" media="screen" href="css1/your_style.css">

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="css1/demo.min.css">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

    <!--  Specifying a Webpage Icon for Web Clip -->
    <link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/splash/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">

    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Startup image for web apps -->
    <link rel="apple-touch-startup-image" href="img/splash/ipad-landscape.png"
        media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
    <link rel="apple-touch-startup-image" href="img/splash/ipad-portrait.png"
        media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="img/splash/iphone.png" media="screen and (max-device-width: 320px)">

    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>

<body>

    <header id="header">

        <div id="logo-group">
            <span id="logo"> <img src="img/logo.png" alt="SmartAdmin"> </span>
        </div>
        <span id="extr-page-header-space"> <span class="hidden-mobile hiddex-xs">Need an account?</span>
            <a href="{{ url('/SignUp')}}" class="btn btn-danger">Create</a>
        </span>
    </header>

    <div id="main" role="main">

        <!-- MAIN CONTENT -->
        <div id="content" class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">
                    <h1 class="txt-color-red login-header-big">Gcian Portal</h1>
                    <div class="hero">

                        <div class="pull-left login-desc-box-l">
                            <h4 class="paragraph-header"><b>Our motto is "striving for excellence"<b></h4>
                            <div class="login-app-icons">
                                <a href="https://gcuf.edu.pk/" class="btn btn-danger btn-sm">Official Page</a>
                                <a href="https://gcuf.edu.pk/admissions" class="btn btn-danger btn-sm">Admissions</a>
                            </div>
                        </div>
                        <img src="img/demo/iphoneview.png" class="pull-right display-image" alt="" style="width:210px">
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <h5 class="about-heading">About Gcuf History</h5>
                            <p>
                                Government College University Faisalabad is an institution with a history of
                                contribution in the field of education.
                                The University enjoys a dynamic reach of multiple disciplines in research and
                                development through its different academic programs.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <h5 class="about-heading">How many campus does GCUF have?</h5>
                            <p> Layyah Campus,Sahiwal Campus,Chiniot Campus,Hafizabad Campus.</p>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                    <div class="well no-padding" style="background-color: aqua;">
                        <form action="/api/login" method="post" id="login-form" class="smart-form client-form">
                            @csrf
                            <header>
                                Sign In
                            </header>

                            <!-- show errors here -->
                            @if($errors->any())
                            <div class="fw-bold"
                                style="color: rgb(255, 255, 255); text-align: center; background-color: rgb(252, 78, 65); ">
                                <h4>{{$errors->first()}}</h4>
                            </div>
                            @endif
                            <br>
                            <!--// show errors here -->


                            <fieldset>

                                <section>
                                    <label class="label">E-mail</label>
                                    <label class="input"> <i class="icon-append fa fa-user"></i>
                                        <input type="email" name="email" value="{{ old('email') }}">
                                        <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i>
                                            Please enter email address/username</b></label>
                                </section>

                                <section>
                                    <label class="label">Password</label>
                                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                                        <input type="password" name="password">
                                        <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i>
                                            Enter your password</b> </label>
                                    <div class="note">
                                        <a href="{{url('/Reset')}}">Forgot
                                            password?</a>
                                    </div>
                                </section>

                                <section>
                                    <label class="checkbox">
                                        <input type="checkbox" name="remember" checked="">
                                        <i></i>Stay signed in</label>
                                </section>
                            </fieldset>
                            <footer>
                                <button type="submit" class="btn btn-primary">
                                    Sign in
                                </button>
                            </footer>


                        </form>

                    </div>

                    <h5 class="text-center"> - Or sign in using -</h5>

                    <ul class="list-inline text-center">
                        <li>
                            <a href="javascript:void(0);" class="btn btn-primary btn-circle">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn btn-info btn-circle"><i
                                    class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn btn-warning btn-circle"><i
                                    class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

    </div>
    <!-- END MAIN PANEL -->
    <!-- ==========================CONTENT ENDS HERE ========================== -->



</body>

</html>