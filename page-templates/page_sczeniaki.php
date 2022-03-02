<?php
/*
 *  Template Name: LP - Szczeniaki
 */
get_header(); ?>

<main class="psibufet psibufet--szczeniaki">
    <header class="pupHeader">
        <div class="pupHeader__wrap">
            <h1>ZDROWIE W MISCE TWOJEGO SZCZENIAKA</h1>
            <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span>Stwórz dietę</span></a>
        </div>
    </header>

    <section class="homeReviews homeReviews--nomargin">
        <?php if( have_rows('after_header_logos', 5) ): ?>
        <ul class="slideul">
            <?php while( have_rows('after_header_logos', 5) ): the_row();
                $image = get_sub_field('logos_img');
                $content = get_sub_field('logos_content');
                $google = get_sub_field('google_slide');
                $googleRate = get_sub_field('google_rate');
            ?>
                <div class="homeReviews__logo">
                    <div class="logo">
                        <img src="<?php echo $image; ?>"/>
                    </div>
                    <?php if( $content ): ?>
                    <p>“<?php echo $content; ?>”</p>
                    <?php endif; ?>
                    <?php if( $google ): ?>
                        <div class="stars">
                            <img src="/wp-content/themes/psibufet/images/reviews/star.svg" class="no-lazyload"/>
                            <img src="/wp-content/themes/psibufet/images/reviews/star.svg" class="no-lazyload"/>
                            <img src="/wp-content/themes/psibufet/images/reviews/star.svg" class="no-lazyload"/>
                            <img src="/wp-content/themes/psibufet/images/reviews/star.svg" class="no-lazyload"/>
                            <img src="/wp-content/themes/psibufet/images/reviews/star.svg" class="no-lazyload"/>
                        </div>
                        <p><?php echo $googleRate; ?>/5 wg opinii klientów</p>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>
    </section>

    <?php if(get_field('pupInfo')): ?>
    <section class="pupInfo">
        <div class="pupInfo__heading">
            <h2 class="getMarker">Żywienie pieska jest ważne od <span class="marker">pierwszych</span> tygodni życia!</h2>
        </div>
        <div class="pupInfo__wrap container">
            <?php while(have_rows('pupInfo')): the_row(); ?>
            <div class="pupInfo__box">
                <div class="thumb">
                    <img src="<?php echo get_sub_field('pupInfo_image'); ?>"/>
                </div>
                <div class="content">
                    <?php echo get_sub_field('pupInfo_content'); ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="pupInfo__cta">
            <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span>Wypróbuj</span></a>
        </div>
    </section>
    <?php endif; ?>

    <section class="pupReviews">
        <div class="pupReviews__heading">
            <h2 class="getMarker"><span class="marker">Psiedszkole</span> PsiBufet</h2>
        </div>
        <div class="pupReviews__list">
            <?php while(have_rows('pupReviews')): the_row();
                $name = get_sub_field('pupReviews_name');
                $stars = get_sub_field('pupReviews_stars');
                $review = get_sub_field('pupReviews_review');
            ?>
            <div class="pupReviews__box">
                <p class="name"><?php echo $name; ?></p>
                <div class="stars">
                    <?php for($i = 0; $i < $stars; $i++): ?>
                    <div class="stars__star">
                        <img src="<?php echo get_template_directory_uri() . '/images/szczeniaki/review_star.svg'; ?>"/>
                    </div>
                    <?php endfor; ?>
                </div>
                <p class="review">"<?php echo $review; ?>"</p>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="pupReviews__cta">
            <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span>Zamów i dołącz</span></a>
        </div>
    </section>

    <section class="saleMiska animateMiska">
        <div class="saleMiska__heading">
            <h2 class="getMarker">Dlaczego PsiBufet jest dobry dla <span class="marker">szczeniaka</span>?</h2>
        </div>
        <div class="saleMiska__wrap">
            <div class="saleMiska__miska">
                <div class="ba_img before"></div>
                <div class="ba_img after"></div>
            </div>
            <div class="saleMiska__usp">
                <img class="usp" src="<?php echo get_template_directory_uri() . '/images/szczeniaki/info_usp/usp_all.svg'; ?>"/>
                <img class="arrows" src="<?php echo get_template_directory_uri() . '/images/lpsale/salemiska_arrows.svg'; ?>"/>
            </div>
            <div class="saleMiska__uspMobile">
                <div class="box">
                    <div class="box__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/szczeniaki/info_usp/info_usp02.svg'; ?>"/>
                    </div>
                    <p>Porcja rośnie razem<br/>z pieskiem</p>
                </div>
                <div class="box">
                    <div class="box__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/szczeniaki/info_usp/info_usp01.svg'; ?>"/>
                    </div>
                    <p>Dla piesków wszystkich<br/>rozmiarów</p>
                </div>
                <div class="box">
                    <div class="box__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/szczeniaki/info_usp/info_usp03.svg'; ?>"/>
                    </div>
                    <p>Idealne dopasowanie<br/>do wieku</p>
                </div>
                <div class="box">
                    <div class="box__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/szczeniaki/info_usp/info_usp06.svg'; ?>"/>
                    </div>
                    <p>Łatwe do podania<br/>w kilku posiłkach</p>
                </div>
            </div>
        </div>
        <div class="saleMiska__cta">
            <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span>Wypróbuj</span></a>
        </div>
    </section>

    <section class="pupAll">
        <div class="pupAll__heading">
            <h2 class="getMarker">Dla maluchów <span class="marker">wszystkich</span> ras</h2>
            <p>PsiBufet to świeżo gotowane jedzenie dla każdego pieska. Trzymiesięcznego maluszka (w razie wątpliwości skonsultuj się z weterynarzem) i rocznego młodziaka, miniaturki i olbrzyma, kundelka i psa rasowego. Zwierzaki wszystkich ras i wielkości jedzą PsiBufet ze smakiem!</p>
        </div>
    </section>

    <section class="pupUsp">
        <div class="pupUsp__heading">
            <h2 class="getMarker">Sprawdź, co <span class="marker">zyska</span> Twój szczeniak dzięki PsiBufet, gdy dorośnie!</h2>
        </div>
        <div class="pupUsp__list">
            <?php while(have_rows('pupUsp')): the_row(); ?>
            <div class="usp">
                <div class="usp__icon">
                    <img src="<?php echo get_sub_field('pupUsp_icon'); ?>"/>
                </div>
                <p><?php echo get_sub_field('pupUsp_text'); ?></p>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="pupUsp__cta">
            <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span>Wypróbuj</span></a>
        </div>
    </section>

    <?php if(get_field('howitworks_step', 5)): ?>
    <section class="homeHowitworks homeHowitworks--yellow homeHowitworks--nodog">
        <div class="homeHowitworks__wrap container">
            <h2 class="getMarker">Jak to <span class="marker">działa?</span></h2>
            <div class="homeHowitworks__steps">
                <?php while(have_rows('howitworks_step', 5)): the_row();
                    $icon = get_sub_field('howitworks_step_icon');
                    $title = get_sub_field('howitworks_step_title');
                    $content = get_sub_field('howitworks_step_content');
                ?>
                <div class="homeHowitworks__step">
                    <div class="image">
                        <img src="<?php echo $icon; ?>"/>
                    </div>
                    <div class="content">
                        <h3><?php echo get_row_index(); ?>. <?php echo $title; ?></h3>
                        <p><?php echo $content; ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span><?php the_field('front_howitworks_cta', 5) ?></span></a>
        </div>
    </section>
    <?php endif; ?>

    <section class="pbQuestions">
        <h2 class="pbQuestions__title getMarker">Masz <span class="marker">pytanie</span>?</h2>
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