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

    <section class="recipesBoxes">
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
        <img src="<?php echo get_template_directory_uri() . '/images/recipes/recipesBanner.png'; ?>"/>
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
        <div class="recipesExpert__wrap container">
            <h2 class="getMarker">Składy karm opracowane przez <span class="marker">eksperta</span></h2>
            <div class="recipesExpert__expert">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/recipes/expert_image.png'; ?>"/>
                    <p class="name"><span>dr inż.</span> Olga Lasek</p>
                </div>
                <div class="content">
                    <p>Nasze posiłki powstały we współpracy z <b>dr inż. Olgą Lasek</b> – nauczycielką akademicką w <b>Katedrze Żywienia, Biotechnologii Zwierząt i Rybactwa, Uniwersytetu Rolniczego w Krakowie</b>. Jej specjalizacja w żywieniu zwierząt – poparta licznymi prowadzonymi przez nią badaniami na ten temat – sprawia, że karmy PsiBufet <b>to pewny wybór dla Twojego pupila</b>.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="recipesParts">
        <div class="recipesParts__wrap">
            <div class="recipesParts__heading">
                <h2 class="getMarker">Nasze <span class="marker">składniki</span></h2>
                <p><b>Najwyższej jakości półprodukty</b> od zaufanych dostawców.</p>
            </div>
            <div class="recipesParts__list">
                <?php
                while( have_rows('recipesParts') ): the_row();
                    $image = get_sub_field('recipesParts_image');
                    $name = get_sub_field('recipesParts_name');
                    $content = get_sub_field('recipesParts_content');
                ?>
                <div class="recipesParts__box">
                    <div class="image">
                        <img src="<?php echo $image; ?>" class="no-lazyload"/>
                    </div>
                    <div class="content">
                        <p><b><?php echo $name; ?>:</b> <?php echo $content; ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <section class="recipesSafety">
        <div class="recipesSafety__wrap">
            <div class="recipesSafety__image">
                <img src="<?php the_field('safetyImage'); ?>"/>
            </div>
            <div class="recipesSafety__content">
                <h2 class="getMarker">Spełniamy najwyższe <span class="marker">standardy</span> bezpieczeństwa</h2>
                <div class="boxes">
                    <?php while(have_rows('safetyBoxes')): the_row();
                        $icon = get_sub_field('safetyBoxes_icon');
                        $text = get_sub_field('safetyBoxes_text');
                    ?>
                    <div class="boxes__box">
                        <div class="icon">
                            <img src="<?php echo $icon; ?>"/>
                        </div>
                        <p class="text"><?php echo $text; ?></p>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="pbShortcuts">
        <h2 class="getMarker"><span class="marker">Poznaj</span> nas lepiej</h2>
        <div class="pbShortcuts__wrap">
            <a href="/jak-to-dziala" class="pbShortcuts__box" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_01.png'; ?>');">
                <p class="title">Jak to działa?</p>
            </a>
            <a href="/o-nas" class="pbShortcuts__box" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_03.png'; ?>');">
                <p class="title">O nas</p>
            </a>
            <a href="https://help.psibufet.pl/" class="pbShortcuts__box" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_04.png'; ?>');">
                <p class="title">FAQ</p>
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