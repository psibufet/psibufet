<?php

/*

Template Name: O nas

*/
	get_header();
?>

<div id="about_page">
    <section class="about_header">
        <div class="inner">
            <h1><?php the_field('header_title'); ?></h1>
            <p class="lead"><?php the_field('header_desc'); ?></p>
        </div>
        <a class="header_arrow" href="#first_section"><img src="/wp-content/themes/psibufet/images/chevron_down_white.svg"/></a>
    </section>
    <section class="about_idea">
        <div class="container">
            <div class="inner">
                <h2>Skąd pomysł?</h2>
                <p><?php the_field('skad_pomysl_tekst'); ?></p>
            </div>
        </div>
    </section>
    <section class="about_story">
        <div class="inner">
            <h2>Nasza historia</h2>
            <img src="/wp-content/themes/psibufet/images/about/owner.png"/>
            <p>Nazywam się <b>Piotr Wawrysiuk</b> i jestem założycielem PsiBufet, miłośnikiem psów i zdrowego żywienia.<br/>Oto krótka historia firmy PsiBufet:</p>
        </div>
    </section>
    <section class="about_steps">
        <div class="step_1">
            <div class="left_image">
                <div class="inner">
                    <img src="/wp-content/themes/psibufet/images/about/step_1.jpg"/>
                </div>
                <p class="image_info">Dom rodzinny, Cisie k. Warszawy</p>
            </div>
            <div class="right_content">
                <div class="inner">
                    <h2>1. Rodzinny <span>start</span></h2>
                    <p><?php the_field('history_text_1'); ?></p>
                </div>
            </div>
        </div>
        <div class="step_2">
            <div class="right_image_mobile">
                <div class="inner">
                    <img src="/wp-content/themes/psibufet/images/about/step_2.jpg"/>
                </div>
                <p class="image_info">Targ, Warszawa</p>
            </div>
            <div class="left_content">
                <div class="inner">
                    <h2>2. <span>Odważne zmiany</span></h2>
                    <p><?php the_field('history_text_2'); ?></p>
                </div>
            </div>
            <div class="right_image">
                <div class="inner">
                    <img src="/wp-content/themes/psibufet/images/about/step_2.jpg"/>
                </div>
                <p class="image_info">Targ, Warszawa</p>
            </div>
        </div>
        <div class="step_3">
            <div class="images-mobile">
                <div class="left_image">
                    <div class="inner">
                        <img src="/wp-content/themes/psibufet/images/about/step_3-1.png"/>
                    </div>
                    <p class="image_info">The farmer’s dog, Nowy jork, usa</p>
                </div>
                <div class="center_content only-desktop">
                    <div class="inner">
                        <h2>3. Globalne <span>uznanie</span></h2>
                        <p><?php the_field('history_text_3'); ?></p>
                    </div>
                </div>
                <div class="right_image">
                    <div class="inner">
                        <img src="/wp-content/themes/psibufet/images/about/step_3-2.png"/>
                    </div>
                    <p class="image_info">butternut box, londyn, uk</p>
                </div>
            </div>
            <div class="center_content only-mobile">
                <div class="inner">
                    <h2>3. Globalne <span>uznanie</span></h2>
                    <p><?php the_field('history_text_3'); ?></p>
                </div>
            </div>
        </div>
        <div class="step_4">
            <div class="left_image">
                <div class="inner">
                    <img src="/wp-content/themes/psibufet/images/about/step_4_new_2.png"/>
                </div>
                <p class="image_info">kuchnia psibufet, warszawa</p>
            </div>
            <div class="right_content">
                <div class="inner">
                    <div class="text_wrap">
                        <h2>4. Dynamiczny <span>wzrost</span></h2>
                        <p><?php the_field('history_text_4'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about_contact">
        <div class="container">
            <div class="contact_heading">
                <h2>Chcesz nas poznać?</h2>
                <p>Dołącz do #psibufetgang</p>
            </div>
            <p class="info">Złóż zamówienie<br/>i przetestuj świeżą karmę PsiBufet!</p>
            <a href="https://psibufet.pl/serwis" class="check dir order"><span><?php the_field('about_join_cta'); ?></span></a>
        </div>
    </section>
</div>

<?php get_footer(); ?>

