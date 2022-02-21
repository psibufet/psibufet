<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Sydney
 */

get_header(); ?>
<!-- <style type="text/css">
    .preloader{
        display: flex !important;
        opacity: 1 !important;
    }
</style> -->
<div class="page404">
    <div class="page404__wrap container">
        <h1>Ups...<br/>Coś poszło nie tak</h1>
        <p>Sprawdź poprawność adresu lub wróć do strony głównej</p>
        <a href="<?php echo home_url(); ?>" class="btn btn--back btn--center"><span>Wróć do strony głównej</span></a>
    </div>
    <img class="doggie" src="<?php echo get_template_directory_uri() . '/images/404/doggie_404.png'; ?>"/>
</div>

<?php get_footer(); ?>
