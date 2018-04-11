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
                var _topHeadline = '';
                var _topStories1 = '';
                var _topStories2 = '';
                var _trendingPost = '';
                $.each(data, function (key, news) {
                    var _slideTemplate = '';
                    if (key < i) {

                         _slideTemplate += '<figure>';
                        _slideTemplate += ' <a href="' + news.url + '" target="_blank" "><img src="' + news.urlToImage + '"  height="471px" alt="NewsPulses" class="adaptive" /></a>';
                        _slideTemplate += '</figure><div class="ptp-1-overlay"><div class="ptp-1-data">';
                        _slideTemplate += '<h3 class="title-1"><a href="'+news.url+'" target="_blank">' + news.description + '</a></h3>';
                        _slideTemplate += '<div class="meta-tp-1">';
                        _slideTemplate += '<div class="ptp-1-date"><a href="">'+new Date(news.publishedAt).toString().split('GMT')[0]+'</a></div>';
                        _slideTemplate += '<div class="ptp-1-views"><a href=""><i class="li_eye"></i><span>187</span></a></div>';
                        _slideTemplate += '<div class="ptp-1-comments"><a href=""><i class="li_bubble"></i><span>5</span></a></div></div>';
                        //_slideTemplate += '  <tr><td>Course:</td><td>' + response.course + '</td></tr>';
                        _slideTemplate += '</div></div>';

                    }
                    $("#js-load-slide-news" + (key + 1)).html(_slideTemplate);
                    if (key > i && key < j) {
                        _topHeadline = '<a href="'+news.url+'" target="_blank">' + news.title + '</a>';
                        $('#js-top-headlines'+key).html(_topHeadline);
                    }

                    if ((key > 10) && (key < 14)) {

                        _topStories1 += '<article class="post post-tp-3">';
                        _topStories1 += '<figure class="css-side-post">';
                        _topStories1 += ' <a href="'+news.url+'" target="_blank"><img src="' + news.urlToImage + '" height="98" width="126" alt="Spectr News Theme" class="adaptive" /></a>';
                        _topStories1 += '</figure><a href="#" class="category-tp-2">business</a>';
                        _topStories1 += '<h3 class="title-3"><a href="' + news.url + '" target="_blank"</a>' + news.description + '</h3>';
                        _topStories1 += '<div class="date-tp-2">'+new Date(news.publishedAt).toString().split('GMT')[0]+'</div></article>';

                    }
                    if ((key > 14) && (key < 18)) {

                        _topStories2 += '<article class="post post-tp-3">';
                        _topStories2 += '<figure class="css-side-post">';
                        _topStories2 += ' <a href="'+news.url+'" target="_blank"><img src="' + news.urlToImage + '" height="98" width="126" alt="Spectr News Theme" class="adaptive" /></a>';
                        _topStories2 += '</figure><a href="'+news.url+'" class="category-tp-2">business</a>';
                        _topStories2 += '<h3 class="title-3"><a href="' + news.url + '" target="_blank"</a>' + news.description + '</h3>';
                        _topStories2 += '<div class="date-tp-2">'+new Date(news.publishedAt).toString().split('GMT')[0]+'</div></article>';

                    }



                    if ((key > 15) && (key < 20)) {

                        _trendingPost += '<div class="col-one-quarter"><article class="post post-tp-4"><figure>';
                        _trendingPost += ' <a href="'+news.url+'" target="_blank"><img src="' + news.urlToImage + '" height="186" width="260" alt="Spectr News Theme" class="adaptive" /></a>';
                        _trendingPost += '<div class="ptp-4-overlay"><div class="ptp-4-data"><a href="'+news.url+'"><i class="li_eye"></i>187'
                        _trendingPost += '</a> <a href="'+news.url+'"><i class="li_bubble"></i>187</a></div></div></figure>';
                        _trendingPost += '<h3 class="title-3"><a href="'+news.url+'" target="_blank">'+news.description+'</a></h3>';
                        _trendingPost += '<div class="meta-tp-2"><div class="date"><span>'+new Date(news.publishedAt).toString().split('GMT')[0]+'</span></div>';
                        _trendingPost += '<div class="category">';
                        _trendingPost += '</div> </div> ';
                        _trendingPost += ' </article></div>';

                    }

                });

                
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
