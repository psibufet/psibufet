
/********** MISKA Z KARMĄ FRONT PAGE **********/

$(window).on('scroll', function () {
    var scrollTop     = $(window).scrollTop()
    if ($('.homeMiska').length) {
        var elementOffset = $('.homeMiska').offset().top
    }
    var distance      = (elementOffset - scrollTop);
    
    if ($(window).width() < 768) {
        var image_width_desktop = distance + 80;
        $('.ba_img.before').css('width', image_width_desktop + 'px');
    } else {
        var image_width_desktop = distance + 80;
        $('.ba_img.before').css('width', image_width_desktop + 'px');
    }
});

/********** PODKREŚLENIA FUNKCJA **********/

function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

function Utils() {

}

Utils.prototype = {
    constructor: Utils,
    isElementInView: function (element, fullyInView) {
        var pageTop = $(window).scrollTop();
        var pageBottom = pageTop + $(window).height();
        if (element.length) {
          var elementTop = $(element).offset().top;
        }
        var elementBottom = elementTop + $(element).height();

        if (fullyInView === true) {
            return ((pageTop < elementTop) && (pageBottom > elementBottom));
        } else {
            return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
        }
    }
};

var Utils = new Utils();

/********** PODKREŚLENIA FRONT PAGE **********/

$(window).on('scroll', function () {
    var markeredfont = $('#front_page .front_uknow .left_content h2 font');
    var isElementInView = Utils.isElementInView(markeredfont, false);

    if (isElementInView) {
        window.setTimeout(function(){
            markeredfont.addClass('marker');
        }, 200);
    }
});
$(window).on('scroll', function () {
    var markeredfont = $('#front_page .front_price .left_content h2 span');
    var isElementInView = Utils.isElementInView(markeredfont, false);

    if (isElementInView) {
        window.setTimeout(function(){
            markeredfont.addClass('marker');
        }, 200);
    }
});

/********** PODKREŚLENIA NASZE PRZEPISY **********/

$(window).on('scroll', function () {
    var markeredfont = $('#recipe_page .recipe_price .left_content h2 span');
    var isElementInView = Utils.isElementInView(markeredfont, false);

    if (isElementInView) {
        window.setTimeout(function(){
            markeredfont.addClass('marker');
        }, 200);
    }
});
$(window).on('scroll', function () {
    var markeredfont = $('#recipe_page .recipe_package .right_content .inner .content h2 span');
    var isElementInView = Utils.isElementInView(markeredfont, false);

    if (isElementInView) {
        window.setTimeout(function(){
            markeredfont.addClass('marker');
        }, 200);
    }
});

/********** PODKREŚLENIA FAQ **********/

$(window).on('scroll', function () {
    var markeredfont = $('#faq_page .faq_content .content_heading h2 span');
    var isElementInView = Utils.isElementInView(markeredfont, false);

    if (isElementInView) {
        window.setTimeout(function(){
            markeredfont.addClass('marker');
        }, 200);
    }
});

/********** PODKREŚLENIA O NAS **********/

$(window).on('scroll', function () {
    var markeredfont = $('#about_page .about_steps .step_1 .right_content h2 span');
    var isElementInView = Utils.isElementInView(markeredfont, false);

    if (isElementInView) {
        window.setTimeout(function(){
            markeredfont.addClass('marker');
        }, 200);
    }
});
$(window).on('scroll', function () {
    var markeredfont = $('#about_page .about_steps .step_2 .left_content h2 span');
    var isElementInView = Utils.isElementInView(markeredfont, false);

    if (isElementInView) {
        window.setTimeout(function(){
            markeredfont.addClass('marker');
        }, 200);
    }
});
$(window).on('scroll', function () {
    var markeredfont = $('#about_page .about_steps .step_3 .center_content h2 span');
    var isElementInView = Utils.isElementInView(markeredfont, false);

    if (isElementInView) {
        window.setTimeout(function(){
            markeredfont.addClass('marker');
        }, 200);
    }
});
$(window).on('scroll', function () {
    var markeredfont = $('#about_page .about_steps .step_4 .right_content h2 span');
    var isElementInView = Utils.isElementInView(markeredfont, false);

    if (isElementInView) {
        window.setTimeout(function(){
            markeredfont.addClass('marker');
        }, 200);
    }
});

/********** ŁAPKI - O NAS **********/

$(window).on('scroll', function () {
    var markeredfont = $('#about_page .about_steps .step_1');
    var isElementInView = Utils.isElementInView(markeredfont, false);

    if (isElementInView) {
        window.setTimeout(function(){
            markeredfont.addClass('visible');
        }, 500);
    }
});
$(window).on('scroll', function () {
    var markeredfont = $('#about_page .about_steps .step_2');
    var isElementInView = Utils.isElementInView(markeredfont, false);

    if (isElementInView) {
        window.setTimeout(function(){
            markeredfont.addClass('visible');
        }, 500);
    }
});
$(window).on('scroll', function () {
    var markeredfont = $('#about_page .about_steps .step_3');
    var isElementInView = Utils.isElementInView(markeredfont, false);

    if (isElementInView) {
        window.setTimeout(function(){
            markeredfont.addClass('visible');
        }, 500);
    }
});
$(window).on('scroll', function () {
    var markeredfont = $('#about_page .about_steps .step_4');
    var isElementInView = Utils.isElementInView(markeredfont, false);

    if (isElementInView) {
        window.setTimeout(function(){
            markeredfont.addClass('visible');
        }, 500);
    }
});

/********** PODKREŚLENIA KARIERA ************/


$(window).on('scroll', function () {
    var markeredfont = $('#carrer_page .carrer_offer_list h2 font');
    var isElementInView = Utils.isElementInView(markeredfont, false);

    if (isElementInView) {
        window.setTimeout(function(){
            markeredfont.addClass('marker');
        }, 200);
    }
});


/********** INFO JAK TO DZIAŁA **********/

/** FRONT **/

$(window).on('scroll', function () {
    var boxes = $('#front_page .front_plan .boxes .box');
    var isElementInView = Utils.isElementInView(boxes, false);
    var box1 = $('#front_page .front_plan .boxes .box.1 img');
    var box2 = $('#front_page .front_plan .boxes .box.2 img');
    var box3 = $('#front_page .front_plan .boxes .box.3 img');
    var box4 = $('#front_page .front_plan .boxes .box.4 img');
    
    if (isElementInView) {
        window.setTimeout(function(){
            box1.addClass('visible');
        }, 200);
        window.setTimeout(function(){
            box2.addClass('visible');
        }, 600);
        window.setTimeout(function(){
            box3.addClass('visible');
        }, 1000);
        window.setTimeout(function(){
            box4.addClass('visible');
        }, 1400);
    }
});

/** HOW IT WORKS **/

$(window).on('scroll', function () {
    var boxes = $('#hiw_page .hiw_plan .boxes .box');
    var isElementInView = Utils.isElementInView(boxes, false);
    var box1 = $('#hiw_page .hiw_plan .boxes .box.1 img');
    var box2 = $('#hiw_page .hiw_plan .boxes .box.2 img');
    var box3 = $('#hiw_page .hiw_plan .boxes .box.3 img');
    var box4 = $('#hiw_page .hiw_plan .boxes .box.4 img');
    
    if (isElementInView) {
        window.setTimeout(function(){
            box1.addClass('visible');
        }, 200);
        window.setTimeout(function(){
            box2.addClass('visible');
        }, 600);
        window.setTimeout(function(){
            box3.addClass('visible');
        }, 1000);
        window.setTimeout(function(){
            box4.addClass('visible');
        }, 1400);
    }
});


/********* CORGI HEART ***********/

$(window).on('scroll', function () {
    var heartpulse = $('#front_page .front_gang');
    var isElementInView = Utils.isElementInView(heartpulse, false);

    if (isElementInView) {
        window.setTimeout(function(){
            heartpulse.addClass('visible');
        }, 500);
    }
});

/********* HOW IT WORK DOG **********/

$(window).on('scroll', function () {
    var dogquestion = $('#front_page .front_howitworks');
    var isElementInView = Utils.isElementInView(dogquestion, false);

    if (isElementInView) {
        window.setTimeout(function(){
            dogquestion.addClass('visible');
        }, 1000);
    }
});

/********* NEWSLETTER DOG **********/

$(window).on('scroll', function () {
    var newsletterdog = $('#front_page .front_newsletter .newsletter_heading');
    var isElementInView = Utils.isElementInView(newsletterdog, false);

    if (isElementInView) {
        window.setTimeout(function(){
            newsletterdog.addClass('visible');
        }, 1000);
    }
});
$(window).on('scroll', function () {
    var newsletterdog = $('#hiw_page .hiw_contact .contact_heading');
    var isElementInView = Utils.isElementInView(newsletterdog, false);

    if (isElementInView) {
        window.setTimeout(function(){
            newsletterdog.addClass('visible');
        }, 1000);
    }
});