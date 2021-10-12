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
    $('.siteFooter__menu .info a.social__ig').on('click', function () {
        var link = $(this).attr('href');
        dataLayer.push({
            'event': 'socialRedirect',
            'label': 'Instagram',
            'page': link,
        });
    });
});
$(function () {
    $('.siteFooter__menu .info a.social__fb').on('click', function () {
        var url = window.location.href;
        dataLayer.push({
            'event': 'socialRedirect',
            'label': 'Facebook',
            'page': url,
        });
    });
});

/*
 *  Google Shopping
 */
$(document).ready(function(){
    if($('body').hasClass('page-template-page_gskarmy')){
        var name = $('.gsPage').attr('data-name');
        var id = $('.gsPage').attr('data-name');
        var url = window.location.href;
        dataLayer.push({
            'event': 'shoppingProductView',
            'label': name,
            'page': url,
            'value': 4.9,
            'items': [{ 
                'id': id, 
                'google_business_vertical': 'retail'
            }]
        });
        console.log('shoppingProductView - ' + name + ' - push');
    }
});

/*
 *  Contact form is on header.php
 */
