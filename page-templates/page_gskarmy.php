<?php
    /*
    *   Template name: Google Shopping - karmy
    */
get_header(); ?>
<?php
    $page_id = get_the_ID();
    if($page_id == 1971){
        $pageName = 'Beef';
        $pageID = '1';
    }else if($page_id == 1980){
        $pageName = 'Turkey';
        $pageID = '4';
    }else if($page_id == 1982){
        $pageName = 'Lamb';
        $pageID = '2';
    }else if($page_id == 1984){
        $pageName = 'Chicken';
        $pageID = '3';
    }
?>
<main class="gsPage" data-name="<?php echo $pageName; ?>" data-id="<?php echo $pageID; ?>">
    <section class="gsHeading">
        <div class="gsHeading__wrap">
            <h1 class="getMarker"><?php the_field('gspageHeader_title'); ?></h1>
            <p><?php the_field('gspageHeader_content'); ?></p>
        </div>
    </section>
    <?php
    $featuredFlavour = get_field('gspageMainFlavour');
    if( $featuredFlavour ): ?>

    <!-- Google Shopping - meta -->
    <?php
        $image = get_field('flavourThumb', $featuredFlavour[0]->ID);
        $desc = get_field('gspageDesc', $featuredFlavour[0]->ID);
        $toFind = array('<br />', '&nbsp;');
        $descValue = str_replace($toFind, ' ', $desc);
    ?>
    <span itemscope itemtype="http://schema.org/Product" class="microdata">
        <meta itemprop="image" content="<?php echo $image; ?>">
        <meta itemprop="name" content="<?php echo get_field('flavourName', $featuredFlavour[0]->ID); ?>">
        <meta itemprop="description" content="<?php echo $descValue; ?>">
        <span itemprop="offers" itemscope itemtype="http://schema.org/Offer">
            <meta itemprop="price" content="5.90">
            <meta itemprop="priceCurrency" content="PLN">
        </span>
    </span>
    <!-- Google Shopping - meta -->

    <section class="gsKarmainfo" itemscope itemtype="http://schema.org/Product">
        <img data-original="<?php echo $image; ?>" class="no-lazyload" itemprop="image" style="display: none !important;"/>
        <div class="gsKarmainfo__wrap">
            <div class="gsKarmainfo__gallery">
                <div class="gallery">
                    <?php foreach( $featuredFlavour as $post ): setup_postdata($post); ?>
                        <?php while(have_rows('gspageGallery')): the_row(); ?>
                        <div class="gallery__photo">
                            <img data-original="<?php echo get_sub_field('gspageGallery_image')['url']; ?>" alt="<?php echo get_sub_field('gspageGallery_image')['alt']; ?>" class="no-lazyload"/>
                        </div>
                        <?php endwhile; ?>
                    <?php endforeach; ?>
                </div>
                <div class="bar" style="background-color: <?php the_field('flavourColor'); ?>">
                    <p itemprop="name"><?php the_field('flavourName'); ?></p>
                    <img class="no-lazyload" data-original="<?php the_field('flavourIcon'); ?>"/>
                </div>
            </div>
            <div class="gsKarmainfo__content">
                <div class="gsKarmainfo__contentWrap">
                    <h2 class="price" id="flavourPrice" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <meta itemprop="priceCurrency" content="PLN"/>
                        <span class="current-price" data-price="5.90">
                            <span class="value" itemprop="price">5
                                <small>90</small>
                            </span>Z??
                        </span> / dzie??
                    </h2>
                    <p class="portion" id="flavourValue">Porcja: <span>125</span> g / dzie??</p>
                    <div class="select">
                        <div class="select__selected">
                            <p>Zobacz oferowane porcje dzienne</p>
                        </div>
                        <div class="select__options">
                            <div class="select__heading">
                                <p>Porcja</p>
                                <p>Cena</p>
                            </div>
                            <div class="select__list">
                                <?php while(have_rows('flavourPricing')): the_row();
                                    $value = get_sub_field('flavourPricing_value');
                                    $price = get_sub_field('flavourPricing_price');
                                    $default = get_sub_field('flavourPricing_default');
                                ?>
                                <div class="select__option<?php if($default == 1): ?> select__option--default select__option--selected<?php endif; ?>" data-value="<?php echo $value; ?>" data-price-zl="<?php echo $price['flavourPricing_price_pln']; ?>" data-price-gr="<?php echo $price['flavourPricing_price_grosz']; ?>">
                                    <div class="portion"><?php echo $value; ?> g / dzie??</div>
                                    <div class="value"><span><?php echo $price['flavourPricing_price_pln']; ?><small><?php echo $price['flavourPricing_price_grosz']; ?></small></span> / dzie??</div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                    <p class="desc" itemprop="description"><?php the_field('gspageDesc'); ?></p>
                    <div class="infoButton"><img src="<?php echo get_template_directory_uri() . '/images/icons/info_icon_black.svg'; ?>"/>Zobacz sk??ad</div>
                    <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span><?php echo get_field('gspageCTA', $page_id); ?></span></a>
                </div>
            </div>
        </div>
    </section>
    <div class="foodModal">
        <div class="foodModal__wrap">
        <img class="closeFoodModal closeImg no-lazyload" src="<?php echo get_template_directory_uri() . '/images/icons/closeModal_ico.svg'; ?>"/>
            <?php foreach( $featuredFlavour as $post ): setup_postdata($post);
                $images = get_field('flavourPopup_gallery');
                $name = get_field('flavourName');
                $icon = get_field('flavourIcon');
                $color = get_field('flavourColor');
                $desc = get_field('flavourPopup_desc');
                $sklad = get_field('flavourPopup_sklad');
                $analityczny = get_field('flavourPopup_skladanalityczny');
                $dodatki = get_field('flavourPopup_dodatki');
            ?>
            <div class="foodModal__content">
                <div class="gallery">
                    <?php foreach( $images as $image ): ?>
                        <div class="gallery__image">
                            <img class="no-lazyload" data-original="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="title" style="background-color: <?php echo $color; ?>"><p><?php echo $name; ?><img class="no-lazyload" data-original="<?php echo $icon; ?>"/></p></div>
                <div class="desc">
                    <p><?php echo $desc; ?></p>
                </div>
                <div class="usp">
                    <div class="usp__pos">
                        <div class="thumb">
                            <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/jagnie_z_gor.svg'; ?>"/>
                        </div>
                        <p>Jako???? Human-Grade</p>
                    </div>
                    <div class="usp__pos">
                        <div class="thumb">
                            <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/ikonki_zbilansowane.svg'; ?>"/>
                        </div>
                        <p>Zbilansowany, pe??noporcjowy sk??ad</p>
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
                        <p>Bezzbo??owe, monobia??kowe</p>
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
                            <p>Sk??ad</p>
                            <img class="no-lazyload" data-original="<?php echo get_template_directory_uri() . '/images/icons/arrow_down_red_ico.svg'; ?>"/>
                        </div>
                        <div class="content">
                            <p><?php echo $sklad; ?></p>
                        </div>
                    </div>
                    <div class="accordion__element accordion__element--close">
                        <div class="heading">
                            <p>Sk??ad analityczny</p>
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
            <?php endforeach; ?>
            <div class="foodModal__close">
                <p class="btn btn--center btn--back closeFoodModal"><span>Powr??t</span></p>
            </div>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <?php
    $listedFlavour = get_field('gspageListFlavour');
    if( $listedFlavour ): ?>
    <section class="gsKarmaList">
        <div class="gsKarmaList__wrap">
            <div class="gsKarmaList__heading">
                <h2 class="getMarker">Poznaj inne <span class="marker">nasze smaki</span></h2>
            </div>
            <div class="gsKarmaList__list">
                <?php foreach( $listedFlavour as $post ): setup_postdata($post); ?>
                    <?php include get_template_directory() . '/template-parts/flavourTile.php'; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="gsExpert">
        <div class="gsExpert__heading">
            <h2 class="getMarker">Sk??ady karm opracowane przez <span class="marker">eksperta</span></h2>
        </div>
        <div class="gsExpert__wrap">
            <div class="gsExpert__image">
                <img src="<?php echo get_template_directory_uri() . '/images/expertphoto.webp'; ?>"/>
                <h4><span>dr in??.</span> Olga Lasek</h4>
            </div>
            <div class="gsExpert__content">
                <p><b>Absolwentka Wydzia??u Hodowli i Biologii Zwierz??t Uniwersytetu Rolniczego</b> w Krakowie.
                Pracuje na stanowisku asystenta, nauczyciela akademickiego w Katedrze ??ywienia Zwierz??t i Paszoznawstwa UR Krak??w. <b>Specjalizuje si?? w ??ywieniu zwierz??t</b> monogastrycznych ps??w, kot??w, drobiu i ptak??w ozdobnych, a co si?? z tym wi????e, <b>prowadzi liczne badania naukowe</b> dotycz??ce wymienionych zagadnie??.</p>
            </div>
        </div>
    </section>

    <section class="gsStandard">
        <div class="gsStandard__heading">
            <h2 class="getMarker">Nasze jedzenie spe??nia najwy??sze <span class="marker">standardy</span> bezpiecze??stwa</h2>
        </div>
        <div class="gsStandard__wrap container">
            <div class="gsStandard__usp">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/gspages/gs_usp_01.svg'; ?>"/>
                </div>
                <p><b>HACCP i kuchnia pod nadzorem</b> inspektora weterynarii</p>
            </div>
            <div class="gsStandard__usp">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/gspages/gs_usp_02.svg'; ?>"/>
                </div>
                <p><b>Karma wolna od wirus??w i bakterii</b> ka??da partia testowana w Zak??adzie Higieny Weterynaryjnej</p>
            </div>
            <div class="gsStandard__usp">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/gspages/gs_usp_03.svg'; ?>"/>
                </div>
                <p><b>Regularne testy</b> laboratoryjne (sk??ad, przydatno???? do spo??ycia)</p>
            </div>
            <div class="gsStandard__usp">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/gspages/gs_usp_04.svg'; ?>"/>
                </div>
                <p><b>Bezpieczne opakowanie</b> zapewniaj??ce ??wie??o???? do 48h od nadania</p>
            </div>
        </div>
    </section>

    <?php if(get_field('howitworks_step', 5)): ?>
    <section class="homeHowitworks">
        <div class="homeHowitworks__wrap container">
            <h2 class="getMarker">Jak to <span class="marker">dzia??a?</span></h2>
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

    <section class="gsDelivery">
        <div class="gsDelivery__wrap">
            <div class="image">
                <img src="<?php echo get_template_directory_uri() . '/images/howitworks_new/howPlan_freedelivery.svg'; ?>"/>
            </div>
            <h3>Dostarczamy w ca??ej Polsce. Za darmo.</h3>
            <p>Od Szczecina po Wieliczk??, ??wie??a karma w ka??dej misce! </p>
        </div>
    </section>

    <section class="homeStart">
        <div class="homeStart__wrap container">
            <div class="homeStart__content">
                <h2 class="getMarker">Podaj imi?? swojego psa i rozpocznij <span class="marker">Zdrow?? diet??</span> ju?? teraz!</h2>
                <form name="userStart" action="https://zamowienie.psibufet.pl/" autocomplete="off">
                    <input type="text" name="dogName" placeholder="Imi?? psa" autocomplete="off"/>
                    <button type="submit" value="Stw??rz diet??" class="btn btn--center"><span>Stw??rz diet??</span></button>
                </form>
            </div>
        </div>
    </section>

    <?php if(get_field('faq_list', 5)): ?>
    <section class="homeFaq">
        <div class="homeFaq__wrap container">
            <h2>Najcz????ciej zadawane pytania</h2>
            <div class="homeFaq__list">
                <?php while( have_rows('faq_list', 5) ): the_row(); 
                    $question = get_sub_field('faq_list_question');
                    $answer = get_sub_field('faq_list_answer');
                ?>
                <div class="question question--close" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="question__heading">
                        <p class="title" itemprop="name"><?php echo $question; ?></p>
                    </div>
                    <div class="question__answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <?php echo $answer; ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <a href="https://help.psibufet.pl/" target="_blank" class="moreFaq"><span>Zobacz wszystkie pytania z dzia??u FAQ</span></a>
        </div>
    </section>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
