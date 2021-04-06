/********* MENU BOXES SKŁAD **********/
$(function () {
    $('.menu_boxes .box .content p.info').on('click', function () {
        dataLayer.push({
            'event': 'virtualPageView',
            'link': ''
        });
    });
});
$(function () {
    $('.menu_boxes .box .content p.kurcze_pieczone_btn').on('click', function () {
        dataLayer.push({
            'event': 'productView',
            'label': 'Kurczę pieczone',
            'page': ''
        });
    });
});
$(function () {
    $('.menu_boxes .box .content p.wolowe_love_btn').on('click', function () {
        dataLayer.push({
            'event': 'productView',
            'label': 'Wołowe love',
            'page': ''
        });
    });
});
$(function () {
    $('.menu_boxes .box .content p.indyczy_kasek_btn').on('click', function () {
        dataLayer.push({
            'event': 'productView',
            'label': 'Indyczy kąsek',
            'page': ''
        });
    });
});
$(function () {
    $('.menu_boxes .box .content p.jagnie_wcina_btn').on('click', function () {
        dataLayer.push({
            'event': 'productView',
            'label': 'Jagnię wcina',
            'page': ''
        });
    });
});

/********* SOCIAL MEDIA **********/

$(function () {
    $('.footer_right .links a.instagram-social').on('click', function () {
        var link = $(this).attr('href');
        dataLayer.push({
            'event': 'socialRedirect',
            'label': 'Instagram',
            'page': link,
        });
    });
});
$(function () {
    $('.footer_right .links a.facebook-social').on('click', function () {
        var link = $(this).attr('href');
        dataLayer.push({
            'event': 'socialRedirect',
            'label': 'Facebook',
            'page': link,
        });
    });
});

/********* REGISTRATION **********/

//$(function () {
//    $('.front_header_content a').on('click', function () {
//        dataLayer.push({
//            'event': 'registration',
//            'label': 'step 1 - Start'
//        });
//    });
//});
//$(function () {
//    $('#mainnav ul li.order a').on('click', function () {
//        dataLayer.push({
//            'event': 'registration',
//            'label': 'step 1 - Start'
//        });
//    });
//});
//$(function () {
//    $('#front_page .front_uknow a.check').on('click', function () {
//        dataLayer.push({
//            'event': 'registration',
//            'label': 'step 1 - Start'
//        });
//    });
//});
//$(function () {
//    $('#front_page .front_foodinfo a.check').on('click', function () {
//        dataLayer.push({
//            'event': 'registration',
//            'label': 'step 1 - Start'
//        });
//    });
//});
//$(function () {
//    $('#front_page .front_howitworks a.check').on('click', function () {
//        dataLayer.push({
//            'event': 'registration',
//            'label': 'step 1 - Start'
//        });
//    });
//});
//$(function () {
//    $('#front_page .front_price .left_content a.check').on('click', function () {
//        dataLayer.push({
//            'event': 'registration',
//            'label': 'step 1 - Start'
//        });
//    });
//});
//$(function () {
//    $('#front_page .front_testimonials a.check').on('click', function () {
//        dataLayer.push({
//            'event': 'registration',
//            'label': 'step 1 - Start'
//        });
//    });
//});
//$(function () {
//    $('#front_page .front_faq a.check').on('click', function () {
//        dataLayer.push({
//            'event': 'registration',
//            'label': 'step 1 - Start'
//        });
//    });
//});
//$(function () {
//    $('#site_footer .footer_right ul li a.order').on('click', function () {
//        dataLayer.push({
//            'event': 'registration',
//            'label': 'step 1 - Start'
//        });
//    });
//});
//$(function () {
//    $('#hiw_page .hiw_howitworks a.check').on('click', function () {
//        dataLayer.push({
//            'event': 'registration',
//            'label': 'step 1 - Start'
//        });
//    });
//});
//$(function () {
//    $('#hiw_page .hiw_foodplans a.check').on('click', function () {
//        dataLayer.push({
//            'event': 'registration',
//            'label': 'step 1 - Start'
//        });
//    });
//});
//$(function () {
//    $('#recipe_page .recipe_menu a.order').on('click', function () {
//        dataLayer.push({
//            'event': 'registration',
//            'label': 'step 1 - Start'
//        });
//    });
//});
//$(function () {
//    $('#recipe_page .recipe_price .left_content a.check').on('click', function () {
//        dataLayer.push({
//            'event': 'registration',
//            'label': 'step 1 - Start'
//        });
//    });
//});
//$(function () {
//    $('#recipe_page .recipe_package .right_content a.order').on('click', function () {
//        dataLayer.push({
//            'event': 'registration',
//            'label': 'step 1 - Start'
//        });
//    });
//});
//$(function () {
//    $('#recipe_page .recipe_compare a.order').on('click', function () {
//        dataLayer.push({
//            'event': 'registration',
//            'label': 'step 1 - Start'
//        });
//    });
//});
//$(function () {
//    $('#about_page .about_contact a.order').on('click', function () {
//        dataLayer.push({
//            'event': 'registration',
//            'label': 'step 1 - Start'
//        });
//    });
//});

/********* NEWSLETTER FORM SEND **********/

jQuery(document).ready(function () {
    jQuery(document).on('nfFormSubmitResponse', function (event, response, id) {
        dataLayer.push({
            'event': 'contact',
            'NFformID': response.id
        });
    });
});
