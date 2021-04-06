<?php

/*

Template Name: Pracuj w PsiBufet

*/
	get_header();
?>

<div id="carrer_page">
    <section class="carrer_header">
        <div class="inner">
            <h1><?php the_field('page_carrer_heading_title'); ?></h1>
            <p class="lead"><?php the_field('page_carrer_heading_content'); ?></p>
        </div>
        <a class="header_arrow" href="#first_section"><img src="/wp-content/themes/psibufet/images/chevron_down_white.svg"/></a>
    </section>
    <section class="carrer_about">
        <div class="container">
            <div class="inner">
                <h2><?php the_field('page_carrer_about_title'); ?></h2>
                <p><?php the_field('page_carrer_about_text'); ?></p>
            </div>
        </div>
    </section>
    <section class="carrer_offer_list">
        <div class="container">
            <h2>Aktualne <font>oferty pracy</font></h2>
            <div class="front_faq">
                <?php if( have_rows('offer_list') ): ?>
                <div class="faq_list sec">
                    <?php while( have_rows('offer_list') ): the_row(); 
                        $name = get_sub_field('offer_list_job_name');
                        $group = get_sub_field('offer_list_job_group');
                        $location = get_sub_field('offer_list_job_location');
                    ?>
                    <div class="question close">
                        <span class="btn">
                            <img src="/wp-content/themes/psibufet/images/chevron_down.svg"/>
                        </span>
                        <div class="que_heading">
                            <div class="title">
                                <p><?php echo $name; ?></p>
                                <span><?php echo $group; ?></span>
                            </div>
                            <div class="location">
                                <p><?php echo $location; ?></p>
                            </div>
                        </div>
                        <div class="que_content">
                        <?php if( have_rows('offer_list_job_descwrap') ): ?>
                            <div class="descwrap">
                                <?php while( have_rows('offer_list_job_descwrap') ): the_row();
                                    $descwrap_title = get_sub_field('offer_list_job_descwrap_title');
                                    $descwrap_content = get_sub_field('offer_list_job_descwrap_content');
                                ?>
                                <div class="descwrap_content">
                                    <h3><?php echo $descwrap_title; ?></h3>
                                    <?php echo $descwrap_content; ?>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                            <div class="contact">
                                <h2>CV wraz z nazwą stanowiska wyślij na:</h2>
                                <div class="btn_mail">
                                    <p>praca@psibufet.pl</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>

