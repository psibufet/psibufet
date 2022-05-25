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