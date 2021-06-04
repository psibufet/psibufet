<?php 
/*
*   Template Name: LP - Sale
*/
get_header(); ?>

<main class="lpSale">
    <header class="saleMenu">
        <div class="saleMenu__wrap container">
            <img src="<?php echo get_template_directory_uri() . '/images/psibufet_logo.svg'; ?>"/>
            <a href="#" class="btn btn--header"><span>Zamów</span></a>
        </div>
    </header>
    <div class="stickyBtn">
        <a href="#" class="btn btn--center"><span>Odbierz zniżkę</span></a>
    </div>
    <section class="salePromobar">
        <p><b>-50%</b> na dwa pierwsze zamówienia</p>
    </section>
    <section class="saleHeader" style="background-image: url('/wp-content/themes/psibufet/images/lpsale/saleHeader.webp');">
        <div class="saleHeader__wrap">
            <div class="saleHeader__content">
                <h2>Świeże spojrzenie na psie jedzenie</h2>
                <div class="tags">
                    <div><p>Naturalne składniki</p></div>
                    <div><p>Idealna porcja</p></div>
                    <div><p>Dostawa pod drzwi</p></div>
                </div>
            </div>
            <div class="saleHeader__form">
                <h2>Jaką rasę będziemy karmić?</h2>
                <input type="text" name="rasa_psa" placeholder="Wpisz rasę psa np. Owczarek niemiecki"/>
                <div class="correct">
                    <h3 class="getMarker"><span class="marker">Psiepięknie!</span></h3>
                    <p>Jesteś we właściwym miejscu!<br/>PsiBufet jest idealny dla Twojego psiaka.</p>
                    <a href="#" class="btn"><span>Stwórz dietę</span></a>
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
            <a href="#" class="btn"><span>Wypróbuj</span></a>
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
                                <img src="<?php echo $image; ?>"  class="no-lazyload"/>
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
                        <img src="<?php echo get_template_directory_uri() . '/images/expertphoto.png'; ?>"/>
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
        <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span><?php the_field('front_foodinfo_cta', 5) ?></span></a>
        <div class="foodModal">
            <div class="foodModal__wrap">
                <img class="closeFoodModal closeImg no-lazyload" src="<?php echo get_template_directory_uri() . '/images/icons/closeModal_ico.svg'; ?>"/>
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

    <section class="saleVideos">
        <div class="saleVideos__heading">
            <h2 class="getMarker">Co o nas <span class="marker">mówią?</span></h2>
        </div>
        <div class="saleVideos__wrap container">
            <div class="saleVideos__main">
                <?php while(have_rows('saleVideos')): the_row();
                    $videoLink = get_sub_field('saleVideos_video');
                    $name = get_sub_field('saleVideos_name');
                    $dogname = get_sub_field('saleVideos_dogname');
                    $content = get_sub_field('saleVideos_content');
                ?>
                <div class="videoSlide" data-video="video_0<?php echo get_row_index(); ?>">
                    <div class="videoSlide__video">
                        <?php echo $videoLink; ?>
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
                    </div>
                    <h3><?php echo $name . '<span>x</span>' . $dogname; ?></h3>
                </div>
                <?php endwhile; ?>
            </div>
            <a href="#" class="btn btn--center"><span>Dołącz do nich</span></a>
        </div>
        <div class="saleVideos__mobile">
            <?php while(have_rows('saleVideos')): the_row();
                $video = get_sub_field('saleVideos__videoMobile');
                $name = get_sub_field('saleVideos_name');
                $dogname = get_sub_field('saleVideos_dogname');
                $content = get_sub_field('saleVideos_content');

                preg_match('/src="(.+?)"/', $video, $matches_url );
                $src = $matches_url[1];	

                preg_match('/embed(.*?)?feature/', $src, $matches_id );
                $id = $matches_id[1];
                $id = str_replace( str_split( '?/' ), '', $id );
            ?>
            <div class="saleVideo">
                <div class="saleVideo__video">
                    <?php echo $video; ?>
                </div>
                <div class="saleVideo__content">
                    <h3 class="getMarker"><?php echo $name . '<span class="divider">x</span><span class="marker">' . $dogname . '</span>'; ?></h3>
                    <p><?php echo $content; ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="saleVideos__ctaMobile">
            <a href="#" class="btn btn--center"><span>Dołącz do nich</span></a>
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
                        <img src="<?php echo get_template_directory_uri() . '/images/psibufet_logo.svg'; ?>"/>
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
        <a href="#" class="btn btn--center"><span>Stwórz dietę</span></a>
    </section>
    <section class="saleFooter">
        <div class="saleFooter__wrap">
            <div class="saleFooter__logo">
                <img src="<?php echo get_template_directory_uri() . '/images/psibufet_logo.svg'; ?>"/>
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
                    <div><img src="<?php echo get_template_directory_uri() . '/images/footer/blik.svg'; ?>"/></div>
                    <div><img src="<?php echo get_template_directory_uri() . '/images/footer/przelewy24.svg'; ?>"/></div>
                    <div><img src="<?php echo get_template_directory_uri() . '/images/footer/mastercard.svg'; ?>"/></div>
                    <div><img src="<?php echo get_template_directory_uri() . '/images/footer/visa.svg'; ?>"/></div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>