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

    <title>Блог</title>
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
                <div class="header-misc">

                    <!-- PROFILE ICON
                    =========================================== -->
                    <div class="dropdown mx-3 mr-lg-0">
                        <a href="#" class="btn btn-secondary btn-sm dropdown-toggle gradient-grey-brown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon-user"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item text-left" href="#">Профиль</a>
                            <a class="dropdown-item text-left" href="#">Сообщения <span class="badge badge-pill badge-secondary float-right" style="margin-top: 3px;">5</span></a>
                            <a class="dropdown-item text-left" href="#">Настройки</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-left" href="#">Выход <i class="icon-signout"></i></a>
                        </ul>
                    </div>
{{--            OR --}}
                    <div class="header-buttons mr-3">
                        <a href="/signpage" class="button button-rounded button-border button-small m-0">Вход</a>
                    </div>

                </div>

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                </div>

                <!-- Navigation
                ============================================= -->
                <nav class="primary-menu">

                    <ul class="menu-container">
                        <li class="menu-item">
                            <a class="menu-link" href="/index"><div>Главная</div></a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="#"><div>Курсы</div></a>
                        </li>
                        <li class="menu-item mega-menu">
                            <a class="menu-link" href="#"><div>Преподаватели</div></a>
                        </li>
                        <li class="menu-item mega-menu">
                            <a class="menu-link" href="#"><div>Блог</div></a>
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
        <h1>Блог</h1>
        <span>Актуальные статьи</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/index">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page">Блог</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row gutter-40 col-mb-80">
                <!-- Post Content
                ============================================= -->
                <div class="postcontent col-lg-9">

                    <!-- Posts
                    ============================================= -->
                    <div id="posts" class="row grid-container gutter-30">

                        <div class="entry col-12">
                            <div class="grid-inner">
                                <div class="entry-image">
                                    <a href="#" data-lightbox="image"><img src="#" alt="Standard Post with Image"></a>
                                </div>
                                <div class="entry-title">
                                    <h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 10th February 2021</li>
                                        <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                        <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
                                        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13 Comments</a></li>
                                        <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.</p>
                                    <a href="blog-single.html" class="more-link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #posts end -->

                    <!-- Pager
                    ============================================= -->
                    <div class="d-flex justify-content-between mt-5">
                        <a href="#" class="btn btn-outline-secondary">&larr; Older</a>
                        <a href="#" class="btn btn-outline-dark">Newer &rarr;</a>
                    </div>
                    <!-- .pager end -->

                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar col-lg-3">
                    <div class="sidebar-widgets-wrap">
                        <div class="widget clearfix">
                            <div class="tabs mb-0 clearfix" id="sidebar-tabs">
                                <ul class="tab-nav clearfix">
                                    <li><a href="#tabs-1">Popular</a></li>
                                    <li><a href="#tabs-2">Recent</a></li>
                                </ul>

                                <div class="tab-container">
                                    <div class="tab-content clearfix" id="tabs-1">
                                        <div class="posts-sm row col-mb-30" id="popular-post-list-sidebar">
                                            <div class="entry col-12">
                                                <div class="grid-inner row no-gutters">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img class="rounded-circle" src="images/magazine/small/3.jpg" alt="Image"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-3">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li><i class="icon-comments-alt"></i> 35 Comments</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry col-12">
                                                <div class="grid-inner row no-gutters">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img class="rounded-circle" src="images/magazine/small/2.jpg" alt="Image"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-3">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li><i class="icon-comments-alt"></i> 24 Comments</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry col-12">
                                                <div class="grid-inner row no-gutters">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img class="rounded-circle" src="images/magazine/small/1.jpg" alt="Image"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-3">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li><i class="icon-comments-alt"></i> 19 Comments</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content clearfix" id="tabs-2">
                                        <div class="posts-sm row col-mb-30" id="recent-post-list-sidebar">
                                            <div class="entry col-12">
                                                <div class="grid-inner row no-gutters">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img class="rounded-circle" src="images/magazine/small/1.jpg" alt="Image"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-3">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry col-12">
                                                <div class="grid-inner row no-gutters">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img class="rounded-circle" src="images/magazine/small/2.jpg" alt="Image"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-3">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry col-12">
                                                <div class="grid-inner row no-gutters">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img class="rounded-circle" src="images/magazine/small/3.jpg" alt="Image"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-3">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="widget clearfix">

                            <h4>Tag Cloud</h4>
                            <div class="tagcloud">
                                <a href="#">general</a>
                                <a href="#">videos</a>
                                <a href="#">music</a>
                                <a href="#">media</a>
                                <a href="#">photography</a>
                                <a href="#">parallax</a>
                                <a href="#">ecommerce</a>
                                <a href="#">terms</a>
                                <a href="#">coupons</a>
                                <a href="#">modern</a>
                            </div>

                        </div>

                    </div>

                </div><!-- .sidebar end -->
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
