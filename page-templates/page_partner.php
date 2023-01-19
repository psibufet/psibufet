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
                <a href="#partnerJoin" class="btn btn--center dir"><span>Dołącz teraz</span></a>
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
                        <img src="<?php echo $ico['url']; ?>" alt="<?php echo $ico['alt']; ?>"/>
                    </div>
                    <p><?php echo $content; ?></p>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <section class="partnerJoin" id="partnerJoin">
        <div class="partnerJoin__wrap">
            <div class="partnerJoin__form" error-count="0">
                <div class="formHeading">
                    <h3><?php the_field('partnerJoin_title'); ?></h3>
                    <p><?php the_field('partnerJoin_content'); ?></p>
                </div>
                <div class="feedback"><p></p></div>
                <form class="form" method="POST" autocomplete="nope">
                    <div class="form__row form__row--dropdown">
                        <label>Rodzaj działalności</label>
                        <input type="text" class="form__input form__input--noaction" name="partnerType" autocomplete="off"/>
                        <div class="form__dropdown">
                            <p value="restauracja">Restauracja</p>
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
                        <input type="text" class="form__input" name="partnerCompany" autocomplete="nope"/>
                    </div>
                    <div class="form__row">
                        <label>Adres e-mail</label>
                        <input type="email" class="form__input" name="partnerEmail" autocomplete="nope"/>
                    </div>
                    <div class="form__row">
                        <label>Numer telefonu</label>
                        <input type="number" class="form__input" name="partnerPhone" autocomplete="nope"/>
                    </div>
                    <div class="form__row form__row--textarea">
                        <label>Kilka słów o Tobie</label>
                        <textarea class="form__input form__input--textarea" name="partnerAbout" autocomplete="nope"></textarea>
                    </div>
                    <div class="form__submit">
                        <button type="submit" class="btn btn--button btn--center"><span>Dołącz teraz</span></button>
                    </div>
                    <div class="form__info">
                        <p>Klikając “Dołącz teraz” wyrażasz zgodę na przetwarzanie danych osobowych przez Feedwell zgodnie z <a href="https://psibufet.pl/polityka-prywatnosci" target="_blank">Polityką prywatności</a> w celu obsługi Twojego zgłoszenia oraz zaprezentowania oferty programu partnerskiego Feedwell.</p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>