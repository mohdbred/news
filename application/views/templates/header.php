<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<!DOCTYPE >
<html lang="en">

    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>NewsPulses</title>

        <meta name="keywords" content="News" />
        <meta name="description" content="NewsPulses" />


        <meta name="msapplication-TileColor" content="News" />
        <meta name="msapplication-TileImage" content="News" />
        <meta name="theme-color" content="News" />
        
        <style>.async-hide { opacity: 0 !important} </style>
        <script>(function (a, s, y, n, c, h, i, d, e) {
                s.className += ' ' + y;
                h.start = 1 * new Date;
                h.end = i = function () {
                    s.className = s.className.replace(RegExp(' ?' + y), '')
                };
                (a[n] = a[n] || []).hide = h;
                setTimeout(function () {
                    i();
                    h.end = null
                }, c);
                h.timeout = c;
            })(window, document.documentElement, 'async-hide', 'dataLayer', 4000,
                    {'GTM-WBLMKFM': true});</script>

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-117222559-2', 'auto');
            ga('require', 'GTM-WBLMKFM');
            ga('send', 'pageview');
        </script>


        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-6689136907606599",
                enable_page_level_ads: true
            });
        </script>



        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />


        <!-- Icon Fonts  -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/owl-carousel/owl-carousel/owl.carousel.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/slick-carousel/slick/slick.css" />


        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" />

        <!-- endbuild -->


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


        <script src="<?php echo base_url(); ?>assets/maintenance/jquery.countdown.js"></script>
        <script src="<?php echo base_url(); ?>assets/maintenance/backstretch.js"></script>  
        <!-- endbuild -->
        <!-- build:js scripts/main.js -->

        <!-- Theme Base, Components and Settings -->
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

        <!-- endbuild -->

        <script type="text/javascript">
            $(document).ready(function () {
                var url_string = window.location.href
                var url = new URL(url_string);
                var subcatg = (url.pathname).split('/');
                subcatg = subcatg[subcatg.length - 1].trim();
                var _topCatg = $('.top-headers-catg');

                $.each(_topCatg, function (index, val) {
                    var catg = $(val).text().toLowerCase().trim();
                    if (subcatg === 'news' && catg === 'top news') {
                        $(val).addClass('active');
                    } else if (catg === subcatg) {
                        $(val).addClass('active');
                    }
                });
            });
        </script>
    </head>

    <body id="js-home-scope">
        <!-- Loader -->
        <div class="page-loader">
            <div class="loader">
                <!--   <div class="flipper"> -->
                <img src="<?php echo base_url(); ?>assets/img/preloader.gif" height="64" width="64" alt="">
                <!-- </div> -->
            </div>
        </div>
        <!-- Loader END-->
        <div class="main-wrapper">
            <!-- Header -->
            <header class="header-mb">
                <div class="container">
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
                                    <li class="top-headers-catg"><a href="<?php echo site_url(); ?>news">Top news</a></li>
                                    <li class="top-headers-catg">
                                        <a href="<?php echo site_url(); ?>news/politics">Politics</i></a>

                                    </li>
                                    <li class="top-headers-catg"><a href="<?php base_url(); ?>news/art">Arts</a></li>
                                    <li class="top-headers-catg">
                                        <a href="<?php echo site_url(); ?>news/business">Business</a>

                                    </li>
                                    <li class="top-headers-catg"><a href="<?php echo site_url(); ?>news/technology">Technology</a></li>
                                    <li class="top-headers-catg">
                                        <a href="<?php base_url(); ?>news/entertainment">Entertainment</i></a>

                                    </li>
                                    <li class="top-headers-catg">
                                        <a href="<?php echo site_url(); ?>news/sports">Sports</a>

                                    </li>
                                    <li class="top-headers-catg"><a href="<?php echo site_url(); ?>news/contact">contacts</a></li>
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
                <!--   <div class="top-bar">
                      <div class="container">
                          <div class="top-bar-inner">
                              <div class="row">
                                  <nav class="tb-nav">
                                      <ul class="tb-nav-list">
                                          <li><a href="<?php base_url(); ?>about_us">ABOUT</a></li>
                                          <li><a href="<?php base_url(); ?>blog">Blogs</a></li>
                                          <li><a href="<?php base_url(); ?>contact">CONTACTS</a></li>
                                      </ul>
                                  </nav>
                                  <div class="tb-date" id="demo">
  
                                  </div>
                                  <div class="tb-saved-art">
                                      <i class="li_cloud"></i> Cloudy
                                  </div>
                     
                                  <div class="tb-sing-login">
                                      <a href="index._slideTemplatel#signin" class="js-popups">Sign in</a> / <a href="index._slideTemplatel#login" class="js-popups">Join</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div> -->
                <div class="main-header">

                    <div class="mh-bottom">
                        <div class="container">
                            <div class="main-nav-wrap">
                                <div class="row">
                                    <nav class="main-nav">

                                        <ul class="main-nav-list sf-menu">
                                            <li class="top-headers-catg"><a href="<?php echo site_url(); ?>news">Top news</a></li>
                                            <li class="top-headers-catg">
                                                <a href="<?php echo site_url(); ?>news/politics">Politics</a>

                                            </li>
                                            <li class="top-headers-catg"><a href="<?php echo site_url(); ?>news/art">Arts</a></li>
                                            <li class="mf">
                                                <a href="<?php echo site_url(); ?>news/business">Business</a>

                                            </li>
                                            <li class="top-headers-catg"><a href="<?php echo site_url(); ?>news/technology">Technology</a></li>
                                            <li class="top-headers-catg">
                                                <a href="<?php echo base_url(); ?>news/entertainment">Entertainment</a>

                                            </li>
                                            <li class="top-headers-catg">
                                                <a href="<?php echo site_url(); ?>news/sports">Sports</a>

                                            </li>
                                            <li class="top-headers-catg"><a href="<?php echo site_url(); ?>news/contact">contact</a></li>
                                        </ul>
                                    </nav>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header END -->
            <div class="inner-wrapper">

                <div class="main">