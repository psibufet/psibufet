<?php
/*
Template Name: Front Page
*/

get_header(); ?>

<div id="front_page">
    <div class="front_header" style="background-image: url('/wp-content/themes/psibufet/images/front_header_desktop.jpg');">
        <div class="inner">
            <div class="front_header_content">
                <h2>Przełom w żywieniu Twojego psa!</h2>
                <p>Zbilansowana, pełnoporcjowa karma, przygotowana ze świeżych, naturalnych składników. Idealnie dopasowane porcje dostarczamy prosto do domu</p>
                <a href="https://zamowienie.psibufet.pl/" class="check dir"><span><?php the_field('front_header_cta') ?></span></a>
            </div>
        </div>
        <a href="#page-continue" class="see_more_link">
            <p>Dowiedz się więcej</p>
        </a>
    </div>
    <div id="page-continue" class="front_reviews">
        <?php if( have_rows('after_header_logos') ): ?>
        <ul class="slideul">
            <?php while( have_rows('after_header_logos') ): the_row();
                $image = get_sub_field('logos_img');
                $content = get_sub_field('logos_content');
                $google = get_sub_field('google_slide');
            ?>
            <li>
                <div class="review_logo">
                    <div class="inner">
                        <img src="<?php echo $image; ?>"/>
                    </div>
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
                    <p>Opinie klientów</p>
                <?php endif; ?>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>
    </div>
    <div class="front_uknow">
        <div class="top_image">
            <div class="inner">
                <div class="ba_images">
                    <div class="ba_img before"></div>
                    <div class="ba_img after"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="left_content">
                <div class="inner">
                    <h2><font>Powiew świeżości</font> <span>w psiej misce</span></h2>
                    <h4>Czy wiesz, że ...</h4>
                    <p>Karma z kurczakiem*, którą kupujesz swojemu psu może zawierać tylko 4% mięsa?*<br/><br/>
                        Uważamy, że psy zasługują na wiele więcej!<br/><br/>
                        W trosce o zdrowie czworonogów, wspólnie z dietetykami zwierzęcymi<br/>stworzyliśmy pełnoporcjowe karmy ze świeżych składników.<br/><br/>
                        <b>To wszystko już od 6,90 zł dziennie!</b></p>
                    <div class="review d-none">
                        <div class="stars">
                            <span><img src="/wp-content/themes/psibufet/images/reviews/star.svg"/></span>
                            <span><img src="/wp-content/themes/psibufet/images/reviews/star.svg"/></span>
                            <span><img src="/wp-content/themes/psibufet/images/reviews/star.svg"/></span>
                            <span><img src="/wp-content/themes/psibufet/images/reviews/star.svg"/></span>
                            <span><img src="/wp-content/themes/psibufet/images/reviews/star.svg"/></span>
                        </div>
                        <p><b>5</b> z <b>5</b> gwiazdek wg <b>Karmopedia.pl</b></p>
                    </div>
                    <p class="info">*według Kodeksu Dobrej Praktyki Etykietowania FEDIAF</p>
                </div>
            </div>
            <div class="right_image">
                <div class="inner">
                    <div class="ba_images">
                        <div class="ba_img before"></div>
                        <div class="ba_img after"></div>
                    </div>
                </div>
            </div>
            <a href="https://zamowienie.psibufet.pl/" class="check dir"><span><?php the_field('front_uknow_cta') ?></span></a>
        </div>
    </div>
    <div class="front_foodinfo">
        <div class="container">
            <?php if( have_rows('slider_z_karmami') ): ?>
            <div id="foodinfo_carousel" class="left_carousel">
                <ul class="foodinfo_slides">
                    <?php while( have_rows('slider_z_karmami') ): the_row(); 
                        $image = get_sub_field('karma_img');
                    ?>
                    <li>
                        <div class="inner">
                            <img src="<?php echo $image; ?>"/>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <ul class="nav">
                    <li class="foodinfo_prev"><img src="/wp-content/themes/psibufet/images/slider_arrow.svg"/></li>
                    <li class="foodinfo_next"><img src="/wp-content/themes/psibufet/images/slider_arrow.svg"/></li>
                </ul>
            </div>
            <?php endif; ?>
            <div class="right_content">
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
            </div>
        </div>
        <a href="https://zamowienie.psibufet.pl/" class="check dir"><span><?php the_field('front_foodinfo_cta') ?></span></a>
    </div>
    <div class="front_gang">
        <div class="container">
            <div class="gang_heading">
                <h2>Szczęśliwi członkowie <span>#psibufetgang</span></h2>
                <p class="after_heading">Zobacz, co mówią nasi klienci:</p>
                <div class="cat_select">
                    <p>Koniec z grymaszeniem</p>
                    <p>Lepsza sierść i skóra</p>
                    <p>Więcej energii</p>
                    <p>Poprawa sylwetki</p>
                </div>
            </div>
        </div>
        <div class="flexslider all_posts active">

            <?php 
                $posts = get_posts(array(
                    'posts_per_page'	=> -1,
                    'post_type'			=> 'instagram_posts'
                ));
                if( $posts ): ?>
            <ul class="gang_posts slides">
                <?php foreach( $posts as $post ): 
                            setup_postdata( $post );
                        ?>
                <li class="post <?php if( get_field('full_post') ) { ?>full-post<?php } ?>">
                    <div class="inner short">
                        <div class="post_thumbnail">
                            <img src="<?php the_field('post_thumbnail'); ?>" />
                        </div>
                        <div class="post_content">
                            <div class="excerpt">
                                <div class="post_info">
                                    <img src="/wp-content/themes/psibufet/images/ig_like.svg" />
                                    <img src="/wp-content/themes/psibufet/images/ig_comment.svg" />
                                    <img src="/wp-content/themes/psibufet/images/ig_send.svg" />
                                </div>
                                <p><span class="nickname"><?php the_field('user_name'); ?>: </span><?php the_field('post_content'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="inner full">
                        <div class="post_thumbnail">
                            <img src="<?php the_field('backing_image'); ?>" />
                        </div>
                        <div class="full">
                            <div class="full_heading">
                                <div class="image">
                                    <img src="<?php the_field('account_image'); ?>" />
                                </div>
                                <h4><?php the_field('name'); ?></h4>
                            </div>
                            <div class="full_info">
                                <p class="local">Mieszka w: <b><?php the_field('local_info'); ?></b></p>
                                <p class="dog">Pies: <b><?php the_field('dog_info'); ?></b></p>
                                <p class="info">W #PsiBufetGang od: <b><?php the_field('member_info'); ?> r.</b></p>
                            </div>
                            <div class="full_content">
                                <p><?php the_field('post_content'); ?></p>
                            </div>
                            <div class="full_post_info">
                                <img src="/wp-content/themes/psibufet/images/ig_like.svg" />
                                <img src="/wp-content/themes/psibufet/images/subway_like.svg" />
                                <span><?php the_field('like_count'); ?></span>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            <ul class="nav">
                <li class="gang_prev"><img src="/wp-content/themes/psibufet/images/slider_arrow.svg" /></li>
                <li class="gang_next"><img src="/wp-content/themes/psibufet/images/slider_arrow.svg" /></li>
            </ul>
        </div>
        <p class="pinus">Oznacz nas na Facebooku lub Instagramie <span>@Psibufet</span></p>
        <a href="https://zamowienie.psibufet.pl/" class="check mobile-only dir"><span><?php the_field('front_psibufetgang_cta') ?></span></a>
    </div>
    <div class="front_howitworks">
        <div class="container">
            <a href="https://zamowienie.psibufet.pl/" class="check dir"><span><?php the_field('front_psibufetgang_cta') ?></span></a>
            <div class="howitworks_heading">
                <h2>Jak to działa?</h2>
            </div>
            <div class="howitworks_slider">
                <?php if( have_rows('how_it_works_slides') ): ?>
                    <ul class="slides">
                        <?php while( have_rows('how_it_works_slides') ): the_row(); 
                            $image = get_sub_field('hiw_image');
                            $title = get_sub_field('hiw_title');
                            $content = get_sub_field('hiw_content');
                        ?>
                            <li>
                                <img src="<?php echo $image; ?>"/>
                                <div class="slide_inner">
                                    <h4 class="slide_title"><?php echo get_row_index(); ?>. <?php echo $title; ?></h4>
                                    <p class="slide_content"><?php echo $content; ?></p>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="navigation">
                <ul class="slide_control">
                    <li>
                        <div class="image">
                            <img src="/wp-content/themes/psibufet/images/step_1.svg"/>
                        </div>
                        <p><span>1.</span> Poznanie Twojego pupila</p>
                    </li>
                    <li>
                        <div class="image">
                            <img src="/wp-content/themes/psibufet/images/step_2.svg"/>
                        </div>
                        <p><span>2.</span> Dopasowanie diety</p>
                    </li>
                    <li>
                        <div class="image">
                            <img src="/wp-content/themes/psibufet/images/step_3.svg" style="margin-top: -10px;"/>
                        </div>
                        <p><span>3.</span> Gotowanie karmy</p>
                    </li>
                    <li>
                        <div class="image">
                            <img src="/wp-content/themes/psibufet/images/step_4.svg" style="padding: 10px;"/>
                        </div>
                        <p><span>4.</span> Dostawa paczki</p>
                    </li>
                    <li>
                        <div class="image">
                            <img src="/wp-content/themes/psibufet/images/step_5.svg" style="margin-top: -5px;"/>
                        </div>
                        <p><span>5.</span> Przechowywanie i karmienie</p>
                    </li>
                    <li>
                        <div class="image">
                            <img src="/wp-content/themes/psibufet/images/step_6.svg" style="margin-top: -5px;"/>
                        </div>
                        <p><span>6.</span> Cykliczne dostawy</p>
                    </li>
                </ul>
            </div>
            <a href="https://zamowienie.psibufet.pl/" class="check dir"><span><?php the_field('front_howitworks_cta') ?></span></a>
        </div>
    </div>
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
</div>
<?php get_footer(); ?>
