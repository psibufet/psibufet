<?php
    /*
     *  Template Name: Nasze przepisy - new
     */
get_header(); ?>

<main class="psibufet psibufet--recipes">

    <section class="recipesHeading">
        <div class="recipesHeading__wrap container">
            <h1>Nasze przepisy</h1>
            <p>Wyselekcjonowani dostawcy. Świeże składniki. Ekspercka wiedza.</p>
        </div>
    </section>

    <section class="recipesBoxes recipesBoxes--new">
        <div class="recipesBoxes__wrap">
            <div class="recipesBoxes__box">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/recipes/recipesBox_01.svg'; ?>"/>
                </div>
                <p>Naturalne<br/>świeże składniki</p>
            </div>
            <div class="recipesBoxes__box">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/recipes/recipesBox_02.svg'; ?>"/>
                </div>
                <p>Jakość<br/>Human-Grade</p>
            </div>
            <div class="recipesBoxes__box">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/recipes/recipesBox_03.svg'; ?>"/>
                </div>
                <p>Zbilansowany,<br/>pełnoporcjowy skład</p>
            </div>
            <div class="recipesBoxes__box">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/recipes/recipesBox_04.svg'; ?>"/>
                </div>
                <p>Gotowane<br/>na parze</p>
            </div>
            <div class="recipesBoxes__box">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/recipes/recipesBox_05.svg'; ?>"/>
                </div>
                <p>Idealnie<br/>dopasowana porcja</p>
            </div>
            <div class="recipesBoxes__box recipesBoxes__box--last">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/recipes/recipesBox_06.svg'; ?>"/>
                </div>
                <p>Testowane<br/>na ludziach</p>
            </div>
        </div>
    </section>
    
    <section class="recipesBanner">
        <div class="recipesBanner__wrap">
            <div class="recipesBanner__badges">
                <img data-original="<?php echo get_template_directory_uri() . '/images/recipes/lider_ico.png'; ?>" class="lider no-lazyload" alt="PsiBufet - Konsumencki Lider Jakości 2021"/>
            </div>
            <img src="<?php echo get_template_directory_uri() . '/images/recipes/recipesBanner.gif'; ?>" alt="<?php echo get_field('recipesGif_alt'); ?>"/>
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
                $flavours = get_field('recipesMenu_flavours');
                foreach( $flavours as $post ){
                    setup_postdata($post);
                    $tileType = 'small';
                    $gallery = 'static';
                    include get_template_directory() . '/template-parts/foodTile.php';
                    wp_reset_postdata();
                } ?>
            </div>
            <div class="recipesMenu__order">
                <a href="https://zamowienie.psibufet.pl/" class="btn"><span>Wypróbuj</span></a>
            </div>
        </div>
    </section>

    <section class="recipesExpert">
        <div class="recipesExpert__wrap">
            <div class="recipesExpert__content">
                <div class="recipesExpert__expert">
                    <h2 class="getMarker">Składy karm opracowane przez <span class="marker">eksperta</span></h2>
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri() . '/images/recipes/expert_image.png'; ?>"/>
                        <p class="name"><span>dr inż.</span> Olga Lasek</p>
                    </div>
                    <div class="content">
                        <p>Absolwentka Wydziału Hodowli i Biologii Zwierząt Uniwersytetu Rolniczego w Krakowie. Pracuje w Katedrze Żywienia Zwierząt i Paszoznawstwa UR Kraków. Specjalizuje się w żywieniu zwierząt i prowadzi liczne badania naukowe.</p>
                    </div>
                </div>
            </div>
            <div class="recipesExpert__image">
                <img src="<?php echo get_template_directory_uri() . '/images/recipes/expert_full_img.png'; ?>"/>
            </div>
        </div>
    </section>

    <section class="recipesPricing">
        <div class="recipesPricing__wrap container">
            <div class="recipesPricing__heading">
                <h2 class="getMarker">Ile <span class="marker">kosztuje</span> PsiBufet?</h2>
                <p>Cena PsiBufet zależy od indywidualnego planu, na który wpływa waga psa, zapotrzebowanie kaloryczne, częstotliwość dostaw. <br/>Sprawdź przykłady!</p>
            </div>
            <div class="recipesPricing__list">
                <?php while(have_rows('recipesPricing')): the_row();
                    $name = get_sub_field('recipesPricing_name');
                    $color = get_sub_field('recipesPricing_color');
                    $image = get_sub_field('recipesPricing_image');
                    $dogname = get_sub_field('recipesPricing_dogname');
                    $rasa = get_sub_field('recipesPricing_rasa');
                    $price_zl = get_sub_field('recipesPricing_price_zl');
                    $price_gr = get_sub_field('recipesPricing_price_gr');
                    $portion = get_sub_field('recipesPricing_portion');
                    $details = get_sub_field('recipesPricing_details');
                ?>
                <div class="exampleBox" style="background-color: <?php echo $color . '1a'; ?>">
                    <div class="exampleBox__heading" style="background-color: <?php echo $color; ?>">
                        <h3><?php echo $name; ?></h3>
                    </div>
                    <div class="exampleBox__main">
                        <div class="image">
                            <img class="no-lazyload" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                        </div>
                        <h3><?php echo $dogname; ?></h3>
                        <p><?php echo $rasa; ?></p>
                    </div>
                    <div class="exampleBox__info">
                        <p class="price">
                            <span><?php echo $price_zl; ?><small><?php echo $price_gr; ?></small></span>
                            zł / dzień
                        </p>
                        <p class="portion">dla porcji dziennej<b><?php echo $portion; ?> g</b></p>
                    </div>
                    <div class="exampleBox__details">
                        <div class="heading"><p>Szczegóły planu</p></div>
                        <div class="content">
                            <p><?php echo $details; ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="recipesPricing__cta">
                <h3>Wypełnij 2-minutowy formularz i poznaj swoją cenę</h3>
                <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span>Sprawdź cenę</span></a>
            </div>
        </div>
    </section>

    <section class="homeReturn">
        <div class="homeReturn__wrap container">
            <div class="homeReturn__miska">
                <img src="<?php echo get_template_directory_uri() . '/images/home/homeReturn_miska.gif'; ?>"/>
            </div>
            <div class="homeReturn__content">
                <h2 class="getMarker">Wylizana miska lub <span class="marker">zwrot</span> pieniędzy</h2>
                <p>Jesteśmy pewni, że Twój pies pokocha PsiBufet, dlatego na nasze jedzenie dajemy <a href="https://psibufet.pl/regulamin.pdf" target="_blank">Gwarancję Czystej Miski</a>.</p>
            </div>
        </div>
    </section>

    <section class="pbShortcuts">
        <h2 class="getMarker"><span class="marker">Poznaj</span> nas lepiej</h2>
        <div class="pbShortcuts__wrap">
            <a href="/jak-to-dziala" class="pbShortcuts__box dir" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_01.webp'; ?>');">
                <p class="title">Jak to działa?</p>
            </a>
            <a href="/o-nas" class="pbShortcuts__box dir" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_03.webp'; ?>');">
                <p class="title">O nas</p>
            </a>
            <a href="/pomoc" class="pbShortcuts__box dir" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_04.webp'; ?>');">
                <p class="title">Centrum pomocy</p>
            </a>
        </div>
    </section>

    <section class="homeReviews homeReviews--recipes">
        <?php if( have_rows('after_header_logos', 5) ): ?>
        <ul class="slideul">
            <?php while( have_rows('after_header_logos', 5) ): the_row();
                $image = get_sub_field('logos_img');
                $content = get_sub_field('logos_content');
                $google = get_sub_field('google_slide');
                $googleRate = get_sub_field('google_rate');
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
                        <p><?php echo $googleRate; ?>/5 wg opinii klientów</p>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>
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
            <a href="https://psibufet.pl/pomoc" class="btn btn--clear"><span>Skontaktuj się z nami</span></a>
        </div>
    </section>

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