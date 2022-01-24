<?php

/*

Template Name: Kontakt

*/
	get_header();
?>

<div id="contact_page">
    <section class="contact_header">
        <div class="inner">
            <h1>Masz pytanie?</h1>
            <p class="lead">Odpowiedzi na najczęściej zadawane pytania znajdziesz w zakładce <a href="https://psibufet.pl/pomoc" class="dir">FAQ</a>.</p>
        </div>
        <a class="header_arrow" href="#first_section"><img src="/wp-content/themes/psibufet/images/chevron_down_white.svg"/></a>
    </section>
    <section class="contact_que">
        <h2>Nie znalazłeś odpowiedzi na Twoje pytanie?</h2>
        <p class="lead">Zadzwoń do nas lub napisz.</p>
        <div class="que_buttons">
            <div class="btn_tel">
                <p>+48 22 104 62 59</p>
            </div>
            <div class="btn_mail">
                <p>kontakt@psibufet.pl</p>
            </div>
        </div>
    </section>
    <section class="contact_form">
        <div class="container">
            <div class="heading">
                <h2>Formularz kontaktowy</h2>
            </div>
            <div class="form_box">
                <?php echo do_shortcode('[ninja_form id=2]'); ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>

