<?php

/*

Template Name: Pracuj w PsiBufet

*/
	get_header();
?>

<main class="psibufet psibufet--carrer" id="carrer_page">
    <section class="carrerHeader">
        <div class="carrerHeader__wrap">
            <h1><?php the_field('page_carrer_heading_title'); ?></h1>
            <!-- <p class="lead"><?php the_field('page_carrer_heading_content'); ?></p> -->
        </div>
        <a class="carrerHeader__arrow" href="#offers">
            <span>Sprawdź oferty pracy</span>
        </a>
    </section>
    <section class="carrerAbout">
        <div class="carrerAbout__wrap container">
            <h2><?php the_field('page_carrer_about_title'); ?></h2>
            <p><?php the_field('page_carrer_about_text'); ?></p>
        </div>
    </section>
    <section class="carrerOffers" id="offers">
        <div class="carrerOffers__wrap container">
            <div class="carrerOffers__heading">
                <h2 class="getMarker">Aktualne <span class="marker">oferty</span> pracy</h2>
            </div>
            <?php if( have_rows('offer_list') ): ?>
            <div class="carrerOffers__list">
                <?php while( have_rows('offer_list') ): the_row(); 
                    $name = get_sub_field('offer_list_job_name');
                    $group = get_sub_field('offer_list_job_group');
                    $location = get_sub_field('offer_list_job_location');
                    $url = get_sub_field('offer_list_job_url');
                ?>
                <div class="offer">
                    <div class="offer__info">
                        <h3><?php echo $name; ?></h3>
                        <p class="group"><?php echo $group; ?></p>
                        <p class="location"><?php echo $location; ?></p>
                    </div>
                    <div class="offer__btn">
                        <a href="<?php echo $url; ?>" target="_blank" class="btn btn--medium"><span>Zobacz ofertę</span></a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php else: ?>
            <div class="carrerOffers__notfound">
                <p>Aktualnie nie posiadamy żadnych ofert pracy.</p>
            </div>
            <?php endif; ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>

