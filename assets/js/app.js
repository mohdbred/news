/* 
 *Handle All Ajax Calls 
 *@author Mohammad Raheem
 */


(function (window, $, undefined) {
    var baseUrl = '';
    window.app = {

        _getTopHeadLines: function () {
            $.ajax({
                type: 'GET',
                url: baseUrl + 'news/news_api',
                cache: false

            }).done(function (data) {
                data = JSON.parse(data);
                var i = 3;
                var j = 10;
                var _topHeadline = '<div class="trending-now"><strong>HeadLines</strong></div><div class="tl-slider">';
                var _topStories1 = '';
                var _topStories2 = '';
                var _trendingPost = '';
                $.each(data, function (key, news) {
                    var _slideTemplate = '';

                    if (key < i) {

                        _slideTemplate += '<figure>';
                        _slideTemplate += ' <a href="index._slideTemplatel"><img src="' + news.urlToImage + '" height="471" width="760" alt="Spectr News Theme" class="adaptive" /></a>';
                        _slideTemplate += '</figure><div class="ptp-1-overlay"><div class="ptp-1-data">';
                        _slideTemplate += '  <a href="index._slideTemplatel" class="category-tp-1">BUSINESS</a>';
                        _slideTemplate += '<h3 class="title-1"><a href="index._slideTemplatel#1">' + news.title + '</a></h3>';
                        _slideTemplate += '<div class="meta-tp-1">';
                        _slideTemplate += '<div class="ptp-1-date"><a href="">'+Date(news.publishedAt).split('GMT')[0]+'</a></div>';
                        _slideTemplate += '<div class="ptp-1-views"><a href=""><i class="li_eye"></i><span>187</span></a></div>';
                        _slideTemplate += '<div class="ptp-1-comments"><a href=""><i class="li_bubble"></i><span>5</span></a></div></div>';
                        _slideTemplate += '<a href="' + news.url + '" target="_blank" class="read-tp-1"><span>Read more</span> <span class="arr-right-light-ic"><i></i></span></a>';
                        _slideTemplate += '<a href="" class="save-tp-1 pull-right"><span>Save and read later</span> <span class="arr-down-light-ic"><i></i></span></a>';
                        //_slideTemplate += '  <tr><td>Course:</td><td>' + response.course + '</td></tr>';
                        _slideTemplate += '</div></div>';

                    }
                    $("#js-load-slide-news" + (key + 1)).html(_slideTemplate);
                    if (key > i && key < j) {
                        _topHeadline += '<div><a href="index._slideTemplatel">' + news.title + '</a></div>';
                    }

                    if ((key > 10) && (key < 14)) {

                        _topStories1 += '<article class="post post-tp-3">';
                        _topStories1 += '<figure class="css-side-post">';
                        _topStories1 += ' <a href="index._slideTemplatel"><img src="' + news.urlToImage + '" height="98" width="126" alt="Spectr News Theme" class="adaptive" /></a>';
                        _topStories1 += '</figure><a href="index._slideTemplatel" class="category-tp-2">business</a>';
                        _topStories1 += '<h3 class="title-3"><a href="' + news.url + '" target="_blank"</a>' + news.title + '</h3>';
                        _topStories1 += '<div class="date-tp-2">'+Date(news.publishedAt).split('GMT')[0]+'</div></article>';

                    }
                    if ((key > 14) && (key < 18)) {

                        _topStories2 += '<article class="post post-tp-3">';
                        _topStories2 += '<figure class="css-side-post">';
                        _topStories2 += ' <a href="index._slideTemplatel"><img src="' + news.urlToImage + '" height="98" width="126" alt="Spectr News Theme" class="adaptive" /></a>';
                        _topStories2 += '</figure><a href="index._slideTemplatel" class="category-tp-2">business</a>';
                        _topStories2 += '<h3 class="title-3"><a href="' + news.url + '" target="_blank"</a>' + news.title + '</h3>';
                        _topStories2 += '<div class="date-tp-2">'+Date(news.publishedAt).split('GMT')[0]+'</div></article>';

                    }



                    if ((key > 15) && (key < 20)) {

                        _trendingPost += '<div class="col-one-quarter"><article class="post post-tp-4"><figure>';
                        _trendingPost += ' <a href="index._slideTemplatel"><img src="' + news.urlToImage + '" height="186" width="260" alt="Spectr News Theme" class="adaptive" /></a>';
                        _trendingPost += '<div class="ptp-4-overlay"><div class="ptp-4-data"><a href="index._slideTemplatel"><i class="li_eye"></i>187'
                        _trendingPost += '</a> <a href="index._slideTemplatel"><i class="li_bubble"></i>187</a></div></div></figure>';
                        _trendingPost += '<h3 class="title-3"><a href="'+news.url+'" target="_blank">'+news.title+'</a></h3>';
                        _trendingPost += '<div class="meta-tp-2"><div class="date"><span>'+Date(news.publishedAt).split('GMT')[0]+'</span></div>';
                        _trendingPost += '<div class="category">';
                        _trendingPost += '</div> </div> ';
                        _trendingPost += ' </article></div>';

                    }

                });


                _topHeadline += '</div><div class="tl-slider-control"></div>';
                $('#js-top-headlines').html(_topHeadline);
                $('#js-top-stories-sidebar1').html(_topStories1);
                $('#js-top-stories-sidebar2').html(_topStories2);
                $('#js-trending-post').html(_trendingPost);

                //Top headlines
            })
        },

        _getCategory: function (searchQuery,url) {
           
            var ajaxurl =  baseUrl + url;
           return $.ajax({
                type: 'POST',
                url: ajaxurl,
                dataType: 'json',
                data: searchQuery,
                cache: false

            });
        }

    }


})(window, jQuery);
