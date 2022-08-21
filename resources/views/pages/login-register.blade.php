<!doctype html>
<html lang="ru">
<head>
    <meta name="author" content="Nick-R" />

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <link rel="stylesheet" href="css/blog/front.css" type="text/css">
    <script defer src="js/blog/front.js"></script>

    <title>Вход на сайт</title>
</head>
<body class="stretched">

<header id="header" class="full-header">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="#" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="storage/images/logo.png" alt="Logo"></a>
                </div><!-- #logo end -->

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                </div>

                <!-- Navigation
                ============================================= -->
                <nav class="primary-menu">

                    <ul class="menu-container">
                        <li class="menu-item">
                            <a class="menu-link" href="{{route('home')}}"><div>Главная</div></a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="#"><div>Курсы</div></a>
                        </li>
                        <li class="menu-item mega-menu">
                            <a class="menu-link" href="#"><div>Преподаватели</div></a>
                        </li>
                        <li class="menu-item mega-menu">
                            <a class="menu-link" href="/blog"><div>Блог</div></a>
                        </li>
                        <li class="menu-item mega-menu">
                            <a class="menu-link" href="#"><div>О нас</div></a>
                        </li>
                        <li class="menu-item mega-menu">
                            <a class="menu-link" href="#"><div>Контакты</div></a>
                        </li>

                    </ul>

                </nav><!-- #primary-menu end -->

            </div>
        </div>
    </div>
    <!--API INFO -->
    <div class="header-wrap-clone"></div>
    <div class="col-lg-4 center ">1<span class="icon-dollar-sign"></span> = <i>2.565 BYN</i></div>



</header><!-- #header end -->

<!-- Page Title
============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>My Account</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Login</li>
        </ol>
    </div>

</section><!-- #page-title end -->


<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="tabs mx-auto mb-0 clearfix" id="tab-login-register" style="max-width: 500px;">

                <ul class="tab-nav tab-nav2 center clearfix">
                    <li class="inline-block"><a href="#tab-login">Login</a></li>
                    <li class="inline-block"><a href="#tab-register">Register</a></li>
                </ul>

                @include('pages.errors')

                <div class="tab-container">
                    <div class="tab-content" id="tab-login">
                        <div class="card mb-0">
                            <div class="card-body" style="padding: 40px;">
                                <form id="login-form" name="login-form" class="mb-0" action="{{route('signin')}}" method="post">
                                @csrf
                                    <h3>Login to your Account</h3>

                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label for="login-form-username">Email:</label>
                                            <input type="text" id="login-form-username" name="email" value="{{old('email')}}" class="form-control" />
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="login-form-password">Password:</label>
                                            <input type="password" id="login-form-password" name="password" value="" class="form-control" />
                                        </div>

                                        <div class="col-12 form-group">
                                            <button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                            <a href="#" class="float-right">Forgot Password?</a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="tab-register">
                        <div class="card mb-0">
                            <div class="card-body" style="padding: 40px;">
                                <h3>Register for an Account</h3>

                                <form id="register-form" name="register-form" class="row mb-0" action="{{route('signup')}}" method="post">
                                    @csrf
                                    <div class="col-12 form-group">
                                        <label for="register-form-name">Name:</label>
                                        <input type="text" id="register-form-name" name="name" value="{{old('name')}}" class="form-control" />
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="register-form-email">Email Address:</label>
                                        <input type="text" id="register-form-email" name="email" value="{{old('email')}}" class="form-control" />
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="register-form-username">Choose a Username:</label>
                                        <input type="text" id="register-form-username" name="username" value="{{old('name')}}" class="form-control" />
                                    </div>

{{--                                    <div class="col-12 form-group">--}}
{{--                                        <label for="register-form-phone">Phone:</label>--}}
{{--                                        <input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control" />--}}
{{--                                    </div>--}}

                                    <div class="col-12 form-group">
                                        <label for="register-form-password">Choose Password:</label>
                                        <input type="password" id="register-form-password" name="password" value="" class="form-control" />
                                    </div>

{{--                                    <div class="col-12 form-group">--}}
{{--                                        <label for="register-form-repassword">Re-enter Password:</label>--}}
{{--                                        <input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control" />--}}
{{--                                    </div>--}}

                                    <div class="col-12 form-group">
                                        <button class="button button-3d button-black m-0" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section><!-- #content end -->

<!-- Footer
============================================= -->
<footer id="footer" class="dark">
    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap">

            <div class="row">
                <div class="col-6 col-md"  style="background: url('storage/images/world-map.png') no-repeat center center; background-size: 100%;">
                    <img class="mb-3" src="{{asset('storage/images/logo-black-1.png')}}" alt="Image" width="160">
                    <p class="text-white-50" style="font-size: 16px;">Дипломный проект в рамках обучения по курсу WEB Developer</p>
                    <a href="#" class="mb-2 d-block"><i class="icon-line2-call-in mr-2"></i>+375-25-915-68-80</a>
                    <a href="#"><i class="icon-line2-envelope mr-2"></i>nick_019@mail.ru</a>
                </div>

                <div class="col-6 col-md mt-4 mt-md-0 mt-lg-0 mt-xl-0">
                    <h4 class="text-uppercase ls2 font-weight-normal">Worldwide</h4>
                    <a href="#"><img src="storage/images/map.png" alt="Image"></a>
                </div>
            </div>

        </div><!-- .footer-widgets-wrap end -->

    </div>
    <!-- Copyrights
    ============================================= -->
</footer><!-- #footer end -->

</body>
</html>
