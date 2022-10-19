<?php
/*
 *  Template name: Pies senior
 */
get_header(); ?>

<main class="psibufet psibufet--senior">
    <section class="seniorHeading" style="background-image: url('<?php the_field('seniorHeading_bg'); ?>');">
        <div class="seniorHeading__wrap">
            <h1><?php the_field('seniorHeading_title'); ?></h1>
            <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span>Stwórz dietę</span></a>
        </div>
        <a href="#page-continue" class="seniorHeading__scroll">
            <p>Dowiedz się więcej</p>
        </a>
    </section>
    <section id="page-continue" class="homeReviews homeReviews--nomargin">
        <?php if( have_rows('after_header_logos', 5) ): ?>
        <ul class="slideul">
            <?php while( have_rows('after_header_logos', 5) ): the_row();
                $image = get_sub_field('logos_img');
                $content = get_sub_field('logos_content');
                $google = get_sub_field('google_slide');
            ?>
                <div class="homeReviews__logo">
                    <div class="logo">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    </div>
                    <?php if( $content ): ?>
                    <p>“<?php echo $content; ?>”</p>
                    <?php endif; ?>
                    <?php if( $google ): ?>
                        <div class="stars">
                            <img src="/wp-content/themes/psibufet/images/reviews/star.svg"/>
                            <img src="/wp-content/themes/psibufet/images/reviews/star.svg"/>
                            <img src="/wp-content/themes/psibufet/images/reviews/star.svg"/>
                            <img src="/wp-content/themes/psibufet/images/reviews/star.svg"/>
                            <img src="/wp-content/themes/psibufet/images/reviews/star.svg"/>
                        </div>
                        <p>4,9/5 wg opinii klientów</p>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>
    </section>

    <section class="seniorDogs">
        <div class="seniorDogs__wrap container">
            <div class="seniorDogs__heading">
                <h2 class="getMarker">Zdrowe żywienie jest ważne w <span class="marker">każdym</span> wieku</h2>
            </div>
            <div class="seniorDogs__boxes">
                <?php while(have_rows('seniorDogs')): the_row(); ?>
                <div class="box">
                    <div class="box__thumb">
                        <img data-original="<?php echo get_sub_field('seniorDogs_image')['url']; ?>" alt="<?php echo get_sub_field('seniorDogs_image')['alt']; ?>" class="no-lazyload"/>
                    </div>
                    <div class="box__content">
                        <?php echo get_sub_field('seniorDogs_content'); ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="seniorDogs__cta">
                <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span>Wypróbuj</span></a>
            </div>
        </div>
    </section>
    
    <section class="seniorReviews">
        <div class="seniorReviews__wrap container">
            <div class="seniorReviews__heading">
                <h2 class="getMarker"><span class="marker">Seniorzy</span> PsiBufet</h2>
            </div>
            <div class="seniorReviews__list">
                <?php while(have_rows('seniorReviews')): the_row();
                    $author = get_sub_field('seniorReviews_author');
                    $stars = get_sub_field('seniorReviews_stars');
                    $content = get_sub_field('seniorReviews_content');
                ?>
                <div class="seniorReviews__review">
                    <h3 class="author"><?php echo $author; ?></h3>
                    <div class="stars">
                    <?php for($i = 0; $i < $stars; $i++): ?>
                        <div class="stars__star">
                            <img data-original="<?php echo get_template_directory_uri() . '/images/szczeniaki/review_star.svg'; ?>" class="no-lazyload"/>
                        </div>
                        <?php endfor; ?>
                    </div>
                    <div class="content">
                        <?php echo $content; ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="seniorReviews__cta">
                <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span>Zamów i dołącz</span></a>
            </div>
        </div>
    </section>

    <section class="calcMiska">
        <div class="calcMiska__wrap container">
            <h2 class="getMarker">Dlaczego PsiBufet jest dobry dla <span class="marker">starszego</span> psa?</h2>

            <div class="calcMiska__miskaWrap animateMiska">
                <div class="calcMiska__miska">
                    <div class="ba_img before"></div>
                    <div class="ba_img after"></div>
                </div>
                <div class="calcMiska__usp">
                    <img class="usp" src="<?php echo get_template_directory_uri() . '/images/lpsale/salemiska_usp.svg'; ?>"/>
                    <img class="arrows" src="<?php echo get_template_directory_uri() . '/images/lpsale/salemiska_arrows.svg'; ?>"/>
                </div>
                <div class="calcMiska__uspMobile">
                    <div class="box">
                        <div class="box__thumb">
                            <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/jagnie_z_gor.svg'; ?>"/>
                        </div>
                        <p>Jakość<br/>Human-Grade</p>
                    </div>
                    <div class="box">
                        <div class="box__thumb">
                            <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/ikonki_zbilansowane.svg'; ?>"/>
                        </div>
                        <p>Zbilansowany,<br/>pełnoporcjowy skład</p>
                    </div>
                    <div class="box">
                        <div class="box__thumb">
                            <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/kurczak_classic.svg'; ?>"/>
                        </div>
                        <p>Zero ulepszaczy</p>
                    </div>
                    <div class="box">
                        <div class="box__thumb">
                            <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/wpolsce.svg'; ?>"/>
                        </div>
                        <p>Bezzbożowe,<br/>monobiałkowe</p>
                    </div>
                </div>
            </div>
            <a href="<?php echo home_url('/nasze-przepisy'); ?>" class="btn btn--center btn--clear"><span>Dowiedz się więcej</span></a>
        </div>
    </section>

    <section class="seniorInfo">
        <div class="seniorInfo__wrap">
            <div class="seniorInfo__heading">
                <h2 class="getMarker">Dla seniorów <span class="marker">wszystkich</span> ras</h2>
                <p><?php echo get_field('seniorInfo_content'); ?></p>
            </div>
        </div>
    </section>

    <section class="seniorUSP">
        <div class="seniorUSP__wrap container">
            <div class="seniorUSP__heading">
                <h2 class="getMarker">Sprawdź, co <span class="marker">zyska</span> Twój senior dzięki PsiBufet!</h2>
            </div>
            <div class="seniorUSP__list">
                <?php while(have_rows('seniorUSP')): the_row();
                    $icon = get_sub_field('seniorUSP_icon');
                    $text = get_sub_field('seniorUSP_content');
                ?>
                <div class="pos">
                    <div class="pos__icon">
                        <img data-original="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>" class="no-lazyload"/>
                    </div>
                    <h3><?php echo $text; ?></h3>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="seniorUSP__cta">
                <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span>Wypróbuj</span></a>
            </div>
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
                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>"/>
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