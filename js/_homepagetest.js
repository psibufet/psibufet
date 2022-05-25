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
        console.log('homepage test run');
        preloader = setInterval(function(){
            $('.preloader').removeClass('disable')
            $('.preloader').css('opacity', '1');
            $('.preloader').css('display', 'flex');
        }, 20);

        $.ajax({
            url: PBAjax.ajaxurl,
            data: data,

            success: function(response){
                $('.pbpage--frontpage').html(response);
                $('.pbpage').removeClass('pbpage--frontpage').addClass('pbpage--home');
                newHomepage_sliders();

                clearInterval(preloader);

                $('.preloader').css('opacity', '0');
                setTimeout(function(){
                    $('.preloader').css('display', 'none');
                    $('.preloader').addClass('disable');
                }, 500);

                let code = GetURLParameter('code');

                if(code !== ''){
                    $.ajax({
                        url:'https://app.psibufet.pl/api/order/couponcode/' + code,
                        
                        success: function(){
                            $.getJSON("https://app.psibufet.pl/api/order/couponcode/" + code, function (data) {
                                // Add badge - new homepage
                                $('.homeHowitworks').find('.discountInfo').addClass('discountInfo--active');
                            });
                        }
                    });
                }
            }
        });
    });
}(jQuery));