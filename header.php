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
    <meta property="og:image" content="https://psibufet.pl/wp-content/uploads/2021/09/OpenGraph.png">
    <meta name="twitter:image" content="https://psibufet.pl/wp-content/uploads/2021/09/OpenGraph.png">
    <meta name="google-site-verification" content="B1JDlnRHMgXy8VBU1fSK5tGioGEekdBYnM9lVlfW-kI" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php if(!is_front_page()): ?>
        <link rel="stylesheet" href="/wp-content/themes/psibufet/css/custom.css?ver=1.1.5" />
    <?php endif; ?>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAihhg2fnZvuAF6biw73IE-A2WX0nosQk"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js" defer></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js" defer></script>
    <script type="text/javascript" src="/wp-content/themes/psibufet/plugins/gsap/gsap.min.js"></script>
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
    <?php if ( get_theme_mod('site_favicon') ) : ?>
    <link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
    <?php endif; ?>
    <?php endif; ?>

    <?php wp_head(); ?>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-56FMXQ3');</script>
    <!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-56FMXQ3"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) --> 

    <?php do_action('sydney_before_site'); //Hooked: sydney_preloader() ?>

    <div id="page" class="hfeed site">
        <a href="https://zamowienie.psibufet.pl/" id="promocode" class="dir">
            <p><span class="amount">wczytywanie</span><span class="type"></span><span class="na">na pierwsze zamówienie</span>! <font>Odbierz</font></p>
        </a>
        <div class="header-clone"></div>
        <header id="masthead" class="siteHeader" role="banner">
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
                        <div class="mainnav__actions">
                            <div class="menuAction menuAction--login login menu_dir">
                                <a href="https://panel.psibufet.pl/"><span>Zaloguj się</span></a>
                            </div>
                            <div class="menuAction menuAction--order order menu_dir">
                                <a href="https://zamowienie.psibufet.pl/"><span>Zamów</span></a>
                            </div>
                        </div>
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
            <?php include get_template_directory() . '/template-parts/_blackWeek.php'; ?>
        </header><!-- #masthead -->

        <div id="content" class="page-wrap">