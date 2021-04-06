<?php

/*

Template Name: Nasze Przepisy

*/
	get_header();
?>

<div id="recipe_page">
    <section class="recipe_header">
        <div class="inner">
            <h1>Karma, której pozazdrościsz swojemu psu!</h1>
            <p class="lead">Pełnoporcjowy, zbilansowany skład przygotowany przez dietetyka zwierzęcego oraz świeże składniki od starannie wyselekcjonowanych dostawców. Do tego pełna suplementacja witaminowo-mineralna. To wszystko zamykamy próżniowo w idealnej porcji dostosowanej do potrzeb Twojego psa.</p>
        </div>
        <a class="header_arrow" href="#first_section"><img src="/wp-content/themes/psibufet/images/chevron_down_white.svg"/></a>
    </section>
    <?php if( have_rows('after_header_icons') ): ?>
    <section class="recipe_icons">
        <div class="container">
            <div class="icons">
            <?php while( have_rows('after_header_icons') ): the_row(); 
                $image = get_sub_field('icons_img');
                $text = get_sub_field('icons_text');
            ?>
                <div class="icon">
                    <img src="<?php echo $image; ?>"/>
                    <p><?php echo $text; ?></p>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <section class="recipe_menu">
        <div class="container">
            <div class="menu_header">
                <h2><?php the_field('pbm_sec_title'); ?></h2>
                <p><?php the_field('pbm_sec_desc'); ?></p>
            </div>
            <?php if( have_rows('menu_positions') ): ?>
            <div class="menu_boxes">
                <?php while( have_rows('menu_positions') ): the_row(); 
                    $image = get_sub_field('position_thumbnail');
                    $color = get_sub_field('position_color');
                    $icon = get_sub_field('position_icon');
                    $title = get_sub_field('position_name');
                    $desc = get_sub_field('position_desc');
                    $id = get_sub_field('unikalne_id_pozycji');
                ?>
                <div class="box" style="box-shadow: 4px 4px <?php echo $color; ?>;">
                    <div class="thumbnail">
                        <img src="<?php echo $image; ?>"/>
                    </div>
                    <div class="content">
                        <div class="heading" style="background-color: <?php echo $color; ?>;">
                            <img src="<?php echo $icon; ?>"/>
                            <p class="title"><?php echo $title; ?></p>
                        </div>
                        <p class="desc"><?php echo $desc; ?></p>
                        <p class="info <?php echo $id; ?>_btn">Skład <img src="/wp-content/themes/psibufet/images/recipe/info_ico.svg"/></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <a href="https://zamowienie.psibufet.pl/" class="check dir order"><span><?php the_field('recipe_menu_cta'); ?></span></a>
        </div>
        <div class="popup_overlay"></div>
        <?php if( have_rows('popup') ): ?>
        <div class="popup_container">
            <?php while( have_rows('popup') ): the_row(); 
                $id = get_sub_field('unikalne_id_popup');
                $color = get_sub_field('popup_color');
                $icon = get_sub_field('popup_icon');
                $dog = get_sub_field('popup_dog');
                $food = get_sub_field('popup_food_img');
                $name = get_sub_field('popup_name');
                $desc = get_sub_field('popup_desc');
                $sklad = get_sub_field('popup_sklad');
                $box1 = get_sub_field('box_1');
                $box1_img = $box1['box_1_zdjecie'];
                $box1_text = $box1['box_1_content'];
                $box2 = get_sub_field('box_2');
                $box2_img = $box2['box_2_zdjecie'];
                $box2_text = $box2['box_2_content'];
                $box3 = get_sub_field('box_3');
                $box3_img = $box3['box_3_zdjecie'];
                $box3_text = $box3['box_3_content'];
                $box4 = get_sub_field('box_4');
                $box4_img = $box4['box_4_zdjecie'];
                $box4_text = $box4['box_4_content'];
                $analityczny = get_sub_field('sklad_analityczny');
                $dodatki = get_sub_field('dodatki');
            ?>
            <div id="<?php echo $id; ?>" class="sklad_popup" style="box-shadow: 4px 4px <?php echo $color; ?>;">
                <img class="icon_top" src="<?php echo $icon; ?>"/>
                <div class="inner">
                    <img class="close" src="/wp-content/themes/psibufet/images/popup/close.svg"/>
                    <div class="popup_heading">
                        <h2><?php echo $name; ?></h2>
                        <p><?php echo $desc; ?></p>
                    </div>
                    <div class="popup_sklad">
                        <p><b>Skład:</b> <?php echo $sklad; ?></p>
                    </div>
                    <div class="popup_boxes">
                        <?php if( $box1 ): ?>
                            <div class="box">
                                <img src="<?php echo $box1_img; ?>"/>
                                <p><?php echo $box1_text; ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if( $box2 ): ?>
                            <div class="box">
                                <img src="<?php echo $box2_img; ?>"/>
                                <p><?php echo $box2_text; ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if( $box3 ): ?>
                            <div class="box">
                                <img src="<?php echo $box3_img; ?>"/>
                                <p><?php echo $box3_text; ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if( $box4 ): ?>
                            <div class="box">
                                <img src="<?php echo $box4_img; ?>"/>
                                <p><?php echo $box4_text; ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="popup_content">
                        <p><b>Skład analityczny:</b> <?php echo $analityczny; ?></p>
                        <p><b>Dodatki:</b> <?php echo $dodatki; ?></p>
                    </div>
                    <img class="food_img" src="<?php echo $food; ?>"/>
                </div>
                <img class="dog_bottom" src="<?php echo $dog; ?>"/>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </section>
    <section class="recipe_gang">
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
        <a href="https://zamowienie.psibufet.pl/" class="check mobile-only dir"><span><?php the_field('recipe_psibufetgant_mobile_cta'); ?></span></a>
    </section>
    <section class="recipe_price">
        <div class="container">
            <div class="left_content">
                <div class="inner">
                    <h2>Dedykowany plan, <span>indywidualna cena</span></h2>
                    <p>Nieprzypadkowo prosimy Cię o uzupełnienie informacji o Twoim psie. Potrzebujemy ich do przygotowania dopasowanego planu żywienia.<br/><br/>
                    Swoją cenę PsiBufet sprawdzisz w czasie rejestracji, gdy już dobrze poznamy Twojego pupila.
                    <br/><br/>
                    Zastanawiasz się, do której grupy zalicza się Twój pies? Wypełnij formularz rejestracyjny i sprawdź oferowany plan. Bez żadnych opłat oraz ukrytych formalności!</p>
                    <a href="https://zamowienie.psibufet.pl/" class="check dir"><span><?php the_field('recipe_price_cta'); ?></span></a>
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
                <a href="https://zamowienie.psibufet.pl/" class="check mobile-only dir"><span><?php the_field('recipe_price_cta'); ?></span></a>
            </div>
        </div>
    </section>
    <section class="recipe_package">
        <div class="left_image">
            <img src="/wp-content/themes/psibufet/images/recipe/opakowanie.jpg" class="desktop"/>
            <img src="/wp-content/themes/psibufet/images/recipe/opakowanie-mobile.jpg" class="mobile"/>
        </div>
        <div class="right_content">
            <div class="inner">
                <div class="content">
                    <h2>Bezpieczne <span>opakowania</span></h2>
                    <p>Dzienne porcje karmy PsiBufet pakujemy próżniowo w specjalne worki. Próżnia pozwala zachować świeżość produktu na długi czas. Opakowania nie zawierają bisfenolu (BPA free) i można w nich podgrzewać karmę przed podaniem. Całość przyjeżdża do Ciebie w specjalnym termicznym opakowaniu, dzięki któremu karma jest idealnie schłodzona.
                    <br/><br/>
                    Dbamy też o środowisko! Worki próżniowe nadają się do recyklingu i powinny trafić do żółtego pojemnika na tworzywa sztuczne, zaś kartonowe opakowania zbiorcze do niebieskiego pojemnika na papier.</p>
                    <a href="https://zamowienie.psibufet.pl/" class="check dir order"><span><?php the_field('recipe_package_cta'); ?></span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="recipe_skladniki">
        <div class="container">
            <div class="skladniki_header">
                <h2><?php the_field('ns_sec_title'); ?></h2>
                <p><?php the_field('ns_sec_desc'); ?></p>
            </div>
        </div>
        <?php if( have_rows('skladniki_slider') ): ?>
        <div class="skladniki_slider">
            <ul class="sklad_slides">
                <?php while( have_rows('skladniki_slider') ): the_row(); 
                        $image = get_sub_field('skladnik_img');
                        $name = get_sub_field('skladnik_name');
                        $desc = get_sub_field('skladnik_desc');
                    ?>
                <li class="skladnik slide">
                    <div class="thumb">
                        <img src="<?php echo $image; ?>" />
                    </div>
                    <div class="content">
                        <p><b><?php echo $name; ?>: </b><?php echo $desc; ?></p>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>
            <div class="nav">
                <i class="arrow sklad-prev"><img class="left" src="/wp-content/themes/psibufet/images/slider_arrow.svg" /></i>
                <i class="arrow sklad-next"><img class="right" src="/wp-content/themes/psibufet/images/slider_arrow.svg" /></i>
            </div>
        </div>
        <?php endif; ?>
    </section>
    <section class="recipe_compare">
        <div class="container">
            <div class="compare_header">
                <h2>Co Twój pies je?</h2>
                <p class="lead">Porównaj PsiBufet z innymi karmami.</p>
                <div class="compare_choose">
                    <p id="mk" class="active">Mokra karma</p>
                    <p id="sk">Sucha karma</p>
                    <p id="sj">Surowe jedzenie</p>
                    <p id="dj">Domowe jedzenie</p>
                </div>
            </div>
            <div class="content_heading">
                <div class="left">
                    <h2>Psibufet</h2>
                </div>
                <div class="right">
                    <h2 id="mk_title">Mokra karma</h2>
                    <h2 id="sk_title" style="display: none;">Sucha karma</h2>
                    <h2 id="sj_title" style="display: none;">Surowe jedzenie</h2>
                    <h2 id="dj_title" style="display: none;">Domowe jedzenie</h2>
                </div>
            </div>
            <div class="compare_content">
                <div class="content_row">
                    <p class="title">Składniki</p>
                    <div class="left">
                        <div class="inner">
                            <p><?php the_field('skladniki_pb'); ?></p>
                        </div>
                    </div>
                    <div class="right">
                        <div id="skladniki_mk" class="inner">
                            <p><?php the_field('skladniki_mk'); ?></p>
                        </div>
                        <div id="skladniki_sk" class="inner" style="display: none;">
                            <p><?php the_field('skladniki_sk'); ?></p>
                        </div>
                        <div id="skladniki_sj" class="inner" style="display: none;">
                            <p><?php the_field('skladniki_sj'); ?></p>
                        </div>
                        <div id="skladniki_dj" class="inner" style="display: none;">
                            <p><?php the_field('skladniki_dj'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="content_row">
                    <p class="title">Świeżość</p>
                    <div class="left">
                        <div class="inner">
                            <p><?php the_field('swiezosc_pb'); ?></p>
                        </div>
                    </div>
                    <div class="right">
                        <div id="swiezosc_mk" class="inner">
                            <p><?php the_field('swiezosc_mk'); ?></p>
                        </div>
                        <div id="swiezosc_sk" class="inner" style="display: none;">
                            <p><?php the_field('swiezosc_sk'); ?></p>
                        </div>
                        <div id="swiezosc_sj" class="inner" style="display: none;">
                            <p><?php the_field('swiezosc_sj'); ?></p>
                        </div>
                        <div id="swiezosc_dj" class="inner" style="display: none;">
                            <p><?php the_field('swiezosc_dj'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="content_row">
                    <p class="title">Gotowanie</p>
                    <div class="left">
                        <div class="inner">
                            <p><?php the_field('gotowanie_pb'); ?></p>
                        </div>
                    </div>
                    <div class="right">
                        <div id="gotowanie_mk" class="inner">
                            <p><?php the_field('gotowanie_mk'); ?></p>
                        </div>
                        <div id="gotowanie_sk" class="inner" style="display: none;">
                            <p><?php the_field('gotowanie_sk'); ?></p>
                        </div>
                        <div id="gotowanie_sj" class="inner" style="display: none;">
                            <p><?php the_field('gotowanie_sj'); ?></p>
                        </div>
                        <div id="gotowanie_dj" class="inner" style="display: none;">
                            <p><?php the_field('gotowanie_dj'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="content_row">
                    <p class="title">Wygoda</p>
                    <div class="left">
                        <div class="inner">
                            <p><?php the_field('wygoda_pb'); ?></p>
                        </div>
                    </div>
                    <div class="right">
                        <div id="wygoda_mk" class="inner">
                            <p><?php the_field('wygoda_mk'); ?></p>
                        </div>
                        <div id="wygoda_sk" class="inner" style="display: none;">
                            <p><?php the_field('wygoda_sk'); ?></p>
                        </div>
                        <div id="wygoda_sj" class="inner" style="display: none;">
                            <p><?php the_field('wygoda_sj'); ?></p>
                        </div>
                        <div id="wygoda_dj" class="inner" style="display: none;">
                            <p><?php the_field('wygoda_dj'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="https://zamowienie.psibufet.pl/" class="check dir order"><span><?php the_field('recipe_compare_cta'); ?></span></a>
        </div>
    </section>
</div>

<?php get_footer(); ?>

