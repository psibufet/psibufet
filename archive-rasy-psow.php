<?php
/**
 * The template for displaying rasy-psow.
 */

get_header(); ?>

<main class="psibufet psibufet--rasycategory">
    <header class="rascatHeader">
        <div class="rascatHeader__wrap">
            <h1>Rasy psów</h1>
        </div>
    </header>
    <section class="rascatBanner">
        <div class="rascatBanner__wrap">
            <a href="<?php echo get_field('rasaArchive_banner_url', 'cpt_rasy-psow_ustawienia'); ?>">
                <img class="desktop" src="<?php echo get_field('rasaArchive_banner', 'cpt_rasy-psow_ustawienia')['url']; ?>" alt="<?php echo get_field('rasaArchive_banner', 'cpt_rasy-psow_ustawienia')['alt']; ?>"/>
                <img class="mobile" src="<?php echo get_field('rasaArchive_banner_mobile', 'cpt_rasy-psow_ustawienia')['url']; ?>" alt="<?php echo get_field('rasaArchive_banner_mobile', 'cpt_rasy-psow_ustawienia')['alt']; ?>"/>
            </a>
        </div>
    </section>
    <section class="rascatList">
        <div class="rascatList__wrap">
            <?php while ( have_posts() ) : the_post(); ?>
                <a class="rasaPost" href="<?php the_permalink(); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                    <h2><?php the_title(); ?></h2>
                </a>
            <?php endwhile; ?>
        </div>
    </section>
    <section class="pbQuestions">
        <h2 class="pbQuestions__title getMarker getMarker--lower">Masz <span class="marker">pytanie</span>?</h2>
        <div class="pbQuestions__wrap">
            <div class="pbQuestions__images">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/questionSection/quesec_01.png'; ?>"/>
                </div>
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/questionSection/quesec_02.png'; ?>"/>
                </div>
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/questionSection/quesec_03.png'; ?>"/>
                </div>
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/questionSection/quesec_04.png'; ?>"/>
                </div>
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/questionSection/quesec_05.png'; ?>"/>
                </div>
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/questionSection/quesec_06.png'; ?>"/>
                </div>
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/questionSection/quesec_07.png'; ?>"/>
                </div>
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/questionSection/quesec_08.png'; ?>"/>
                </div>
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/questionSection/quesec_09.png'; ?>"/>
                </div>
            </div>
            <a href="https://psibufet.pl/pomoc" class="btn btn--clear"><span>Skontaktuj się z nami</span></a>
        </div>
    </section>
</main>


<?php get_footer(); ?>