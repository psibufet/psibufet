/**
 * Google optimize homepage test
 */
(function($){
    console.log('homepage test ready');
    // let param = GetURLParameter('test');
    let preloader = '',
        data = {
            action: 'homepageTest',
        };

    $(document).on('run-homepage-test', function(){
        if(!$('body').hasClass('page-template-page_front-page')){
            return false;
        }
        console.log('homepage test run');
        // preloader = setInterval(function(){
        //     $('.preloader').removeClass('disable')
        //     $('.preloader').css('opacity', '1');
        //     $('.preloader').css('display', 'flex');
        // }, 20);

        $.ajax({
            url: PBAjax.ajaxurl,
            data: data,

            success: function(response){
                let data = '';
                if(response.endsWith('0') || response.endsWith('1')){
                    data = response.slice(0, -1);
                }else{
                    data = response;
                }
                
                $('.pbpage--frontpage').remove();
                $('#content').html(data);
                $('.pbpage').removeClass('pbpage--frontpage').addClass('pbpage--home');
                newHomepage_sliders();
                newhomepage_underscores();
                headerClone();

                // lazyload
                // Sliders fix
                $(window).scroll(function(){
                    var sliders = $('.slick-slider');

                    $(sliders).each(function(){
                        var slide = $(this).find('.slick-slide');

                        $(slide).each(function(){
                            var image = $(this).find('img');

                            $(image).each(function(){
                                var original = $(this).attr('data-original'),
                                    src = $(this).attr('src');

                                if(original !== src){
                                    $(this).attr('src', original);
                                }
                            });
                        });
                    });
                });

                // Preloader
                clearInterval(preloader);
                $('.preloader').css('opacity', '0');
                setTimeout(function(){
                    $('.preloader').css('display', 'none');
                    $('.preloader').addClass('disable');
                }, 500);


                // If code exist
                let code = GetURLParameter('code');
                if(code !== ''){
                    $.ajax({
                        url:'https://app.psibufet.pl/api/order/couponcode/' + code,
                        
                        success: function(){
                            $.getJSON("https://app.psibufet.pl/api/order/couponcode/" + code, function (data) {
                                // Add badge - new homepage
                                let discountInfo = $('.homeHowitworks').find('.discountInfo');
                                discountInfo.addClass('discountInfo--active');

                                discountInfo.find('.discountInfo__one').find('p').find('span').text('-' + data.amount);
                                discountInfo.find('.discountInfo__two').find('p').find('span').text('-' + data.amount2);

                                // Add top promobar
                                promobar(code, data.amount, data.amount2, data.type, data.purpose);
                                
                                // Add bottom promobar
                                bottomBar(code, data.amount, data.type);

                                // Add discount info to <a>
                                $('.dir').each(function () {
                                    let $this = $(this),
                                        _href = $this.attr('href');
                                    if(typeof data.type !== 'undefined' && typeof data.amount !== 'undefined'){
                                        $this.attr('href', _href + '?code=' + code + '&amount=' + data.amount + '&type=' + data.type);
                                    }else{
                                        $this.attr('href', _href + '?code=' + code);
                                    }
                                });
                            });
                        }
                    });
                }
            }
        });
    });
}(jQuery));