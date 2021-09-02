<?php
/*
Template Name: Front Page
*/

get_header(); ?>

<main class="pbpage pbpage--frontpage">
    <section class="homeHeader" style="background-image: url('/wp-content/themes/psibufet/images/pricedrop/sgNewHeader-min.jpg');">
        <div class="homeHeader__wrap">
            <div class="homeHeader__content">
                <h2>Świeże spojrzenie na psie jedzenie</h2>
                <div class="tags">
                    <div><p>Naturalne składniki</p></div>
                    <div><p>Idealna porcja</p></div>
                    <div><p>Dostawa pod drzwi</p></div>
                </div>
                <a href="https://zamowienie.psibufet.pl/" class="btn btn--big btn--center dir"><span><?php the_field('front_header_cta') ?></span></a>
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
    <section class="homeMiska animateMiska container">
        <div class="homeMiska__left">
            <h2 class="getMarker"><span class="marker">Prawdziwe</span> jedzenie w psiej misce</h2>
            <p class="subtitle"><b>Bo psy zasługują na to, co najlepsze.</b></p>
            <div class="info_boxes">
                <div class="box">
                    <div class="box__thumb">
                        <img src="/wp-content/themes/psibufet/images/info_boxes/jagnie_z_gor.svg"/>
                    </div>
                    <p>Jakość<br/>Human-Grade</p>
                </div>
                <div class="box">
                    <div class="box__thumb">
                        <img src="/wp-content/themes/psibufet/images/info_boxes/ikonki_zbilansowane.svg"/>
                    </div>
                    <p>Zbilansowany,<br/>pełnoporcjowy skład</p>
                </div>
                <div class="box">
                    <div class="box__thumb">
                        <img src="/wp-content/themes/psibufet/images/info_boxes/garnek.svg"/>
                    </div>
                    <p>Gotowane<br/>na parze</p>
                </div>
                <div class="box">
                    <div class="box__thumb">
                        <img src="/wp-content/themes/psibufet/images/info_boxes/dopasowanaporcja.svg"/>
                    </div>
                    <p>Idealnie<br/>dopasowana porcja</p>
                </div>
            </div>
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
                        <?php while( have_rows('slider_z_karmami') ): the_row(); ?>
                        <p class="infoButtons__button" data="data_0<?php echo get_row_index(); ?>"><img src="<?php echo get_template_directory_uri() . '/images/icons/info_icon_black.svg'; ?>"/>Zobacz skład</p>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="homeFoodinfo__right">
                <h2 class="getMarker">Jedzenie, którego <span class="marker">pozazdrościsz</span> swojemu psu</h2>
                <p><b>55% mięsa oraz 45% warzyw i owoców,<br/>pełna suplementacja mineralno-witaminowa.</b></p>
                <div class="info_boxes">
                    <div class="box">
                        <div class="box__thumb">
                            <img src="/wp-content/themes/psibufet/images/info_boxes/kurczak_classic.svg"/>
                        </div>
                        <p>Zero ulepszaczy</p>
                    </div>
                    <div class="box">
                        <div class="box__thumb">
                            <img src="/wp-content/themes/psibufet/images/info_boxes/wpolsce.svg"/>
                        </div>
                        <p>Brak zbóż</p>
                    </div>
                    <div class="box">
                        <div class="box__thumb">
                            <img src="/wp-content/themes/psibufet/images/info_boxes/ogien.svg"/>
                        </div>
                        <p>Bez ekstruzji</p>
                    </div>
                    <div class="box">
                        <div class="box__thumb">
                            <img src="/wp-content/themes/psibufet/images/info_boxes/testowanenaludziach.svg"/>
                        </div>
                        <p>Testowane<br/>na ludziach</p>
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
        <div class="foodModal">
            <div class="foodModal__wrap">
                <img class="closeFoodModal closeImg no-lazyload" src="<?php echo get_template_directory_uri() . '/images/icons/closeModal_ico.svg'; ?>"/>
                <?php while( have_rows('slider_z_karmami') ): the_row();
                    $images = get_sub_field('karma_gallery');
                    $name = get_sub_field('karma_name');
                    $icon = get_sub_field('karma_ico');
                    $color = get_sub_field('karma_color');
                    $desc = get_sub_field('karma_desc');
                    $sklad = get_sub_field('karma_sklad');
                    $analityczny = get_sub_field('karma_skladanalityczny');
                    $dodatki = get_sub_field('karma_dodatki');
                ?>
                <div class="foodModal__content" data="data_0<?php echo get_row_index(); ?>">
                    <div class="gallery" data="data_0<?php echo get_row_index(); ?>">
                        <?php foreach( $images as $image ): ?>
                            <div class="gallery__image">
                                <img class="no-lazyload" src="<?php echo $image; ?>"/>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="title" style="background-color: <?php echo $color; ?>"><p><?php echo $name; ?><img class="no-lazyload" src="<?php echo $icon; ?>"/></p></div>
                    <div class="desc">
                        <p><?php echo $desc; ?></p>
                    </div>
                    <div class="usp">
                        <div class="usp__pos">
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/jagnie_z_gor.svg'; ?>"/>
                            </div>
                            <p>Jakość Human-Grade</p>
                        </div>
                        <div class="usp__pos">
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/ikonki_zbilansowane.svg'; ?>"/>
                            </div>
                            <p>Zbilansowany, pełnoporcjowy skład</p>
                        </div>
                        <div class="usp__pos">
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/kurczak_classic.svg'; ?>"/>
                            </div>
                            <p>Zero ulepszaczy</p>
                        </div>
                        <div class="usp__pos">
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/wpolsce.svg'; ?>"/>
                            </div>
                            <p>Bezzbożowe, monobiałkowe</p>
                        </div>
                        <div class="usp__pos">
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/dopasowanaporcja.svg'; ?>"/>
                            </div>
                            <p>Idealnie dopasowana porcja</p>
                        </div>
                        <div class="usp__pos">
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/testowanenaludziach.svg'; ?>"/>
                            </div>
                            <p>Testowane na ludziach</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion__element accordion__element--close">
                            <div class="heading">
                                <p>Skład</p>
                                <img class="no-lazyload" src="<?php echo get_template_directory_uri() . '/images/icons/arrow_down_red_ico.svg'; ?>"/>
                            </div>
                            <div class="content">
                                <p><?php echo $sklad; ?></p>
                            </div>
                        </div>
                        <div class="accordion__element accordion__element--close">
                            <div class="heading">
                                <p>Skład analityczny</p>
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/arrow_down_red_ico.svg'; ?>"/>
                            </div>
                            <div class="content">
                                <p><?php echo $analityczny; ?></p>
                            </div>
                        </div>
                        <div class="accordion__element accordion__element--close">
                            <div class="heading">
                                <p>Dodatki</p>
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/arrow_down_red_ico.svg'; ?>"/>
                            </div>
                            <div class="content">
                                <p><?php echo $dodatki; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <div class="foodModal__close">
                    <p class="btn btn--center btn--back closeFoodModal"><span>Powrót</span></p>
                </div>
            </div>
        </div>
    </section>

    <?php if(get_field('howitworks_step')): ?>
    <section class="homeHowitworks">
        <div class="homeHowitworks__wrap container">
            <h2 class="getMarker">Jak to <span class="marker">działa?</span></h2>
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

    <?php if(get_field('homeBenefits')): ?>
    <section class="homeBenefits">
        <div class="homeBenefits__wrap container">
            <h2 class="getMarker">Co <span class="marker">zyska</span> Twój pies?</h2>
            <!-- <div class="homeBenefits__boxes">
                <img src="<?php echo get_template_directory_uri() . '/images/homebenefits_boxes.png'; ?>" class="boxes"/>
                <img src="<?php echo get_template_directory_uri() . '/images/homebenefits_boxes_shadow.png'; ?>" class="shadow"/>
            </div> -->
            <img src="<?php echo get_template_directory_uri() . '/images/homebenefits_boxes.png'; ?>" class="homeBenefits__boxes"/>
            <div class="homeBenefits__slider">
                <?php while(have_rows('homeBenefits')): the_row();
                    $dog = get_sub_field('homeBenefits_dog');
                    $shadow = get_sub_field('homeBenefits_shadow');
                ?>
                <div class="benefitSlide">
                    <div class="benefitSlide__dog">
                        <img class="dog" src="<?php echo $dog; ?>"/>
                        <img class="shadow" src="<?php echo $shadow; ?>"/>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="homeBenefits__content">
                <?php while(have_rows('homeBenefits')): the_row();
                    $title = get_sub_field('homeBenefits_title');
                    $quote = get_sub_field('homeBenefits_quote');
                    $author = get_sub_field('homeBenefits_author');
                    $doginfo = get_sub_field('homeBenefits_doginfo');
                    $psibufet = get_sub_field('homeBenefits_psibufet');
                ?>
                <div class="benefitContent">
                    <h2><?php echo $title; ?></h2>
                    <p class="quote"><?php echo $quote; ?></p>
                    <p class="author">- <?php echo $author; ?></p>
                    <p class="info"><span><?php echo $doginfo; ?></span><span>w #PsiBufetGang od: <?php echo $psibufet; ?> r.</span></p>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="homePricing">
        <div class="homePricing__wrap container">
            <div class="homePricing__left">
                <h2 class="getMarker">Dedykowany plan, <span class="marker">indywidualna</span> cena</h2>
                <p>Swoją cenę PsiBufet sprawdzisz w czasie rejestracji, gdy już dobrze poznamy Twojego pupila.</p>
                <div class="blockResponsive blockResponsive--hideMobile">
                    <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span><?php the_field('front_price_cta') ?></span></a>
                    <div class="info">
                        <div class="info__box">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/homepricing_delivery_ico.svg'; ?>"/>
                            </div>
                            <p>Darmowa dostawa w całej Polsce</p>
                        </div>
                        <div class="info__box">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/homepricing_miska_ico.svg'; ?>"/>
                            </div>
                            <p>Gwarancja czystej miski</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homePricing__right">
                <div class="pricingContent<?php if(get_field('priceDrop_active') == 'true'): ?> pricingContent--promotion<?php endif; ?>">
                    <div class="pricingContent__options" type="<?php the_field('defaultPricingOption'); ?>">
                        <div class="pricingContent__option" type="small"
                            pricezl="<?php the_field('dogSmall_zl') ?>"
                            pricegr="<?php the_field('dogSmall_gr') ?>"
                            portion="<?php the_field('dogSmall_portion') ?>"
                            <?php if(get_field('priceDrop_active') == 'true'): ?>
                            promotion_price_zl="<?php the_field('dogSmall_zl_promotion') ?>"
                            promotion_price_gr="<?php the_field('dogSmall_gr_promotion') ?>"
                            <?php endif; ?>
                        >
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/homepricing_dog_small.svg'; ?>"/>
                            <p>mały</p>
                        </div>
                        <div class="pricingContent__option" type="middle"
                            pricezl="<?php the_field('dogMiddle_zl') ?>"
                            pricegr="<?php the_field('dogMiddle_gr') ?>"
                            portion="<?php the_field('dogMiddle_portion') ?>"
                            <?php if(get_field('priceDrop_active') == 'true'): ?>
                            promotion_price_zl="<?php the_field('dogMiddle_zl_promotion') ?>"
                            promotion_price_gr="<?php the_field('dogMiddle_gr_promotion') ?>"
                            <?php endif; ?>
                        >
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/homepricing_dog_medium.svg'; ?>"/>
                            <p>średni</p>
                        </div>
                        <div class="pricingContent__option" type="big"
                            pricezl="<?php the_field('dogBig_zl') ?>"
                            pricegr="<?php the_field('dogBig_gr') ?>"
                            portion="<?php the_field('dogBig_portion') ?>"
                            <?php if(get_field('priceDrop_active') == 'true'): ?>
                            promotion_price_zl="<?php the_field('dogBig_zl_promotion') ?>"
                            promotion_price_gr="<?php the_field('dogBig_gr_promotion') ?>"
                            <?php endif; ?>
                        >
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/homepricing_dog_large.svg'; ?>"/>
                            <p>duży</p>
                        </div>
                    </div>
                    <div class="pricingContent__info" type="<?php the_field('defaultPricingOption'); ?>">
                        <?php if(get_field('priceDrop_active') == 'true'): ?>
                            <p class="drop"><span class="value">19<span>50</span> zł</span> / dzień</p>
                        <?php endif; ?>
                        <p class="price">od <span class="value">19<span>50</span> zł</span> / dzień</p>
                        <p class="portion">dla porcji <span class="value">500 g</span></p>
                    </div>
                </div>
                <div class="blockResponsive blockResponsive--hideDesktop">
                    <div class="info">
                        <div class="info__box">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/homepricing_delivery_ico.svg'; ?>"/>
                            </div>
                            <p>Darmowa dostawa w całej Polsce</p>
                        </div>
                        <div class="info__box">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri() . '/images/icons/homepricing_miska_ico.svg'; ?>"/>
                            </div>
                            <p>Gwarancja czystej miski</p>
                        </div>
                    </div>
                    <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span><?php the_field('front_price_cta') ?></span></a>
                </div>
            </div>
        </div>
    </section>

    <?php if( have_rows('testimonial_opinia') ): ?>
    <section class="homeTestimonials">
        <div class="homeTestimonials__wrap container">
            <h2>Opracowane przez dietetyków zwierzęcych, rekomendowane przez specjalistów i weterynarzy</h2>
            <div class="homeTestimonials__slider">
                <?php while( have_rows('testimonial_opinia') ): the_row(); 
                    $image = get_sub_field('testi_img');
                    $name = get_sub_field('testi_name');
                    $pos = get_sub_field('testi_stanowisko');
                    $content = get_sub_field('testi_content');
                ?>
                    <div class="slide">
                        <div class="image">
                            <img src="<?php echo $image; ?>"/>
                        </div>
                        <div class="name">
                            <p><?php echo $name; ?></p>
                            <p class="position"><?php echo $pos; ?></p>
                        </div>
                        <p class="quote">"<?php echo $content; ?>"</p>
                    </div>
                <?php endwhile; ?>
            </div>
            <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span><?php the_field('front_testi_cta') ?></span></a>
        </div>
    </section>
    <?php endif; ?>

    <?php 
    $posts = get_posts(array(
        'posts_per_page'	=> -1,
        'post_type'			=> 'instagram_posts'
    ));
    if( $posts ): ?>
    <section class="homeInstagram">
        <div class="homeInstagram__wrap container">
            <h2>Szczęśliwi członkowie <span>#psibufetgang</span></h2>
            <div class="homeInstagram__posts">
            <?php foreach( $posts as $post ): setup_postdata( $post ); ?>
                <div class="post">
                    <div class="thumb">
                        <img src="<?php the_field('post_thumbnail'); ?>" class="no-lazyload"/>
                    </div>
                    <div class="content">
                        <div class="actions">
                            <img src="<?php echo get_template_directory_uri() . '/images/ig_like.svg'; ?>" class="no-lazyload"/>
                            <img src="<?php echo get_template_directory_uri() . '/images/ig_comment.svg'; ?>" class="no-lazyload"/>
                            <img src="<?php echo get_template_directory_uri() . '/images/ig_send.svg'; ?>" class="no-lazyload"/>
                        </div>
                        <p><b><?php the_field('user_name'); ?>:</b> <?php the_field('post_content'); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="homeStart">
        <div class="homeStart__wrap container">
            <div class="homeStart__content">
                <h2 class="getMarker">Podaj imię swojego psa i rozpocznij <span class="marker">Zdrową</span> dietę już teraz!</h2>
                <form name="userStart" action="https://zamowienie.psibufet.pl/" autocomplete="off">
                    <input type="text" name="dogName" placeholder="Imię psa" autocomplete="off"/>
                    <button type="submit" value="Stwórz dietę" class="btn btn--center"><span>Stwórz dietę</span></button>
                </form>
            </div>
        </div>
    </section>

    <section class="homeShortcuts">
        <h2 class="getMarker"><span class="marker">Poznaj</span> nas lepiej</h2>
        <div class="homeShortcuts__wrap">
            <a href="/jak-to-dziala" class="homeShortcuts__box" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_01.png'; ?>');">
                <p class="title">Jak to działa?</p>
            </a>
            <a href="/nasze-przepisy" class="homeShortcuts__box" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_02.png'; ?>');">
                <p class="title">Nasze przepisy</p>
            </a>
            <a href="/o-nas" class="homeShortcuts__box" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_03.png'; ?>');">
                <p class="title">O nas</p>
            </a>
        </div>
    </section>

    <?php if(get_field('faq_list')): ?>
    <section class="homeFaq">
        <div class="homeFaq__wrap container">
            <h2>Najczęściej zadawane pytania</h2>
            <div class="homeFaq__list">
                <?php while( have_rows('faq_list') ): the_row(); 
                    $question = get_sub_field('faq_list_question');
                    $answer = get_sub_field('faq_list_answer');
                ?>
                <div class="question question--close">
                    <div class="question__heading">
                        <p class="title"><?php echo $question; ?></p>
                    </div>
                    <div class="question__answer">
                        <?php echo $answer; ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <a href="https://help.psibufet.pl/" target="_blank" class="moreFaq"><span>Zobacz wszystkie pytania z działu FAQ</span></a>
        </div>
    </section>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
