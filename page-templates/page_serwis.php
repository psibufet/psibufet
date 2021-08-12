<?php
    /*
     *  Template Name: Serwis
     */
get_header(); ?>

<main class="psibufet psibufet--serwis">
    <header class="serwisHeader">
        <img src="<?php echo get_template_directory_uri() . '/images/lpsale/psibufet_logo_lp.svg'; ?>"/>
    </header>
    <section class="pageSerwis">
        <div class="pageSerwis__wrap">
            <img src="<?php echo get_template_directory_uri() . '/images/maintenace_dog.svg'; ?>"/>
            <p>Ze względu na prace techniczne <b>chwilowo</b> nie można złożyć zamówienia.<br/>Zachęcamy do ponowienia próby <b>rano</b>. Przepraszamy za zaistniały kłopot.</p>
            <a href="<?php echo home_url(); ?>" class="btn"><span>Wróć do strony głównej</span></a>
        </div>
    </section>
</main>

<?php get_footer(); ?>