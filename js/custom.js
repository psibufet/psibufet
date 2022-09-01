/**
 * Get URL param
 */
 function GetURLParameter(sParam){
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++){
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam){
            if(sParameterName[1] !== ''){
                return sParameterName[1];
            }else{
                return false;
            }
        }
    }
}    

/**
 * Lazyload
 */
// $(document).ready(function(){
//     $('.no-lazyload').each(function(){
//         if(!$(this).hasClass('lazy-fix')){
//             $(this).lazyload({
//                 effect: "fadeIn",
//             });
//         }else{
//             var src = $(this).attr('data-original');
//             $(this).attr('src', src);
//         }
//     });
// });

/**
 * Cookies registered user
 */
$(document).ready(function(){
    let data = {
        action: 'check_user_cookie',
    }
    $.ajax({
        type: 'POST',
        url: PBAjax.ajaxurl,
        data: data,
        success: function(response){
            console.log(response);
        }
    })
});

/**
 * Preloader
 */
$(document).on('ready', function(){
    setTimeout(function(){
        $('.preloader').css('opacity', 0);
        setTimeout(function(){
            $('.preloader').addClass('disable');
            $(document).trigger('preload-off');
        }, 600);
    }, 1000);
});

/*********** MENU MOBILE *************/

$(document).mouseup(function(e){
    var container = $("#mainnav-mobi");
    if (!container.is(e.target) && container.has(e.target).length === 0){
        container.slideUp();
    }
});

/************ SLIDERS START **************/

$(window).load(function () {
    if ($(window).width() < 900) {
        $('.homeReviews .slideul').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true,
            arrows: false,
            autoplay: false,
            autoplaySpeed: 3000,
            initialSlide: 2,
        });
    }
});
$(document).ready(function () {
    $('#foodinfo_carousel').slick({
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        variableWidth: true,
        swipe: false,
        infinite: false,
        dots: true,
        initialSlide: 1,
        responsive: [{
            breakpoint: 767,
            settings: {
                infinite: true,
                swipe: true,
            }
        }]
    });

    $('#foodinfo_carousel').find('.slick-current').prev().addClass('prevslide');
    $('#foodinfo_carousel').find('.slick-current').next().addClass('nextslide');

    var slideData = $('#foodinfo_carousel').find('.slick-current').attr('data');
    $('.infoButtons__button[data="' + slideData + '"]').addClass('infoButtons__button--active');

    $('.homeFoodinfo__slides .slick-arrow').on('click', function(){
        var currentSlide = $('#foodinfo_carousel').find('.slick-current').attr('data');

        $('.infoButtons__button').removeClass('infoButtons__button--active');
        $('.infoButtons__button[data="' + currentSlide + '"]').addClass('infoButtons__button--active');

        $('#foodinfo_carousel').find('.homeFoodinfo__info').removeClass('prevslide').removeClass('nextslide')
        $('#foodinfo_carousel').find(".homeFoodinfo__info.slick-current").prev().addClass('prevslide');
        $('#foodinfo_carousel').find(".homeFoodinfo__info.slick-current").next().addClass('nextslide');
    });
    $('#foodinfo_carousel').on('swipe', function(){
        var currentSlide = $('#foodinfo_carousel').find('.slick-current').attr('data');

        $('.infoButtons__button').removeClass('infoButtons__button--active');
        $('.infoButtons__button[data="' + currentSlide + '"]').addClass('infoButtons__button--active');

        $('#foodinfo_carousel').find('.homeFoodinfo__info').removeClass('prevslide').removeClass('nextslide')
        $('#foodinfo_carousel').find(".homeFoodinfo__info.slick-current").prev().addClass('prevslide');
        $('#foodinfo_carousel').find(".homeFoodinfo__info.slick-current").next().addClass('nextslide');
    })

    /* Food Modal */
    
    var modal = $('.foodModal');
    var closeBtn = $('.foodModal').find('.closeFoodModal');
    var openstatus;

    $('.infoButtons__button, .openFoodModal').on('click', function(){
        var dataid = $(this).attr('data');
        $('body').addClass('noscroll');

        // Lazy load fix
        $('.foodModal__content[data="' + dataid + '"]').each(function(){
            var images = $(this).find('img[data-original]');
            
            $(images).each(function(){

            });
        });

        modal.find('.foodModal__content[data="' + dataid + '"]').addClass('foodModal__content--active');
        modal.addClass('foodModal--ready');
        setTimeout(function(){
            modal.addClass('foodModal--active');
            openstatus = true;
        }, 300);

        setTimeout(function(){
            $(document).mouseup(function(e){
                var modalWrap = modal.find('.foodModal__wrap');
                if (!modalWrap.is(e.target) && modalWrap.has(e.target).length === 0 && openstatus == true){
                    $('body').removeClass('noscroll');
                    modal.removeClass('foodModal--active');
                    setTimeout(function(){
                        modal.removeClass('foodModal--ready');
                        modal.find('.foodModal__content[data="' + dataid + '"]').removeClass('foodModal__content--active');
                        openstatus = false;
                    }, 300);
                }
            });
        }, 1000);

        $('.foodModal__content[data="' + dataid + '"] .gallery[data="' + dataid + '"]').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            adaptiveHeight: true,
            variableWidth: true,
            infinite: true,
        });
        
        $(closeBtn).on('click', function(){
            $('body').removeClass('noscroll');
            modal.removeClass('foodModal--active');
            setTimeout(function(){
                modal.removeClass('foodModal--ready');
                modal.find('.foodModal__content[data="' + dataid + '"]').removeClass('foodModal__content--active');
                openstatus = false;
            }, 300);
        });
    });

    var accordionpos = $('.foodModal__content').find('.accordion__element');
    accordionpos.on('click', function(){
        $('.foodModal__content').find('.accordion__element').not(this).removeClass('accordion__element--open').addClass('accordion__element--close');
        $('.foodModal__content').find('.accordion__element').not(this).find('.content').slideUp();
        $(this).toggleClass('accordion__element--close accordion__element--open');
        $(this).find('.content').slideToggle();
    });
});
$(window).load(function(){
    $('.homeBenefits__slider').slick({
        slidesToScroll: 1,
        slidesToShow: 1,
        infinite: false,
        fade: true,
        asNavFor: '.homeBenefits__content',
        dots: true,
        responsive: [{
            breakpoint: 991,
            settings: {
                arrows: false,
                dots: false,
            }
        }]
    })
    $('.homeBenefits__content').slick({
        slidesToScroll: 1,
        slidesToShow: 1,
        infinite: false,
        arrows: false,
        adaptiveHeight: true,
        swipe: false,
        speed: 800,
        responsive: [{
            breakpoint: 991,
            settings: {
                arrows: true,
                dots: true,
                asNavFor: '.homeBenefits__slider',
                swipe: true,
            }
        }]
    });
});
$(document).ready(function () {
    $('.testi_slides').slick({
        centerMode: true,
        centerPadding: '0',
        slidesToShow: 3,
        slidesToScroll: 1,
        variableWidth: true,
        prevArrow: $('.testi-prev'),
        nextArrow: $('.testi-next'),
        dots: true,
        infinite: false,
        responsive: [{
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    slidesToShow: 1,
                    variableWidth: false,
                }
                    }
                ]
    });
    $('.testi_slides li.slick-current').next().addClass('slide-ready');
    $('.testi_slides li.slick-current').prev().addClass('slide-ready');
});
$(document).on("click", ".testi-next", function () {
    $('.testi_slides li').removeClass('slide-ready');
    $('.testi_slides li.slick-current').next().addClass('slide-ready');
    $('.testi_slides li.slick-current').prev().addClass('slide-ready');
});
$(document).on("click", ".testi-prev", function () {
    $('.testi_slides li').removeClass('slide-ready');
    $('.testi_slides li.slick-current').next().addClass('slide-ready');
    $('.testi_slides li.slick-current').prev().addClass('slide-ready');
});
$(document).on("click", ".slick-dots li", function () {
    $('.testi_slides li').removeClass('slide-ready');
    $('.testi_slides li.slick-current').next().addClass('slide-ready');
    $('.testi_slides li.slick-current').prev().addClass('slide-ready');
});
$(window).load(function () {
    $('.homeTestimonials__slider').slick({
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        variableWidth: true,
        dots: true,
        infinite: false,
        swipe: false,
        responsive: [{
            breakpoint: 767,
            settings: {
                swipe: true,
            }
        }]
    });
    $('.homeTestimonials__slider').find('.slick-current').prev().addClass('ready');
    $('.homeTestimonials__slider').find('.slick-current').next().addClass('ready');

    $('.homeTestimonials__slider .slick-arrow').on('click', function(){
        $('.homeTestimonials__slider').find('.slide').removeClass('ready')
        $('.homeTestimonials__slider').find(".slide.slick-current").prev().addClass('ready');
        $('.homeTestimonials__slider').find(".slide.slick-current").next().addClass('ready');
    });

    $('.homeTestimonials__slider').on('swipe', function(){
        $('.homeTestimonials__slider').find('.slide').removeClass('ready')
        $('.homeTestimonials__slider').find(".slide.slick-current").prev().addClass('ready');
        $('.homeTestimonials__slider').find(".slide.slick-current").next().addClass('ready');
    });
});
$(window).load(function(){
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
});

/**
 * Front page forms
 */

$(document).ready(function(){
    var form = $('form.dogNameForm');
    var code = GetURLParameter('code');
    if(typeof code !== 'undefined' && form.length){
        form.attr('action', 'https://zamowienie.psibufet.pl/?code=' + code);
        var href = form.find('.more').attr('href');
        form.find('.more').attr('href', href + '?code=' + code);
    }
    $(form).each(function(){
        var $this = $(this);
        var nameinput = $(this).find('input[type="text"]');
        $(nameinput).on('change paste keyup', function(){
            var value = $(this).val();
            if(value){
                $this.addClass('hasValue');
                if(code){
                    $this.attr('action', 'https://zamowienie.psibufet.pl/?code=' + code + '&dogName=' + value);
                }else{
                    $this.attr('action', 'https://zamowienie.psibufet.pl/?dogName=' + value);
                }
            }else{
                $this.removeClass('hasValue');
                if(code){
                    $this.attr('action', 'https://zamowienie.psibufet.pl/?code=' + code);
                }else{
                    $this.attr('action', 'https://zamowienie.psibufet.pl/');
                }
            }
        });
        $($this).on('submit', function(e){
            e.preventDefault();
            window.location.href = $(this).attr('action');
        });
    });
});

/**
 * FAQ
 */
$(document).ready(function(){
    var question = $('.question[itemscope]');

    question.on('click', function(){
        $('.question[itemscope]').not(this).removeClass('question--open').addClass('question--close');
        $('.question[itemscope]').not(this).find('.question__answer').slideUp();
        $(this).toggleClass('question--close question--open');
        $(this).find('.question__answer').slideToggle();
    });
});

$(document).ready(function(){
    var defaultType = $('.pricingContent__options').attr('type');
    var pricezl = $('.pricingContent__option[type="' + defaultType + '"]').attr('pricezl');
    var pricegr = $('.pricingContent__option[type="' + defaultType + '"]').attr('pricegr');
    var portion = $('.pricingContent__option[type="' + defaultType + '"]').attr('portion');

    var pricezl_promo = $('.pricingContent__option[type="' + defaultType + '"]').attr('promotion_price_zl');
    var pricegr_promo = $('.pricingContent__option[type="' + defaultType + '"]').attr('promotion_price_gr');

    var code = GetURLParameter('code');

    if(!$('.pricingContent').hasClass('pricingContent--promotion')){
        $('.pricingContent__info').find('span.value').html(pricezl + '<span>' + pricegr + '</span> zł');
        $('.pricingContent__info').find('.portion').find('.value').text(portion + ' g');

        $('.pricingContent__option').on('click', function(){
            var type = $(this).attr('type');
            var pricezl = $(this).attr('pricezl');
            var pricegr = $(this).attr('pricegr');
            var portion = $(this).attr('portion');
            
            $(this).parent().attr('type', type);
            $(this).parent().parent().find('.pricingContent__info').attr('type', type);

            $('.pricingContent__info').find('span.value').html(pricezl + '<span>' + pricegr + '</span> zł');
            $('.pricingContent__info').find('.portion').find('.value').text(portion + ' g');
        });
    }else{
        if(code !== undefined && code !== 'psiazka'){
            $.ajax({
                url:'https://app.psibufet.pl/api/order/couponcode/' + code,
                
                success: function(){
                    $.getJSON("https://app.psibufet.pl/api/order/couponcode/" + code, function (data) {
                        var discountGet = data.amount;
                        var priceGet = parseFloat(pricezl_promo + '.' + pricegr_promo);
                        var discount = priceGet * discountGet / 100;
                        var price_full = priceGet - discount;
                        var price = price_full.toFixed(2).split('.');

                        $('.pricingContent__info').find('.drop').find('span.value').html(pricezl_promo + '<span>' + pricegr_promo + '</span> zł');
                        $('.pricingContent__info').find('.price').find('span.value').html(price[0] + '<span>' + price[1] + '</span> zł');
                        $('.pricingContent__info').find('.portion').find('.value').text(portion + ' g');

                        // Add badge
                        $('.pricingContent').addClass('pricingContent--discount').attr('data-amount', data.amount);
                    });
                }
            });
        }else{
            $('.pricingContent__info').find('.drop').find('span.value').html(pricezl + '<span>' + pricegr + '</span> zł');
            $('.pricingContent__info').find('.price').find('span.value').html(pricezl_promo + '<span>' + pricegr_promo + '</span> zł');
            $('.pricingContent__info').find('.portion').find('.value').text(portion + ' g');
        }

        $('.pricingContent__option').on('click', function(){
            var type = $(this).attr('type');
            var pricezl = $(this).attr('pricezl');
            var pricegr = $(this).attr('pricegr');
            var portion = $(this).attr('portion');

            var pricezl_promo = $(this).attr('promotion_price_zl');
            var pricegr_promo = $(this).attr('promotion_price_gr');
            
            $(this).parent().attr('type', type);
            $(this).parent().parent().find('.pricingContent__info').attr('type', type);

            if(code !== undefined && code !== 'psiazka'){
                $.ajax({
                    url:'https://app.psibufet.pl/api/order/couponcode/' + code,
                    
                    success: function(){
                        $.getJSON("https://app.psibufet.pl/api/order/couponcode/" + code, function (data) {
                            var discountGet = data.amount;
                            var priceGet = parseFloat(pricezl_promo + '.' + pricegr_promo);
                            var discount = priceGet * discountGet / 100;
                        
                            var price_full = priceGet - discount;
                            var price = price_full.toFixed(2).split('.');

                            $('.pricingContent__info').find('.drop').find('span.value').html(pricezl_promo + '<span>' + pricegr_promo + '</span> zł');
                            $('.pricingContent__info').find('.price').find('span.value').html(price[0] + '<span>' + price[1] + '</span> zł');
                            $('.pricingContent__info').find('.portion').find('.value').text(portion + ' g');
                        });
                    }
                });
            }else{
                $('.pricingContent__info').find('.drop').find('span.value').html(pricezl + '<span>' + pricegr + '</span> zł');
                $('.pricingContent__info').find('.price').find('span.value').html(pricezl_promo + '<span>' + pricegr_promo + '</span> zł');
                $('.pricingContent__info').find('.portion').find('.value').text(portion + ' g');
            }
        });
    }
});

/**
 * New homepage badge
 */
$(document).ready(function(){
    let code = GetURLParameter('code');

    $.ajax({
        url:'https://app.psibufet.pl/api/order/couponcode/' + code,
        
        success: function(){
            $.getJSON("https://app.psibufet.pl/api/order/couponcode/" + code, function (data) {
                // Add badge - new homepage
                let discountInfo = $('.homeHowitworks').find('.discountInfo');
                discountInfo.addClass('discountInfo--active');

                discountInfo.find('.discountInfo__one').find('p').find('span').text('-' + data.amount);
                discountInfo.find('.discountInfo__two').find('p').find('span').text('-' + data.amount2);
            });
        }
    });
});

/** 
 * Menu mobile
 */
$(document).ready(function(){
    $('.btnMenu').on('click', function(){
        $(this).toggleClass('active');
        $('body').toggleClass('noscroll');
        $('.siteHeader').toggleClass('mobileNav-active');
        $('.mobileNav').toggleClass('mobileNav--toggle');

        $('.mobileNav').find('li.menu-item').toggleClass('animate');
    });

    let mobileItem = $('#menu-menu-mobile').find('.menu-item');

    $(mobileItem).each(function(){
        $(this).on('click', function(){
            $(this).removeClass('active');
            $('body').removeClass('noscroll');
            $('.siteHeader').removeClass('mobileNav-active');
            $('.mobileNav').removeClass('mobileNav--toggle');

            $('.mobileNav').find('li.menu-item').removeClass('animate');
        });
    });
});

/**
 * Menu bar scrolled
 */
$(document).ready(function(){
    setTimeout(function(){
        var siteHeader = $('.siteHeader');
        var didScroll;
        var lastScrollTop = 0;
        var delta = 50;
        var navbarHeight = siteHeader.outerHeight();

        $(window).scroll(function(event){
            var siteHeader = $('.siteHeader');
            if($(document).scrollTop() > 67){
                siteHeader.addClass('siteHeader--shadow');
            }else{
                siteHeader.removeClass('siteHeader--shadow');
            }
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var siteHeader = $('.siteHeader');
            var st = $(this).scrollTop();
            
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            
            if (st > lastScrollTop && st > navbarHeight){
                if($('body').hasClass('promocode-blackweek')){
                    siteHeader.css('top', - siteHeader.height() - 35);
                }else{
                    siteHeader.addClass('siteHeader--scrolled');
                }
            } else {
                if(st + $(window).height() < $(document).height()) {
                    if($('body').hasClass('promocode-blackweek')){
                        siteHeader.css('top', 0);
                    }else{
                        siteHeader.removeClass('siteHeader--scrolled');
                    }
                }
            }
            lastScrollTop = st;
        }
    }, 150);
});

/************ SLIDERS END **************/

/****** MENU JQ ******/
$(document).ready(function () {
    $('.btn-menu').click(function(){
        var btn = $(this);
        btn.css('pointer-events', 'none');
        setTimeout(function(){
            btn.css('pointer-events', 'all');
        }, 500);
        if(btn.hasClass('active')){
            $('body').removeClass('popupactive');
        }else{
            $('body').addClass('popupactive');
        }
    });
});


$(document).ready(function () {
    $('.button.small').click(function () {
        $('.button').removeClass('active');
        $(this).addClass('active');
        $('.price div').removeClass('active');
        $('.price .small').addClass('active');
    });
    $('.button.medium').click(function () {
        $('.button').removeClass('active');
        $(this).addClass('active');
        $('.price div').removeClass('active');
        $('.price .medium').addClass('active');
    });
    $('.button.large').click(function () {
        $('.button').removeClass('active');
        $(this).addClass('active');
        $('.price div').removeClass('active');
        $('.price .large').addClass('active');
    });
});

/****** FAQ SECTION *******/

$(document).on("click", ".faq_list.sec .close .btn", function () {
    var element = $('.faq_list.sec .open');
    element.find('.btn').removeClass('rotate');
    element.find('.que_heading').removeClass('active');
    element.find('.que_content').slideUp();
    element.addClass('close');
    element.removeClass('open');
    
    $(this).addClass('rotate');
    $(this).parent().removeClass('close');
    $(this).parent().addClass('open');
    $(this).parent().find('.que_heading').addClass('active');
    $(this).parent().find('.que_content').slideDown();
});
$(document).on("click", ".faq_list.sec .open .btn", function () {
    $(this).removeClass('rotate');
    $(this).parent().removeClass('open');
    $(this).parent().addClass('close');
    $(this).parent().find('.que_heading').removeClass('active')
    $(this).parent().find('.que_content').slideUp();
});

/****** FAQ PAGE *******/

/*** CATEGORY ***/

$(document).on("click", ".faq_list.page .question_category.close .category_heading", function () {
    var opencat = $(this).parent().parent().find('.question_category.open');
    opencat.removeClass('open');
    opencat.addClass('close');
    opencat.find('.btn').removeClass('rotate');
    opencat.find('.category_heading').removeClass('active');
    opencat.find('.category_content').slideUp();
    
    var thiscatquestions = opencat.find('.question.open');
    thiscatquestions.addClass('close');
    thiscatquestions.removeClass('open');
    thiscatquestions.find('.btn').removeClass('rotate');
    thiscatquestions.find('.que_heading').removeClass('active');
    thiscatquestions.find('.que_content').slideUp();
    
    var closecat = $(this).parent();
    closecat.removeClass('close');
    closecat.addClass('open');
    $(this).addClass('active');
    $(this).find('.btn').addClass('rotate');
    var quecat = $(this).parent().attr('category-id');
    $('.question_category[category-id = ' + quecat + '] .category_content').slideDown();
});
$(document).on("click", ".faq_list.page .question_category.open .category_heading", function () {
    var thiscat = $(this).parent();
    thiscat.addClass('close');
    thiscat.removeClass('open');
    $(this).removeClass('active');
    $(this).find('.btn').removeClass('rotate');
    
    var quecat = $(this).parent().attr('category-id');
    $('.question_category[category-id = ' + quecat + '] .category_content').slideUp();
    
    var thiscatquestions = $(this).parent().find('.question.open');
    thiscatquestions.addClass('open');
    thiscatquestions.removeClass('close');
    thiscatquestions.find('.btn').removeClass('rotate');
    thiscatquestions.find('.que_heading').removeClass('active');
    thiscatquestions.find('.que_content').slideUp();
});

/*** QUESTION ***/

$(document).on("click", ".faq_list.page .question_category.open .question.close .que_heading", function () {
    var quecat = $(this).parent().parent().parent().parent().attr('category-id');
    var queparent = $('.question_category[category-id = ' + quecat + ']');
    var queid = $(this).parent().attr('que-id');

    queparent.find('.question').addClass('close');
    queparent.find('.question').removeClass('open');
    queparent.find('.question .btn').removeClass('rotate');
    queparent.find('.question .que_heading').removeClass('active');
    queparent.find('.question .que_content').slideUp();

    queparent.find('.question[que-id = ' + queid + ']').addClass('open');
    queparent.find('.question[que-id = ' + queid + ']').removeClass('close');
    queparent.find('.question[que-id = ' + queid + '] .btn').addClass('rotate');
    queparent.find('.question[que-id = ' + queid + '] .que_heading').addClass('active');
    queparent.find('.question[que-id = ' + queid + '] .que_content').slideDown();
});
$(document).on("click", ".faq_list.page .question_category.open .question.open .que_heading", function () {
    var quecat = $(this).parent().parent().parent().parent().attr('category-id');
    var queparent = $('.question_category[category-id = ' + quecat + ']');
    var queid = $(this).parent().attr('que-id');
    
    queparent.find('.question[que-id = ' + queid + ']').addClass('close');
    queparent.find('.question[que-id = ' + queid + ']').removeClass('open');
    queparent.find('.question[que-id = ' + queid + '] .btn').removeClass('rotate');
    queparent.find('.question[que-id = ' + queid + '] .que_heading').removeClass('active');
    queparent.find('.question[que-id = ' + queid + '] .que_content').slideUp();
});
/********** CONTACT FORM **********/


/********** NASZE SKŁADNIKI **********/
$(document).ready(function () {
    $('.sklad_slides').slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 5,
        focusOnSelect: true,
        variableWidth: true,
        centerMode: false,
        prevArrow: $('.sklad-prev'),
        nextArrow: $('.sklad-next'),
        responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    dots: true
                }
        },
            {
                breakpoint: 991,
                settings: {
                    dots: true,
                    infinite: true,
                    speed: 300,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    centerMode: true,
                    variableWidth: true
                }
        },
            {
                breakpoint: 768,
                settings: {
                    dots: true,
                    infinite: true,
                    speed: 300,
                    slidesToShow: 1,
                    centerMode: true,
                    variableWidth: true
                }
        }
      ]
    });
});


/********** CO TWÓJ PIES JE? **********/

$(document).ready(function () {
    $('#mk').click(function () {
        $('.compare_choose p').removeClass('active');
        $(this).addClass('active');
        
        $('.content_heading .right h2').fadeOut();
        setTimeout(function(){
            $('#mk_title').fadeIn();
        }, 500);
        
        $('.right .inner').fadeOut();
        setTimeout(function(){
            $('.right #skladniki_mk').fadeIn();
            $('.right #swiezosc_mk').fadeIn();
            $('.right #gotowanie_mk').fadeIn();
            $('.right #wygoda_mk').fadeIn();
        }, 500);
    });
    $('#sk').click(function () {
        $('.compare_choose p').removeClass('active');
        $(this).addClass('active');
        
        $('.content_heading .right h2').fadeOut();
        setTimeout(function(){
            $('#sk_title').fadeIn();
        }, 500);
        
        $('.right .inner').fadeOut();
        setTimeout(function(){
            $('.right #skladniki_sk').fadeIn();
            $('.right #swiezosc_sk').fadeIn();
            $('.right #gotowanie_sk').fadeIn();
            $('.right #wygoda_sk').fadeIn();
        }, 500);
    });
    $('#sj').click(function () {
        $('.compare_choose p').removeClass('active');
        $(this).addClass('active');
        
        $('.content_heading .right h2').fadeOut();
        setTimeout(function(){
            $('#sj_title').fadeIn();
        }, 500);
        
        $('.right .inner').fadeOut();
        setTimeout(function(){
            $('.right #skladniki_sj').fadeIn();
            $('.right #swiezosc_sj').fadeIn();
            $('.right #gotowanie_sj').fadeIn();
            $('.right #wygoda_sj').fadeIn();
        }, 500);
    });
    $('#dj').click(function () {
        $('.compare_choose p').removeClass('active');
        $(this).addClass('active');
        
        $('.content_heading .right h2').fadeOut();
        setTimeout(function(){
            $('#dj_title').fadeIn();
        }, 500);
        
        $('.right .inner').fadeOut();
        setTimeout(function(){
            $('.right #skladniki_dj').fadeIn();
            $('.right #swiezosc_dj').fadeIn();
            $('.right #gotowanie_dj').fadeIn();
            $('.right #wygoda_dj').fadeIn();
        }, 500);
    });
});


/*********** POPUP *************/

$(document).ready(function () {
    $('.kurcze_pieczone_btn').click(function(){
        $('body').addClass('popupactive');
        $('.popup_overlay').addClass('active');
        $('.popup_container').addClass('active');
        $('#kurcze_pieczone').addClass('active'); 
    });
    $('.wolowe_love_btn').click(function(){
        $('body').addClass('popupactive');
        $('.popup_overlay').addClass('active');
        $('.popup_container').addClass('active');
        $('#wolowe_love').addClass('active'); 
    });
    $('.indyczy_kasek_btn').click(function(){
        $('body').addClass('popupactive');
        $('.popup_overlay').addClass('active');
        $('.popup_container').addClass('active');
        $('#indyczy_kasek').addClass('active'); 
    });
    $('.jagnie_wcina_btn').click(function(){
        $('body').addClass('popupactive');
        $('.popup_overlay').addClass('active');
        $('.popup_container').addClass('active');
        $('#jagnie_wcina').addClass('active'); 
    });
    
    $('.sklad_popup .close').click(function(){
        $('body').removeClass('popupactive');
        $('.popup_overlay').removeClass('active');
        $('.popup_container').removeClass('active');
        $(this).parent().parent().removeClass('active'); 
    });
});
$(document).mouseup(function(e){
    var container = $(".sklad_popup");
    if (!container.is(e.target) && container.has(e.target).length === 0){
        $('body').removeClass('popupactive');
        $('.popup_overlay').removeClass('active');
        $('.popup_container').removeClass('active');
        container.removeClass('active'); 
    }
});


/******** COPY ********/
function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
}

$(document).on("click", "#copybtn", function () {
    $(this).find('p').addClass('active');
    setTimeout(function(){
        $('#copybtn p').removeClass('active');
    }, 2000);
});

$(document).on('click', '#copybtn', function(){
    let $this = $(this);
        value = $this.parent().find('.value');
    copyToClipboard(value);

    $this.parent().addClass('copied');
    setTimeout(function(){
        $this.parent().removeClass('copied');
    }, 2000);
});


/* Google Shopping pages */
$(document).ready(function(){

    /* Close select dropdown function */
    function closeSelectDropdown(){
        var select = $('.gsKarmainfo__content .select__selected');
        var text = select.find('p');

        select.parent().removeClass('active');
        text.text('Zobacz oferowane porcje dzienne');
        select.parent().find('.select__options').slideUp();
    }


    // Lazy load fix
    if($('body').hasClass('page-template-page_gskarmy')){
        setTimeout(function(){
            $(window).scrollTop(1);
        }, 300);
        
        let code = GetURLParameter('code');

        if(typeof code !== 'undefined'){
            setTimeout(function(){
                $('.dir').each(function(){
                    let current = $(this).attr('href');
                    $(this).attr('href', current + '?code=' + code);
                });
            }, 500);
        }
    }

    /* Content gallery */
    $('.gsKarmainfo__gallery .gallery').slick({
        dots: false,
        infinite: true,
    });

    /* Select dropdown */
    $('.gsKarmainfo__content .select__selected').on('click', function(){
        var text = $(this).find('p').text();
        $(this).parent().toggleClass('active');
        $(this).find('p').text(
            text == "Zobacz oferowane porcje dzienne" ? "Oferowane porcje dzienne" : "Zobacz oferowane porcje dzienne"
            );
        $(this).parent().find('.select__options').slideToggle();
    });
    $(document).mouseup(function(e){
        var element = $('.select');
        if (!element.is(e.target) && element.has(e.target).length === 0){
            if(element.hasClass('active')){
                element.removeClass('active');
                element.find('.select__selected').find('p').text('Zobacz oferowane porcje dzienne');
                element.find('.select__options').slideUp();
            }
        }
    });

    /* Select default */
    $('.select__option').each(function(){
        if($(this).hasClass('select__option--default')){
            var value = $(this).attr('data-value');
            var price_zl = $(this).attr('data-price-zl');
            var price_gr = $(this).attr('data-price-gr');

            var contentPrice_zl = $('#flavourPrice').find('span.value');
            contentPrice_zl.html(price_zl + '<small>' + price_gr + '</small>');

            var contentValue = $('#flavourValue').find('span');
            contentValue.text(value);
        }
    });

    /* Select insert values */
    $('.select__option').on('click', function(){
        var value = $(this).attr('data-value');
        var price_zl = $(this).attr('data-price-zl');
        var price_gr = $(this).attr('data-price-gr');

        var contentPrice_zl = $('#flavourPrice').find('span.value');
        contentPrice_zl.html(price_zl + '<small>' + price_gr + '</small>');

        $('.select__option').removeClass('select__option--selected');
        $(this).addClass('select__option--selected');

        var contentValue = $('#flavourValue').find('span');
        contentValue.text(value);

        closeSelectDropdown();
    });

    /* Modal open */

    var modal = $('.foodModal');
    var closeBtn = $('.foodModal').find('.closeFoodModal');
    var openstatus;

    $('.infoButton').on('click', function(){
        $('body').addClass('noscroll');

        modal.find('.foodModal__content').addClass('foodModal__content--active');
        modal.addClass('foodModal--ready');
        setTimeout(function(){
            modal.addClass('foodModal--active');
            openstatus = true;
        }, 300);

        setTimeout(function(){
            $(document).mouseup(function(e){
                var modalWrap = modal.find('.foodModal__wrap');
                if (!modalWrap.is(e.target) && modalWrap.has(e.target).length === 0 && openstatus == true){
                    $('body').removeClass('noscroll');
                    modal.removeClass('foodModal--active');
                    setTimeout(function(){
                        modal.removeClass('foodModal--ready');
                        modal.find('.foodModal__content').removeClass('foodModal__content--active');
                        openstatus = false;
                    }, 300);
                }
            });
        }, 1000);

        $('.foodModal__content .gallery').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            adaptiveHeight: true,
            variableWidth: true,
            infinite: true,
        });
        
        $(closeBtn).on('click', function(){
            $('body').removeClass('noscroll');
            modal.removeClass('foodModal--active');
            setTimeout(function(){
                modal.removeClass('foodModal--ready');
                modal.find('.foodModal__content').removeClass('foodModal__content--active');
                openstatus = false;
            }, 300);
        });
    });

    /* Other flavours href */
    var flavours = $('.gsKarmaList__list').find('.flavourTile');

    $(flavours).each(function(){
        var btn = $(this).find('.btn');
        var href = btn.attr('href');
        var slug = $(this).attr('data-slug');
        btn.attr('href', href + slug);
    });

    /**
     * If coupon code active
     */
//     let code = GetURLParameter('code');

//     if(typeof code !== 'undefined'){
//         $.ajax({
//             url:'https://app.psibufet.pl/api/order/couponcode/' + code,
//             success: function(){
//                 $.getJSON("https://app.psibufet.pl/api/order/couponcode/" + code, function (data) {
//                     let amount = data.amount;
//                     let amount2 = data.amount2;

//                     if(amount == amount2){
//                         $('#flavourPrice').addClass('discount-active');

//                         let currentprice = $('#flavourPrice').find('.current-price').data('price');
//                         let discount = currentprice * amount / 100;
                    
//                         var price_full = currentprice - discount;
//                         var price = price_full.toFixed(2).split('.');
                        


//                         $('#flavourPrice').find('.current-price').attr('data-price', price[0] + '.' + price[1]);
//                         $('#flavourPrice').find('.current-price').html('<span class="value" itemprop="price">' + price[0] + '<small>' + price[1] + '</small></span>ZŁ ');
//                     }
//                 });
//             }
//         });
//     }
});

/* LP Sale
------------- */

$(document).ready(function(){

    /* Menu */

    function saleMenuClone(){
        $('.saleMenu').each(function(){
            var height = $(this).outerHeight();
            $('.saleMenu--clone').css('height', height);
        });
    }
    function mastheadClone(){
        if($('body').hasClass('page-template-page_lpsale')){
            $('.siteHeader').each(function(){
                var height = $(this).outerHeight();
                $('.header-clone').css('height', height);
            });
        }
    }

    saleMenuClone();
    mastheadClone();
    $('body').on('promocode-active', function(){
        saleMenuClone();
        mastheadClone();
    });

    /* Form */
    
    var header = $('.saleHeader');
    var correctInfo = $('.saleHeader__form .correct');
    var dataInsert = correctInfo.find('p');
    var options = {
        url: '/wp-content/themes/psibufet/rasy.json',
    
        getValue: "name",
    
        list: {
            showAnimation: {
                type: "slide",
                time: 300,
                callback: function() {}
            },
    
            hideAnimation: {
                type: "slide",
                time: 300,
                callback: function() {}
            },

            maxNumberOfElements: 5,
            match: {
                enabled: true
            },

            onClickEvent: function() {
                var id = $('input[name="rasa_psa"]').getSelectedItemData().id;
                
                $.getJSON('/wp-content/themes/psibufet/opisydoras.json', function(data){
                    $.each(data, function(key, value) {
                        if(value.id == id){
                            dataInsert.text(value.desc);
                            correctInfo.slideDown();
                            setTimeout(function(){
                                correctInfo.find('.getMarker').addClass('init');
                            }, 500);
                            header.addClass('saleHeader--correct');
                        }
                    });
                }).fail(function(){
                    console.log("An error has occurred.");
                });
            }	
        }
    };
    if(!$('body').hasClass('page-template-page_home')){
        if($('input[name="rasa_psa"]').length){
            $('input[name="rasa_psa"]').easyAutocomplete(options);
        }
    }

    /* Videos */

    $('.videoSlide').eq(0).addClass('videoSlide--ready videoSlide--toggle');
    $('.saleVideo').eq(0).addClass('saleVideo--selected');

    $('.saleVideo').on('click', function(){
        var videoID = $(this).attr('data-video');

        $('.saleVideo').removeClass('saleVideo--selected');
        $(this).addClass('saleVideo--selected');

        var video = $('.videoSlide--ready').find('iframe').attr('src');
        $('.videoSlide--ready').find('iframe').attr('src', '');
        $('.videoSlide--ready').find('iframe').attr('src', video);

        $('.videoSlide').removeClass('videoSlide--toggle');
        setTimeout(function(){
            $('.videoSlide').removeClass('videoSlide--ready');
            $('.videoSlide[data-video="' + videoID + '"]').addClass('videoSlide--ready');
        }, 500);
        setTimeout(function(){
            $('.videoSlide[data-video="' + videoID + '"]').addClass('videoSlide--toggle');
        }, 600);
    });

    if($(window).width() < 991){
        $('.saleVideos__mobile').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            variableWidth: true,
            centerMode: true,
            draggable: true,
        });
        $('.saleVideos__mobile').on('afterChange', function(event, slick, currentSlide){
            $('video').each(function(){
                if($(this).hasClass('wp-video-shortcode')){
                    $(this)[0].pause();
                    $(this)[0].currentTime = 0;
                }
            });
        });
    }

    // Home shortcuts slider mobile
    if($(window).width() < 931){
        $('.pbShortcuts__wrap').not('.slick-initialized').slick({
            variableWidth: true,
            centerMode: true,
            arrows: false,
            dots: true,
        });
    }
});


/*
 *  Jak to działa page
 */
$(document).ready(function(){
    $('.pbPlans__nav .pos').on('click', function(){
        var id = $(this).attr('data-id');

        $('.pos').removeClass('active');
        $(this).addClass('active');

        var openedBox = $('.pbPlans__content').find('.content--active');
        var toOpen = $('.pbPlans__content').find('.content[data-id="' + id + '"]');

        openedBox.removeClass('content--active');
        setTimeout(function(){
            openedBox.removeClass('content--ready');
            toOpen.addClass('content--ready');

            setTimeout(function(){
                toOpen.addClass('content--active');
            }, 100);
        }, 300);
    });

    $('.howUsers__list').on('init', function(){
        $('.pbUserInfo.slick-current').find('.getMarker').addClass('init');
    }); 
    $('.howUsers__list').on('afterChange', function(event, slick, currentSlide){
        $('.pbUserInfo').not('.slick-current').find('.getMarker').removeClass('init');
        $('.pbUserInfo[data-slick-index="' + currentSlide + '"]').find('.getMarker').addClass('init');
    }); 
});


/*
 *  Book page
 */
$(document).ready(function(){
    $('.openDesc').on('click', function(){
        $(this).toggleClass('changed');
        $('.book__description').toggleClass('opened');

        var text = $(this).text();
        if (text == 'Zobacz więcej'){
            $(this).text('Zobacz mniej');
        }else{
            $(this).text('Zobacz więcej');
        }
    });
    if($('body').hasClass('page-template-page-templatespage_ksiazka-php')){
        var href = $('.menuAction--order a').attr('href');
        var hrefNew = href + '?code=psiazka';

        $('.menuAction--order a').attr('href', hrefNew);
        $('.siteHeader__menu').find('.btn.dir').attr('href', hrefNew);
    }
});

/**
 *  Subscription modal
 */
$(document).ready(function(){
    var openstatus = false;
    $('.openSubModal').on('click', function(){
        openstatus = true;
        $('body').addClass('noscroll');
        $('.subscriptionModal').addClass('subscriptionModal--ready');
        setTimeout(function(){
            $('.subscriptionModal').addClass('subscriptionModal--active');
            setTimeout(function(){
                $('.subscriptionModal').find('.getMarker').addClass('init');
            }, 1000);
        }, 300);

        $('.closeSubModal').on('click', function(){
            openstatus = false;
            $('body').removeClass('noscroll');
            $('.subscriptionModal').removeClass('subscriptionModal--active');
            setTimeout(function(){
                $('.subscriptionModal').removeClass('subscriptionModal--ready');
                $('.subscriptionModal').find('.getMarker').removeClass('init');
            }, 300);
        });
        $(document).mouseup(function(e){
            if($('.subscriptionModal').hasClass('subscriptionModal--active')){
                var modalWrap = $('.subscriptionModal').find('.subscriptionModal__wrap');
                if (!modalWrap.is(e.target) && modalWrap.has(e.target).length === 0 && openstatus == true){
                    $('body').removeClass('noscroll');
                    $('.subscriptionModal').removeClass('subscriptionModal--active');
                    setTimeout(function(){
                        $('.subscriptionModal').removeClass('subscriptionModal--ready');
                        $('.subscriptionModal').find('.getMarker').removeClass('init');
                    }, 300);
                }
            }
        });
    });
});


/**
 *  LP - Rasy 
 */
$(document).ready(function(){
    if($('body').hasClass('page-template-page_rasy')){
        var getRasa = GetURLParameter('rasa');
        var rasaURL = [
            'labrador',
            'maltanczyk',
            'szpic',
            'owczarek',
            'york',
            'chihuahua',
            'spaniel',
            'amstaff',
            'buldog',
            'pekinczyk',
        ]
        var rasaList = [
            'Labradora',
            'Maltańczyka',
            'Szpica miniaturowego',
            'Owczarka niemieckiego',
            'Yorkshire terriera',
            'Chihuahua',
            'Cocker spaniela',
            'Amstaffa',
            'Buldoga francuskiego',
            'Pekińczyka',
        ];
        if(rasaURL.indexOf(getRasa) !== -1){
            var rasy = new Map();
            for(var i = 0; i < rasaURL.length; i++){
                rasy.set(rasaURL[i], rasaList[i]);
            }
            for (var key of rasy.keys()) {
                if(key == getRasa){
                    $('.rasaHeader').addClass('rasaHeader--' + key);
                    $('.rasaHeader h2.rasa').text(rasy.get(key));
                }
            }
        }else{
            $('.rasaHeader').addClass('rasaHeader--labrador');
            $('.rasaHeader h2.rasa').text('Labradora');
        }
    }
});

/**
 *  Restaurants LP
 */
$(document).ready(function(){
    $('.mapList__content').on('changed', function(){
        $('.group').each(function(){
            if($(this).hasClass('group--active')){
                $(this).find('.getMarker').addClass('init');
            }else{
                $(this).find('.getMarker').removeClass('init');
            }
        });
    });

    if($(window).width() < 1200){
        $('section.restMap').find('.mapList').remove();
        $('body').trigger('rest_map_ready');
    }else{
        $('.restListModal').remove();
        $('body').trigger('rest_map_ready');
    }

    $('.openRestList').on('click', function(){
        $('body').addClass('noscroll');
        $('.restListModal').addClass('restListModal--active');
    });
    $('.restListModal__close').on('click', function(){
        $('body').removeClass('noscroll');
        $('.restListModal').removeClass('restListModal--active');
    });

    var city = $('.restListModal').find('.group__name');
    var restaurant = $('.restListModal .group__list').find('p');
    $(city).on('click', function(){
        $('body').removeClass('noscroll');
        $('.restListModal').removeClass('restListModal--active');
    });
    $(restaurant).on('click', function(){
        $('body').removeClass('noscroll');
        $('.restListModal').removeClass('restListModal--active');
    })
});

/**
 * Help page
 */
$(document).ready(function(){
    if($('body').hasClass('page-template-page_help')){
        $(document).scrollTop(1);
    }
    $('.selectValue').on('click', function(){
        $(this).parent().toggleClass('active');
        $(this).parent().find('.selectDropdown').slideToggle();
    });
    $(document).mouseup(function(e){
        setTimeout(function(){
            var select = $('.helpForm__select');
            if($(select).hasClass('active')){
                if (!select.is(e.target) && select.has(e.target).length === 0){
                    $(select).find('.selectDropdown').slideUp();
                    $(select).removeClass('active');
                }
            }
        }, 50);
    });
    $('.selectDropdown__option').on('click', function(){
        var value = $(this).find('p').text();
        var id = $(this).attr('value');

        $(this).parents('.helpForm__select').find('.selectValue').find('p').text(value);
        $(this).parents('.helpForm__select').find('.selectValue').find('p').attr('value', value);

        $(this).parents('.helpForm__select').removeClass('input-error');

        dataLayer.push({
            'event': 'helpAsked',
            'label': value, 
        });

        $('.helpForm__info').find('.answer').css('opacity', '0');
        setTimeout(function(){
            $('.helpForm__info').find('.answer').hide();
            $('.helpForm__info').find('.answer[data-id="' + id + '"]').show();
            $('.helpForm__info').find('.answer[data-id="' + id + '"]').css('opacity', '1');
        }, 300);            

        $('.helpForm__select').find('.selectDropdown').slideUp();
        $('.helpForm__select').removeClass('active');

        // Show form
        $('.helpAction').addClass('active');
        $('.switchContent').slideDown();
        $('.helpForm__select').parents('.helpForm__row').css('margin', '0 auto 20px');
    });
    $('.helpForm__input').each(function(){
        var name = $(this).attr('placeholder');
        $(this).attr('placeholder', '');
        $(this).parent().attr('data-name', name);
    });

    $('.helpForm__input').on('focusin', function(){
        $(this).parent().addClass('focused');
    });
    $('.helpForm__input').on('focusout', function(){
        if($(this).val() == ''){
            $(this).parent().removeClass('focused');
        }
    });
    $('.helpForm__input').on('keyup paste', function(){
        if($(this).val() !== ''){
            $(this).parent().removeClass('input-error');
        }else{
            $(this).parent().addClass('input-error');
        }
    });

    function helpFormValidate(form){
        let topic = form.find('p[name="helpTopic"]').attr('value'),
            message = form.find('textarea').val(),
            inputs = form.find('input');
            response = [];

        // Remove errors
        form.find('.helpForm__select').removeClass('input-error');
        form.find('textarea').parent().removeClass('input-error');
        $(inputs).each(function(){
            $(this).parent().removeClass('input-error');
        });

        if(topic == 'false'){
            $(form).find('.helpForm__select').addClass('input-error');
            response.push({name: 'helpTopic'});
        }else{
            $(form).find('.helpForm__select').removeClass('input-error');
        }

        if(message == ''){
            let name = form.find('textarea').attr('name');
            response.push({name});
        }

        $(inputs).each(function(){
            let val = $(this).val(),
                name = $(this).attr('name');

            if(val == ''){
                response.push({name});
            }
        });

        if(response.length == 0){
            $(form).find('.helpForm__submit').find('.notice').removeClass('active');
            return true;
        }else{
            $(response).each(function(key, val){
                $(form).find('.helpForm__submit').find('.notice').addClass('active');
                $(form).find('input[name="' + val.name + '"]').parent().addClass('input-error');
                
                if(val.name == 'helpMessage'){
                    $(form).find('textarea[name="helpMessage"]').parent().addClass('input-error');
                }
            });
        }
    }

    $('#helpForm').on('submit', function(e){
        e.preventDefault();
        var form = $(this);

        var topic = form.find('p[name="helpTopic"]').text();
        var message = form.find('textarea').val();
        var name = form.find('input[name="helpName"]').val();
        var dogName = form.find('input[name="helpDogName"]').val();
        var mail = form.find('input[name="helpEmail"]').val();

        let validate = helpFormValidate(form);
        
        if(validate == true){
            var data = {
                action: 'helpForm',
                topic: topic,
                message: message,
                name: name,
                dogname: dogName,
                mail: mail,
            }

            $.ajax({
                type: 'POST',
                url: PBAjax.ajaxurl,
                data: data,
                beforeSend: function(){
                    form.addClass('helpForm--loading');
                },
                success: function(response){
                    console.log(response);
                    form.removeClass('helpForm--loading');
                    let data = jQuery.parseJSON(response);

                    $.each(data, function (key, v) {
                        if(key == 'status'){
                            if(v == true){
                                // GTM
                                var value = form.find('p[name="helpTopic"]').text();
                                dataLayer.push({
                                    'event': 'helpSent',
                                    'label': value,
                                });

                                form.find('p[name="helpTopic"]').text('Jak możemy Ci pomóc?');
                                form.find('textarea').val('');
                                form.find('input').val('');

                                form.find('.helpForm__notice').append('<p>Formularz został pomyślnie wysłany</p>');
                                form.find('.helpForm__notice').addClass('helpForm__notice--active helpForm__notice--success');
                                setTimeout(function(){
                                    form.find('.helpForm__notice').removeClass('helpForm__notice--success helpForm__notice--error helpForm__notice--active');
                                    form.find('.helpForm__notice').find('p').remove();
                                }, 4000);
                            }else{
                                form.find('.helpForm__notice').append('<p>Wystąpił błąd podczas wysyłki formularza. Spróbuj ponownie później.</p>');
                                form.find('.helpForm__notice').addClass('helpForm__notice--active helpForm__notice--error');
                                setTimeout(function(){
                                    form.find('.helpForm__notice').removeClass('helpForm__notice--success helpForm__notice--error helpForm__notice--active');
                                    form.find('.helpForm__notice').find('p').remove();
                                }, 4000);
                            }
                        }
                    });
                }
            });
        }else{
            console.log(validate);
        }
    });
});

/**
 * Thank you page
 */
 $(document).ready(function(){
    var type = GetURLParameter('type');
    var date = GetURLParameter('nextDeliveryDate');
    var referral = GetURLParameter('referral');
    var courier = '';
    var text = '';

    if(type == 'FX'){
        courier = 'fx';
        text = '<b>Nasze świeże jedzenie trafi do Was wieczorem w dniu jego spakowania</b> – dzięki temu będzie <b>idealnie zmrożone</b>.';
    }else if(type == 'COURIER'){
        courier = 'dhl';
        text = '<b>Nasze świeże jedzenie dostarczy Wam DHL</b> – informację o planowanej dostawie już wkrótce otrzymasz od kuriera';
    }else if(type == 'GOODSPEED'){
        courier = 'goodspeed';
        text = '<b>Nasze świeże jedzenie trafi do Was w nocy</b> – w sam raz na poranne karmienie! Jeśli nie chcesz, żeby kurier budził Cię w środku nocy, dodaj kod do domofonu w Panelu Klienta.';
    }

    if(date !== ''){
        $('#deliveryDate').html(date);
    }

    if($('main').hasClass('psibufet--typ')){
        $('#masthead').remove();
        $('.header-clone').remove();
    }

    if($('main').hasClass('psibufet--typ') && courier !== '' && text !== ''){
        $('.courier__wrap').append().html('<p>' + text + '</p>');
    }

    if(typeof referral !== 'undefined'){
        $('.referralCode__input').find('.value').text('www.psibufet.pl/' + referral).trigger('change');
    }
});

/**
 * Failed payment
 */
$(document).ready(function(){
    if($('main').hasClass('psibufet--failedpayment')){
        $('#masthead').remove();
        $('.header-clone').remove();
    }
})

/**
 * TYP page accordion
 */
 $(document).ready(function(){
    if($('main').hasClass('psibufet--typ')){
        var duration = 5 * 1000;
        var animationEnd = Date.now() + duration;
        var defaults = {
            startVelocity: 30,
            spread: 360,
            ticks: 60,
            zIndex: 0
        };

        function randomInRange(min, max) {
            return Math.random() * (max - min) + min;
        }

        var interval = setInterval(function() {
            var timeLeft = animationEnd - Date.now();

            if (timeLeft <= 0) {
                return clearInterval(interval);
            }

            var particleCount = 50 * (timeLeft / duration);
            var colors = ['#F15748', '#F7BE45', '#129D67'];
            // since particles fall down, start a bit higher than random
            confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 }, colors: colors }));
            confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 }, colors: colors }));
        }, 250);
    }
    $('.openQue').on('click', function(){
        var parent = $(this).parent();
        if(parent.hasClass('typContent__que--opened')){
            parent.removeClass('typContent__que--opened');
            parent.find('.content').slideUp();
        }else{
            parent.addClass('typContent__que--opened');
            parent.find('.content').slideDown();
        }
        $('.typContent__que').not(parent).each(function(){
            if($(this).hasClass('typContent__que--opened')){
                $(this).removeClass('typContent__que--opened');
                $(this).find('.content').slideUp();
            }
        });
    });
});

/**
 * Breed post sidebar float
 */
$(document).ready(function(){
    var sidebar = $('.postSidebar');

    if(sidebar.length && $(window).width() > 991){
        var sidebarOffset = sidebar.offset().top;

        $(window).on('scroll', function(){
            var windowOffset = $(window).scrollTop();
            var windowOffset_sidebar = windowOffset + sidebar.height() + 30;
            var videoOffset = $('.howVideo').offset().top + $('.howVideo').height();
            var top = windowOffset - sidebarOffset + 30;

            if(windowOffset >= sidebarOffset && windowOffset_sidebar <= videoOffset){
                sidebar.css('transform', 'translateY(' + top + 'px)');
            }else if(windowOffset_sidebar >= videoOffset){
                if($(window).width() > 1199){
                    sidebar.css('transform', 'translateY(' + videoOffset - $('.howVideo').height() - sidebar.height() + 64 + ');');
                }else{
                    sidebar.css('transform', 'translateY(' + videoOffset - $('.howVideo').height() - sidebar.height() - 42 + ');');
                }
            }else{
                sidebar.css('top', '0');
                sidebar.css('transform', 'translateY(32px)');
            }
        });
    }
});

/**
 * Breed table of contents
 */
$(document).ready(function(){
    if($('body').hasClass('single-rasy-psow')){
        if($(window).width() < 1200){
            let interval = setInterval(function(){
                console.log('run');
                if($('.dixa-messenger-wrapper').length){
                    $('.dixa-messenger-wrapper').css('bottom', '17vw');
                    console.log('cleared');
                    clearInterval(interval);
                }
            }, 100);            
        }

        var count = 1;
        $('.breedInfo').each(function(){
            var name = $('.contentsTable__list').attr('data-name');
            var title = $(this).attr('data-title');
            var id = $(this).attr('id');
            var section = $(this).find('.breedInfo__section')

            if(section.length !== 0){
                var secCount = 1;
                $('.contentsTable__list').append('<div class="pos" data-id="' + id + '"><a href="#' + id + '" class="pos__name">' + count + '. ' + name + ' - ' + title + '</a></div>');

                $(section).each(function(){
                    var sectionName = $(this).attr('data-title');
                    var sectionID = $(this).attr('id');
                    $('.contentsTable__list').find('.pos[data-id="' + id + '"]').append('<a href="#' + sectionID + '" class="pos__section">' + count + '.' + secCount + '. ' + sectionName + '</a>');
                    secCount++;
                });
            }else{
                $('.contentsTable__list').append('<div class="pos" data-id="' + id + '"><a href="#' + id + '" class="pos__name">' + count + '. ' + name + ' - ' + title + '</a></div>');
            }
            count++;
        });
    }
});

/**
 * Nasze przepisy - tabela przykładów
 */
$(document).ready(function(){
    $('.exampleBox__details').on('click', function(){
        let content = $(this).find('.content');

        $(this).toggleClass('active');
        content.slideToggle('fast');
    });
});

/**
 * Dropdown selection engine
 */
$(document).ready(function(){
    $('.dropdownEngine__selected').on('click', function(){
        let parent = $(this).parents('.dropdownEngine');

        parent.toggleClass('active');
        parent.find('.dropdownEngine__dropdown').slideToggle();
    });
    $(document).mouseup(function(e){
        setTimeout(function(){
            var select = $('.dropdownEngine');
            if($(select).hasClass('active')){
                if (!select.is(e.target) && select.has(e.target).length === 0){
                    $(select).find('.dropdownEngine__dropdown').slideUp();
                    $(select).removeClass('active');
                }
            }
        }, 50);
    });
    $('.dropdownEngine__option').on('click', function(){
        let parent = $(this).parents('.dropdownEngine'),
            options = parent.find('.dropdownEngine__option'),
            value = $(this).find('p').text(),
            id = $(this).attr('value');

        // Remove active class and add to selected item
        $(options).each(function(){
            $(this).removeClass('dropdownEngine__option--active');
        });
        $(this).addClass('dropdownEngine__option--active');

        // Add value
        parent.find('.dropdownEngine__selected').attr('data-selected', value);
        parent.find('.dropdownEngine__selected').find('p').text(value);

        // Close dropdown
        parent.find('.dropdownEngine__dropdown').slideUp();
        parent.removeClass('active');
    });

    // Automatic select by URL parameter
    $('.dropdownEngine').each(function(){
        let automatic = $(this).data('get');

        if(typeof automatic !== 'undefined'){
            let param = GetURLParameter(automatic);
                option = $(this).find('.dropdownEngine__option[value="' + param + '"]');
            
            if(option.length){
                option.trigger('click');
            }else{
                console.error('ERROR: Wybrana w parametrze "' + automatic + '" opcja nie istnieje.');
            }
        }
    });
});


/**
 * User.com popup
 */
$(document).ready(function(){
    let codesource = GetURLParameter('utm_source');
        code = GetURLParameter('code');
        popup = GetURLParameter('popuptest');

    $(document).on('preload-off', function(){
        if(codesource == 'MGM'){
            setTimeout(function(){
                $('body').addClass('no-scroll');
                $('.psibufetPopup[data-name="discount"]').addClass('psibufetPopup--ready');
                $('.dir-discount-popup').attr('href', 'https://zamowienie.psibufet.pl/?code=' + code + '&utm_source=MGM&utm_medium=referral_link&utm_campaign=' + code + '&utm_term=popup');
                setTimeout(function(){
                    $('.psibufetPopup[data-name="discount"]').addClass('psibufetPopup--active');
                }, 300);
            }, 2000);
        }
    });

    if(popup !== undefined && popup !== 'discount'){
        $('body').addClass('no-scroll');
        $('.psibufetPopup[data-name="' + popup + '"]').addClass('psibufetPopup--ready');
        setTimeout(function(){
            $('.psibufetPopup[data-name="' + popup + '"]').addClass('psibufetPopup--active');
        }, 300);
    }

    // Close btn
    $('.psibufetPopup .closebtn').on('click', function(){
        $('.psibufetPopup').removeClass('psibufetPopup--active');
        setTimeout(function(){
            $('.psibufetPopup').removeClass('psibufetPopup--ready');
        }, 300);
    });

    // Click over popup close
    $(document).mouseup(function(e){
        var container = $('.psibufetPopup .wrap');
        if (!container.is(e.target) && container.has(e.target).length === 0){
            $('.psibufetPopup').removeClass('psibufetPopup--active');
            setTimeout(function(){
                $('.psibufetPopup').removeClass('psibufetPopup--ready');
            }, 300);
        }
    });
});