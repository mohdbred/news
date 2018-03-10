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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/linecons.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontello.css" />
    
    <!-- endbuild -->
    <!-- build:css css/vendor.css -->
    
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.structure.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/owl-carousel/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/owl-carousel/owl-carousel/owl.transitions.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/Swiper/dist/css/swiper.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/magnific-popup/dist/magnific-popup.css" />
    
    <!-- endbuild -->
    <!-- build:css css/main.css -->
    
    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css" />
    
    <!-- endbuild -->
</head>

<body>
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
                                <li class="active"><a href="index._slideTemplatel">Top news</a></li>
                                <li>
                                    <a href="javascript:void(0)">Politics</i></a>
                                   
                                </li>
                                <li><a href="category_style_six._slideTemplatel">Educations</a></li>
                                <li class="mf">
                                    <a href="index._slideTemplatel">Business<</a>
                                   
                                </li>
                                <li><a href="video._slideTemplatel">Technology</a></li>
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
                                    <li><a href="products._slideTemplatel">SHOP</a></li>
                                    <li><a href="contact_page_style_1._slideTemplatel">CONTACTS</a></li>
                                </ul>
                            </nav>
                            <div class="tb-date" id="demo">
                             
                            </div>
                            <div class="tb-saved-art">
                                <i class="li_cloud"></i> Cloudy
                            </div>
                            <div class="tb-social">
                                <ul class="tb-social-list">
                                    <li class="tw">
                                        <a href="index._slideTemplatel">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="fb">
                                        <a href="index._slideTemplatel">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="gp">
                                        <a href="index._slideTemplatel">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="in">
                                        <a href="index._slideTemplatel">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="dr">
                                        <a href="index._slideTemplatel">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tb-sing-login">
                                <a href="index._slideTemplatel#signin" class="js-popups">Sign in</a> / <a href="index._slideTemplatel#login" class="js-popups">Join</a>
                            </div>
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
                                            <a href="javascript:void(0)">Politics</a>
                                           
                                        </li>
                                        <li><a href="category_style_six._slideTemplatel">Educations</a></li>
                                        <li class="mf">
                                            <a href="index._slideTemplatel">Business</a>
                                          
                                        </li>
                                        <li><a href="video._slideTemplatel">Technology</a></li>
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
            <div class="left-sticky-bar js-lsb">
                <ul class="lsb-list">
                    <li>
                        <a href="category_style_six._slideTemplatel" class="active">
                            <i class="lsb-icon-1"></i>news</a>
                    </li>
                    <li>
                        <a href="products._slideTemplatel">
                            <i class="lsb-icon-2"></i>popular</a>
                    </li>
                    <li>
                        <a href="video._slideTemplatel">
                            <i class="lsb-icon-3"></i>saved</a>
                    </li>
                    <li>
                        <a href="product._slideTemplatel">
                            <i class="lsb-icon-4"></i>latest</a>
                    </li>
                    <li>
                        <a href="search_results._slideTemplatel">
                            <i class="lsb-icon-5"></i>search</a>
                    </li>
                    <li>
                        <a href="index._slideTemplatel#signin" class="js-popups">
                            <i class="lsb-icon-6"></i>login</a>
                    </li>
                </ul>
            </div>
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
                                                <div>
                                                    <article class="post post-tp-3">
                                                        <figure class="css-side-post">
                                                            <a href="index._slideTemplatel"><img src="https://media.npr.org/assets/img/2018/02/24/gettyimages-923046528_wide-87b6e291583b99c804d113f7857c044a86e6e9ff.jpg?s=1400" height="98" width="126" alt="Spectr News Theme" class="adaptive" /></a>
                                                        </figure>
                                                        <a href="index._slideTemplatel" class="category-tp-2">business</a>
                                                        <h3 class="title-3"><a href="index._slideTemplatel">Mauris porta quam a lorem honcus</a></h3>
                                                        <div class="date-tp-2">october 2, 2015</div>
                                                    </article>
                                                    <article class="post post-tp-3">
                                                        <figure>
                                                            <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/126x98/2.jpg" height="98" width="126" alt="Spectr News Theme" class="adaptive" /></a>
                                                        </figure>
                                                        <a href="index._slideTemplatel" class="category-tp-2">video</a>
                                                        <h3 class="title-3"><a href="index._slideTemplatel">Duis eu arcu sit amet ante tristique</a></h3>
                                                        <div class="date-tp-2">october 2, 2015</div>
                                                    </article>
                                                    <article class="post post-tp-3">
                                                        <figure>
                                                            <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/126x98/3.jpg" height="98" width="126" alt="Spectr News Theme" class="adaptive" /></a>
                                                        </figure>
                                                        <a href="index._slideTemplatel" class="category-tp-2">design</a>
                                                        <h3 class="title-3"><a href="index._slideTemplatel">Fusce ac orci sagittis mattis</a></h3>
                                                        <div class="date-tp-2">october 2, 2015</div>
                                                    </article>
                                                </div>
                                                <div>
                                                    <article class="post post-tp-3">
                                                        <figure>
                                                            <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/126x98/2.jpg" height="98" width="126" alt="Spectr News Theme" class="adaptive" /></a>
                                                        </figure>
                                                        <a href="index._slideTemplatel" class="category-tp-2">video</a>
                                                        <h3 class="title-3"><a href="index._slideTemplatel">Duis eu arcu sit amet ante</a></h3>
                                                        <div class="date-tp-2">october 2, 2015</div>
                                                    </article>
                                                    <article class="post post-tp-3">
                                                        <figure>
                                                            <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/126x98/3.jpg" height="98" width="126" alt="Spectr News Theme" class="adaptive" /></a>
                                                        </figure>
                                                        <a href="index._slideTemplatel" class="category-tp-2">design</a>
                                                        <h3 class="title-3"><a href="index._slideTemplatel">Fusce ac orci sagittis mattis</a></h3>
                                                        <div class="date-tp-2">october 2, 2015</div>
                                                    </article>
                                                    <article class="post post-tp-3">
                                                        <figure>
                                                            <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/126x98/1.jpg" height="98" width="126" alt="Spectr News Theme" class="adaptive" /></a>
                                                        </figure>
                                                        <a href="index._slideTemplatel" class="category-tp-2">business</a>
                                                        <h3 class="title-3"><a href="index._slideTemplatel">Mauris porta quam a lorem honcus</a></h3>
                                                        <div class="date-tp-2">october 2, 2015</div>
                                                    </article>
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
                                        <div class="col-one-quarter">
                                            <article class="post post-tp-4">
                                                <figure>
                                                    <a href="index._slideTemplatel">
                                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/260x186/1.jpg" height="186" width="260" alt="Spectr News Theme" class="adaptive" />
                                                    </a>
                                                    <div class="ptp-4-overlay">
                                                        <div class="ptp-4-data">
                                                            <a href="index._slideTemplatel">
                                                                <i class="li_eye"></i>187
                                                            </a>
                                                            <a href="index._slideTemplatel">
                                                                <i class="li_bubble"></i>187
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <h3 class="title-3"><a href="index._slideTemplatel">Fusce ac orci sagittis mattis magna t ultrices</a></h3>
                                                <div class="meta-tp-2">
                                                    <div class="date"><span>october 2, 2015</span></div>
                                                    <div class="category">
                                                        <a href="index._slideTemplatel"><i class="li_pen"></i><span>business</span></a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-one-quarter">
                                            <article class="post post-tp-4">
                                                <figure>
                                                    <a href="index._slideTemplatel">
                                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/260x186/2.jpg" height="186" width="260" alt="Spectr News Theme" class="adaptive" />
                                                    </a>
                                                    <div class="ptp-4-overlay">
                                                        <div class="ptp-4-data">
                                                            <a href="index._slideTemplatel">
                                                                <i class="li_eye"></i>187
                                                            </a>
                                                            <a href="index._slideTemplatel">
                                                                <i class="li_bubble"></i>187
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <h3 class="title-3"><a href="index._slideTemplatel">Denouncing pleasure and praising pain was</a></h3>
                                                <div class="meta-tp-2">
                                                    <div class="date"><span>october 2, 2015</span></div>
                                                    <div class="category">
                                                        <a href="index._slideTemplatel"><i class="li_pen"></i><span>business</span></a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-one-quarter">
                                            <article class="post post-tp-4">
                                                <figure>
                                                    <a href="index._slideTemplatel">
                                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/260x186/3.jpg" height="186" width="260" alt="Spectr News Theme" class="adaptive" />
                                                    </a>
                                                    <div class="ptp-4-overlay">
                                                        <div class="ptp-4-data">
                                                            <a href="index._slideTemplatel">
                                                                <i class="li_eye"></i>187
                                                            </a>
                                                            <a href="index._slideTemplatel">
                                                                <i class="li_bubble"></i>187
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <h3 class="title-3"><a href="index._slideTemplatel">Fusce ac orci sagittis mattis magna t ultrices</a></h3>
                                                <div class="meta-tp-2">
                                                    <div class="date"><span>october 2, 2015</span></div>
                                                    <div class="category">
                                                        <a href="index._slideTemplatel"><i class="li_pen"></i><span>business</span></a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-one-quarter">
                                            <article class="post post-tp-4">
                                                <figure>
                                                    <a href="index._slideTemplatel">
                                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/260x186/4.jpg" height="186" width="260" alt="Spectr News Theme" class="adaptive" />
                                                    </a>
                                                    <div class="ptp-4-overlay">
                                                        <div class="ptp-4-data">
                                                            <a href="index._slideTemplatel">
                                                                <i class="li_eye"></i>187
                                                            </a>
                                                            <a href="index._slideTemplatel">
                                                                <i class="li_bubble"></i>187
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <h3 class="title-3"><a href="index._slideTemplatel">Fusce ac orci sagittis mattis magna t ultrices</a></h3>
                                                <div class="meta-tp-2">
                                                    <div class="date"><span>october 2, 2015</span></div>
                                                    <div class="category">
                                                        <a href="index._slideTemplatel"><i class="li_pen"></i><span>business</span></a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="pst-block-foot">
                                    <a href="index._slideTemplatel">More recent posts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="row">
<div class="content">
    <div class="popular-pst">
        <div class="pst-block">
            <div class="pst-block-head">
                <h2 class="title-4"><strong>Popular</strong> Posts</h2>
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
                        <article class="post post-tp-5">
                            <figure>
                                <a href="index._slideTemplatel">
                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/345x242/1.jpg" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                </a>
                            </figure>
                            <h3 class="title-5"><a href="index._slideTemplatel">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                            <div class="meta-tp-2">
                                <div class="date"><span>october 2, 2015</span></div>
                                <div class="category">
                                    <a href="index._slideTemplatel"><i class="li_user"></i><span>admin</span></a>
                                </div>
                            </div>
                            <p class="p">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore</p>
                        </article>
                    </div>
                    <div class="col-half">
                        <article class="post post-tp-6">
                            <figure>
                                <a href="index._slideTemplatel">
                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/1.jpg" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                </a>
                            </figure>
                            <h3 class="title-6"><a href="index._slideTemplatel">Duis eu arcu sit amet ante tristique</a></h3>
                            <div class="date-tp-2">october 2, 2015</div>
                        </article>
                        <article class="post post-tp-6">
                            <figure>
                                <a href="index._slideTemplatel">
                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/2.jpg" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                </a>
                            </figure>
                            <h3 class="title-6"><a href="index._slideTemplatel">Vivamus auctor quam nec mauris commodo</a></h3>
                            <div class="date-tp-2">october 2, 2015</div>
                        </article>
                        <article class="post post-tp-6">
                            <figure>
                                <a href="index._slideTemplatel">
                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/3.jpg" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                </a>
                            </figure>
                            <h3 class="title-6"><a href="index._slideTemplatel">Nam ut metus elementum pharetra diam sed</a></h3>
                            <div class="date-tp-2">october 2, 2015</div>
                        </article>
                        <article class="post post-tp-6">
                            <figure>
                                <a href="index._slideTemplatel">
                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/4.jpg" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                </a>
                            </figure>
                            <h3 class="title-6"><a href="index._slideTemplatel">Mauris porta quam a lorem rhoncus fringilla</a></h3>
                            <div class="date-tp-2">october 2, 2015</div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="pst-block-foot">
                <a href="index._slideTemplatel">MOre popular posts</a>
            </div>
        </div>
    </div>
    <div class="design-pst">
        <div class="pst-block">
            <div class="pst-block-head">
                <h2 class="title-4"><strong>Design</strong> Posts</h2>
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
                        <article class="post post-tp-5">
                            <figure>
                                <a href="index._slideTemplatel">
                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/345x242/2.jpg" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                </a>
                                <div class="ptp-5-overlay">
                                    <div class="ptp-5-data">
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
                                    <a href="index._slideTemplatel"><i class="li_user"></i><span>admin</span></a>
                                </div>
                            </div>
                            <p class="p">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore</p>
                        </article>
                    </div>
                    <div class="col-half">
                        <article class="post post-tp-5">
                            <figure>
                                <a href="index._slideTemplatel">
                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/345x242/3.jpg" height="242" width="345" alt="Spectr News Theme" class="adaptive" />
                                </a>
                                <div class="ptp-5-overlay">
                                    <div class="ptp-5-data">
                                        <a href="index._slideTemplatel">
                                            <i class="li_eye"></i>187
                                        </a>
                                        <a href="index._slideTemplatel">
                                            <i class="li_bubble"></i>187
                                        </a>
                                    </div>
                                </div>
                            </figure>
                            <h3 class="title-5"><a href="index._slideTemplatel">Explain to you how all this mistaken idea of denouncing</a></h3>
                            <div class="meta-tp-2">
                                <div class="date"><span>october 2, 2015</span></div>
                                <div class="category">
                                    <a href="index._slideTemplatel"><i class="li_user"></i><span>admin</span></a>
                                </div>
                            </div>
                            <p class="p">Qiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore</p>
                        </article>
                    </div>
                </div>
                <hr class="pst-block-hr">
                <div class="col-row">
                    <div class="col-half">
                        <article class="post post-tp-6">
                            <figure>
                                <a href="index._slideTemplatel">
                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/5.jpg" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                </a>
                            </figure>
                            <h3 class="title-6"><a href="index._slideTemplatel">Duis eu arcu sit amet ante tristique</a></h3>
                            <div class="date-tp-2">october 2, 2015</div>
                        </article>
                        <article class="post post-tp-6">
                            <figure>
                                <a href="index._slideTemplatel">
                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/6.jpg" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                </a>
                            </figure>
                            <h3 class="title-6"><a href="index._slideTemplatel">Vivamus auctor quam nec mauris commodo</a></h3>
                            <div class="date-tp-2">october 2, 2015</div>
                        </article>
                    </div>
                    <div class="col-half">
                        <article class="post post-tp-6">
                            <figure>
                                <a href="index._slideTemplatel">
                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/7.jpg" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                </a>
                            </figure>
                            <h3 class="title-6"><a href="index._slideTemplatel">Nam ut metus elementum pharetra diam sed</a></h3>
                            <div class="date-tp-2">october 2, 2015</div>
                        </article>
                        <article class="post post-tp-6">
                            <figure>
                                <a href="index._slideTemplatel">
                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/8.jpg" height="85" width="115" alt="Spectr News Theme" class="adaptive" />
                                </a>
                            </figure>
                            <h3 class="title-6"><a href="index._slideTemplatel">Mauris porta quam a lorem rhoncus fringilla</a></h3>
                            <div class="date-tp-2">october 2, 2015</div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="pst-block-foot">
                <a href="index._slideTemplatel">More design posts</a>
            </div>
        </div>
    </div>
    <div class="editors-pst">
        <div class="pst-block spst-slider">
            <div class="pst-block-head">
                <h2 class="title-4"><strong>Editors</strong> Posts</h2>
                <div class="filters">
                    <div class="post-navs js-pst-navs">
                        <a href="index._slideTemplatel" class="prev pst-prev">
                            <span class="arr-left-dark-ic"><i></i></span>
                        </a>
                        <a href="index._slideTemplatel" class="next pst-next">
                            <span class="arr-right-dark-ic"><i></i></span>
                        </a>
                    </div>
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
                    <div class="js-pst-block">
                        <div class="col-one-third">
                            <article class="post post-tp-5">
                                <figure>
                                    <a href="index._slideTemplatel">
                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/224x150/1.jpg" height="150" width="224" alt="Spectr News Theme" class="adaptive" />
                                    </a>
                                </figure>
                                <h3 class="title-5"><a href="index._slideTemplatel">Fusce ac orci sagittis mattis magna ultrices</a></h3>
                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                            </article>
                        </div>
                        <div class="col-one-third">
                            <article class="post post-tp-5">
                                <figure>
                                    <a href="index._slideTemplatel">
                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/224x150/2.jpg" height="150" width="224" alt="Spectr News Theme" class="adaptive" />
                                    </a>
                                </figure>
                                <h3 class="title-5"><a href="index._slideTemplatel">Aliquam venenatis aliquet tortor non blandit</a></h3>
                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                            </article>
                        </div>
                        <div class="col-one-third">
                            <article class="post post-tp-5">
                                <figure>
                                    <a href="index._slideTemplatel">
                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/224x150/3.jpg" height="150" width="224" alt="Spectr News Theme" class="adaptive" />
                                    </a>
                                </figure>
                                <h3 class="title-5"><a href="index._slideTemplatel">Fusce ac orci sagittis mattis magna ultrices</a></h3>
                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                            </article>
                        </div>
                        <div class="col-one-third">
                            <article class="post post-tp-5">
                                <figure>
                                    <a href="index._slideTemplatel">
                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/224x150/2.jpg" height="150" width="224" alt="Spectr News Theme" class="adaptive" />
                                    </a>
                                </figure>
                                <h3 class="title-5"><a href="index._slideTemplatel">Aliquam venenatis aliquet tortor non blandit</a></h3>
                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pst-block-foot">
                <a href="index._slideTemplatel">More editors posts</a>
            </div>
        </div>
    </div>
</div>
<aside class="side-bar">
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
    <div class="sb-banner">
        <div class="banner-inner">
            <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/sb-banner-img.jpg" height="270" width="320" alt="Spectr News Theme" class="adaptive" />
            <div class="banner-overlay">
                <h5 class="title-11">The Best <br>Magazine &amp; Blog <br>Theme</h5>
                <a href="index._slideTemplatel" class="btn-2">buy it now</a>
            </div>
        </div>
    </div>
    <div class="recent-nws">
        <div class="pst-block">
            <div class="pst-block-head">
                <h2 class="title-4"><strong>Recent</strong> News</h2>
                <div class="all-sb">
                    <a href="index._slideTemplatel">all news</a>
                </div>
            </div>
            <div class="pst-block-main">
                <div class="inner-filters">
                    <ul class="filters-list-3 js-tab-filter">
                        <li><a href="index._slideTemplatel" class="active">News</a></li>
                        <li><a href="index._slideTemplatel">Featured</a></li>
                        <li><a href="index._slideTemplatel">Comments</a></li>
                    </ul>
                </div>
                <hr class="pst-block-hr">
                <div class="js-csp-block js-tab-slider">
                    <div>
                        <article class="post post-tp-9">
                            <figure>
                                <a href="index._slideTemplatel">
                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/9.jpg" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                </a>
                            </figure>
                            <h3 class="title-6"><a href="index._slideTemplatel">Duis eu arcu sit amet ante tristique</a></h3>
                            <div class="date-tp-2">october 2, 2015</div>
                        </article>
                        <article class="post post-tp-9">
                            <figure>
                                <a href="index._slideTemplatel">
                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/10.jpg" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                </a>
                            </figure>
                            <h3 class="title-6"><a href="index._slideTemplatel">Vivamus auctor quam nec mauris commodo</a></h3>
                            <div class="date-tp-2">october 2, 2015</div>
                        </article>
                        <article class="post post-tp-9">
                            <figure>
                                <a href="index._slideTemplatel">
                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/11.jpg" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                </a>
                            </figure>
                            <h3 class="title-6"><a href="index._slideTemplatel">Nam ut metus elementum pharetra diam sed</a></h3>
                            <div class="date-tp-2">october 2, 2015</div>
                        </article>
                    </div>
                    <div>
                        <article class="post post-tp-9">
                            <figure>
                                <a href="index._slideTemplatel">
                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/10.jpg" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                </a>
                            </figure>
                            <h3 class="title-6"><a href="index._slideTemplatel">Vivamus auctor quam nec mauris commodo</a></h3>
                            <div class="date-tp-2">october 2, 2015</div>
                        </article>
                        <article class="post post-tp-9">
                            <figure>
                                <a href="index._slideTemplatel">
                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/9.jpg" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                </a>
                            </figure>
                            <h3 class="title-6"><a href="index._slideTemplatel">Duis eu arcu sit amet ante tristique</a></h3>
                            <div class="date-tp-2">october 2, 2015</div>
                        </article>
                        <article class="post post-tp-9">
                            <figure>
                                <a href="index._slideTemplatel">
                                    <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/11.jpg" alt="Spectr News Theme" class="adaptive" height="85" width="115">
                                </a>
                            </figure>
                            <h3 class="title-6"><a href="index._slideTemplatel">Nam ut metus elementum pharetra diam sed</a></h3>
                            <div class="date-tp-2">october 2, 2015</div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="pst-block-foot">
                <div class="js-sbr-pagination"></div>
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
    <div class="sbr-slider">
        <div class="pst-block">
            <div class="pst-block-head">
                <h2 class="title-4"><strong>Sidebar</strong> Slider</h2>
            </div>
            <div class="pst-block-main">
                <div class="sidebar-slider">
                    <div class="js-sbr-slider">
                        <div class="item">
                            <article class="post post-tp-10">
                                <figure>
                                    <a href="index._slideTemplatel">
                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/360x231/1.jpg" alt="Spectr News Theme" class="adaptive" height="231" width="360">
                                    </a>
                                    <a href="index._slideTemplatel" class="category-tp-1">Home</a>
                                </figure>
                                <div class="ptp-10-data">
                                    <h3 class="title-5"><a href="index._slideTemplatel">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                    <p class="p">Sed ut perspiciatis unde omnis iste natus sit volupta tem accusantium doloremque laudantium</p>
                                    <div class="meta-tp-2">
                                        <div class="date"><span>october 2, 2015</span></div>
                                        <div class="category">
                                            <a href="index._slideTemplatel"><i class="li_pen"></i><span>business</span></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="item">
                            <article class="post post-tp-10">
                                <figure>
                                    <a href="index._slideTemplatel">
                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/360x231/2.jpg" alt="Spectr News Theme" class="adaptive" height="231" width="360">
                                    </a>
                                    <a href="index._slideTemplatel" class="category-tp-1">Home</a>
                                </figure>
                                <div class="ptp-10-data">
                                    <h3 class="title-5"><a href="index._slideTemplatel">Mauris porta quam a lorem rhoncus fringilla</a></h3>
                                    <p class="p">Sed ut perspiciatis unde omnis iste natus sit volupta tem accusantium doloremque laudantium</p>
                                    <div class="meta-tp-2">
                                        <div class="date"><span>october 2, 2015</span></div>
                                        <div class="category">
                                            <a href="index._slideTemplatel"><i class="li_pen"></i><span>business</span></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="item">
                            <article class="post post-tp-10">
                                <figure>
                                    <a href="index._slideTemplatel">
                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/360x231/3.jpg" alt="Spectr News Theme" class="adaptive" height="231" width="360">
                                    </a>
                                    <a href="index._slideTemplatel" class="category-tp-1">Home</a>
                                </figure>
                                <div class="ptp-10-data">
                                    <h3 class="title-5"><a href="index._slideTemplatel">Aliquam venenatis aliquet tortor non blandit</a></h3>
                                    <p class="p">Sed ut perspiciatis unde omnis iste natus sit volupta tem accusantium doloremque laudantium</p>
                                    <div class="meta-tp-2">
                                        <div class="date"><span>october 2, 2015</span></div>
                                        <div class="category">
                                            <a href="index._slideTemplatel"><i class="li_pen"></i><span>business</span></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="sbr-navs js-sbr-navs"></div>
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
                    <div class="main-video-posts">
                        <div class="video-posts-pane">
                            <div class="vpst-block">
                                <div class="vpst-block-head">
                                    <h2 class="title-4"><strong>Featured</strong> Video</h2>
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
                                <div class="vpst-block-main">
                                    <div class="js-video-pst-slider">
                                        <div class="vps-item">
                                            <div class="half sm-full mb-pt-hide">
                                                <article class="post post-tpv-1">
                                                    <figure>
                                                        <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/570x430/1.jpg" height="430" width="570" alt="Spectr News Theme" class="adaptive" /></a>
                                                    </figure>
                                                    <div class="ptp-1-overlay">
                                                        <span class="arr-left-light-lg-ic video-lg-ic"><i></i></span>
                                                        <div class="ptp-1-data">
                                                            <a href="index._slideTemplatel" class="category-tp-1">video</a>
                                                            <h2 class="title-7"><a href="index._slideTemplatel#1">Ut arcu odio sollicitud a lobo is vitae scelerisque</a></h2>
                                                            <div class="meta-tp-1">
                                                                <div class="ptp-1-date"><a href="index._slideTemplatel">october 2, 2015</a></div>
                                                                <div class="ptp-1-views"><a href="index._slideTemplatel"><i class="li_eye"></i><span>187</span></a></div>
                                                                <div class="ptp-1-comments"><a href="index._slideTemplatel"><i class="li_bubble"></i><span>5</span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="half sm-full">
                                                <div class="half">
                                                    <article class="post post-tpv-2">
                                                        <figure>
                                                            <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/285x215/1.jpg" height="215" width="285" alt="Spectr News Theme" class="adaptive" /></a>
                                                        </figure>
                                                        <div class="ptp-1-overlay">
                                                            <div class="ptp-1-data">
                                                                <span class="arr-left-light-sm-ic video-sm-ic"><i></i></span>
                                                                <h2 class="title-5"><a href="index._slideTemplatel#1">Ut arcu odio sollicitud a lobo is vitae scelerisque</a></h2>
                                                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="half">
                                                    <article class="post post-tpv-2">
                                                        <figure>
                                                            <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/285x215/2.jpg" height="215" width="285" alt="Spectr News Theme" class="adaptive" /></a>
                                                        </figure>
                                                        <div class="ptp-1-overlay">
                                                            <div class="ptp-1-data">
                                                                <span class="arr-left-light-sm-ic video-sm-ic"><i></i></span>
                                                                <h2 class="title-5"><a href="index._slideTemplatel#1">Voluptatem accusantium dolore mque laudan</a></h2>
                                                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="half">
                                                    <article class="post post-tpv-2">
                                                        <figure>
                                                            <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/285x215/3.jpg" height="215" width="285" alt="Spectr News Theme" class="adaptive" /></a>
                                                        </figure>
                                                        <div class="ptp-1-overlay">
                                                            <div class="ptp-1-data">
                                                                <span class="arr-left-light-sm-ic video-sm-ic"><i></i></span>
                                                                <h2 class="title-5"><a href="index._slideTemplatel#1">Inventore veritatis et quasi architecto beatae</a></h2>
                                                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="half">
                                                    <article class="post post-tpv-2">
                                                        <figure>
                                                            <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/285x215/4.jpg" height="215" width="285" alt="Spectr News Theme" class="adaptive" /></a>
                                                        </figure>
                                                        <div class="ptp-1-overlay">
                                                            <div class="ptp-1-data">
                                                                <span class="arr-left-light-sm-ic video-sm-ic"><i></i></span>
                                                                <h2 class="title-5"><a href="index._slideTemplatel#1">Eaque ipsa quae ab illo inventore veritatis</a></h2>
                                                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vps-item">
                                            <div class="half sm-full mb-pt-hide">
                                                <article class="post post-tpv-1">
                                                    <figure>
                                                        <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/570x430/1.jpg" height="430" width="570" alt="Spectr News Theme" class="adaptive" /></a>
                                                    </figure>
                                                    <div class="ptp-1-overlay">
                                                        <span class="arr-left-light-lg-ic video-lg-ic"><i></i></span>
                                                        <div class="ptp-1-data">
                                                            <a href="index._slideTemplatel" class="category-tp-1">video</a>
                                                            <h2 class="title-7"><a href="index._slideTemplatel#1">Ut arcu odio sollicitud a lobo is vitae scelerisque</a></h2>
                                                            <div class="meta-tp-1">
                                                                <div class="ptp-1-date"><a href="index._slideTemplatel">october 2, 2015</a></div>
                                                                <div class="ptp-1-views"><a href="index._slideTemplatel"><i class="li_eye"></i><span>187</span></a></div>
                                                                <div class="ptp-1-comments"><a href="index._slideTemplatel"><i class="li_bubble"></i><span>5</span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="half sm-full">
                                                <div class="half">
                                                    <article class="post post-tpv-2">
                                                        <figure>
                                                            <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/285x215/1.jpg" height="215" width="285" alt="Spectr News Theme" class="adaptive" /></a>
                                                        </figure>
                                                        <div class="ptp-1-overlay">
                                                            <div class="ptp-1-data">
                                                                <span class="arr-left-light-sm-ic video-sm-ic"><i></i></span>
                                                                <h2 class="title-5"><a href="index._slideTemplatel#1">Ut arcu odio sollicitud a lobo is vitae scelerisque</a></h2>
                                                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="half">
                                                    <article class="post post-tpv-2">
                                                        <figure>
                                                            <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/285x215/2.jpg" height="215" width="285" alt="Spectr News Theme" class="adaptive" /></a>
                                                        </figure>
                                                        <div class="ptp-1-overlay">
                                                            <div class="ptp-1-data">
                                                                <span class="arr-left-light-sm-ic video-sm-ic"><i></i></span>
                                                                <h2 class="title-5"><a href="index._slideTemplatel#1">Voluptatem accusantium dolore mque laudan</a></h2>
                                                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="half">
                                                    <article class="post post-tpv-2">
                                                        <figure>
                                                            <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/285x215/3.jpg" height="215" width="285" alt="Spectr News Theme" class="adaptive" /></a>
                                                        </figure>
                                                        <div class="ptp-1-overlay">
                                                            <div class="ptp-1-data">
                                                                <span class="arr-left-light-sm-ic video-sm-ic"><i></i></span>
                                                                <h2 class="title-5"><a href="index._slideTemplatel#1">Inventore veritatis et quasi architecto beatae</a></h2>
                                                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="half">
                                                    <article class="post post-tpv-2">
                                                        <figure>
                                                            <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/285x215/4.jpg" height="215" width="285" alt="Spectr News Theme" class="adaptive" /></a>
                                                        </figure>
                                                        <div class="ptp-1-overlay">
                                                            <div class="ptp-1-data">
                                                                <span class="arr-left-light-sm-ic video-sm-ic"><i></i></span>
                                                                <h2 class="title-5"><a href="index._slideTemplatel#1">Eaque ipsa quae ab illo inventore veritatis</a></h2>
                                                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vpst-block-foot">
                                    <a href="index._slideTemplatel">More video posts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="row">
<div class="content">
    <div class="latest-blg">
        <div class="pst-block spst-slider">
            <div class="pst-block-head">
                <h2 class="title-4"><strong>Latest </strong> Blogs</h2>
                <div class="filters">
                    <div class="post-navs js-pst-navs">
                        <a href="index._slideTemplatel" class="prev pst-prev">
                            <span class="arr-left-dark-ic"><i></i></span>
                        </a>
                        <a href="index._slideTemplatel" class="next pst-next">
                            <span class="arr-right-dark-ic"><i></i></span>
                        </a>
                    </div>
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
                    <div class="js-pst-block" data-items="2">
                        <div class="col-half">
                            <article class="post post-tp-7">
                                <figure>
                                    <a href="index._slideTemplatel">
                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/68x80/1.jpg" height="80" width="68" alt="Spectr News Theme">
                                    </a>
                                </figure>
                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                                <h3 class="title-5"><a href="index._slideTemplatel">Fusce ac orci sagittis mattis magna ultrices libero</a></h3>
                                <p class="p">Sed ut perspiciatis unde omnis iste natus sit volupta tem accusantium doloremque laudantiu</p>
                                <div class="author-tp-1">
                                    <i class="li_user"></i>John Smith
                                </div>
                            </article>
                        </div>
                        <div class="col-half">
                            <article class="post post-tp-7">
                                <figure>
                                    <a href="index._slideTemplatel">
                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/68x80/2.jpg" height="80" width="68" alt="Spectr News Theme">
                                    </a>
                                </figure>
                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                                <h3 class="title-5"><a href="index._slideTemplatel">Aliquam venenatis aliquet tortor non blandit sapien aliq</a></h3>
                                <p class="p">Sed ut perspiciatis unde omnis iste natus sit volupta tem accusantium doloremque laudantiu</p>
                                <div class="author-tp-1">
                                    <i class="li_user"></i>Roman Polyarush
                                </div>
                            </article>
                        </div>
                        <div class="col-half">
                            <article class="post post-tp-7">
                                <figure>
                                    <a href="index._slideTemplatel">
                                        <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/68x80/2.jpg" height="80" width="68" alt="Spectr News Theme">
                                    </a>
                                </figure>
                                <div class="date-tp-2"><span>october 2, 2015</span></div>
                                <h3 class="title-5"><a href="index._slideTemplatel">Aliquam venenatis aliquet tortor non blandit sapien aliq</a></h3>
                                <p class="p">Sed ut perspiciatis unde omnis iste natus sit volupta tem accusantium doloremque laudantiu</p>
                                <div class="author-tp-1">
                                    <i class="li_user"></i>Roman Polyarush
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pst-block-foot">
                <a href="index._slideTemplatel">More blog posts</a>
            </div>
        </div>
    </div>
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
    <div class="twitter-widget">
        <div class="pst-block">
            <div class="pst-block-head">
                <h2 class="title-4"><strong>Twitter</strong></h2>
                <div class="info-tp-1">
                    <a href="index._slideTemplatel"><span>@weblionmedia</span></a>
                    <a href="index._slideTemplatel"><span class="follow">Follow us</span></a>
                </div>
            </div>
            <div class="pst-block-main">
                <div class="twitter-posts">
                    <ul class="post-list">
                        <li>
                            <i class="fa fa-twitter"></i>
                            <p class="p">Sed ut perspiciatis <a href="index._slideTemplatel">@weblionmedia</a> unde omnis iste natus sit voluptatem accusantium doloremque laudantiu <a href="index._slideTemplatel">#news</a> <a href="index._slideTemplatel">#video</a> <a href="index._slideTemplatel">#life</a></p>
                            <div class="date">2 min ago</div>
                        </li>
                        <li>
                            <i class="fa fa-twitter"></i>
                            <p class="p">Sed ut perspiciatis <a href="index._slideTemplatel">@weblionmedia</a> unde omnis iste natus sit voluptatem accusantium doloremque laudantiu <a href="index._slideTemplatel">#news</a> <a href="index._slideTemplatel">#video</a> <a href="index._slideTemplatel">#life</a></p>
                            <div class="date">2 min ago</div>
                        </li>
                    </ul>
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
</aside>
                        </div>
                    </div>
                </div>
                <!-- Content END -->
                <!-- Footer -->
                <footer class="main-footer">
                    <div class="container">
                        <div class="top-part">
                            <div class="row">
                                <div class="one-third sm-full">
                                    <div class="ft-widget">
                                        <h4 class="ft-title-1"><strong>Editors</strong> Choise</h4>
                                        <ul class="ft-list-1">
                                            <li>
                                                <h5 class="ft-title-2"><a href="index._slideTemplatel">Altricies vehicula neque rhoncus ut</a></h5>
                                                <div class="date">october 2, 2015</div>
                                            </li>
                                            <li>
                                                <h5 class="ft-title-2"><a href="index._slideTemplatel">Nulla porttitor bibendum viverra</a></h5>
                                                <div class="date">october 2, 2015</div>
                                            </li>
                                            <li>
                                                <h5 class="ft-title-2"><a href="index._slideTemplatel">Ut a risus ut nisi auctor placerat sed non orci</a></h5>
                                                <div class="date">october 2, 2015</div>
                                            </li>
                                            <li>
                                                <h5 class="ft-title-2"><a href="index._slideTemplatel">Quis gravida purus posuere sit amet</a></h5>
                                                <div class="date">october 2, 2015</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="one-third sm-full">
                                    <div class="ft-widget">
                                        <h4 class="ft-title-1"><strong>Recent</strong> News</h4>
                                        <ul class="ft-list-2">
                                            <li>
                                                <figure>
                                                    <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/14.jpg" height="85" width="115" alt="Spectr News Theme"></a>
                                                </figure>
                                                <h5 class="ft-title-2"><a href="index._slideTemplatel">Duis eu arcu sit amet ante tristique</a></h5>
                                                <div class="date">october 2, 2015</div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/15.jpg" height="85" width="115" alt="Spectr News Theme"></a>
                                                </figure>
                                                <h5 class="ft-title-2"><a href="index._slideTemplatel">Vivamus auctor quam nec mauris commodo</a></h5>
                                                <div class="date">october 2, 2015</div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/115x85/16.jpg" height="85" width="115" alt="Spectr News Theme"></a>
                                                </figure>
                                                <h5 class="ft-title-2"><a href="index._slideTemplatel">Nam ut metus elementum pharetra diam sed</a></h5>
                                                <div class="date">october 2, 2015</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="one-third sm-full">
                                    <div class="ft-widget">
                                        <h4 class="ft-title-1"><strong>Search</strong> Widget</h4>
                                        <div class="ft-search">
                                            <div class="search">
                                                <div class="search-input">
                                                    <input type="search" placeholder="Type and press enter or button">
                                                </div>
                                                <div class="search-btn">
                                                    <button>Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ft-widget">
                                        <h4 class="ft-title-1"><strong>Insagram</strong> Widget</h4>
                                        <ul class="inst-list">
                                            <li><a href="index._slideTemplatel">
                                                <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/68x68/1.jpg" height="68" width="68" class="adaptive" alt="Spectr News Theme">
                                            </a></li>
                                            <li><a href="index._slideTemplatel">
                                                <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/68x68/2.jpg" height="68" width="68" class="adaptive" alt="Spectr News Theme">
                                            </a></li>
                                            <li><a href="index._slideTemplatel">
                                                <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/68x68/3.jpg" height="68" width="68" class="adaptive" alt="Spectr News Theme">
                                            </a></li>
                                            <li><a href="index._slideTemplatel">
                                                <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/68x68/4.jpg" height="68" width="68" class="adaptive" alt="Spectr News Theme">
                                            </a></li>
                                            <li><a href="index._slideTemplatel">
                                                <img src="https://s3.amazonaws.com/weblionmedia-spectr/img/68x68/5.jpg" height="68" width="68" class="adaptive" alt="Spectr News Theme">
                                            </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-part">
                            <div class="row">
                                <div class="ft-logo">
                                    <a href="index._slideTemplatel"><img src="https://s3.amazonaws.com/weblionmedia-spectr/img/footer-logo.svg" height="30" width="105" alt="Spectr News Theme"></a>
                                </div>
                                <div class="ft-about">
                                    <article>
                                        <h4 class="ft-title-1"><strong>About</strong> Our Magazine</h4>
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
    <script src="<?php echo base_url();?>assets/vendor/jquery/dist/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/superfish/dist/js/superfish.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/owl-carousel/owl-carousel/owl.carousel.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/Swiper/dist/js/swiper.jquery.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/sticky-kit/jquery.sticky-kit.js"></script>
    
    <!-- endbuild -->
    <!-- build:js scripts/main.js -->
    
    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
    
    <!-- endbuild -->
</body>

</html>







<script type="text/javascript">
$(document).ready(function() {
 document.getElementById("demo").innerhtml = Date();


  $.ajax({
                type:'GET',
                url:'<?php echo site_url('news/news_api');?>',
                dataType:'json',
                cache : false
                
            }).done(function(data){
            console.log(data);

              var i = 3;
              var j = 10;
              var _topHeadline = '<div class="trending-now"><strong>HeadLines</strong></div><div class="tl-slider">';
              $.each(data, function (key, news) {
                 var _slideTemplate = '';
                
                if(key < i){

                _slideTemplate += '<figure>';
                _slideTemplate += ' <a href="index._slideTemplatel"><img src="'+news.urlToImage+'" height="471" width="760" alt="Spectr News Theme" class="adaptive" /></a>';
                _slideTemplate += '</figure><div class="ptp-1-overlay"><div class="ptp-1-data">';
                _slideTemplate += '  <a href="index._slideTemplatel" class="category-tp-1">BUSINESS</a>';
                _slideTemplate += '<h3 class="title-1"><a href="index._slideTemplatel#1">'+news.title+'</a></h3>';
                _slideTemplate += '<div class="meta-tp-1">';
                _slideTemplate += '<div class="ptp-1-date"><a href="">october 2, 2015</a></div>';
                _slideTemplate += '<div class="ptp-1-views"><a href=""><i class="li_eye"></i><span>187</span></a></div>';
                _slideTemplate += '<div class="ptp-1-comments"><a href=""><i class="li_bubble"></i><span>5</span></a></div></div>';
                _slideTemplate += '<a href="'+news.url+'" target="_blank" class="read-tp-1"><span>Read more</span> <span class="arr-right-light-ic"><i></i></span></a>';
                _slideTemplate += '<a href="" class="save-tp-1 pull-right"><span>Save and read later</span> <span class="arr-down-light-ic"><i></i></span></a>';
                //_slideTemplate += '  <tr><td>Course:</td><td>' + response.course + '</td></tr>';
                _slideTemplate += '</div></div>';

                }
                
                 $("#js-load-slide-news"+(key+1)).html(_slideTemplate);

                 if(key > i &&  key < j){
                   _topHeadline += '<div><a href="index._slideTemplatel">'+news.title+'</a></div>';
                 }
                 
              });


           _topHeadline +='</div><div class="tl-slider-control"></div>';
                                
                                
                               

             $('#js-top-headlines').html(_topHeadline);

               //Top headlines


            })
});
</script>