<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<!DOCTYPE _slideTemplatel>
<html lang="en">

    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>World News</title>

        <meta name="keywords" content="html5 Template" />
        <meta name="description" content="Responsive html5 Template" />


        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png" />
        <meta name="theme-color" content="#ffffff" />

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Web Fonts  -->
        <!--   <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic%7CInconsolata:400,700%7CMontserrat:400,700' rel='stylesheet' type='text/css' /> -->

        <!-- build:css css/icons.css -->

        <!-- Icon Fonts  -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/linecons.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontello.css" />

        <!-- endbuild -->
        <!-- build:css css/vendor.css -->

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.structure.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/animate.css/animate.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/owl-carousel/owl-carousel/owl.carousel.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/owl-carousel/owl-carousel/owl.transitions.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/slick-carousel/slick/slick.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/Swiper/dist/css/swiper.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/magnific-popup/dist/magnific-popup.css" />

        <!-- endbuild -->
        <!-- build:css css/main.css -->

        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" />

        <!-- endbuild -->
    </head>

    <body id="js-home-scope">
        <!-- Loader -->
        <div class="page-loader">
            <div class="loader">
                <div class="flipper">
                    <div class="front"></div>
                    <div class="back"></div>
                </div>
            </div>
        </div>
        <!-- Loader END-->
        <div class="main-wrapper">
            <!-- Header -->
            <header class="header-mb">
                <div class="container">

                    <!--   <div class="hdm-logo">
                          <h1><a href="spectr-_slideTemplatel_weblionmedia_default._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/logo-mb.svg" height="40" width="140" alt="Spectr" class="adaptive" /></a></h1>
                      </div> -->
                    <div class="hdm-search-user">
                        <div class="hd-search">
                            <a href="index._slideTemplatel#search-block" class="st-btn-1 fa-flip-horizontal js-hd-search">
                                <i class="li_search"></i>
                            </a>
                            <div class="hd-search-block js-hd-search-block">
                                <div class="search">
                                    <div class="search-input">
                                        <input type="search" placeholder="Type keywords">
                                    </div>
                                    <div class="search-btn">
                                        <button>Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user">
                            <a href="index._slideTemplatel#login" class="js-popups"><i class="li_user"></i></a>
                        </div>
                    </div>
                </div>
            </header>
            <div class="sticky-header js-sticky-header">
                <div class="container">
                    <div class="main-nav-wrap">
                        <div class="row">
                            <nav class="main-nav">

                                <ul class="main-nav-list sf-menu">
                                    <li class="active"><a href="#">Top news</a></li>
                                    <li>
                                        <a href="<?php echo site_url(); ?>/news/politics">Politics</i></a>

                                    </li>
                                    <li><a href="category_style_six._slideTemplatel">Educations</a></li>
                                    <li class="mf">
                                        <a href="index._slideTemplatel">Business</a>

                                    </li>
                                    <li><a href="<?php echo site_url(); ?>/news/technology">Technology</a></li>
                                    <li>
                                        <a href="index._slideTemplatel">Entertainment</i></a>

                                    </li>
                                    <li>
                                        <a href="index._slideTemplatel">NewsPaper</a>

                                    </li>
                                    <li><a href="contact_page_style_1._slideTemplatel">contacts</a></li>
                                </ul>
                            </nav>
                            <div class="hd-search">
                                <a href="index._slideTemplatel#search-block" class="st-btn-1 fa-flip-horizontal js-hd-search">
                                    <i class="li_search"></i>
                                </a>
                                <div class="hd-search-block js-hd-search-block">
                                    <div class="search">
                                        <div class="search-input">
                                            <input type="search" placeholder="Type keywords">
                                        </div>
                                        <div class="search-btn">
                                            <button>Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <header class="header-tp-4">
                <div class="top-bar">
                    <div class="container">
                        <div class="top-bar-inner">
                            <div class="row">
                                <nav class="tb-nav">
                                    <ul class="tb-nav-list">
                                        <li><a href="index._slideTemplatel">ABOUT</a></li>
                                        <li><a href="products._slideTemplatel">Blogs</a></li>
                                        <li><a href="contact_page_style_1._slideTemplatel">CONTACTS</a></li>
                                    </ul>
                                </nav>
                                <div class="tb-date" id="demo">

                                </div>
                                <div class="tb-saved-art">
                                    <i class="li_cloud"></i> Cloudy
                                </div>
                              
                            <!--     <div class="tb-sing-login">
                                    <a href="index._slideTemplatel#signin" class="js-popups">Sign in</a> / <a href="index._slideTemplatel#login" class="js-popups">Join</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-header">

                    <div class="mh-bottom">
                        <div class="container">
                            <div class="main-nav-wrap">
                                <div class="row">
                                    <nav class="main-nav">

                                        <ul class="main-nav-list sf-menu">
                                            <li class="active"><a href="index._slideTemplatel">Top news</a></li>
                                            <li>
                                                <a href="<?php echo site_url(); ?>/news/politics">Politics</a>

                                            </li>
                                            <li><a href="category_style_six._slideTemplatel">Educations</a></li>
                                            <li class="mf">
                                                <a href="index._slideTemplatel">Business</a>

                                            </li>
                                            <li><a href="<?php echo site_url(); ?>/news/technology">Technology</a></li>
                                            <li>
                                                <a href="index._slideTemplatel">Entertainment</a>

                                            </li>
                                            <li>
                                                <a href="index._slideTemplatel">NewsPaper</a>

                                            </li>
                                            <li><a href="contact_page_style_1._slideTemplatel">contacts</a></li>
                                        </ul>
                                    </nav>
                                    <div class="hd-search">
                                        <a href="index._slideTemplatel#search-block" class="st-btn-1 fa-flip-horizontal js-hd-search">
                                            <i class="li_search"></i>
                                        </a>
                                        <div class="hd-search-block js-hd-search-block">
                                            <div class="search">
                                                <div class="search-input">
                                                    <input type="search" placeholder="Type keywords">
                                                </div>
                                                <div class="search-btn">
                                                    <button>Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header END -->
            <div class="inner-wrapper">

                <div class="main">
                    <!-- Content -->
                    <div class="main-content">
                        <!-- Trending line -->
                        <div class="trending-posts-line">
                            <div class="container">
                                <div class="trending-line" id="js-top-headlines">

                                </div>
                            </div>
                        </div>
                        <!-- Trending line END -->
                        <!-- Main posts -->
                        <div class="main-posts-1">
                            <div class="mp-section">
                                <div class="two-thirds sm-full">
                                    <div class="main-slider-2">
                                        <div class="js-main-slider-2" >
                                            <div class="slide">
                                                <article class="post post-tp-1" id='js-load-slide-news1'>

                                                </article>
                                            </div>
                                            <div class="slide">
                                                <article class="post post-tp-1" id='js-load-slide-news2'>

                                                </article>
                                            </div>
                                            <div class="slide">
                                                <article class="post post-tp-1" id='js-load-slide-news3'>

                                                </article>
                                            </div>
                                        </div>
                                        <div class="ms-navs">
                                            <div class="slide-count">
                                                <span class="current"></span> of
                                                <span class="total"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="one-third sm-hide">
                                    <div class="trend-pst-slider">
                                        <div class="trpst-block">
                                            <div class="trpst-block-head">
                                                <h2 class="title-4"><strong>Top Stories</strong></h2>
                                                <div class="js-sbr-pagination"></div>
                                            </div>
                                            <div class="trpst-block-main">
                                                <div class="js-trend-pst-slider">
                                                    <div id="js-top-stories-sidebar1">

                                                    </div>
                                                    <div id="js-top-stories-sidebar2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="trpst-block-foot">
                                                <a href="index._slideTemplatel"><span class="more-txt">More Top Stories</span><span class="arr-right-dark-ic"><i></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mp-section">
                                <div class="one-third sm-half xs-full">
                                    <article class="post post-tp-2">
                                        <figure>
                                            <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/380x258/1.jpg" height="258" width="380" alt="Spectr News Theme" class="adaptive" /></a>
                                        </figure>
                                        <div class="ptp-1-overlay">
                                            <div class="ptp-1-data">
                                                <a href="index._slideTemplatel" class="category-tp-1">BUSINESS</a>
                                                <h2 class="title-29"><a href="index._slideTemplatel#1">Qt arcu odio sollicitudin obortis vitae scelerid ante</a></h2>
                                                <div class="meta-tp-1">
                                                    <div class="ptp-1-date"><a href="index._slideTemplatel">october 2, 2015</a></div>
                                                    <div class="ptp-1-views"><a href="index._slideTemplatel"><i class="li_eye"></i><span>187</span></a></div>
                                                    <div class="ptp-1-comments"><a href="index._slideTemplatel"><i class="li_bubble"></i><span>5</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="one-third sm-half xs-hide">
                                    <article class="post post-tp-2">
                                        <figure>
                                            <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/380x258/2.jpg" height="258" width="380" alt="Spectr News Theme" class="adaptive" /></a>
                                        </figure>
                                        <div class="ptp-1-overlay">
                                            <div class="ptp-1-data">
                                                <a href="index._slideTemplatel" class="category-tp-1">design</a>
                                                <h2 class="title-29"><a href="index._slideTemplatel#1">Explain to you how all this mistaken idea</a></h2>
                                                <div class="meta-tp-1">
                                                    <div class="ptp-1-date"><a href="index._slideTemplatel">october 2, 2015</a></div>
                                                    <div class="ptp-1-views"><a href="index._slideTemplatel"><i class="li_eye"></i><span>187</span></a></div>
                                                    <div class="ptp-1-comments"><a href="index._slideTemplatel"><i class="li_bubble"></i><span>5</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="one-third sm-hide">
                                    <article class="post post-tp-2">
                                        <figure>
                                            <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/380x258/3.jpg" height="258" width="380" alt="Spectr News Theme" class="adaptive" /></a>
                                        </figure>
                                        <div class="ptp-1-overlay">
                                            <div class="ptp-1-data">
                                                <a href="index._slideTemplatel" class="category-tp-1">life style</a>
                                                <h2 class="title-29"><a href="index._slideTemplatel#1">Denouncing pleasure and praising pain was</a></h2>
                                                <div class="meta-tp-1">
                                                    <div class="ptp-1-date"><a href="index._slideTemplatel">october 2, 2015</a></div>
                                                    <div class="ptp-1-views"><a href="index._slideTemplatel"><i class="li_eye"></i><span>187</span></a></div>
                                                    <div class="ptp-1-comments"><a href="index._slideTemplatel"><i class="li_bubble"></i><span>5</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <!-- Main posts END -->
                        <div class="section">
                            <div class="trend-pst">
                                <div class="pst-block">
                                    <div class="pst-block-head">
                                        <h2 class="title-4"><strong>Trending</strong> Posts</h2>
                                        <div class="filters">
                                        </div>
                                    </div>
                                    <div class="pst-block-main">
                                        <div class="col-row"  id="js-trending-post">
                     
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="row">
                                <div class="content">

                                    <div class="design-pst">
                                        <div class="pst-block">
                                            <div class="pst-block-head">
                                                <h2 class="title-4"><strong>Design</strong> Posts</h2>
                                                <div class="filters">
                                                    <ul class="filters-list-1 xs-hide">
                                                        <li><a href="#" class="active" >world</a></li>
                                                        <li><a href="#" id="js-catg-business" value="business">Business</a></li>
                                                        <li><a href="#" id="js-catg-sport" value="sports">Sports</a></li>
                                                        <li><a href="#" id="js-catg-technology" value="technology">Technology</a></li>
                                                        <li><a href="#" id="js-catg-entertainment" value="entertainment">Entertainment</a></li>
                                                        <li><a href="#" id="js-catg-politics" value="politics">Politics</a></li>
                                                    </ul>
                                       
                                                </div>
                                            </div>
                                            <div class="pst-block-main">
                                            <div class="col-row">
                                                <div class="col-half" id="js-category-news">
                                                 
                                                 </div>

                                                </div>
                                            </div>
                                            <div class="pst-block-foot">
                                                <a href="index._slideTemplatel">More design posts</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <aside class="side-bar">
                                    <div class="ltst-reviews">
                                        <div class="pst-block">
                                            <div class="pst-block-head">
                                                <h2 class="title-4"><strong>Latest</strong> Reviews</h2>
                                                <div class="all-sb">
                                                    <a href="index._slideTemplatel">all tags</a>
                                                </div>
                                            </div>
                                            <div class="pst-block-main">
                                                <div class="js-csp-block">
                                                    <div>
                                                        <figure class="full-img">
                                                            <a href="index._slideTemplatel">
                                                                <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/360x245/1.jpg" alt="Spectr News Theme" class="adaptive" height="245" width="360">
                                                            </a>
                                                            <a href="index._slideTemplatel" class="category-tp-3">reviews</a>
                                                        </figure>
                                                        <div class="post-wrap">
                                                            <article class="post post-tp-11">
                                                                <h3 class="title-10"><a href="index._slideTemplatel">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                                                <div class="meta-tp-2">
                                                                    <div class="date"><span>october 2, 2015</span></div>
                                                                    <div class="rate-tp-1">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="index._slideTemplatel">
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="index._slideTemplatel">
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="index._slideTemplatel">
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="index._slideTemplatel">
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="index._slideTemplatel">
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <p class="p">Sed ut perspiciatis unde omnis iste natus sit volupt atem accusantium doloremque laudantium</p>
                                                            </article>
                                                            <article class="post post-tp-6">
                                                                <figure>
                                                                    <a href="index._slideTemplatel">
                                                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/12.jpg" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                                                    </a>
                                                                </figure>
                                                                <h3 class="title-6"><a href="index._slideTemplatel">Duis eu arcu sit amet ante tristique</a></h3>
                                                                <div class="rate-tp-1">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </article>
                                                            <article class="post post-tp-6">
                                                                <figure>
                                                                    <a href="index._slideTemplatel">
                                                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/13.jpg" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                                                    </a>
                                                                </figure>
                                                                <h3 class="title-6"><a href="index._slideTemplatel">Nam ut metus element pharetra diam sed</a></h3>
                                                                <div class="rate-tp-1">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <figure class="full-img">
                                                            <a href="index._slideTemplatel">
                                                                <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/360x245/1.jpg" alt="Spectr News Theme" class="adaptive" height="245" width="360">
                                                            </a>
                                                            <a href="index._slideTemplatel" class="category-tp-3">reviews</a>
                                                        </figure>
                                                        <div class="post-wrap">
                                                            <article class="post post-tp-11">
                                                                <h3 class="title-10"><a href="index._slideTemplatel">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                                                <div class="meta-tp-2">
                                                                    <div class="date"><span>october 2, 2015</span></div>
                                                                    <div class="rate-tp-1">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="index._slideTemplatel">
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="index._slideTemplatel">
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="index._slideTemplatel">
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="index._slideTemplatel">
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="index._slideTemplatel">
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <p class="p">Sed ut perspiciatis unde omnis iste natus sit volupt atem accusantium doloremque laudantium</p>
                                                            </article>
                                                            <article class="post post-tp-6">
                                                                <figure>
                                                                    <a href="index._slideTemplatel">
                                                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/12.jpg" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                                                    </a>
                                                                </figure>
                                                                <h3 class="title-6"><a href="index._slideTemplatel">Duis eu arcu sit amet ante tristique</a></h3>
                                                                <div class="rate-tp-1">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">
                                                                                <i class="li_star"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </article>
                                                            <article class="post post-tp-6">
                                                                <figure>
                                                                    <a href="index._slideTemplatel">
                                                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/13.jpg" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                                                    </a>
                                                                </figure>
                                                                <h3 class="title-6"><a href="index._slideTemplatel">Nam ut metus element pharetra diam sed</a></h3>
                                                                <div class="rate-tp-1">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">

                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index._slideTemplatel">
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pst-block-foot">
                                                <div class="js-sbr-pagination"></div>
                                            </div>
                                        </div>
                                    </div>


                                </aside>
                            </div>
                        </div>
                        <!-- Video data was here-->
                        <div class="section">
                            <div class="row">
                                <div class="content">

                                    <div class="latest-nws">
                                        <div class="pst-block">
                                            <div class="pst-block-head">
                                                <h2 class="title-4"><strong>Latest </strong> News</h2>
                                                <div class="filters">
                                                    <ul class="filters-list-1 xs-hide">
                                                        <li><a href="index._slideTemplatel" class="active">all</a></li>
                                                        <li><a href="index._slideTemplatel">business</a></li>
                                                        <li><a href="index._slideTemplatel">gadgets</a></li>
                                                        <li><a href="index._slideTemplatel">design</a></li>
                                                        <li><a href="index._slideTemplatel">fachion</a></li>
                                                        <li><a href="index._slideTemplatel">video</a></li>
                                                    </ul>
                                                    <div class="filters-more">
                                                        <div class="filters-btn js-fl-btn">
                                                            <i class="li_settings"></i>
                                                            <div class="filters-drop js-fl-block">
                                                                <i class="arr"></i>
                                                                <ul>
                                                                    <li><a href="index._slideTemplatel">Latest</a></li>
                                                                    <li><a href="index._slideTemplatel" class="active">Popular</a></li>
                                                                    <li><a href="index._slideTemplatel">Recent</a></li>
                                                                    <li><a href="index._slideTemplatel">Most comment</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pst-block-main">
                                                <div class="col-row">
                                                    <div class="col-half">
                                                        <article class="post post-tp-8">
                                                            <figure>
                                                                <a href="index._slideTemplatel">
                                                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/345x242/4.jpg" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                                                </a>
                                                                <div class="ptp-8-overlay">
                                                                    <div class="ptp-8-data">
                                                                        <a href="index._slideTemplatel">
                                                                            <i class="li_eye"></i>187
                                                                        </a>
                                                                        <a href="index._slideTemplatel">
                                                                            <i class="li_bubble"></i>187
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <h3 class="title-5"><a href="index._slideTemplatel">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                                            <div class="meta-tp-2">
                                                                <div class="date"><span>october 2, 2015</span></div>
                                                                <div class="category">
                                                                    <a href="index._slideTemplatel"><i class="li_pen"></i><span>business</span></a>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="col-half">
                                                        <article class="post post-tp-8">
                                                            <figure>
                                                                <a href="index._slideTemplatel">
                                                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/345x242/5.jpg" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                                                </a>
                                                                <div class="ptp-8-overlay">
                                                                    <div class="ptp-8-data">
                                                                        <a href="index._slideTemplatel">
                                                                            <i class="li_eye"></i>187
                                                                        </a>
                                                                        <a href="index._slideTemplatel">
                                                                            <i class="li_bubble"></i>187
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <h3 class="title-5"><a href="index._slideTemplatel">Dapibus eu tempor ut, efficitur id nisi am ornare magna</a></h3>
                                                            <div class="meta-tp-2">
                                                                <div class="date"><span>october 2, 2015</span></div>
                                                                <div class="category">
                                                                    <a href="index._slideTemplatel"><i class="li_pen"></i><span>business</span></a>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="col-half">
                                                        <article class="post post-tp-8">
                                                            <figure>
                                                                <a href="index._slideTemplatel">
                                                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/345x242/6.jpg" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                                                </a>
                                                                <div class="ptp-8-overlay">
                                                                    <div class="ptp-8-data">
                                                                        <a href="index._slideTemplatel">
                                                                            <i class="li_eye"></i>187
                                                                        </a>
                                                                        <a href="index._slideTemplatel">
                                                                            <i class="li_bubble"></i>187
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <h3 class="title-5"><a href="index._slideTemplatel">Phasellus at egestas elit ut facilisis diam estibulum</a></h3>
                                                            <div class="meta-tp-2">
                                                                <div class="date"><span>october 2, 2015</span></div>
                                                                <div class="category">
                                                                    <a href="index._slideTemplatel"><i class="li_pen"></i><span>business</span></a>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="col-half">
                                                        <article class="post post-tp-8">
                                                            <figure>
                                                                <a href="index._slideTemplatel">
                                                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/345x242/7.jpg" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                                                </a>
                                                                <div class="ptp-8-overlay">
                                                                    <div class="ptp-8-data">
                                                                        <a href="index._slideTemplatel">
                                                                            <i class="li_eye"></i>187
                                                                        </a>
                                                                        <a href="index._slideTemplatel">
                                                                            <i class="li_bubble"></i>187
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <h3 class="title-5"><a href="index._slideTemplatel">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                                            <div class="meta-tp-2">
                                                                <div class="date"><span>october 2, 2015</span></div>
                                                                <div class="category">
                                                                    <a href="index._slideTemplatel"><i class="li_pen"></i><span>business</span></a>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="col-half">
                                                        <article class="post post-tp-8">
                                                            <figure>
                                                                <a href="index._slideTemplatel">
                                                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/345x242/8.jpg" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                                                    <span class="reviews-rate"><span>5,0</span></span>
                                                                </a>
                                                                <div class="ptp-8-overlay">
                                                                    <div class="ptp-8-data">
                                                                        <a href="index._slideTemplatel">
                                                                            <i class="li_eye"></i>187
                                                                        </a>
                                                                        <a href="index._slideTemplatel">
                                                                            <i class="li_bubble"></i>187
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <h3 class="title-5"><a href="index._slideTemplatel">Nulla semper metus quis erat gravida cursus met quis</a></h3>
                                                            <div class="meta-tp-2">
                                                                <div class="date"><span>october 2, 2015</span></div>
                                                                <div class="category">
                                                                    <a href="index._slideTemplatel"><i class="li_pen"></i><span>business</span></a>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="col-half">
                                                        <article class="post post-tp-8">
                                                            <figure>
                                                                <a href="index._slideTemplatel">
                                                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/345x242/9.jpg" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                                                </a>
                                                                <div class="ptp-8-overlay">
                                                                    <div class="ptp-8-data">
                                                                        <a href="index._slideTemplatel">
                                                                            <i class="li_eye"></i>187
                                                                        </a>
                                                                        <a href="index._slideTemplatel">
                                                                            <i class="li_bubble"></i>187
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <h3 class="title-5"><a href="index._slideTemplatel">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                                            <div class="meta-tp-2">
                                                                <div class="date"><span>october 2, 2015</span></div>
                                                                <div class="category">
                                                                    <a href="index._slideTemplatel"><i class="li_pen"></i><span>business</span></a>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="col-half">
                                                        <article class="post post-tp-8">
                                                            <figure>
                                                                <a href="index._slideTemplatel">
                                                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/345x242/10.jpg" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                                                </a>
                                                                <div class="ptp-8-overlay">
                                                                    <div class="ptp-8-data">
                                                                        <a href="index._slideTemplatel">
                                                                            <i class="li_eye"></i>187
                                                                        </a>
                                                                        <a href="index._slideTemplatel">
                                                                            <i class="li_bubble"></i>187
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <h3 class="title-5"><a href="index._slideTemplatel">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                                            <div class="meta-tp-2">
                                                                <div class="date"><span>october 2, 2015</span></div>
                                                                <div class="category">
                                                                    <a href="index._slideTemplatel"><i class="li_pen"></i><span>business</span></a>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="col-half">
                                                        <article class="post post-tp-8">
                                                            <figure>
                                                                <a href="index._slideTemplatel">
                                                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/345x242/11.jpg" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                                                </a>
                                                                <div class="ptp-8-overlay">
                                                                    <div class="ptp-8-data">
                                                                        <a href="index._slideTemplatel">
                                                                            <i class="li_eye"></i>187
                                                                        </a>
                                                                        <a href="index._slideTemplatel">
                                                                            <i class="li_bubble"></i>187
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <h3 class="title-5"><a href="index._slideTemplatel">Vitae lacus a arcu dignissim iaculis sed quis orci hasellus</a></h3>
                                                            <div class="meta-tp-2">
                                                                <div class="date"><span>october 2, 2015</span></div>
                                                                <div class="category">
                                                                    <a href="index._slideTemplatel"><i class="li_pen"></i><span>business</span></a>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                                <!-- Page nav -->
                                                <div class="page-nav">
                                                    <a href="index._slideTemplatel" class="pn-item">
                                                        <i class="page-nav-prev-ic"></i>
                                                    </a>
                                                    <a href="index._slideTemplatel" class="pn-item mb-pt-hide">1</a>
                                                    <a href="index._slideTemplatel" class="pn-item current mb-pt-hide">2</a>
                                                    <a href="index._slideTemplatel" class="pn-item mb-pt-hide">3</a>
                                                    <span class="extend mb-pt-hide">...</span>
                                                    <a href="index._slideTemplatel" class="pn-item mb-pt-hide">7</a>
                                                    <a href="index._slideTemplatel" class="pn-item">
                                                        <i class="page-nav-next-ic"></i>
                                                    </a>
                                                    <span class="page-count">Page 1 of 7</span>
                                                </div>
                                                <!-- Page nav END -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <aside class="side-bar">
                                    <div class="tags-widget">
                                        <div class="pst-block">
                                            <div class="pst-block-head">
                                                <h2 class="title-4"><strong>Tags</strong></h2>
                                                <div class="all-sb">
                                                    <a href="index._slideTemplatel">all tags</a>
                                                </div>
                                            </div>
                                            <div class="pst-block-main">
                                                <div class="tags-block">
                                                    <ul class="tags-list">
                                                        <li><a href="index._slideTemplatel">Apple</a></li>
                                                        <li><a href="index._slideTemplatel">news</a></li>
                                                        <li><a href="index._slideTemplatel">clear</a></li>
                                                        <li><a href="index._slideTemplatel">design</a></li>
                                                        <li><a href="index._slideTemplatel">magazine</a></li>
                                                        <li><a href="index._slideTemplatel">life style</a></li>
                                                        <li><a href="index._slideTemplatel">ui/ux</a></li>
                                                        <li><a href="index._slideTemplatel">popular</a></li>
                                                        <li><a href="index._slideTemplatel">fashion</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sb-banner">
                                        <div class="banner-inner">
                                            <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/sb-banner-img.jpg" height="270" width="320" alt="Spectr News Theme" class="adaptive" />
                                            <div class="banner-overlay">
                                                <h5 class="title-11">The Best <br>Magazine &amp; Blog <br>Theme</h5>
                                                <a href="index._slideTemplatel" class="btn-2">buy it now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sbsb-block-1">
                                        <h4 class="title-8"><strong>Subscribe</strong> to Spectr</h4>
                                        <div class="sbsb-form-1">
                                            <div class="sbsb-form">
                                                <div class="sbsb-input">
                                                    <span class="sbsb-icon"><i class="li_mail"></i></span>
                                                    <input type="email" placeholder="E-mail">
                                                </div>
                                                <div class="sbsb-btn">
                                                    <button>subscribe</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="poling-widget">
                                        <div class="pst-block">
                                            <div class="pst-block-head">
                                                <h2 class="title-4"><strong>Poling</strong></h2>
                                            </div>
                                            <div class="pst-block-main">
                                                <div class="poling-block">
                                                    <h5 class="title-9">What you favorite film on 2015 year</h5>
                                                    <ul class="poling-list">
                                                        <li>
                                                            <input class="radio" type="radio" name="film" id="test1" />
                                                            <label class="rd-label" for="test1">Avatar</label>
                                                        </li>
                                                        <li>
                                                            <input class="radio" type="radio" name="film" id="test2" />
                                                            <label class="rd-label" for="test2">Man of Steel</label>
                                                        </li>
                                                        <li>
                                                            <input class="radio" type="radio" name="film" id="test3" />
                                                            <label class="rd-label" for="test3">Lone Survior</label>
                                                        </li>
                                                    </ul>
                                                    <button class="btn-1">Submit!</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="weather-widget">
                                        <div class="pst-block">
                                            <div class="pst-block-head">
                                                <h2 class="title-4"><strong><i class="li_location"></i> Vienna</strong></h2>
                                                <a href="index._slideTemplatel" class="arr-ic-3"></a>
                                            </div>
                                            <div class="pst-block-main">
                                                <div class="weather-block">
                                                    <div class="temperature">
                                                        <i class="weather-icon-clouds-flash-alt"></i>
                                                        <span class="degrees-1">24<i class="degrees-ic-1"></i></span>
                                                        <div class="day">wednesday</div>
                                                    </div>
                                                    <ul>
                                                        <li>Rain</li>
                                                        <li>humidity: 55%</li>
                                                        <li>wind: 3km/h NW</li>
                                                        <li>H 26 • L 26</li>
                                                    </ul>
                                                </div>
                                                <hr class="pst-block-hr">
                                                <div class="weather-days">
                                                    <ul class="weather-days-list">
                                                        <li>
                                                            <a href="index._slideTemplatel">
                                                                <span class="degrees-2">27<i class="degrees-ic-2"></i></span>
                                                                <div class="day">thusday</div>
                                                            </a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="index._slideTemplatel">
                                                                <span class="degrees-2">25<i class="degrees-ic-2"></i></span>
                                                                <div class="day">friday</div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index._slideTemplatel">
                                                                <span class="degrees-2">26<i class="degrees-ic-2"></i></span>
                                                                <div class="day">satuday</div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index._slideTemplatel">
                                                                <span class="degrees-2">27<i class="degrees-ic-2"></i></span>
                                                                <div class="day">sunday</div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index._slideTemplatel">
                                                                <span class="degrees-2">23<i class="degrees-ic-2"></i></span>
                                                                <div class="day">monday</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pst-block">
                                        <div class="pst-block-head">
                                            <h2 class="title-4"><strong>Stay</strong> Connected</h2>
                                        </div>
                                        <div class="pst-block-main">
                                            <div class="social-tp-1">
                                                <ul class="social-list">
                                                    <li class="fb">
                                                        <a href="index._slideTemplatel">
                                                            <span class="soc-ic">
                                                                <i class="fa fa-facebook"></i>
                                                            </span> 1526 Fans
                                                            <span class="soc-btn">Like It</span>
                                                        </a>
                                                    </li>
                                                    <li class="tw">
                                                        <a href="index._slideTemplatel">
                                                            <span class="soc-ic">
                                                                <i class="fa fa-twitter"></i>
                                                            </span> 541 Followers
                                                            <span class="soc-btn">Follow Us</span>
                                                        </a>
                                                    </li>
                                                    <li class="gp">
                                                        <a href="index._slideTemplatel">
                                                            <span class="soc-ic">
                                                                <i class="fa fa-google-plus"></i>
                                                            </span> 421 Friends
                                                            <span class="soc-btn">Follow Us</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <!-- Content END -->
                    <!-- Footer -->
                    <footer class="main-footer">
                        <div class="container">

                            <div class="bottom-part">
                                <div class="row">
                                    <div class="ft-logo">
                                        <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/footer-logo.svg" height="30" width="105" alt="Spectr News Theme"></a>
                                    </div>
                                    <div class="ft-about">
                                        <article>
                                            <h4 class="ft-title-1"><strong>About</strong>Us</h4>
                                            <p class="p">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo spiciatis unde omnis iste natus sit voluptatem</p>
                                        </article>
                                    </div>
                                    <div class="ft-social">
                                        <ul class="ft-social-list pull-right">
                                            <li class="tw">
                                                <a href="index._slideTemplatel"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="fb">
                                                <a href="index._slideTemplatel"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="gp">
                                                <a href="index._slideTemplatel"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li class="in">
                                                <a href="index._slideTemplatel"><i class="fa fa-instagram"></i></a>
                                            </li>
                                            <li class="dr">
                                                <a href="index._slideTemplatel"><i class="fa fa-dribbble"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-bar">
                            <div class="container">
                                <div class="row">
                                    <div class="three-quarters">
                                        <div class="ft-menu">
                                            <ul class="ft-menu-list">
                                                <li><a href="index._slideTemplatel">About the site</a></li>
                                                <li><a href="index._slideTemplatel">Contacts</a></li>
                                                <li><a href="index._slideTemplatel">Copyright holders</a></li>
                                                <li><a href="index._slideTemplatel">The Agreement</a></li>
                                                <li><a href="index._slideTemplatel">Help</a></li>
                                                <li><a href="index._slideTemplatel">privacy policy</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="one-quarter sm-full">
                                        <div class="copyright">© Copyright 2015 by WebLionMedia</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- Footer END -->
                </div>
            </div>
        </div>

        <a href="index._slideTemplatel" class="go-top animated js-go-top"><i class="fa fa-angle-up"></i></a>

        <!-- Search block popup -->
        <div id="search-block" class="pp-search-block mfp-hide">
            <div class="search">
                <div class="search-btn">
                    <button><i class="li_search"></i></button>
                </div>
                <div class="search-input">
                    <input type="search" placeholder="Search">
                </div>
            </div>
        </div>

        <!-- Login popup -->
        <div id="login" class="sp-popup login mfp-hide">
            <div class="btns">
                <a href="index._slideTemplatel#signin" class="js-popups">Registration</a>
                <a href="index._slideTemplatel#login" class="active js-popups">Login</a>
            </div>
            <div class="social">
                <div>Sign in with social account</div>
                <ul class="pp-social-list">
                    <li class="tw">
                        <a href="index._slideTemplatel"><i class="fa fa-twitter"></i></a></li>
                    <li class="fb">
                        <a href="index._slideTemplatel"><i class="fa fa-facebook"></i></a></li>
                    <li class="gp">
                        <a href="index._slideTemplatel"><i class="fa fa-google-plus"></i></a></li>
                    <li class="vk">
                        <a href="index._slideTemplatel"><i class="fa fa-vk"></i></a></li>
                </ul>
            </div>
            <div class="pp-title"><span>or</span></div>
            <div class="form">
                <input type="text" placeholder="Username">
                <input type="password" placeholder="Password">
                <button class="btn-8">login</button>
                <a href="index._slideTemplatel#recentpass" class="js-popups">Lost your Password?</a>
            </div>
        </div>

        <!-- Sign in popup -->
        <div id="signin" class="sp-popup signin mfp-hide">
            <div class="btns">
                <a href="index._slideTemplatel#signin" class="active js-popups">Registration</a>
                <a href="index._slideTemplatel#login" class="js-popups">Login</a>
            </div>
            <div class="social">
                <div>Sign in with social account</div>
                <ul class="pp-social-list">
                    <li class="tw">
                        <a href="index._slideTemplatel"><i class="fa fa-twitter"></i></a></li>
                    <li class="fb">
                        <a href="index._slideTemplatel"><i class="fa fa-facebook"></i></a></li>
                    <li class="gp">
                        <a href="index._slideTemplatel"><i class="fa fa-google-plus"></i></a></li>
                    <li class="vk">
                        <a href="index._slideTemplatel"><i class="fa fa-vk"></i></a></li>
                </ul>
            </div>
            <div class="pp-title"><span>or</span></div>
            <div class="form not-valid">
                <input type="text" placeholder="Username">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <button class="btn-8">Registration</button>
                <span>A password will be send on your post</span>
            </div>
        </div>

        <!-- Recent pass popup -->
        <div id="recentpass" class="sp-popup recentpass mfp-hide">
            <div class="btns">
                <a href="index._slideTemplatel#signin" class="js-popups">Registration</a>
                <a href="index._slideTemplatel#login" class="active js-popups">Login</a>
            </div>
            <div class="form">
                <input type="email" placeholder="Enter Your Email Adress">
                <button class="btn-8">Get new password</button>
                <a href="index._slideTemplatel#signin" class="js-popups"><i class="popup-arr-left-ic"></i> Registration</a>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mb-menu" class="mb-menu mfp-hide">
            <div class="container">
                <nav class="mobile-nav">
                    <ul class="mobile-nav-list">
                        <li class="mn-item"><a href="index._slideTemplatel">news</a></li>
                        <li class="mn-item"><a href="javascript:void(0)">features</a></li>
                        <li class="mn-item"><a href="category_style_three._slideTemplatel">design</a></li>
                        <li class="mn-item"><a href="category_style_four._slideTemplatel">life style</a></li>
                        <li class="mn-item"><a href="video._slideTemplatel">video</a></li>
                        <li class="mn-item"><a href="reviews_stars_style._slideTemplatel">reviews</a></li>
                        <li class="mn-item"><a href="products._slideTemplatel">shop</a></li>
                        <li class="mn-item"><a href="contact_page_style_1._slideTemplatel">contacts</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Aside menu -->
        <div id="aside-menu" class="aside-menu mfp-hide">
            <div class="am-container">
                <nav class="am-menu">
                    <ul class="am-list">
                        <li class="am-item">
                            <a href="index._slideTemplatel">news</a>
                        </li>
                        <li class="am-item">
                            <a href="javascript:void(0)">FEATURES</a>
                        </li>
                        <li class="am-item">
                            <a href="category_style_three._slideTemplatel">design</a>
                        </li>
                        <li class="am-item">
                            <a href="category_style_four._slideTemplatel">life style</a>
                        </li>
                        <li class="am-item">
                            <a href="video._slideTemplatel">video</a>
                        </li>
                        <li class="am-item">
                            <a href="reviews_stars_style._slideTemplatel">reviews</a>
                        </li>
                        <li class="am-item">
                            <a href="products._slideTemplatel">shop</a>
                        </li>
                        <li class="am-item">
                            <a href="contact_page_style_1._slideTemplatel">Contacts</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="am-container">
                <div class="twitter-posts">
                    <ul class="tp-list">
                        <li class="tp-list-item">
                            <div class="icon"><i class="fa fa-twitter"></i></div>
                            Show your web design in a web browser! Check out new awesome tool <a href="index._slideTemplatel">http://www.symu.co  https://www.symu.co</a> 
                        </li>
                        <li class="tp-list-item">
                            <div class="icon"><i class="fa fa-twitter"></i></div>
                            Show your web design in a web browser! Check out new awesome tool <a href="index._slideTemplatel">http://www.symu.co  https://www.symu.co</a> 
                        </li>
                    </ul>
                    <a href="index._slideTemplatel" class="tp-all">View All Tweets</a>
                </div>
            </div>
        </div>
        <!-- Google maps API -->
        <script src="https://maps.googleapis.com/maps/api/js?sensor=true&amp;v=3"></script>
        <!-- build:js scripts/vendor.js -->

        <!-- Vendor -->
        <script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/waypoints/lib/jquery.waypoints.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/superfish/dist/js/superfish.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/magnific-popup/dist/jquery.magnific-popup.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/imagesloaded/imagesloaded.pkgd.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/owl-carousel/owl-carousel/owl.carousel.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/slick-carousel/slick/slick.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/Swiper/dist/js/swiper.jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/sticky-kit/jquery.sticky-kit.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
        <!-- endbuild -->
        <!-- build:js scripts/main.js -->

        <!-- Theme Base, Components and Settings -->
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

        <!-- endbuild -->
    </body>

</html>


<script type="text/javascript">

    (function (window, $, undefined) {


    
        var $scope = $("#js-home-scope");
        var url = 'news/category';
        app._getTopHeadLines();
        var searchQuery = {key: 'world'};
       app._getCategory(searchQuery,url).done(function (data) {
                var i = 3;
                var j = 10;
                var _category = '';
                $.each(data, function (key, news) {

                    if (searchQuery.key === 'politics' || searchQuery.key === 'world') {
                        if ((key < 4)) {
                            _category += '<article class="post post-tp-6">';
                            _category += '<figure class="js-category-news">';
                            _category += ' <a href="index._slideTemplatel"><img src="' + news.multimedia[2].url + '" height="85" width="115" alt="Spectr News Theme" class="adaptive" /></a>';
                            _category += '</figure>';
                            _category += '<h3 class="title-6"><a href="' + news.url + '" target="_blank"</a>' +news.abstract+ '</h3>';
                            _category += '<div class="date-tp-2">october 2, 2015</div></article>';

                        }
                    } else {
                        if ((key < 4)) {

                            _category += '<article class="post post-tp-6">';
                            _category += '<figure class="js-category-news">';
                            _category += ' <a href="index._slideTemplatel"><img src="' + news.urlToImage + '" height="85" width="115" alt="Spectr News Theme" class="adaptive" /></a>';
                            _category += '</figure>';
                            _category += '<h3 class="title-6"><a href="' + news.url + '" target="_blank"</a>' + news.description + '</h3>';
                            _category += '<div class="date-tp-2">october 2, 2015</div></article>';

                        }
                    }

                });
                $('#js-category-news').html(_category);

                //Top headlines

            });


    /*Click Events*/
    $($scope).on('click', '#js-catg-business,#js-catg-sport,#js-catg-technology,#js-catg-entertainment,#js-catg-politics', function (evt) {
        evt.preventDefault();
        var searchQuery = {key: this.getAttribute('value')};
      //  var url = 'news/category';
        app._getCategory(searchQuery,url).done(function (data) {
                var i = 3;
                var j = 10;
                var _category = '';
                $.each(data, function (key, news) {

                    if (searchQuery.key === 'politics' || searchQuery.key === 'world') {
                        if ((key < 4)) {
                            _category += '<article class="post post-tp-6">';
                            _category += '<figure class="js-category-news">';
                            _category += ' <a href="index._slideTemplatel"><img src="' + news.multimedia[2].url + '" height="85" width="115" alt="Spectr News Theme" class="adaptive" /></a>';
                            _category += '</figure>';
                            _category += '<h3 class="title-6"><a href="' + news.url + '" target="_blank"</a>' +news.abstract+ '</h3>';
                            _category += '<div class="date-tp-2">october 2, 2015</div></article>';

                        }
                    } else {
                        if ((key < 4)) {

                            _category += '<article class="post post-tp-6">';
                            _category += '<figure class="js-category-news">';
                            _category += ' <a href="index._slideTemplatel"><img src="' + news.urlToImage + '" height="85" width="115" alt="Spectr News Theme" class="adaptive" /></a>';
                            _category += '</figure>';
                            _category += '<h3 class="title-6"><a href="' + news.url + '" target="_blank"</a>' + news.description + '</h3>';
                            _category += '<div class="date-tp-2">october 2, 2015</div></article>';

                        }
                    }

                });
                $('#js-category-news').html(_category);

                //Top headlines

            });
    });



    })(window, jQuery);
</script>