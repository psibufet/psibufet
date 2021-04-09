<?php
/*
Template Name: Front Page
*/

get_header(); ?>

<main class="pbpage pbpage--frontpage">
    <section class="homeHeader" style="background-image: url('/wp-content/themes/psibufet/images/header_img.png');">
        <div class="homeHeader__wrap">
            <div class="homeHeader__content">
                <h2>Świeże spojrzenie na psie jedzenie</h2>
                <div class="tags">
                    <div><p>Naturalne składniki</p></div>
                    <div><p>Idealna porcja</p></div>
                    <div><p>Dostawa pod drzwi</p></div>
                </div>
                <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span><?php the_field('front_header_cta') ?></span></a>
            </div>
        </div>
        <a href="#page-continue" class="homeHeader__scroll">
            <p>Dowiedz się więcej</p>
        </a>
    </section>
    <section id="page-continue" class="homeReviews">
        <?php if( have_rows('after_header_logos') ): ?>
        <ul class="slideul">
            <?php while( have_rows('after_header_logos') ): the_row();
                $image = get_sub_field('logos_img');
                $content = get_sub_field('logos_content');
                $google = get_sub_field('google_slide');
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
                        <p>4,9/5 wg opinii klientów</p>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>
    </section>
    <section class="homeMiska container">
        <div class="homeMiska__left">
            <h2><font>Powiew świeżości</font> <span>w psiej misce</span></h2>
            <div class="content">
                <p>Czy wiesz, że karma z kurczakiem*, którą kupujesz swojemu psu może zawierać tylko 4% mięsa?*</p>
                <p><b>Uważamy, że psy zasługują na wiele więcej!</b> W trosce o zdrowie czworonogów, wspólnie z dietetykami zwierzęcymi stworzyliśmy <b>pełnoporcjowe karmy ze świeżych składników.</b></p>
                <p><b>To wszystko już od 6,90 zł dziennie!</b></p>
            </div>
            <p class="info">*według Kodeksu Dobrej Praktyki Etykietowania FEDIAF</p>
            <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span><?php the_field('front_uknow_cta') ?></span></a>
        </div>
        <div class="homeMiska__right">
            <div class="homeMiska__imageWrap">
                <div class="ba_img before"></div>
                <div class="ba_img after"></div>
            </div>
            <div class="homeMiska__review">
                <div class="stars">
                    <img src="/wp-content/themes/psibufet/images/reviews/star.svg"/>
                    <img src="/wp-content/themes/psibufet/images/reviews/star.svg"/>
                    <img src="/wp-content/themes/psibufet/images/reviews/star.svg"/>
                    <img src="/wp-content/themes/psibufet/images/reviews/star.svg"/>
                    <img src="/wp-content/themes/psibufet/images/reviews/star.svg"/>
                </div>
                <p><b>5</b> na <b>5</b> gwiazdek wg</p>
                <img class="logo" src="<?php echo get_template_directory_uri() . '/images/psypllogo.png'; ?>"/>
            </div>
        </div>
    </section>
    <section class="homeFoodinfo">
        <div class="homeFoodinfo__wrap container">
            <div class="homeFoodinfo__left">
                <div class="slidesWrap">
                    <div id="foodinfo_carousel" class="homeFoodinfo__slides">
                        <?php while( have_rows('slider_z_karmami') ): the_row(); 
                            $image = get_sub_field('karma_img');
                        ?>
                            <div class="homeFoodinfo__info" data="data_0<?php echo get_row_index(); ?>">
                                <img src="<?php echo $image; ?>"  class="no-lazyload"/>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="infoButtons">
                        <?php while( have_rows('slider_z_karmami') ): the_row(); 
                            $image = get_sub_field('karma_img');
                        ?>
                        <p class="infoButtons__button" data="data_0<?php echo get_row_index(); ?>"><img src="<?php echo get_template_directory_uri() . '/images/icons/info_icon_black.svg'; ?>"/>Zobacz skład</p>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="homeFoodinfo__right">
                <h2>Jedzenie, którego pozazdrościsz swojemu psu</h2>
                <p><b>55% mięsa oraz 45% warzyw i owoców, pełna suplementacja mineralno-witaminowa.</b><br/>Całość delikatnie gotowana na parze i pakowana próżniowo.</p>
                <div class="info_boxes">
                    <div class="box">
                        <img src="/wp-content/themes/psibufet/images/info_boxes/jagnie_z_gor.svg"/>
                        <p>Świeże, naturalne składniki</p>
                    </div>
                    <div class="box">
                        <img src="/wp-content/themes/psibufet/images/info_boxes/ikonki_zbilansowane.svg"/>
                        <p>Zbilansowany, pełnoporcjowy skład</p>
                    </div>
                    <div class="box">
                        <img src="/wp-content/themes/psibufet/images/info_boxes/kurczak_classic.svg"/>
                        <p>Zero konserwantów i dodatków</p>
                    </div>
                    <div class="box">
                        <img src="/wp-content/themes/psibufet/images/info_boxes/wpolsce.svg"/>
                        <p>Bezzbożowe</p>
                    </div>
                    <div class="box">
                        <img src="/wp-content/themes/psibufet/images/info_boxes/indyczy_kasek.svg"/>
                        <p>Idealna porcja</p>
                    </div>
                    <div class="box">
                        <img src="/wp-content/themes/psibufet/images/info_boxes/wolowe_love.svg"/>
                        <p>Ugotowane w Polsce</p>
                    </div>
                </div>
                <div class="expertInfo">
                    <div class="expertInfo__image">
                        <img src="<?php echo get_template_directory_uri() . '/images/expertphoto.png'; ?>"/>
                    </div>
                    <div class="expertInfo__content">
                        <p><b>Składy karm PsiBufet</b> zostały opracowane i zweryfikowane przez <b>Eksperta.</b></p>
                        <h4><span>dr inż.</span> Olga Lasek</h4>
                    </div>
                </div>
            </div>
        </div>
        <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span><?php the_field('front_foodinfo_cta') ?></span></a>
    </section>

    <?php if(get_field('howitworks_step')): ?>
    <section class="homeHowitworks">
        <div class="homeHowitworks__wrap container">
            <h2>Jak to <span>działa?</span></h2>
            <div class="homeHowitworks__steps">
                <?php while(have_rows('howitworks_step')): the_row();
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
            <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span><?php the_field('front_howitworks_cta') ?></span></a>
        </div>
    </section>
    <?php endif; ?>

    <div class="front_plan">
        <div class="container">
            <h2>Plan Psibufet to:</h2>
            <div class="boxes">
                <div class="box 1">
                    <div class="inner">
                        <img src="/wp-content/themes/psibufet/images/dog_paw.svg"/>
                        <p><b>Darmowa dostawa</b><br/>na terenie całej Polski</p>
                    </div>
                </div>
                <div class="box 2">
                    <div class="inner">
                        <img src="/wp-content/themes/psibufet/images/dog_paw.svg"/>
                        <p>Dowolna kompozycja<br/><b>smaków</b></p>
                    </div>
                </div>
                <div class="box 3">
                    <div class="inner">
                        <img src="/wp-content/themes/psibufet/images/dog_paw.svg"/>
                        <p><b>Elastyczne dostawy:</b><br/>wstrzymuj i przesuwaj</p>
                    </div>
                </div>
                <div class="box 4">
                    <div class="inner">
                        <img src="/wp-content/themes/psibufet/images/dog_paw.svg"/>
                        <p><b>Panel klienta:</b><br/>łatwe zarządzanie planem</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="front_price">
        <div class="container">
            <div class="left_content">
                <div class="inner">
                    <h2>Dedykowany plan, <span>indywidualna cena</span></h2>
                    <p>Nieprzypadkowo prosimy Cię o uzupełnienie informacji o Twoim psie. Potrzebujemy ich do przygotowania dopasowanego planu żywienia.<br/><br/>
                    Swoją cenę PsiBufet sprawdzisz w czasie rejestracji, gdy już dobrze poznamy Twojego pupila.</p>
                    <a href="https://zamowienie.psibufet.pl/" class="check dir"><span><?php the_field('front_price_cta') ?></span></a>
                </div>
            </div>
            <div class="right_price">
                <div class="price_info">
                    <div class="select_buttons">
                        <div class="button small active">
                            <img src="/wp-content/themes/psibufet/images/dog_small.svg"/>
                            <p>Mały</p>
                        </div>
                        <div class="button medium">
                            <img src="/wp-content/themes/psibufet/images/dog_medium.svg"/>
                            <p>Średni</p>
                        </div>
                        <div class="button large">
                            <img src="/wp-content/themes/psibufet/images/dog_big.svg"/>
                            <p>Duży</p>
                        </div>
                    </div>
                    <div class="price">
                        <div class="small active">
                            <h4>OD <span>6,90 ZŁ</span> / dzień</h4>
                            <p class="delivery">Darmowa dostawa! <img src="/wp-content/themes/psibufet/images/delivery.svg"/></p>
                        </div>
                        <div class="medium">
                            <h4>OD <span>12,50 ZŁ</span> / dzień</h4>
                            <p class="delivery">Darmowa dostawa! <img src="/wp-content/themes/psibufet/images/delivery.svg"/></p>
                        </div>
                        <div class="large">
                            <h4>OD <span>17,50 ZŁ</span> / dzień</h4>
                            <p class="delivery">Darmowa dostawa! <img src="/wp-content/themes/psibufet/images/delivery.svg"/></p>
                        </div>
                    </div>
                </div>
                <a href="https://zamowienie.psibufet.pl/" class="check mobile-only dir"><span><?php the_field('front_price_cta') ?></span></a>
            </div>
        </div>
    </div>
    <div class="front_testimonials">
        <div class="container">
            <h2>Opracowane przez dietetyków zwierzęcych, rekomendowane przez specjalistów i weterynarzy</h2>
            <div class="testimonial">
                <?php if( have_rows('testimonial_opinia') ): ?>
                <ul class="testi_slides">
                    <?php while( have_rows('testimonial_opinia') ): the_row(); 
                        $image = get_sub_field('testi_img');
                        $name = get_sub_field('testi_name');
                        $stanowisko = get_sub_field('testi_stanowisko');
                        $content = get_sub_field('testi_content');
                    ?>
                    <li class="slide">
                        <div class="inner">
                            <img src="<?php echo $image; ?>"/>
                            <p class="name"><?php echo $name; ?></p>
                            <?php if( $stanowisko ): ?>
                                <p class="lead"><?php echo $stanowisko; ?></p>
                            <?php endif; ?>
                            <p class="content">"<?php echo $content; ?>"</p>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
                <div class="nav">
                    <i class="arrow testi-prev"><img class="left" src="/wp-content/themes/psibufet/images/slider_arrow_l.svg"/></i>
                    <i class="arrow testi-next"><img class="right" src="/wp-content/themes/psibufet/images/slider_arrow_r.svg"/></i>
                </div>
            </div>
            <a href="https://zamowienie.psibufet.pl/" class="check dir"><span><?php the_field('front_testi_cta') ?></span></a>
        </div>
    </div>
    <div class="front_faq">
        <div class="container">
            <h2>Najczęściej zadawane pytania</h2>
            <?php if( have_rows('faq_list') ): ?>
            <div class="faq_list sec">
                <?php while( have_rows('faq_list') ): the_row(); 
                    $question = get_sub_field('faq_list_question');
                    $answer = get_sub_field('faq_list_answer');
                ?>
                <div class="question close">
                    <span class="btn">
                        <img src="/wp-content/themes/psibufet/images/chevron_down.svg"/>
                    </span>
                    <div class="que_heading">
                        <p class="title"><?php echo $question; ?></p>
                    </div>
                    <div class="que_content">
                        <p><?php echo $answer; ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <p class="link">Zobacz wszystkie pytania z działu <a href="https://help.psibufet.pl" class="dir">FAQ</a></p>
            <a href="https://zamowienie.psibufet.pl/" class="check dir"><span><?php the_field('front_faq_cta') ?></span></a>
        </div>
    </div>
    <div class="front_newsletter">
        <div class="container">
            <div class="newsletter_heading">
                <h2>Newsletter</h2>
                <p>Zostaw maila i otrzymaj darmowy poradnik!</p>
            </div>
            <p class="info">Poznaj 11 złotych zasad żywienia Twojego psa! Zapisz się i pobierz darmowy poradnik.</p>
            <div class="newsletter_form">
                <p>Wpisz swój adres e-mail:</p>
                <?php echo do_shortcode('[ninja_form id=1]'); ?>
            </div>
        </div>
    </div>
    <div class="front_question">
        <div class="container">
            <div class="question_left">
                <h2>Masz pytania?</h2>
                <p>Odpowiedzi na najczęściej zadawane pytania znajdziesz w zakładce <a href="https://help.psibufet.pl" class="dir">FAQ</a>.</p>
            </div>
            <div class="question_right">
                <h3>Nie znalazłeś odpowiedzi na nurtujące Cię pytania? Zadzwoń lub napisz do nas.</h3>
                <div class="right_contact">
                    <div class="tel">
                        <a>+48 22 104 62 59</a>
                    </div>
                    <div class="mail">
                        <a>kontakt@psibufet.pl</a>
                    </div>
                </div>
                <p>Jesteśmy do Twojej dyspozycji w dniach pon.-pt. w godzinach 10:00-16:00</p>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
