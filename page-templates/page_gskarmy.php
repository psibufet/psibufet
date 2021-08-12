<?php
    /*
    *   Template name: Google Shopping - karmy
    */
get_header(); ?>
<script type="text/javascript">
    $(document).ready(function(){
        
    });
</script>
<?php
    $pageTitle = strtolower(get_the_title());
    if($pageTitle == 'wołowe love'){
        $pageName = 'Beef';
    }else if($pageTitle == 'indyczy kąsek'){
        $pageName = 'Turkey';
    }else if($pageTitle == 'jagnię wcina'){
        $pageName = 'Lamb';
    }else{
        $pageName = 'Chicken';
    }
?>
<main class="gsPage" data-name="<?php echo $pageName; ?>">
    <section class="gsHeading">
        <div class="gsHeading__wrap">
            <h1 class="getMarker"><?php the_field('gspageHeader_title'); ?></h1>
            <p><?php the_field('gspageHeader_content'); ?></p>
        </div>
    </section>
    <?php
    $featuredFlavour = get_field('gspageMainFlavour');
    if( $featuredFlavour ): ?>
    <section class="gsKarmainfo">
        <div class="gsKarmainfo__wrap">
            <div class="gsKarmainfo__gallery">
                <div class="gallery">
                    <?php foreach( $featuredFlavour as $post ): setup_postdata($post); ?>
                        <?php while(have_rows('gspageGallery')): the_row(); ?>
                        <div class="gallery__photo">
                            <img src="<?php echo get_sub_field('gspageGallery_image'); ?>" class="no-lazyload"/>
                        </div>
                        <?php endwhile; ?>
                    <?php endforeach; ?>
                </div>
                <div class="bar" style="background-color: <?php the_field('flavourColor'); ?>">
                    <p><?php the_field('flavourName'); ?></p>
                    <img class="no-lazyload" src="<?php the_field('flavourIcon'); ?>"/>
                </div>
            </div>
            <div class="gsKarmainfo__content">
                <div class="gsKarmainfo__contentWrap">
                    <h2 class="price" id="flavourPrice"><span><span class="value">6<small>90</small></span>ZŁ</span> / dzień</h2>
                    <p class="portion" id="flavourValue">Porcja: <span>125</span> g / dzień</p>
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
                                    <div class="portion"><?php echo $value; ?> g / dzień</div>
                                    <div class="value"><span><?php echo $price['flavourPricing_price_pln']; ?><small><?php echo $price['flavourPricing_price_grosz']; ?></small></span> / dzień</div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                    <p class="desc"><?php the_field('gspageDesc'); ?></p>
                    <div class="infoButton"><img src="<?php echo get_template_directory_uri() . '/images/icons/info_icon_black.svg'; ?>"/>Zobacz skład</div>
                    <a href="https://psibufet.pl/serwis" class="btn btn--center dir"><span>Dobierz porcję</span></a>
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
            <?php endforeach; ?>
            <div class="foodModal__close">
                <p class="btn btn--center btn--back closeFoodModal"><span>Powrót</span></p>
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
            <a href="https://psibufet.pl/serwis" class="btn btn--center dir"><span><?php the_field('front_howitworks_cta', 5) ?></span></a>
        </div>
    </section>
    <?php endif; ?>

    <section class="homeStart">
        <div class="homeStart__wrap container">
            <div class="homeStart__content">
                <h2 class="getMarker">Podaj imię swojego psa i rozpocznij <span class="marker">Zdrową dietę</span> już teraz!</h2>
                <form name="userStart" action="https://psibufet.pl/serwis" autocomplete="off">
                    <input type="text" name="dogName" placeholder="Imię psa" autocomplete="off"/>
                    <button type="submit" value="Stwórz dietę" class="btn btn--center"><span>Stwórz dietę</span></button>
                </form>
            </div>
        </div>
    </section>

    <?php if(get_field('faq_list', 5)): ?>
    <section class="homeFaq">
        <div class="homeFaq__wrap container">
            <h2>Najczęściej zadawane pytania</h2>
            <div class="homeFaq__list">
                <?php while( have_rows('faq_list', 5) ): the_row(); 
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