
/*********** MENU MOBILE *************/

$(document).mouseup(function(e){
    var container = $("#mainnav-mobi");
    if (!container.is(e.target) && container.has(e.target).length === 0){
        container.slideUp();
    }
});

/************ SLIDERS START **************/

$(window).load(function () {
    if ($(window).width() < 769) {
        $('.front_reviews .slideul').addClass('slides');
    } else {
        $('.front_reviews .slideul').removeClass('slides');
    }
    $(function () {
        $('.front_reviews .slides').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 3000,
        });
    });
});
$(document).ready(function () {
    $('.foodinfo_slides').slick({
        centerMode: true,
        centerPadding: '0',
        slidesToShow: 3,
        slidesToScroll: 1,
        variableWidth: false,
        prevArrow: $('.foodinfo_prev'),
        nextArrow: $('.foodinfo_next'),
        dots: true,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
                    },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
                    }
                ]
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
        if($(this).hasClass('active')){
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

    if(typeof code !== 'undefined'){
        $('body').addClass('promocode');
        $('.menu_dir a').addClass('dir');
        $('#promocode').addClass('active');

        promoamount.html(amount);

        if(type == 'PERCENT'){
            promotype.html('%');
        }
        if(type == 'AMOUNT'){
            promotype.html('PLN');
        }

        if(firstletter == 2){
            promona.html('dwie pierwsze dostawy');
        }

        $(".dir").each(function () {
            var $this = $(this);
            var _href = $this.attr("href");
            if(typeof type !== 'undefined' && typeof amount !== 'undefined'){
                $this.attr("href", _href + '?code=' + code + '&amount=' + amount + '&type=' + type);
            }else{
                $this.attr("href", _href + '?code=' + code);
            }
        });
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


