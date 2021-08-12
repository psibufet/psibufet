<?php

/*

Template Name: Karmimy Psiaki

*/
get_header();
?>

<div id="kp_page">
    <div class="kp_header" style="background-image: url(<?php the_field('header_bg'); ?>)">
        <div class="inner">
            <img src="<?php the_field('header_logo'); ?>"/>
        </div>
    </div>
    <div class="kp_content">
        <div class="container">
            <div class="gang_photo">
                <img src="/wp-content/themes/psibufet/images/gang_wszyscy.svg"/>
                <img src="/wp-content/themes/psibufet/images/kp/logo_white_ps.svg" style="max-width: 210px;"/>
            </div>
            <h2><?php the_field('content_title'); ?></h2>
            <p><?php the_field('content_text'); ?></p>
            <div class="boxes">
                <div class="box">
                    <div class="inner">
                        <h3><?php the_field('box_1_title'); ?></h3>
                        <p><?php the_field('box_1_content'); ?></p>
                        <img src="<?php the_field('box_1_ico'); ?>"/>
                    </div>
                </div>
                <div class="box">
                    <div class="inner">
                        <h3><?php the_field('box_2_title'); ?></h3>
                        <p><?php the_field('box_2_content'); ?></p>
                        <img src="<?php the_field('box_2_ico'); ?>"/>
                    </div>
                </div>
            </div>
            <div class="logos">
                <img src="/wp-content/themes/psibufet/images/kp/logo_white_ps.svg" data="first"/>
                <hr/>
                <img src="/wp-content/themes/psibufet/images/kp/logo_kp.png" data="last"/>
            </div>
        </div>
    </div>
    <div class="kp_info">
        <img src="/wp-content/themes/psibufet/images/kp/info_divider.png" data-attribute="divider"/>
        <section class="about_contact">
            <div class="container">
                <div class="contact_heading">
                    <h2>Chcesz nas poznać?</h2>
                    <p>Dołącz do #psibufetgang</p>
                </div>
                <p class="info">Złóż zamówienie<br/>i przetestuj świeżą karmę PsiBufet!</p>
                <a href="https://psibufet.pl/serwis" class="check dir">Wypróbuj</a>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>