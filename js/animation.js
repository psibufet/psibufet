
/********** MISKA Z KARMĄ FRONT PAGE **********/

$(window).on('scroll', function () {
    var scrollTop = $(window).scrollTop()
    if ($('.animateMiska').length) {
        var elementOffset = $('.animateMiska').offset().top
    }
    var distance = (elementOffset - scrollTop);
    
    var image_width_desktop = distance + 80;
    $('.ba_img.before').css('width', image_width_desktop + 'px');

    if($(window).width() > 1200){
        if(image_width_desktop < 550 && image_width_desktop > 100){
            $('.ba_img.before').addClass('line');
        }else{
            $('.ba_img.before').removeClass('line');
        }
    }else if($(window).width() <= 1199 && $(window).width() > 576 ){
        if(image_width_desktop < 420 && image_width_desktop > 85){
            $('.ba_img.before').addClass('line');
        }else{
            $('.ba_img.before').removeClass('line');
        }
    }else if($(window).width() <= 575){
        if(image_width_desktop < 250 && image_width_desktop > 50){
            $('.ba_img.before').addClass('line');
        }else{
            $('.ba_img.before').removeClass('line');
        }
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

function getVisible(element){
    if(element.visible(true)){
        return $(this).parent().prop('className');
    }
}

$(document).ready(function() {
    var homeHeaderV2 = $('.homeHeaderV2__form').find('.getMarker');
    var homeMiska = $('.homeMiska').find('.getMarker');
    var homeFoodinfo = $('.homeFoodinfo').find('.getMarker');
    var homeHowitworks = $('.homeHowitworks').find('.getMarker');
    var homeBenefits = $('.homeBenefits').find('.getMarker');
    var homePricing = $('.homePricing').find('.getMarker');
    var homeStart = $('.homeStart').find('.getMarker');
    var homeAbout = $('.homeAbout__content').find('.getMarker');
    var homeStartSection = $('.homeStart');
    var pbShortcuts = $('.pbShortcuts').find('.getMarker');
    var pbQuestions = $('.pbQuestions').find('.getMarker');

    if($(homeHeaderV2).visible(true)){
        setTimeout(function(){
            homeHeaderV2.addClass('init');
        }, 500)
    }
    if($(homeMiska).visible(true)){
        setTimeout(function(){
            homeMiska.addClass('init');
        }, 500)
    }
    if($(homeFoodinfo).visible(true)){
        setTimeout(function(){
            homeFoodinfo.addClass('init');
        }, 500)
    }
    if($(homeHowitworks).visible(true)){
        setTimeout(function(){
            homeHowitworks.addClass('init');
        }, 500)
    }
    if($(homeBenefits).visible(true)){
        setTimeout(function(){
            homeBenefits.addClass('init');
        }, 500)
    }
    if($(homePricing).visible(true)){
        setTimeout(function(){
            homePricing.addClass('init');
        }, 500)
    }
    if($(homeAbout).visible(true)){
        setTimeout(function(){
            homeAbout.addClass('init');
        }, 500)
    }
    if($(homeStart).visible(true)){
        setTimeout(function(){
            homeStart.addClass('init');
        }, 500)
    }
    if($(homeStartSection).visible(true)){
        setTimeout(function(){
            homeStartSection.addClass('init');
        }, 500)
    }
    if($(pbShortcuts).visible(true)){
        setTimeout(function(){
            pbShortcuts.addClass('init');
        }, 500)
    }
    if($(pbQuestions).visible(true)){
        setTimeout(function(){
            pbQuestions.addClass('init');
        }, 500)
    }

    $(window).on('scroll', function () {
        if($(homeHeaderV2).visible(true)){
            setTimeout(function(){
                homeHeaderV2.addClass('init');
            }, 500)
        }
        if($(homeMiska).visible(true)){
            setTimeout(function(){
                homeMiska.addClass('init');
            }, 500)
        }
        if($(homeFoodinfo).visible(true)){
            setTimeout(function(){
                homeFoodinfo.addClass('init');
            }, 500)
        }
        if($(homeHowitworks).visible(true)){
            setTimeout(function(){
                homeHowitworks.addClass('init');
            }, 500)
        }
        if($(homeBenefits).visible(true)){
            setTimeout(function(){
                homeBenefits.addClass('init');
            }, 500)
        }
        if($(homePricing).visible(true)){
            setTimeout(function(){
                homePricing.addClass('init');
            }, 500)
        }
        if($(homeAbout).visible(true)){
            setTimeout(function(){
                homeAbout.addClass('init');
            }, 500)
        }
        if($(homeStart).visible(true)){
            setTimeout(function(){
                homeStart.addClass('init');
            }, 500)
        }
        if($(homeStartSection).visible(true)){
            setTimeout(function(){
                homeStartSection.addClass('visible');
            }, 500)
        }
        if($(pbShortcuts).visible(true)){
            setTimeout(function(){
                pbShortcuts.addClass('init');
            }, 500)
        }
        if($(pbQuestions).visible(true)){
            setTimeout(function(){
                pbQuestions.addClass('init');
            }, 500)
        }
    });
});

/**
 * New home page
 */
function newhomepage_underscores() {
    var homeMiska = $('.homeMiska').find('.getMarker');
    var homeFood = $('.homeFood').find('.getMarker');
    var homeClients = $('.homeClients').find('.getMarker');
    var homeHowitworks = $('.homeHowitworks').find('.getMarker');
    var homeStart = $('.homeStartnew').find('.getMarker');
    var homeReturn = $('.homeReturn').find('.getMarker');
    var pbShortcuts = $('.pbShortcuts').find('.getMarker');

    if($(homeMiska).visible(true)){
        setTimeout(function(){
            homeMiska.addClass('init');
        }, 500)
    }
    if($(homeFood).visible(true)){
        setTimeout(function(){
            homeFood.addClass('init');
        }, 500)
    }
    if($(homeClients).visible(true)){
        setTimeout(function(){
            homeClients.addClass('init');
        }, 500)
    }
    if($(homeHowitworks).visible(true)){
        setTimeout(function(){
            homeHowitworks.addClass('init');
        }, 500)
    }
    if($(homeStart).visible(true)){
        setTimeout(function(){
            homeStart.addClass('init');
        }, 500)
    }
    if($(homeReturn).visible(true)){
        setTimeout(function(){
            homeReturn.addClass('init');
        }, 500)
    }
    if($(pbShortcuts).visible(true)){
        setTimeout(function(){
            pbShortcuts.addClass('init');
        }, 500)
    }

    $(window).on('scroll', function () {
        if($(homeMiska).visible(true)){
            setTimeout(function(){
                homeMiska.addClass('init');
            }, 500)
        }
        if($(homeFood).visible(true)){
            setTimeout(function(){
                homeFood.addClass('init');
            }, 500)
        }
        if($(homeClients).visible(true)){
            setTimeout(function(){
                homeClients.addClass('init');
            }, 500)
        }
        if($(homeHowitworks).visible(true)){
            setTimeout(function(){
                homeHowitworks.addClass('init');
            }, 500)
        }
        if($(homeStart).visible(true)){
            setTimeout(function(){
                homeStart.addClass('init');
            }, 500)
        }
        if($(homeReturn).visible(true)){
            setTimeout(function(){
                homeReturn.addClass('init');
            }, 500)
        }
        if($(pbShortcuts).visible(true)){
            setTimeout(function(){
                pbShortcuts.addClass('init');
            }, 500)
        }
    });
}
$(document).ready(newhomepage_underscores());

/********** Google Shopping pages **********/

$(document).ready(function() {
    var gsPageHeader = $('.gsHeading').find('.getMarker');
    var gsExpert = $('.gsExpert__heading').find('.getMarker');
    var gsStandard = $('.gsStandard__heading').find('.getMarker');
    var gsKarmaList = $('.gsKarmaList__heading').find('.getMarker');

    if($(gsPageHeader).visible(true)){
        setTimeout(function(){
            gsPageHeader.addClass('init');
        }, 500)
    }
    if($(gsExpert).visible(true)){
        setTimeout(function(){
            gsExpert.addClass('init');
        }, 500)
    }
    if($(gsStandard).visible(true)){
        setTimeout(function(){
            gsStandard.addClass('init');
        }, 500)
    }
    if($(gsKarmaList).visible(true)){
        setTimeout(function(){
            gsKarmaList.addClass('init');
        }, 500)
    }
    $(window).on('scroll', function(){
        if($(gsPageHeader).visible(true)){
            setTimeout(function(){
                gsPageHeader.addClass('init');
            }, 500)
        }
        if($(gsExpert).visible(true)){
            setTimeout(function(){
                gsExpert.addClass('init');
            }, 500)
        }
        if($(gsStandard).visible(true)){
            setTimeout(function(){
                gsStandard.addClass('init');
            }, 500)
        }
        if($(gsKarmaList).visible(true)){
            setTimeout(function(){
                gsKarmaList.addClass('init');
            }, 500)
        }
    });
});

/********** Sale Landing Page **********/

$(document).ready(function() {
    var saleMiska = $('.saleMiska__heading').find('.getMarker');
    var saleVideos = $('.saleVideos__heading').find('.getMarker');
    var saleCompare = $('.saleCompare__heading').find('.getMarker');

    if($(saleMiska).visible(true)){
        setTimeout(function(){
            saleMiska.addClass('init');
        }, 500)
    }
    if($(saleVideos).visible(true)){
        setTimeout(function(){
            saleVideos.addClass('init');
        }, 500)
    }
    if($(saleCompare).visible(true)){
        setTimeout(function(){
            saleCompare.addClass('init');
        }, 500)
    }
    $(window).on('scroll', function(){
        if($(saleMiska).visible(true)){
            setTimeout(function(){
                saleMiska.addClass('init');
            }, 500)
        }
        if($(saleVideos).visible(true)){
            setTimeout(function(){
                saleVideos.addClass('init');
            }, 500)
        }
        if($(saleCompare).visible(true)){
            setTimeout(function(){
                saleCompare.addClass('init');
            }, 500)
        }
    });

    /* Custom header animation */
    var saleHeader = $('.saleHeader__content').find('.getMarker');
    var tag_01 = $('.saleHeader__content').find('.tags').find('div').eq(0);
    var tag_02 = $('.saleHeader__content').find('.tags').find('div').eq(1);
    var tag_03 = $('.saleHeader__content').find('.tags').find('div').eq(2);

    if($(saleHeader).visible(true)){
        setTimeout(function(){
            saleHeader.addClass('init');
        }, 500)
        setTimeout(function(){
            tag_01.addClass('animate');
        }, 1300);
        setTimeout(function(){
            tag_02.addClass('animate');
        }, 1800);
        setTimeout(function(){
            tag_03.addClass('animate');
        }, 2300);
    }
    $(window).on('scroll', function(){
        if($(saleHeader).visible(true)){
            setTimeout(function(){
                saleHeader.addClass('init');
            }, 500)
        }
    });
});

/********** Carrer page **********/

$(document).ready(function() {
    var carrerList = $('.carrerOffers__heading').find('.getMarker');

    if($(carrerList).visible(true)){
        setTimeout(function(){
            carrerList.addClass('init');
        }, 500)
    }
    $(window).on('scroll', function(){
        if($(carrerList).visible(true)){
            setTimeout(function(){
                carrerList.addClass('init');
            }, 500)
        }
    });
});

/********** Partner page **********/

$(document).ready(function() {
    var partnerInfo = $('.partnerInfo').find('.getMarker');
    var partnerSteps = $('.partnerSteps').find('.getMarker');

    if($(partnerInfo).visible(true)){
        setTimeout(function(){
            partnerInfo.addClass('init');
        }, 500)
    }
    if($(partnerSteps).visible(true)){
        setTimeout(function(){
            partnerSteps.addClass('init');
        }, 500)
    }
    $(window).on('scroll', function(){
        if($(partnerInfo).visible(true)){
            setTimeout(function(){
                partnerInfo.addClass('init');
            }, 500)
        }
        if($(partnerSteps).visible(true)){
            setTimeout(function(){
                partnerSteps.addClass('init');
            }, 500)
        }
    });
});

/********** Kalkulator page **********/

$(document).ready(function() {
    var calcInfo = $('.calcInfo').find('.getMarker');
    var calcHow = $('.calcHow').find('.getMarker');
    var calcMiska = $('.calcMiska').find('.getMarker');

    if($(calcInfo).visible(true)){
        setTimeout(function(){
            calcInfo.addClass('init');
        }, 500)
    }
    if($(calcHow).visible(true)){
        setTimeout(function(){
            calcHow.addClass('init');
        }, 500)
    }
    if($(calcMiska).visible(true)){
        setTimeout(function(){
            calcMiska.addClass('init');
        }, 500)
    }
    $(window).on('scroll', function(){
        if($(calcInfo).visible(true)){
            setTimeout(function(){
                calcInfo.addClass('init');
            }, 500)
        }
        if($(calcHow).visible(true)){
            setTimeout(function(){
                calcHow.addClass('init');
            }, 500)
        }
        if($(calcMiska).visible(true)){
            setTimeout(function(){
                calcMiska.addClass('init');
            }, 500)
        }
    });
});

/********** Recipe page **********/

$(document).ready(function() {
    var recipesMenu = $('.recipesMenu__heading').find('.getMarker');
    var recipesExpert = $('.recipesExpert').find('.getMarker');
    var recipesParts = $('.recipesParts__heading').find('.getMarker');
    var recipesSafety = $('.recipesSafety').find('.getMarker');
    var recipesPricing = $('.recipesPricing').find('.getMarker');

    if($(recipesMenu).visible(true)){
        setTimeout(function(){
            recipesMenu.addClass('init');
        }, 500)
    }
    if($(recipesExpert).visible(true)){
        setTimeout(function(){
            recipesExpert.addClass('init');
        }, 500)
    }
    if($(recipesParts).visible(true)){
        setTimeout(function(){
            recipesParts.addClass('init');
        }, 500)
    }
    if($(recipesSafety).visible(true)){
        setTimeout(function(){
            recipesSafety.addClass('init');
        }, 500)
    }
    if($(recipesPricing).visible(true)){
        setTimeout(function(){
            recipesPricing.addClass('init');
        }, 500)
    }
    $(window).on('scroll', function(){
        if($(recipesMenu).visible(true)){
            setTimeout(function(){
                recipesMenu.addClass('init');
            }, 500)
        }
        if($(recipesExpert).visible(true)){
            setTimeout(function(){
                recipesExpert.addClass('init');
            }, 500)
        }
        if($(recipesParts).visible(true)){
            setTimeout(function(){
                recipesParts.addClass('init');
            }, 500)
        }
        if($(recipesSafety).visible(true)){
            setTimeout(function(){
                recipesSafety.addClass('init');
            }, 500)
        }
        if($(recipesPricing).visible(true)){
            setTimeout(function(){
                recipesPricing.addClass('init');
            }, 500)
        }
    });
});

/********** How it works page **********/

$(document).ready(function() {
    var howVideo = $('.howVideo').find('.getMarker');
    var howInfo = $('.howInfo__heading').find('.getMarker');
    var howPlan = $('.howPlan__heading').find('.getMarker');
    var howUsers = $('.howUsers__heading').find('.getMarker');
    var userInfo = $('.pbUserInfo__content').find('.getMarker');

    if($(howVideo).visible(true)){
        setTimeout(function(){
            howVideo.addClass('init');
        }, 500)
    }
    if($(howInfo).visible(true)){
        setTimeout(function(){
            howInfo.addClass('init');
        }, 500)
    }
    if($(howPlan).visible(true)){
        setTimeout(function(){
            howPlan.addClass('init');
        }, 500)
    }
    if($(howUsers).visible(true)){
        setTimeout(function(){
            howUsers.addClass('init');
        }, 500)
    }
    if($(userInfo).visible(true)){
        setTimeout(function(){
            userInfo.addClass('init');
        }, 500)
    }
    $(window).on('scroll', function(){
        if($(howVideo).visible(true)){
            setTimeout(function(){
                howVideo.addClass('init');
            }, 500)
        }
        if($(howInfo).visible(true)){
            setTimeout(function(){
                howInfo.addClass('init');
            }, 500)
        }
        if($(howPlan).visible(true)){
            setTimeout(function(){
                howPlan.addClass('init');
            }, 500)
        }
        if($(howUsers).visible(true)){
            setTimeout(function(){
                howUsers.addClass('init');
            }, 500)
        }
        if($(userInfo).visible(true)){
            setTimeout(function(){
                userInfo.addClass('init');
            }, 500)
        }
    });
});

/********** Książka LP **********/

$(document).ready(function() {
    var bookContent = $('.book__content__header').find('.getMarker');
    var bookOwners = $('.meetMakers__wrap').find('.getMarker');

    if($(bookContent).visible(true)){
        setTimeout(function(){
            bookContent.addClass('init');
        }, 500)
    }
    if($(bookOwners).visible(true)){
        setTimeout(function(){
            bookOwners.addClass('init');
        }, 500)
    }
    $(window).on('scroll', function(){
        if($(bookContent).visible(true)){
            setTimeout(function(){
                bookContent.addClass('init');
            }, 500)
        }
        if($(bookOwners).visible(true)){
            setTimeout(function(){
                bookOwners.addClass('init');
            }, 500)
        }
    });
});

/********** Restauracje LP **********/

$(document).ready(function() {
    var instagramHeading = $('.restInstagram__heading').find('.getMarker');
    var mapHeading = $('.restMap__heading').find('.getMarker');

    if($(instagramHeading).visible(true)){
        setTimeout(function(){
            instagramHeading.addClass('init');
        }, 500)
    }
    if($(mapHeading).visible(true)){
        setTimeout(function(){
            mapHeading.addClass('init');
        }, 500)
    }
    $(window).on('scroll', function(){
        if($(instagramHeading).visible(true)){
            setTimeout(function(){
                instagramHeading.addClass('init');
            }, 500)
        }
        if($(mapHeading).visible(true)){
            setTimeout(function(){
                mapHeading.addClass('init');
            }, 500)
        }
    });
});

/********** Szczeniaki LP **********/

$(document).ready(function() {
    var pupInfo = $('.pupInfo__heading').find('.getMarker');
    var pupReviews = $('.pupReviews__heading').find('.getMarker');
    var pupAll = $('.pupAll__heading').find('.getMarker');
    var pupUsp = $('.pupUsp__heading').find('.getMarker');

    if($(pupInfo).visible(true)){
        setTimeout(function(){
            pupInfo.addClass('init');
        }, 500)
    }
    if($(pupReviews).visible(true)){
        setTimeout(function(){
            pupReviews.addClass('init');
        }, 500)
    }
    if($(pupAll).visible(true)){
        setTimeout(function(){
            pupAll.addClass('init');
        }, 500)
    }
    if($(pupUsp).visible(true)){
        setTimeout(function(){
            pupUsp.addClass('init');
        }, 500)
    }
    $(window).on('scroll', function(){
        if($(pupInfo).visible(true)){
            setTimeout(function(){
                pupInfo.addClass('init');
            }, 500)
        }
        if($(pupReviews).visible(true)){
            setTimeout(function(){
                pupReviews.addClass('init');
            }, 500)
        }
        if($(pupAll).visible(true)){
            setTimeout(function(){
                pupAll.addClass('init');
            }, 500)
        }
        if($(pupUsp).visible(true)){
            setTimeout(function(){
                pupUsp.addClass('init');
            }, 500)
        }
    });
});

/********** Pies senior **********/

$(document).ready(function() {
    var seniorDogs = $('.seniorDogs__heading').find('.getMarker');
    var seniorReviews = $('.seniorReviews__heading').find('.getMarker');
    var seniorInfo = $('.seniorInfo__heading').find('.getMarker');
    var seniorUSP = $('.seniorUSP__heading').find('.getMarker');

    if($(seniorDogs).visible(true)){
        setTimeout(function(){
            seniorDogs.addClass('init');
        }, 500)
    }
    if($(seniorReviews).visible(true)){
        setTimeout(function(){
            seniorReviews.addClass('init');
        }, 500)
    }
    if($(seniorInfo).visible(true)){
        setTimeout(function(){
            seniorInfo.addClass('init');
        }, 500)
    }
    if($(seniorUSP).visible(true)){
        setTimeout(function(){
            seniorUSP.addClass('init');
        }, 500)
    }
    $(window).on('scroll', function(){
        if($(seniorDogs).visible(true)){
            setTimeout(function(){
                seniorDogs.addClass('init');
            }, 500)
        }
        if($(seniorReviews).visible(true)){
            setTimeout(function(){
                seniorReviews.addClass('init');
            }, 500)
        }
        if($(seniorInfo).visible(true)){
            setTimeout(function(){
                seniorInfo.addClass('init');
            }, 500)
        }
        if($(seniorUSP).visible(true)){
            setTimeout(function(){
                seniorUSP.addClass('init');
            }, 500)
        }
    });
});

/********** LP - Zwrot kartonów **********/

$(document).ready(function() {
    var kartonyHeader = $('.kartonyHeader').find('.getMarker');
    var kartonyTable = $('.kartonyTable').find('.getMarker');
    var kartonyGif = $('.kartonyGif').find('.getMarker');
    var kartonyContact = $('.kartonyContact').find('.getMarker');

    if($(kartonyHeader).visible(true)){
        setTimeout(function(){
            kartonyHeader.addClass('init');
        }, 500)
    }
    if($(kartonyTable).visible(true)){
        setTimeout(function(){
            kartonyTable.addClass('init');
        }, 500)
    }
    if($(kartonyGif).visible(true)){
        setTimeout(function(){
            kartonyGif.addClass('init');
        }, 500)
    }
    if($(kartonyContact).visible(true)){
        setTimeout(function(){
            kartonyContact.addClass('init');
        }, 500)
    }
    $(window).on('scroll', function(){
        if($(kartonyHeader).visible(true)){
            setTimeout(function(){
                kartonyHeader.addClass('init');
            }, 500)
        }
        if($(kartonyTable).visible(true)){
            setTimeout(function(){
                kartonyTable.addClass('init');
            }, 500)
        }
        if($(kartonyGif).visible(true)){
            setTimeout(function(){
                kartonyGif.addClass('init');
            }, 500)
        }
        if($(kartonyContact).visible(true)){
            setTimeout(function(){
                kartonyContact.addClass('init');
            }, 500)
        }
    });
});

/********** PODKREŚLENIA NASZE PRZEPISY **********/

// $(window).on('scroll', function () {
//     var markeredfont = $('.getMarker');
//     var isElementInView = Utils.isElementInView(markeredfont, false);

//     if (isElementInView) {
//         parents = markeredfont.parent().parent();
//         parents.each(function(){
//             var parentClass = $(this).prop('className');
//             var parent = $('.' + parentClass);
//             if(parent.visible(true)){
//                 console.log($(this).prop('className') + ' true');
//             }else{
//                 console.log($(this).prop('className') + ' false');
//             }
//         })
//     }
// });
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

/********** About **********/

$(document).ready(function() {
    var aboutHistory = $('.aboutHistory__heading').find('.getMarker');
    var aboutStep = $('.aboutSteps__step').find('.getMarker');
    var aboutTeam = $('.aboutTeam__content').find('.getMarker');
    var aboutInfo = $('.aboutInfo__heading').find('.getMarker');

    if($(aboutHistory).visible(true)){
        setTimeout(function(){
            aboutHistory.addClass('init');
        }, 500)
    }
    $(aboutStep).each(function(){
        if($(this).visible(true)){
            var $this = $(this);
            setTimeout(function(){
                $this.addClass('init');
            }, 500)
        }
    });
    if($(aboutTeam).visible(true)){
        setTimeout(function(){
            aboutTeam.addClass('init');
        }, 500)
    }
    if($(aboutInfo).visible(true)){
        setTimeout(function(){
            aboutInfo.addClass('init');
        }, 500)
    }

    $(window).on('scroll', function(){
        if($(aboutHistory).visible(true)){
            setTimeout(function(){
                aboutHistory.addClass('init');
            }, 500)
        }
        $(aboutStep).each(function(){
            if($(this).visible(true)){
                var $this = $(this);
                setTimeout(function(){
                    $this.addClass('init');
                }, 500)
            }
        });
        if($(aboutTeam).visible(true)){
            setTimeout(function(){
                aboutTeam.addClass('init');
            }, 500)
        }
        if($(aboutInfo).visible(true)){
            setTimeout(function(){
                aboutInfo.addClass('init');
            }, 500)
        }
    });
});