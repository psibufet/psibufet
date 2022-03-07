(function($){
    $(document).ready(function(){
        if($('.homeFaq').length){
            $('html').attr('itemscope', '');
            $('html').attr('itemtype', 'https://schema.org/FAQPage');
        }
    });
    
    /**
     * Remove mobile elements on desktop
     */
    $(document).ready(function(){
        var mobilenav = $('.siteHeader').find('.mobileNav'),
            desktopnav = $('#mainnav');

        if($(window).width() > 991){
            if(mobilenav.length){
                mobilenav.remove();
            }
        }else{
            if(desktopnav.length){
                desktopnav.remove();
            }
        }
    });
}(jQuery));