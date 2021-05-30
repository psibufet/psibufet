<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Catering dla psa - zbilansowana, pełnoporcjowa karma, przygotowana ze świeżych, naturalnych składników. Dieta wysyłana prosto pod Twoje drzwi!">
    <meta property="og:image" content="https://psibufet.pl/wp-content/uploads/2020/11/20200627-_DSC4219_Easy-Resize.com_.jpg">
    <meta name="twitter:image" content="https://psibufet.pl/wp-content/uploads/2020/11/20200627-_DSC4219_Easy-Resize.com_.jpg">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="/wp-content/themes/psibufet/css/custom.css?ver=1.1.5" />
    <link rel="stylesheet" href="/wp-content/themes/psibufet/flexslider/flexslider.css" type="text/css">
    <link rel="stylesheet" href="/wp-content/themes/psibufet/slick/slick.css" type="text/css">
    <script src="https://kit.fontawesome.com/a1019066cc.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
              originalLocation: document.location.protocol + '//' +
                                document.location.hostname +
                                document.location.pathname +
                                document.location.search
            }); 
        });
    </script>
    <script src="/wp-content/themes/psibufet/flexslider/jquery.flexslider.js"></script>
    <script src="/wp-content/themes/psibufet/slick/slick.min.js"></script>
    <!-- <script type="text/javascript" src="/wp-content/themes/psibufet/plugins/select-dropdown/select-dropdown.js"></script> -->
    <script src="/wp-content/themes/psibufet/plugins/visible/jquery.visible.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/psibufet/js/custom.js" type="text/javascript"></script>
    <script type="text/javascript" src="/wp-content/themes/psibufet/js/animation.js"></script>
    <script type="text/javascript" src="/wp-content/themes/psibufet/js/dataLayers.js"></script>
    <script type="text/javascript" src="/wp-content/themes/psibufet/js/referralCode.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
    <?php if ( get_theme_mod('site_favicon') ) : ?>
    <link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
    <?php endif; ?>
    <?php endif; ?>

    <?php wp_head(); ?>
    <script type="text/javascript">
        jQuery(document).on( 'nfFormReady', function( e, layoutView ) {
            $('.nf-field-container.text-center .ninja-forms-field').focus(function(){
                var parent = $(this).parent().parent().parent().parent();
                parent.removeClass('ready');
                
                if( !$(this).val() ) {
                    $(this).find('.field-wrap').removeClass('active');
                }
                $(this).parent().parent().addClass('active'); 
            });
        });
        jQuery(document).on( 'nfFormReady', function( e, layoutView ) {
            $('.nf-field-container.text-center .ninja-forms-field').focusout(function(){
                var parent = $(this).parent().parent().parent().parent();
                
                if( $(this).val() ) {
                    $(this).find('.field-wrap').removeClass('active');
                }
                if( !$(this).val() ) {
                    $(this).removeClass('active');
                    parent.addClass('ready');
                }
            });
        });
        jQuery(document).on( 'nfFormReady', function( e, layoutView ) {
            $("#nf-field-4").prop("type", "submit");
        });
    </script>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WWJGQMC');</script>
    <!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WWJGQMC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) --> 

    <?php do_action('sydney_before_site'); //Hooked: sydney_preloader() ?>

    <div id="page" class="hfeed site">
        <div class="header-clone"></div>
        <header id="masthead" class="siteHeader" role="banner">
            <div id="promocode">
                <p>Masz <span class="amount">wczytywanie</span><span class="type"></span> zniżki na <span class="na">swoje pierwsze zamówienie</span>.<font> Całość zostanie doliczona w koszyku.</font></p>
            </div>
            <div class="siteHeader__wrap container">
                <div class="siteHeader__logo">
                    <?php if ( get_theme_mod('site_logo') ) : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>" class="dir"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
                    <?php if ( is_home() && !is_front_page() ) : ?>
                    <h1 class="site-title screen-reader-text"><?php bloginfo( 'name' ); ?></h1>
                    <?php endif; ?>
                    <?php else : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                    <?php endif; ?>
                </div>
                <div class="siteHeader__menu">
                    <a href="https://zamowienie.psibufet.pl/" class="btn dir"><span>Zamów</span></a>
                    <div class="btnMenu">
                        <div class="line" style="width:100%;height:2px;background-color:#f15748;"></div>
                        <div class="line" style="width:100%;height:2px;background-color:#f15748;"></div>
                        <div class="line" style="width:100%;height:2px;background-color:#f15748;"></div>
                    </div>
                    <nav id="mainnav" class="mainnav" role="navigation">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback' ) ); ?>
                    </nav><!-- #site-navigation -->
                </div>
            </div>
            <div class="mobileNav">
                <div class="mobileNav__logo">
                    <img src="<?php echo esc_url(get_theme_mod('site_logo')); ?>"/>
                </div>
                <div class="mobileNav__menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'mobile' ) ); ?>
                </div>
            </div>
        </header><!-- #masthead -->

        <div id="content" class="page-wrap">