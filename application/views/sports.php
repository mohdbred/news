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
                  
                        <!-- Video data was here-->
                        <div class="section">
                            <div class="row">
                                <div class="content">

                                    <div class="latest-nws">
                                        <div class="pst-block">
                                            <div class="pst-block-head">
                                                <h2 class="title-4"><strong>Latest </strong> News</h2>
                                             
                                            </div>
                                            <div class="pst-block-main">
                                                <div class="col-row" id="js-main-content">
                                        
                                                </div>
                                                <!-- Page nav -->
                                                <div class="page-nav" id="js-pagination">
                                                    <a href="#" class="pn-item">
                                                        <i class="page-nav-prev-ic"></i>
                                                    </a>
                                                    <a href="#" class="pn-item mb-pt-hide current" value="9">1</a>
                                                    <a href="#" class="pn-item mb-pt-hide" value="9">2</a>
                                                    <a href="#" class="pn-item mb-pt-hide" value="14">3</a>
                                                     <a href="#" class="pn-item mb-pt-hide" value="19">4</a>
                                                      <a href="#" class="pn-item mb-pt-hide" value="24">5</a>
                                                    <a href="#" class="pn-item">
                                                    <i class="page-nav-next-ic"></i>
                                                    </a>
                                                    <span class="page-count">Page 1 of 3</span>
                                                </div>
                                                <!-- Page nav END -->
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
        var queryCatg = {key: 'sports'};
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
                        if ((key < 3)) {
                            _category += '<div class="one-third sm-half"><article class="post post-tp-2"><figure>';
                            _category += '<a href="index._slideTemplatel"><img src="' + news.multimedia[2].url + '" height="258" width="380" alt="Spectr News Theme" class="" /></a>';
                            _category += '</figure><div class="ptp-1-overlay"><div class="ptp-1-data">';
                            _category += '<a href="index._slideTemplatel" class="category-tp-1">BUSINESS</a>';
                            _category += '  <h2 class="title-29"><a  href="' + news.url + '" target="_blank">' +news.abstract+ '</a></h2>';
                            _category += '<div class="meta-tp-1"><div class="ptp-1-date"><a href="index._slideTemplatel">october 2, 2015</a></div>';
                             _category += ' <div class="ptp-1-views"><a href="index._slideTemplatel"><i class="li_eye"></i><span>187</span></a></div>';
                             _category += ' <div class="ptp-1-comments"><a href="index._slideTemplatel"><i class="li_bubble"></i><span>5</span></a></div>';
                             _category +='</div></div></div></article></div>';

                        }
                       if(key > 4 ){
                          if(key < i){
                            _content += '<article class="post post-tp-6" value="'+key+'">';
                            _content += '<figure class="js-category-news">';
                            _content += ' <a href="index._slideTemplatel"><img src="' + news.multimedia[2].url  + '" height="85" width="115" alt="Spectr News Theme" class="" /></a>';
                            _content += '</figure>';
                            _content += '<h3 class="title-6"><a href="' + news.url + '" target="_blank"</a>' +news.abstract+  '</h3>';
                            _content += '<div class="date-tp-2">october 2, 2015</div></article>';
                          }else{
                            _content += '<article class="post post-tp-6" style="display:none" value="'+key+'">';
                            _content += '<figure class="js-category-news">';
                            _content += ' <a href="index._slideTemplatel"><img src="' + news.multimedia[2].url  + '" height="85" width="115" alt="Spectr News Theme" class="" /></a>';
                            _content += '</figure>';
                            _content += '<h3 class="title-6"><a href="' + news.url + '" target="_blank"</a>' +news.abstract+  '</h3>';
                            _content += '<div class="date-tp-2">october 2, 2015</div></article>';
                          }
               
                      
                       } 
                    

                });
                $('#js-top-section').html(_category);
                $('#js-main-content').html(_content);

        });
       
      $('#js-pagination').on('click','.pn-item',function(evt){

            evt.preventDefault();
            var num1 = parseInt($(this).attr("value"));
            var htm = $('#js-main-content').find('article');

            $(htm).each(function(index,data){
             var num2 =  $(data).attr('value')
             if(num2 < num1){
                 $(data ,'article').hide();

             }
             if((num2 > num1) && (num2 < (num1 + 5))){
                $(data ,'article').show();
             }

            });
              
        
            // var htm = $('#js-main-content').find('article')[0];
            // $(htm ,'article').hide();


      });

    })(window, jQuery);
</script>