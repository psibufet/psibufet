<?php
    /**
     * Template name: Terms
     */
get_header(); ?>

<main class="psibufet psibufet--terms">
    <section class="termsHeading" style="background-color: <?php echo get_field('term_color'); ?>;">
        <div class="termsHeading__wrap container">
            <h1><?php echo get_field('term_title'); ?></h1>
        </div>
    </section>
    <section class="termsContent">
        <div class="termsContent__wrap">
            <?php while(have_rows('term_content')): the_row(); ?>
            <div class="termsContent__row">
                <h2><?php echo get_sub_field('paragraph_title'); ?></h2>
                <?php echo get_sub_field('paragraph_content'); ?>
            </div>
            <?php endwhile; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>