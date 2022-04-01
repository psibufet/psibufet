<?php 
/*
*   Template Name: LP - Sale
*/
get_header(); ?>

<main class="lpSale">
    <header class="saleMenu">
        <div class="saleMenu__wrap container">
            <img src="<?php echo get_template_directory_uri() . '/images/lpsale/psibufet_logo_lp.svg'; ?>"/>
            <a href="https://zamowienie.psibufet.pl/" class="btn btn--header dir"><span>Zamów</span></a>
        </div>
        <a href="https://zamowienie.psibufet.pl/" class="salePromobar dir">
            <p></p>
        </a>
    </header>
    <div class="saleMenu--clone"></div>
    <div class="stickyBtn">
        <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span>Odbierz zniżkę</span></a>
    </div>
    <section class="saleHeader">
        <div class="saleHeader__mobilebg">
            <img class="dog" src="<?php echo get_template_directory_uri() . '/images/lpsale/saleHeader_dog.png'; ?>"/>
            <img class="hand" src="<?php echo get_template_directory_uri() . '/images/lpsale/saleHeader_hand.png'; ?>"/>
        </div>
        <div class="saleHeader__wrap">
            <div class="saleHeader__content">
                <h2 class="getMarker init"><span class="marker">Świeże</span> spojrzenie na psie jedzenie</h2>
                <div class="tags">
                    <div><p>Naturalne składniki</p></div>
                    <div><p>Idealna porcja</p></div>
                    <div><p>Dostawa pod drzwi</p></div>
                </div>
            </div>
            <div class="saleHeader__form">
                <h2><?php the_field('headerForm_title'); ?></h2>
                <input type="text" name="rasa_psa" placeholder="Wpisz rasę psa np. Owczarek niemiecki"/>
                <div class="correct">
                    <h3 class="getMarker"><span class="marker">Psiepięknie!</span></h3>
                    <p>Jesteś we właściwym miejscu!<br/>PsiBufet jest idealny dla Twojego psiaka.</p>
                    <a href="https://zamowienie.psibufet.pl/" class="btn dir"><span>Stwórz dietę</span></a>
                </div>
            </div>
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

    <section class="homeFoodinfo">
        <div class="homeFoodinfo__wrap container">
            <div class="homeFoodinfo__left">
                <div class="slidesWrap">
                    <div id="foodinfo_carousel" class="homeFoodinfo__slides">
                        <?php while( have_rows('slider_z_karmami', 5) ): the_row(); 
                            $image = get_sub_field('karma_img');
                        ?>
                            <div class="homeFoodinfo__info" data="data_0<?php echo get_row_index(); ?>">
                                <img data-original="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="no-lazyload"/>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="infoButtons">
                        <?php while( have_rows('slider_z_karmami', 5) ): the_row(); ?>
                        <p class="infoButtons__button" data="data_0<?php echo get_row_index(); ?>"><img src="<?php echo get_template_directory_uri() . '/images/icons/info_icon_black.svg'; ?>"/>Zobacz skład</p>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="homeFoodinfo__right">
                <h2 class="getMarker">Jedzenie, którego <span class="marker">pozazdrościsz</span> swojemu psu</h2>
                <div class="boxes">
                    <div class="boxes__box">
                        <img src="<?php echo get_template_directory_uri() . '/images/lpsale/miesowarzowoce.svg'; ?>"/>
                        <h3>55% mięsa oraz 45% warzyw i owoców</h3>
                    </div>
                    <div class="boxes__box">
                        <img src="<?php echo get_template_directory_uri() . '/images/lpsale/vitmin.svg'; ?>"/>
                        <h3>Pełna suplementacja mineralno-witaminowa</h3>
                    </div>
                </div>
                <div class="expertInfo">
                    <div class="expertInfo__image">
                        <img src="<?php echo get_template_directory_uri() . '/images/expertphoto.webp'; ?>"/>
                    </div>
                    <div class="expertInfo__content">
                        <p><b>Składy karm PsiBufet</b> zostały opracowane i zweryfikowane przez <b>Eksperta.</b></p>
                        <h4><span>dr inż.</span> Olga Lasek</h4>
                    </div>
                </div>
                <div class="reviewBar">
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
        </div>
        <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir dir"><span><?php the_field('front_foodinfo_cta', 5) ?></span></a>
        <div class="foodModal">
            <div class="foodModal__wrap">
                <img class="closeFoodModal closeImg no-lazyload lazy-fix" data-original="<?php echo get_template_directory_uri() . '/images/icons/closeModal_ico.svg'; ?>"/>
                <?php while( have_rows('slider_z_karmami', 5) ): the_row();
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
                                <img class="no-lazyload lazy-fix" data-original="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="title" style="background-color: <?php echo $color; ?>"><p><?php echo $name; ?><img class="no-lazyload lazy-fix" data-original="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>"/></p></div>
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
                                <img class="no-lazyload" data-original="<?php echo get_template_directory_uri() . '/images/icons/arrow_down_red_ico.svg'; ?>"/>
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

    <?php if(get_field('howitworks_step', 5)): ?>
    <section class="homeHowitworks">
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

    <section class="saleVideos">
        <div class="saleVideos__heading">
            <h2 class="getMarker">Co o nas <span class="marker">mówią?</span></h2>
        </div>
        <div class="saleVideos__wrap container">
            <div class="saleVideos__main">
                <?php while(have_rows('saleVideos')): the_row();
                    $name = get_sub_field('saleVideos_name');
                    $dogname = get_sub_field('saleVideos_dogname');
                    $content = get_sub_field('saleVideos_content');
                ?>
                <div class="videoSlide" data-video="video_0<?php echo get_row_index(); ?>">
                    <div class="videoSlide__video">
                        <?php 
                            // Load value.
                            $videoLink = get_sub_field('saleVideos_video');

                            // Use preg_match to find iframe src.
                            preg_match('/src="(.+?)"/', $videoLink, $matches);
                            $src = $matches[1];

                            // Add extra parameters to src and replcae HTML.
                            $params = array(
                                'controls'  => 1,
                                'hd'        => 1,
                                'autohide'  => 1,
                                'rel'       => 0,
                                'showinfo'  => 0,
                            );
                            $new_src = add_query_arg($params, $src);
                            $videoLink = str_replace($src, $new_src, $videoLink);

                            // Add extra attributes to iframe HTML.
                            $attributes = 'frameborder="0"';
                            $videoLink = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $videoLink);

                            // Display customized HTML.
                            echo $videoLink;
                        ?>
                    </div>
                    <div class="videoSlide__content">
                        <div class="content">
                            <img src="<?php echo get_template_directory_uri() . '/images/lpsale/videoContent_lapa.svg'; ?>"/>
                            <h3 class="content__title getMarker"><?php echo $name . '<span class="divider">x</span><span class="marker">' . $dogname . '</span>'; ?></h3>
                            <p><?php echo $content; ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="saleVideos__list">
                <?php while(have_rows('saleVideos')): the_row();
                    $videoLink = get_sub_field('saleVideos_video');
                    $name = get_sub_field('saleVideos_name');
                    $dogname = get_sub_field('saleVideos_dogname');

                    preg_match('/src="(.+?)"/', $videoLink, $matches_url );
                    $src = $matches_url[1];	

                    preg_match('/embed(.*?)?feature/', $src, $matches_id );
                    $id = $matches_id[1];
                    $id = str_replace( str_split( '?/' ), '', $id );
                ?>
                <div class="saleVideo" data-video="video_0<?php echo get_row_index(); ?>">
                    <div class="saleVideo__thumb">
                        <img src="https://img.youtube.com/vi/<?php echo $id; ?>/maxresdefault.jpg"/>
                        <img class="play play--off" src="<?php echo get_template_directory_uri() . '/images/icons/ytplaybtn_off_ico.png'; ?>"/>
                        <img class="play play--on" src="<?php echo get_template_directory_uri() . '/images/icons/ytplaybtn_on_ico.png'; ?>"/>
                    </div>
                    <h3><?php echo $name . '<span>x</span>' . $dogname; ?></h3>
                </div>
                <?php endwhile; ?>
            </div>
            <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span>Dołącz do nich</span></a>
        </div>
        <div class="saleVideos__mobile">
            <?php while(have_rows('saleVideos')): the_row();
                $videoLink = get_sub_field('saleVideos__videoMobile');
                $name = get_sub_field('saleVideos_name');
                $dogname = get_sub_field('saleVideos_dogname');
                $content = get_sub_field('saleVideos_content');

                preg_match('/src="(.+?)"/', $videoLink, $matches_url );
                $src = $matches_url[1];	

                preg_match('/embed(.*?)?feature/', $src, $matches_id );
                $id = $matches_id[1];
                $id = str_replace( str_split( '?/' ), '', $id );
            ?>
            <div class="saleVideo">
                <div class="saleVideo__video">
                    <?php
                        // Load value.
                        $videoLink = get_sub_field('saleVideos__videoMobile');

                        // Use preg_match to find iframe src.
                        preg_match('/src="(.+?)"/', $videoLink, $matches);
                        $src = $matches[1];

                        // Add extra parameters to src and replcae HTML.
                        $params = array(
                            'controls'  => 1,
                            'hd'        => 1,
                            'autohide'  => 1,
                            'rel'       => 0,
                            'showinfo'  => 0,
                            'byline'    => 0,
                            'portrait'  => 0,
                            'title'     => 0,
                        );
                        $new_src = add_query_arg($params, $src);
                        $videoLink = str_replace($src, $new_src, $videoLink);

                        // Add extra attributes to iframe HTML.
                        $attributes = 'frameborder="0"';
                        $videoLink = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $videoLink);

                        // Display customized HTML.
                        echo $videoLink;
                    ?>
                </div>
                <div class="saleVideo__content">
                    <h3 class="getMarker"><?php echo $name . '<span class="divider">x</span><span class="marker">' . $dogname . '</span>'; ?></h3>
                    <p><?php echo $content; ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="saleVideos__ctaMobile">
            <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span>Dołącz do nich</span></a>
        </div>
    </section>

    <section class="saleCompare">
        <div class="saleCompare__heading">
            <h2 class="getMarker">Psirównajmy do <span class="marker">zwykłej</span> karmy</h2>
        </div>
        <div class="saleCompare__table">
            <div class="compareTable">
                <div class="compareTable__heading">
                    <div class="box"></div>
                    <div class="box">
                        <img src="<?php echo get_template_directory_uri() . '/images/lpsale/psibufet_logo_lp.svg'; ?>"/>
                    </div>
                    <div class="box">
                        <h3>Zwykła karma</h3>
                    </div>
                </div>
                <?php while(have_rows('saleCompare')): the_row();
                    $type = get_sub_field('saleCompare_type');
                    $psibufet = get_sub_field('saleCompare_psibufet');
                    $normal = get_sub_field('saleCompare_normal');
                ?>
                <div class="compareTable__row">
                    <div class="box">
                        <p><?php echo $type; ?></p>
                    </div>
                    <div class="box">
                        <p><?php echo $psibufet; ?></p>
                    </div>
                    <div class="box">
                        <p><?php echo $normal; ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span>Stwórz dietę</span></a>
    </section>
    <section class="saleFooter">
        <div class="saleFooter__wrap">
            <div class="saleFooter__logo">
                <img src="<?php echo get_template_directory_uri() . '/images/lpsale/psibufet_logo_lp.svg'; ?>"/>
            </div>
            <div class="saleFooter__contact">
                <a href="mailto:kontakt@psibufet.pl">kontakt@psibufet.pl</a>
                <a href="tel:+48221046259">+48 22 104 62 59</a>
            </div>
            <div class="saleFooter__info">
                <p class="hours">
                    Godziny otwarcia:<br/>
                    pon.-pt. (9:00-18:00)
                </p>
                <div class="social">
                    <a class="social__ig" href="https://www.instagram.com/psibufet/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/footer/ig_ico.svg'; ?>"/></a>
                    <a class="social__fb" href="https://www.facebook.com/psibufet" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/footer/fb_ico.svg'; ?>"/></a>
                </div>
            </div>
            <div class="saleFooter__payment">
                <p>Metody płatności:</p>
                <div class="list">
                    <div><img src="<?php echo get_template_directory_uri() . '/images/footer/mastercard.svg'; ?>"/></div>
                    <div><img src="<?php echo get_template_directory_uri() . '/images/footer/visa.svg'; ?>"/></div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>