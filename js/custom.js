/**
 * Get URL param
 */
 function GetURLParameter(sParam){
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++){
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam){
            return sParameterName[1];
        }
    }
}    

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

$(document).ready(function(){
    var form = $('form[name="userStart"]');
    var nameinput = form.find('input[type="text"]');
    $(nameinput).on('change paste keyup', function(){
        var value = $(this).val();
        if(value){
            form.attr('action', 'https://zamowienie.psibufet.pl/?dogName=' + value);
            form.addClass('hasValue');
        }else{
            form.attr('action', 'https://zamowienie.psibufet.pl/');
            form.removeClass('hasValue');
        }

    });
});

$(document).ready(function(){
    var question = $('.homeFaq__list').find('.question');

    question.on('click', function(){
        $('.homeFaq__list').find('.question').not(this).removeClass('question--open').addClass('question--close');
        $('.homeFaq__list').find('.question').not(this).find('.question__answer').slideUp();
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

// Menu bar options
$(document).ready(function(){
    var siteHeader = $('.siteHeader');
    setTimeout(function(){
        if($('body').hasClass('promocode')){
            if($(window).width() < 576){
                $('.header-clone').css('height', siteHeader.height() + 58);
            }else if($(window).width() < 767 && $(window).width() > 576){
                $('.header-clone').css('height', siteHeader.height() + 39);
            }else{
                $('.header-clone').css('height', siteHeader.height() + 62);
            }
            $('.siteHeader').addClass('siteHeader--promocode');
        }else{
            $('.header-clone').css('height', siteHeader.height());
        }
        if($(window).width() < 991){
            $('.mainnav').css('padding-top', siteHeader.height());
        }
    }, 200);

    $('.btnMenu').on('click', function(){
        $(this).toggleClass('active');
        $('body').toggleClass('noscroll');
        $('.siteHeader').toggleClass('mobileNav-active');
        $('.mobileNav').toggleClass('mobileNav--toggle');

        $('.mobileNav').find('li.menu-item').toggleClass('animate');
    });

    var didScroll;
    var lastScrollTop = 0;
    var delta = 50;
    var navbarHeight = siteHeader.outerHeight();

    $(window).scroll(function(event){
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
        var st = $(this).scrollTop();
        
        if(Math.abs(lastScrollTop - st) <= delta)
            return;
        
        if (st > lastScrollTop && st > navbarHeight){
            siteHeader.addClass('siteHeader--scrolled');
        } else {
            if(st + $(window).height() < $(document).height()) {
                siteHeader.removeClass('siteHeader--scrolled');
            }
        }
        lastScrollTop = st;
    }
});

/* OLD */
$(document).ready(function () {
    $('.flexslider .gang_posts').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 2,
        variableWidth: true,
        prevArrow: $('.gang_prev'),
        nextArrow: $('.gang_next'),
        responsive: [{
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    centerPadding: 30,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: true,
                }
                    }
                ]
    });
});
$(document).ready(function () {
    $('.howitworks_slider').flexslider({
        animation: "slide",
        maxItems: 1,
        move: 1,
        animationLoop: false,
        slideshow: false,
        manualControls: ".slide_control li",
        responsive: [{
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    centerPadding: 10,
                    itemMargin: 0,
                    slidesToShow: 1,
                    variableWidth: true,
                }
                    }
                ]
    });
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



/************** PROMOCODE ***************/

$(document).ready(function() {    
    var code = GetURLParameter('code');
    var type = GetURLParameter('type');
    var amount = GetURLParameter('amount');

    var promoamount = $('#promocode p .amount');
    var promotype = $('#promocode p .type');
	var promona = $('#promocode p .na');
    

    if (typeof code === 'undefined'){
        var firstletter = code;
    }else{
        var firstletter = code.charAt(0);
    }

    console.log(code);
    if(typeof code !== 'undefined' && code !== 'psiazka'){
        $('body').addClass('promocode');
        $('.menu_dir a').addClass('dir');
        $('#promocode').addClass('active');
        $('body').trigger('promocode-active');

        promoamount.html('-' + amount);

        if(type == 'PERCENT'){
            promotype.html('%');
        }
        if(type == 'AMOUNT'){
            promotype.html('PLN');
        }

        if(firstletter == 2){
            promona.html('na dwie pierwsze dostawy');
        }

        setTimeout(function(){
            $(".dir").each(function () {
                var $this = $(this);
                var _href = $this.attr("href");
                if(typeof type !== 'undefined' && typeof amount !== 'undefined'){
                    $this.attr("href", _href + '?code=' + code + '&amount=' + amount + '&type=' + type);
                }else{
                    $this.attr("href", _href + '?code=' + code);
                }
            });
        }, 50);
    }else{
        console.log('Code error');
    }
});

/******** COPY ********/
$(document).ready(function() {
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
    }
});
$(document).on("click", "#copybtn", function () {
    $(this).find('p').addClass('active');
    setTimeout(function(){
        $('#copybtn p').removeClass('active');
    },2000);
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
    $('input[name="rasa_psa"]').easyAutocomplete(options);

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
    }

    // Home shortcuts slider mobile
    if($(window).width() < 931){
        $('.pbShortcuts__wrap').slick({
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
}); 


/*
 *  Book page
 */
$(document).ready(function(){
    $('.openDesc').on('click', function(){
        var $this = $(this);

        $this.addClass('hide');
        setTimeout(function(){
            $this.css('margin', '0');
        }, 300);
        $('.book__description').css('height', 'auto');
        $('.book__description').addClass('opened');
    });
});