$(document).ready(function(){
    $('.foodTile__gallery').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
    })
    $('.recipesParts__list').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        arrows: true,
        dots: true,
        centerMode: false,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 1299,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    centerMode: true,
                }
            }
        ]
    });

    if($(window).width() < 992){
        $('.howUsers__list').slick({
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            centerMode: true,
            variableWidth: true,
        });
    }
});


//book slider
$(document).ready(function() {
    if($(window).width() < 768){
        $('.meetMakers__images').slick({
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            infinte: false,
            fade: true,
            asNavFor: ".meetMakers__content",
        });
        $('.meetMakers__content').slick({
            slidesToScroll: 1,
            slidesToShow: 1,
            arrows: false,
            dots: false,
            infinte: false,
            centerMode: true,
            variableWidth: true,
            asNavFor: ".meetMakers__images",
        });
    }
})

// Restaurants LP
$(document).ready(function(){
    if($(window).width() < 991){
        // var images = $('.restInstagram__list').find('.restPost img');
        // $(images).each(function(){
        //     $(this).removeClass('lazyloading').addClass('no-lazyload');
        // });
        $('.restInstagram__list').slick({
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            dots: true,
            centerMode: true,
            variableWidth: true,
        });
    }
});