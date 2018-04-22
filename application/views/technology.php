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
                           
                            <div class="mp-section" style="height: 258px" id="js-top-section">
                        
                            </div>
                        </div>
                        <!-- Main posts END -->
                  
                        <div class="section">
                            <div class="row">
                                <div class="content">

                                    <div class="design-pst">
                                        <div class="pst-block">
                                            <div class="pst-block-head">
                                                <h2 class="title-4"><strong>Current</strong> Posts</h2>
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
                    </div>




  <script type="text/javascript">

    (function (window, $, undefined) {

        // var navScope = $(".navbar-collapse");
        // app._getTopHeadLines();
        var queryCatg = {key: 'technology'};
        var url = 'category';
        app._getCategory(queryCatg,url).done(function(data){
                $('#js-top-section').html('');
                 $('#js-main-content').html('');
              var i = 10;
                var j = 10;
                var _category = '';
                var _content = '';
                $.each(data, function (key, news) {
                    news = JSON.parse(news);
                     var _date = new Date(news.created_date).toString().split('GMT')[0];
                      if(_date === 'Invalid Date'){
                        _date = null;
                    }
                     var _contentt = (news.abstract);
                        if ((key < 3)) {
                            _category += '<div class="one-third sm-half"><article class="post post-tp-2"><figure>';
                            _category += '<a href="index._slideTemplatel"><img src="' + news.multimedia[2].url + '" height="258" width="380" alt="NewsPulses Image" class="" /></a>';
                            _category += '</figure><div class="ptp-1-overlay"><div class="ptp-1-data">';
                            _category += '  <h2 class="title-29"><a  href="' + news.url + '" target="_blank">' +news.abstract+ '</a></h2>';
                            _category += '<div class="meta-tp-1"><div class="ptp-1-date"><a href="index._slideTemplatel">october 2, 2015</a></div>';
                             _category += ' <div class="ptp-1-views"><a href="index._slideTemplatel"><i class="li_eye"></i><span>187</span></a></div>';
                             _category += ' <div class="ptp-1-comments"><a href="index._slideTemplatel"><i class="li_bubble"></i><span>5</span></a></div>';
                             _category +='</div></div></div></article></div>';

                        }
                    if(key >3){
                            _content += '<div class="one-third xs-half mb-ls-full">';
                            _content += '<article class="post-tp-6">';
                            _content += '<figure >';
                            _content += ' <a href="'+news.url+'" target="_blank"><img src="' + news.multimedia[2].url + '" height="50px" width="60px" alt="NewsPulses Image" class="adaptive" /></a>';
                            _content += '</figure>';
                            _content += '<h3 class="title-6"><a href="' + news.url + '" target="_blank"</a>' +_contentt+'..' + '</h3>';
                            _content += '<div class="date-tp-2">'+_date+'</div></article></div>';
                     }
                    

                });
                $('#js-top-section').html(_category);
                $('#js-category-news').html(_content);

        });
       

    })(window, jQuery);
</script>