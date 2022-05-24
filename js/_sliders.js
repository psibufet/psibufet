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

/**
 * Help page slider
 */
$(document).ready(function(){
    if($(window).width() < 768){
        $('.helpCategories__wrap').slick({
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            dots: true,
            centerMode: true,
            variableWidth: true,
        });
    }
});

/**
 * LP - Szczeniaki
 */
$(document).ready(function(){
    $('.pupReviews__list').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        centerMode: true,
        dots: true,
        arrows: true,
        infinite: true,
    });

    if($(window).width() < 992){
        $('.pupInfo__wrap').slick({
            slidesToScroll: 1,
            infinite: true,
            arrows: false,
            dots: true,
            centerMode: true,
            variableWidth: true,
        });
        $('.pupUsp__list').slick({
            slidesToScroll: 1,
            infinite: true,
            arrows: false,
            dots: true,
            centerMode: true,
            variableWidth: true,
        });
    }
});

/**
 * Pies senior
 */
$(document).ready(function(){
    if($(window).width() < 768){
        $('.seniorDogs__boxes').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true,
            arrows: false,
            dots: true,
        });
        $('.seniorUSP__list').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true,
            arrows: false,
            dots: true,
        });
    }
    $('.seniorReviews__list').slick({
        slidesToScroll: 1,
        slidesToShow: 3,
        initialSlide: 1,
        centerMode: true,
        variableWidth: true,
        arrows: true,
        dots: true,
    });
});

/**
 * New homepage 
 */
function newHomepage_sliders(){
    $('.homeFood__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
    });

    let homeClients = $('.homeClients').find('.reviews');
    $(homeClients).slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        centerMode: true,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
                    centerMode: false,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    variableWidth: true,
                    centerMode: true,
                    dots: true,
                }
            }
        ]
    });
    $('.homeInstagram__posts').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        infinite: true,
        variableWidth: true,
        responsive: [{
            breakpoint: 992,
            settings: {
                swipe: true,
                centerMode: true,
            }
        }]
    });
}
$(document).ready(newHomepage_sliders);