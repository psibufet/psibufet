<?php
/*
 *  Template name: Program ambasador
 */
get_header(); ?>

<style type="text/css">
    @media (max-width: 767px){
        .partnerHeading{
            background-image: url('<?php the_field('partnerHeading_bg_mobile'); ?>') !important;
        }
    }
</style>

<main class="psibufet psibufet--partner">
    <section class="partnerHeading" style="background-image: url('<?php the_field('partnerHeading_bg'); ?>');">
        <div class="partnerHeading__wrap">
            <h1><?php the_field('partnerHeading_title'); ?></h1>
            <p><?php the_field('partnerHeading_content'); ?></p>
        </div>
    </section>
    <section class="partnerInfo">
        <div class="partnerInfo__wrap container">
            <div class="partnerInfo__content">
                <h2 class="getMarker"><?php the_field('partnerInfo_title'); ?></h2>
                <p><?php the_field('partnerInfo_content') ?></p>
                <a href="#" class="btn btn--center dir"><span>Dołącz teraz</span></a>
            </div>
        </div>
    </section>
    <section class="partnerSteps">
        <div class="partnerSteps__wrap container">
            <h2 class="getMarker">Jak to <span class="marker">działa?</span></h2>
            <div class="partnerSteps__steps">
                <?php while(have_rows('partnerSteps')): the_row();
                    $ico = get_sub_field('partnerSteps_ico');
                    $content = get_sub_field('partnerSteps_content');
                ?>
                <div class="partnerSteps__step">
                    <div class="position"><?php echo get_row_index(); ?>.</div>
                    <div class="image">
                        <img src="<?php echo $ico; ?>"/>
                    </div>
                    <p><?php echo $content; ?></p>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <section class="partnerJoin">
        <div class="partnerJoin__wrap">
            <div class="partnerJoin__form" error-count="0">
                <div class="formHeading">
                    <h3>Dołącz do programu partnerskiego</h3>
                    <p>Uzupełnij formularz, skontaktujemy się z Tobą w celu weryfikacji oraz dodania do programu. Wszelkie pytania i wątpliwości możesz kierować na adres mailowy <a href="mailto:michalina@psibufet.pl">michalina@psibufet.pl</a>.</p>
                </div>
                <form class="form" method="POST" autocomplete="off">
                    <div class="form__row form__row--dropdown">
                        <label>Rodzaj działalności</label>
                        <input type="text" class="form__input form__input--noaction" name="partnerType" autocomplete="off"/>
                        <div class="form__dropdown">
                            <p value="sklep-z-akcesoriami-dla-psow">Sklep z akcesoriami dla psów</p>
                            <p value="groomer">Groomer</p>
                            <p value="trener">Trener</p>
                            <p value="behawiorysta">Behawiorysta</p>
                            <p value="hodowca">Hodowca</p>
                            <p value="psi-blog">Psi blog</p>
                            <p value="hotel-dla-psów">Hotel dla psów</p>
                            <p value="inna">Inna</p>
                        </div>
                    </div>
                    <div class="form__row">
                        <label>Nazwa firmy</label>
                        <input type="text" class="form__input" name="partnerCompany" autocomplete="off"/>
                    </div>
                    <div class="form__row">
                        <label>Adres e-mail</label>
                        <input type="email" class="form__input" name="partnerEmail" autocomplete="off"/>
                    </div>
                    <div class="form__row">
                        <label>Numer telefonu</label>
                        <input type="number" class="form__input" name="partnerPhone"/>
                    </div>
                    <div class="form__submit">
                        <button type="submit" class="btn btn--button btn--center"><span>Dołącz teraz</span></button>
                    </div>
                </form>
                <div class="feedback"></div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>