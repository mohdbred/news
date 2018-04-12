


                <div class="main">
                    <!-- Content -->
                    <div class="main-content">
                        <!-- Trending line -->
                     <!--    <div class="trending-posts-line">
                            <div class="container">
                                <div class="trending-line" id="js-top-headlines">

                                </div>
                            </div>
                        </div> -->

                    <div class="trending-posts-line">
                        <div class="container">
                            <div class="trending-line">
                                <div class="trending-now"><strong>Trending</strong> Now</div>
                           
                                <div class="tl-slider">
                                  <div id="js-top-headlines4"></div>
                                  <div id="js-top-headlines5"></div>
                                  <div id="js-top-headlines6"></div>
                                  <div id="js-top-headlines7"></div>
                                  <div id="js-top-headlines8"></div>
                                  <div id="js-top-headlines9"></div>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                           <!-- Trending line -->
              <!--       <div class="trending-posts-line">
                        <div class="container">
                            <div class="trending-line">
                                <div class="trending-now"><strong>Trending</strong> Now</div>
                                <div class="tl-slider" id="js-top-headlines">
                                    <div><a href="index.html">Fusce ac orci sagittis mattis magna et ultrices</a></div>
                                    <div><a href="index.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, consectetur.</a></div>
                                    <div><a href="index.html">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Trending line END -->

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
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mp-section" id="js-category2-data">
                           
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
                                                <h2 class="title-4"><strong>Current</strong> Posts</h2>
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
                                                 <!--Ajax Call-->
   
                                                 </div>

                                            </div>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                        <!-- Video data was here-->
                   
                    </div>
                    <!-- Content END -->
                </div>

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
                var _category2 = '';
                $.each(data, function (key, news) {
                    news = JSON.parse(news);
                    if (searchQuery.key === 'politics' || searchQuery.key === 'world') {
                        if ((key < 6)) {
                         
                        if(key%2==0)
                         {
                            _category += '<div class="one-third">';
                            _category += '<article class="post post-tp-6">';
                            _category += '<figure >';
                            _category += ' <a href="'+news.url+'" target="_blank"><img src="' + news.multimedia[2].url + '" height="85" width="115" alt="Spectr News Theme" class="adaptive" /></a>';
                            _category += '</figure>';
                            _category += '<h3 class="title-6"><a href="' + news.url + '" target="_blank"</a>' +(news.abstract).substring(0, 120)+'..' + '</h3>';
                            _category += '<div class="date-tp-2">'+new Date(news.created_date).toString().split('GMT')[0]+'</div></article>';
                        }
                          else
                         {
                            _category += '<article class="post post-tp-6">';
                            _category += '<figure >';
                            _category += ' <a href="'+news.url+'" target="_blank"><img src="' + news.multimedia[2].url + '" height="85" width="115" alt="Spectr News Theme" class="adaptive" /></a>';
                            _category += '</figure>';
                            _category += '<h3 class="title-6"><a href="' + news.url + '" target="_blank"</a>' +(news.abstract).substring(0, 120)+'..' + '</h3>';
                            _category += '<div class="date-tp-2">'+new Date(news.created_date).toString().split('GMT')[0]+'</div></article> </div>';
                         }

                        }
                       if( key > 6  && key < 16){
                             _category2 += '<div class="one-third sm-half"><article class="post post-tp-2"><figure>';
                            _category2 += '<a href="' + news.url + '" target="_blank"><img src="' + news.multimedia[2].url + '" height="254" width="380" alt="Spectr News Theme" class="" /></a>';
                            _category2 += '</figure><div class="ptp-1-overlay"><div class="ptp-1-data">';
                            _category2 += '  <h2 class="title-29"><a  href="'+news.url+'">' +news.abstract+ '</a></h2>';
                            _category2 += '<div class="meta-tp-1"><div class="ptp-1-date"><a href="#">'+new Date(news.created_date).toString().split('GMT')[0]+'</a></div>';
                             _category2 += ' <div class="ptp-1-views"><a href="#"><i class="li_eye"></i><span>187</span></a></div>';
                             _category2 += ' <div class="ptp-1-comments"><a href="#"><i class="li_bubble"></i><span>5</span></a></div>';
                             _category2 +='</div></div></div></article></div>';

                        }
                    } else {
                        if ((key < 6)) {

                            _category += '<article class="post post-tp-6">';
                            _category += '<figure class="js-category-news">';
                            _category += ' <a href="'+news.url+'" target="_blank"><img src="' + news.urlToImage + '" height="85" width="115" alt="Spectr News Theme" class="adaptive" /></a>';
                            _category += '</figure>';
                            _category += '<h3 class="title-6"><a href="' + news.url + '" target="_blank"</a>' + news.description + '</h3>';
                            _category += '<div class="date-tp-2">'+new Date(news.created_date).toString().split('GMT')[0]+'</div></article>';

                        }

          
                    }

                });
                
                $('#js-category-news').html(_category);
                $('#js-category2-data').html(_category2);

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
                 $('#js-category-news').html('');
                $.each(data, function (key, news) {
                 //  news.replace(",\\")
                    news = JSON.parse(news);

                  //  if (searchQuery.key === 'politics' || searchQuery.key === 'world' ||searchQuery.key === 'sports') {
                        if ((key < 6)) {
                            // _category += '<article class="post post-tp-6">';
                            // _category += '<figure class="js-category-news">';
                            // _category += ' <a href="#"><img src="' + news.multimedia[2].url + '" height="85" width="115" alt="Spectr News Theme" class="adaptive" /></a>';
                            // _category += '</figure>';
                            // _category += '<h3 class="title-6"><a href="' + news.url + '" target="_blank"</a>' +news.abstract+ '</h3>';
                            // _category += '<div class="date-tp-2">'+Date(news.publishedAt).split('GMT')[0]+'</div></article>';

                       if(key%2==0)
                         {
                            _category += '<div class="one-third">';
                            _category += '<article class="post post-tp-6">';
                            _category += '<figure >';
                            _category += ' <a href="'+news.url+'" target="_blank"><img src="' + news.multimedia[2].url + '" height="85" width="115" alt="Spectr News Theme" class="" /></a>';
                            _category += '</figure>';
                            _category += '<h3 class="title-6"><a href="' + news.url + '" target="_blank"</a>' +(news.abstract).substring(0, 120)+'..' + '</h3>';
                            _category += '<div class="date-tp-2">'+new Date(news.publishedAt).toString().split('GMT')[0]+'</div></article>';
                        }
                          else
                         {
                            _category += '<article class="post post-tp-6">';
                            _category += '<figure >';
                            _category += ' <a href="'+news.url+'" target="_blank"><img src="' + news.multimedia[2].url + '" height="85" width="115" alt="Spectr News Theme" class="" /></a>';
                            _category += '</figure>';
                            _category += '<h3 class="title-6"><a href="' + news.url + '" target="_blank"</a>' +(news.abstract).substring(0, 120)+'..' + '</h3>';
                            _category += '<div class="date-tp-2">'+new Date(news.publishedAt).toString().split('GMT')[0]+'</div></article> </div>';
                         }

                        }
          

                });
                $('#js-category-news').html(_category);

                //Top headlines

            });
    });


// Trending line slider

    })(window, jQuery);
</script>