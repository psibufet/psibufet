<?php
    /**
     *  Template name: LP - Rasy psów
     */
get_header();

if($_SERVER['SERVER_NAME'] == 'psibufet.local'){
    $howitworks = 1996;
    $recipesPage = 1956;
}else if($_SERVER['SERVER_NAME'] == 'psibufet.codestick.pl'){
    $howitworks = 1985;
    $recipesPage = 1955;
}else{
    $howitworks = 2310;
    $recipesPage = 2271;
}
?>

<main class="psibufet psibufet--lprasy">
    <section class="rasaHeader">
        <div class="dog"></div>
        <div class="hand"></div>
        <div class="rasaHeader__wrap">
            <h3>Idealnie dopasowana dieta dla</h3>
            <h2 class="rasa">Labradora</h2>
            <div class="tags">
                <p>Naturalne składniki</p>
                <div class="tags__divider"></div>
                <p>Dostawa pod drzwi</p>
            </div>
            <a href="#" class="btn"><span>Stwórz dietę</span></a>
        </div>
    </section>

    <section class="homeReviews">
        <?php if( have_rows('after_header_logos', 5) ): ?>
        <ul class="slideul">
            <?php while( have_rows('after_header_logos', 5) ): the_row();
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

    <section class="saleMiska animateMiska">
        <div class="saleMiska__heading">
            <h2 class="getMarker"><span class="marker">Dlaczego</span> PsiBufet?</h2>
        </div>
        <div class="saleMiska__wrap">
            <div class="saleMiska__miska">
                <div class="ba_img before"></div>
                <div class="ba_img after"></div>
            </div>
            <div class="saleMiska__usp">
                <img class="usp" src="<?php echo get_template_directory_uri() . '/images/lpsale/salemiska_usp.svg'; ?>"/>
                <img class="arrows" src="<?php echo get_template_directory_uri() . '/images/lpsale/salemiska_arrows.svg'; ?>"/>
            </div>
            <div class="saleMiska__uspMobile">
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
        <div class="saleMiska__cta">
            <a href="https://zamowienie.psibufet.pl/" class="btn dir"><span>Wypróbuj</span></a>
        </div>
    </section>

    <section class="howVideo">
        <div class="howVideo__wrap">
            <div class="howVideo__heading">
                <h2 class="getMarker">Jak to <span class="marker">działa?</span></h2>
            </div>
            <div class="howVideo__content">
                <div class="video video--desktop">
                    <?php
                    $attr = array(
                        'src'       => get_field('howVideo_video', $howitworks),
                        'poster'    => false,
                    );
                    echo wp_video_shortcode($attr); ?>
                </div>
                <div class="video video--mobile">
                    <?php
                    $attr = array(
                        'src'       => get_field('howVideo_video_mobile', $howitworks),
                        'poster'    => false,
                    );
                    echo wp_video_shortcode($attr); ?>
                </div>
                <div class="content">
                    <h3 class="getMarker getMarker--small"><?php the_field('howVideo_box_title', $howitworks); ?></h3>
                    <p><?php the_field('howVideo_box_content', $howitworks); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="rasaSteps">
        <div class="rasaSteps__wrap container">
            <?php while(have_rows('rasySteps')): the_row();
                $icon = get_sub_field('rasySteps_icon');
                $name = get_sub_field('rasySteps_name');
                $desc = get_sub_field('rasySteps_desc');
            ?>
            <div class="rasaSteps__step">
                <div class="icon">
                    <img src="<?php echo $icon; ?>"/>
                </div>
                <div class="content">
                    <h3><?php echo get_row_index(); ?>. <?php echo $name; ?></h3>
                    <p><?php echo $desc; ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="rasaSteps__cta">
            <p class="btn btn--info openSubModal"><span>Więcej o subskrypcji</span></p>
        </div>
    </section>

    <section class="recipesMenu">
        <div class="recipesMenu__wrap container">
            <div class="recipesMenu__heading">
                <h2 class="getMarker">PsiBufet <span class="marker">menu</span></h2>
                <p><b>55% mięsa oraz 45% warzyw i owoców, pełna suplementacja mineralno-witaminowa.</b>Całość delikatnie gotowana na parze i pakowana próżniowo.</p>
            </div>
            <div class="recipesList">
                <?php
                $flavours = get_field('recipesMenu_flavours', $recipesPage);
                foreach( $flavours as $post ){
                    setup_postdata($post);
                    include get_template_directory() . '/template-parts/foodTile.php';
                    wp_reset_postdata();
                } ?>
            </div>
            <div class="recipesMenu__order">
                <a href="https://zamowienie.psibufet.pl/" class="btn"><span>Wypróbuj</span></a>
            </div>
        </div>
    </section>

    <section class="howUsers">
        <div class="howUsers__heading">
            <h2 class="getMarker">Przykładowe <span class="marker">plany</span> członków psibufetgang</h2>
        </div>
        <div class="howUsers__list">
            <?php while(have_rows('userList', $howitworks)): the_row();
                $owner = get_sub_field('userList_owner');
                $dog = get_sub_field('userList_dog');
                $desc = get_sub_field('userList_desc');
            ?>
            <div class="pbUserInfo">
                <div class="pbUserInfo__video">
                    <div class="desktop">
                        <?php
                        $attrDesktop = array(
                            'src'   => get_sub_field('userList_video', $howitworks),
                        );
                        echo wp_video_shortcode($attrDesktop); ?>
                    </div>
                    <div class="mobile">
                        <?php
                        $attrMobile = array(
                            'src'   => get_sub_field('userList_video_mobile', $howitworks),
                        );
                        echo wp_video_shortcode($attrMobile); ?>
                    </div>
                </div>
                <div class="pbUserInfo__content">
                    <h3 class="title getMarker getMarker--small"><span><?php echo $owner; ?></span><div>x</div><span class="marker"><?php echo $dog; ?></span></h3>
                    <p class="info"><?php echo $desc; ?></p>
                    <div class="boxes">
                        <?php while(have_rows('userList_info', $howitworks)): the_row();
                            $icon = get_sub_field('userList_info_icon');
                            $text = get_sub_field('userList_info_text');
                        ?>
                        <div class="boxes__box">
                            <div class="icon">
                                <img src="<?php echo $icon; ?>" class="no-lazyload"/>
                            </div>
                            <p><?php echo $text; ?></p>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="howUsers__cta">
            <a href="https://zamowienie.psibufet.pl/" class="btn"><span>Dołącz do nas</span></a>
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


    <div class="subscriptionModal">
        <div class="subscriptionModal__wrap">
            <img class="closeSubModal closeImg no-lazyload" src="<?php echo get_template_directory_uri() . '/images/icons/closeModal_ico.svg'; ?>"/>
            <div class="subscriptionModal__content">
                <h2 class="getMarker">Pełna elastyczność - nowy wymiar <span class="marker">subskrypcji</span>.</h2>
                <div class="uspList">
                    <div class="uspList__usp">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/howitworks_new/infoIcon_01.svg'; ?>"/>
                        </div>
                        <p><b>Elastyczny plan</b>: dopasuj skład, wielkość porcji i dostawy do swoich potrzeb</p>
                    </div>
                    <div class="uspList__usp">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/howitworks_new/infoIcon_02.svg'; ?>"/>
                        </div>
                        <p><b>Brak zobowiązań</b>: wstrzymaj lub anuluj w dowolnym momencie bez opłat</p>
                    </div>
                    <div class="uspList__usp">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/howitworks_new/infoIcon_03.svg'; ?>"/>
                        </div>
                        <p><b>Pełna wygoda</b>: zarządzaj subskrypcją z Panelu Klienta i zapomnij o ponownym kupowaniu karmy</p>
                    </div>
                    <div class="uspList__usp">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/howitworks_new/infoIcon_04.svg'; ?>"/>
                        </div>
                        <p><b>Bezpieczna płatność</b>: procesowanie przez globalnego lidera płatności 
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/stripe_logo.svg'; ?>"/>
                        </p>
                    </div>
                </div>
            </div>
            <div class="subscriptionModal__close">
                <p class="btn btn--center btn--back closeSubModal"><span>Powrót</span></p>
            </div>
        </div>
    </div>

    <div class="foodModal">
        <div class="foodModal__wrap">
            <img class="closeFoodModal closeImg no-lazyload" src="<?php echo get_template_directory_uri() . '/images/icons/closeModal_ico.svg'; ?>"/>
            <?php
                if($flavours){
                    foreach( $flavours as $post ){
                        include get_template_directory() . '/template-parts/foodModal.php';
                    }
                }
            ?>
            <div class="foodModal__close">
                <p class="btn btn--center btn--back closeFoodModal"><span>Powrót</span></p>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>