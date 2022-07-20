<?php
    /**
     * Template name: Przerwa techniczna
     */
get_header(); ?>

<main class="psibufet psibufet--maintenance">
    <div class="maintenance__bar">
        <img src="<?php echo get_template_directory_uri() . '/images/lpsale/psibufet_logo_lp.svg'; ?>"/>
    </div>
    <section class="maintenance">
        <div class="maintenance__wrap">
            <img src="<?php echo get_template_directory_uri() . '/images/vectors/maintenance_dog.svg'; ?>"/>
            <p>Ze względu na prace techniczne <b>chwilowo</b> nie można złożyć zamówienia. <br/>Zachęcamy do ponowienia próby <b>rano</b>. Przepraszamy za zaistniały kłopot.</p>
            <a href="https://psibufet.pl/" class="btn btn--center"><span>Wróć do strony głównej</span></a>
        </div>
    </section>
</main>

<?php get_footer(); ?>