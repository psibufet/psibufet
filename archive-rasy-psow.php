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
                <?php
                    $featured = '';
                    if(get_field('raspost_featured')){
                        $featured = get_field('raspost_featured')['url'];
                    }else{
                        $featured = get_the_post_thumbnail_url();
                    }
                ?>
                <a class="rasaPost" href="<?php the_permalink(); ?>">
                    <div class="rasaPost__image" style="background-image: url('<?php echo $featured; ?>');">
                        <h2><?php the_title(); ?></h2>
                    </div>
                </a>
            <?php endwhile; ?>
        </div>
        <?php if(get_field('seo_desc', 'cpt_rasy-psow_ustawienia')): ?>
        <div class="rascatList__desc container">
            <?php echo get_field('seo_desc', 'cpt_rasy-psow_ustawienia'); ?>
        </div>
        <?php endif; ?>
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
            <div class="pbQuestions__images pbQuestions__images--mobile">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/questionSection/quesec_08.png'; ?>"/>
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
                    <img src="<?php echo get_template_directory_uri() . '/images/questionSection/quesec_09.png'; ?>"/>
                </div>
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/questionSection/quesec_04.png'; ?>"/>
                </div>
            </div>
            <a href="https://psibufet.pl/pomoc" class="btn btn--clear"><span>Skontaktuj się z nami</span></a>
        </div>
    </section>
</main>


<?php get_footer(); ?>