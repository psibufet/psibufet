<?php
 /**
  * Template name: LP - Restauracje 
  */
get_header(); ?>

<main class="psibufet psibufet--restaurants">
    <section class="restHeader">
        <div class="restHeader__wrap">
            <h1>Restauracyjna jakość</h1>
            <p>Wypróbuj PsiBufet menu w restauracji<br/>w Twojej okolicy</p>
        </div>
        <a href="#page-continue" class="restHeader__scroll">
            <p>Dowiedz się więcej</p>
        </a>
    </section>
    <section class="restMap">
        <div class="restMap__heading">
            <h2 class="getMarker">PsiBufet <span class="marker">bliżej</span> Ciebie</h2>
            <p>Psietestuj naszą karmę w restauracjach oferujących specjalne menu dla psiaków lub porozmawiaj z naszym Partnerem o diecie PsiBufet.</p>
        </div>
        <div class="restMap__wrap container">
            <div class="restMap__map">
                <div class="clearfix"></div>
            </div>
            <div class="restMap__list mapList">
                <div class="mapList__heading">
                    <h3>Restauracje</h3>
                </div>
                <div class="mapList__content">
                    <div class="group group--active">
                        <div class="group__name">
                            <h4>Warszawa</h4>
                        </div>
                        <div class="group__list">
                            <p>Bota Bistro</p>
                            <p>ORZO pl. Konstytucji</p>
                            <p>ORZO Koneser</p>
                            <p>Bez słowa</p>
                        </div>
                    </div>
                    <div class="group">
                        <div class="group__name">
                            <h4>Kraków</h4>
                        </div>
                        <div class="group__list">
                            <p>Psikawka</p>
                            <p>Kawiarnia Czyżyk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="restMap__cta">
            <a href="https://zamowienie.psibufet.pl/" class="btn"><span>Zamów</span></a>
        </div>
    </section>

    <section class="restInstagram">
        <div class="restInstagram__wrap container">

        </div>
    </section>

    <section class="pbShortcuts">
        <h2 class="getMarker"><span class="marker">Poznaj</span> nas lepiej</h2>
        <div class="pbShortcuts__wrap">
            <a href="/jak-to-dziala" class="pbShortcuts__box" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_01.webp'; ?>');">
                <p class="title">Jak to działa?</p>
            </a>
            <a href="/nasze-przepisy" class="pbShortcuts__box" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_02.webp'; ?>');">
                <p class="title">Nasze przepisy</p>
            </a>
            <a href="/o-nas" class="pbShortcuts__box" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_03.webp'; ?>');">
                <p class="title">O nas</p>
            </a>
        </div>
    </section>

    <section class="homeReviews homeReviews--recipes">
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
                            <img src="/wp-content/themes/psibufet/images/reviews/star.svg"/>
                            <img src="/wp-content/themes/psibufet/images/reviews/star.svg"/>
                            <img src="/wp-content/themes/psibufet/images/reviews/star.svg"/>
                            <img src="/wp-content/themes/psibufet/images/reviews/star.svg"/>
                            <img src="/wp-content/themes/psibufet/images/reviews/star.svg"/>
                        </div>
                        <p><?php echo $googleRate; ?>/5 wg opinii klientów</p>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>
    </section>

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
            <a href="https://psibufet.pl/kontakt" class="btn btn--clear"><span>Skontaktuj się z nami</span></a>
        </div>
    </section>
</main>

<?php get_footer(); ?>