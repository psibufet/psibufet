/**
 * Lazy load
 * Author: Codestick
 */

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

$(document).ready(function(){
    var s = {
        attr: '[data-original]',
        placeholder: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC',
    }

    var image = 'img' + s.attr;

    $(image).each(function(){
        var $this = $(this);
        $this.attr('src', s.placeholder);

        $(window).scroll(function(){
            if($this.visible(true)){
                $this.attr('src', $this.attr('data-original'));
            }
        });
    });

    // Sliders fix
    $(window).scroll(function(){
        var sliders = $('.slick-slider');

        $(sliders).each(function(){
            var slide = $(this).find('.slick-slide');

            $(slide).each(function(){
                var image = $(this).find('img');

                $(image).each(function(){
                    var original = $(this).attr('data-original'),
                        src = $(this).attr('src');

                    if(original !== src){
                        $(this).attr('src', original);
                    }
                });
            });
        });
    });

    // Food modals fix
    $('.infoButtons__button, .openFoodModal').on('click', function(){
        var dataid = $(this).attr('data');

        $('.foodModal__content[data="' + dataid + '"]').each(function(){
            var images = $(this).find('img[data-original]');
            
            $(images).each(function(){
                var original = $(this).attr('data-original'),
                    src = $(this).attr('src');

                if(original !== src){
                    $(this).attr('src', original);
                }
            });
        });
    });
});