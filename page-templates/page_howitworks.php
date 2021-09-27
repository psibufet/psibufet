<?php
    /*
     *  Template Name: Jak to działa - new
     */
get_header(); ?>

<main class="psibufet psibufet--howitworks">

    <section class="howHeading">
        <div class="howHeading__wrap">
            <h1>Jak to działa</h1>
            <p>Świeże posiłki. Indywidualny plan.<br/>Dostawa pod same drzwi.<br/>Radość psa gwarantowana.</p>
        </div>
    </section>

    <section class="howVideo">
        <div class="howVideo__wrap">
            <div class="howVideo__heading">
                <h2 class="getMarker">Jak to <span class="marker">działa?</span></h2>
            </div>
            <div class="howVideo__content">
                <div class="video">
                    <iframe width="100%" height="auto" src="https://www.youtube.com/embed/8tiFEWemZ5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="content">
                    <h3 class="getMarker">Tak to <span class="marker">robimy</span>!</h3>
                    <p>Zobacz jak powstaje karma, którą pokochały tysiące psów w całej Polsce!</p>
                </div>
            </div>
            <div class="howVideo__cta">
                <a href="https://zamowienie.psibufet.pl/" class="btn"><span>Wypróbuj</span></a>
            </div>
        </div>
    </section>

    <?php if(get_field('howSteps')): ?>
    <section class="howSteps">
        <div class="howSteps__steps">
            <?php while(have_rows('howSteps')): the_row();
                $image = get_sub_field('howSteps_image');
                $title = get_sub_field('howSteps_title');
                $content = get_sub_field('howSteps_content');
            ?>
            <div class="howSteps__step" data-number="<?php echo get_row_index(); ?>.">
                <div class="thumb">
                    <img src="<?php echo $image; ?>"/>
                </div>
                <div class="content">
                    <h3><?php echo $title; ?></h3>
                    <p><?php echo $content; ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="howSteps__cta">
            <a href="https://zamowienie.psibufet.pl/" class="btn"><span>Wypróbuj</span></a>
        </div>
    </section>
    <?php endif; ?>

    <section class="howInfo">
        <div class="howInfo__heading">
            <h2 class="getMarker">Pełna elastyczność - nowy wymiar <span class="marker">subskrypcji</span>.</h2>
        </div>
        <div class="howInfo__wrap">
            <div class="howInfo__phone">
                <img src="<?php echo get_template_directory_uri() . '/images/howitworks_new/howInfo_phone.png'; ?>"/>
            </div>
            <div class="howInfo__content">
                <div class="boxes">
                    <?php while(have_rows('howBoxes')): the_row();
                        $icon = get_sub_field('howBoxes_icon');
                        $text = get_sub_field('howBoxes_text');
                    ?>
                    <div class="boxes__box">
                        <div class="icon">
                            <img src="<?php echo $icon; ?>"/>
                        </div>
                        <p><?php echo $text; ?></p>
                    </div>
                    <?php endwhile; ?>
                </div>
                <div class="cta">
                    <a href="https://zamowienie.psibufet.pl/" class="btn"><span>Wypróbuj</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="howPlan">
        <div class="howPlan__wrap">
            <div class="howPlan__heading">
                <h2 class="getMarker">Dostępne plany <span class="marker">żywienia</span></h2>
            </div>
            <div class="pbPlans">
                <div class="pbPlans__nav">
                    <p class="pos active" data-id="1"><span>100% PsiBufet</span></p>
                    <p class="pos" data-id="2"><span>Plan Mix</span></p>
                </div>
                <div class="pbPlans__content">
                    <div class="content content--ready content--active" data-id="1">
                        <div class="content__image">
                            <img src="<?php echo get_template_directory_uri() . '/images/howitworks_new/miska_full.png'; ?>"/>
                        </div>
                        <div class="content__content">
                            <div class="text">
                                <p>Zapewnia <b>pełne dzienne zapotrzebowanie kaloryczne</b> Twojego psa.</p>
                                <p>Rekomendowany plan przygotowany przez dietetyków zwierzęcych, zapewniający Twojemu pupilowi <b>niezbędną ilość kalorii, witamin i minerałów</b>.</p>
                                <p><b>Psst...</b> Zostawiamy trochę miejsca na ulubione smaczki.</p>
                            </div>
                            <div class="boxes">
                                <div class="boxes__box">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri() . '/images/recipes/recipesBox_03.svg'; ?>"/>
                                    </div>
                                    <p>Zbilansowany,<br/>pełnoporcjowy skład</p>
                                </div>
                                <div class="boxes__box">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri() . '/images/recipes/recipesBox_05.svg'; ?>"/>
                                    </div>
                                    <p>Idealnie<br/>dopasowana porcja</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content" data-id="2">
                        <div class="content__image">
                            <img src="<?php echo get_template_directory_uri() . '/images/howitworks_new/miska_half.png'; ?>"/>
                        </div>
                        <div class="content__content">
                            <div class="text">
                                <p>Pokryje około <b>60% zapotrzebowania kalorycznego</b> Twojego psa.</p>
                                <p>Opcja dla wszystkich właścicieli psów, którzy chcą łączyć PsiBufet z inna karmą, a także z ulubionymi smaczkami.</p>
                                <p><b>Plan nie gwarantuje dostarczenia pupilowi wszystkich niezbędnych kalorii, witamin oraz składników odżywczych.</b></p>
                            </div>
                            <div class="boxes">
                                <div class="boxes__box">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri() . '/images/recipes/recipesBox_01.svg'; ?>"/>
                                    </div>
                                    <p>Jakość Human-Grade</p>
                                </div>
                                <div class="boxes__box">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri() . '/images/recipes/recipesBox_04.svg'; ?>"/>
                                    </div>
                                    <p>Gotowane na parze</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="howPlan__cta">
                <a href="https://zamowienie.psibufet.pl/" class="btn"><span>Wypróbuj</span></a>
            </div>
            <div class="howPlan__delivery">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/howitworks_new/howPlan_freedelivery.svg'; ?>"/>
                </div>
                <h3>Dostarczamy w całej Polsce. Za darmo.</h3>
                <p>Od Szczecina po Wieliczkę, świeża karma w każdej misce! </p>
            </div>
        </div>
    </section>

    <section class="howUsers">
        <div class="howUsers__heading">
            <h2 class="getMarker">Przykładowe <span class="marker">plany</span> członków psibufetgang</h2>
        </div>
        <div class="howUsers__list">
            <?php while(have_rows('userList')): the_row();
                $video = get_sub_field('userList_video');
                $owner = get_sub_field('userList_owner');
                $dog = get_sub_field('userList_dog');
                $desc = get_sub_field('userList_desc');
            ?>
            <div class="pbUserInfo">
                <div class="pbUserInfo__video">
                    <?php echo $video; ?>
                </div>
                <div class="pbUserInfo__content">
                    <h3 class="title getMarker getMarker--small"><span><?php echo $owner; ?></span><div>x</div><span class="marker"><?php echo $dog; ?></span></h3>
                    <p class="info"><?php echo $desc; ?></p>
                    <div class="boxes">
                        <?php while(have_rows('userList_info')): the_row();
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
            <a href="/jak-to-dziala" class="pbShortcuts__box" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_01.png'; ?>');">
                <p class="title">Jak to działa?</p>
            </a>
            <a href="/nasze-przepisy" class="pbShortcuts__box" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_02.png'; ?>');">
                <p class="title">Nasze przepisy</p>
            </a>
            <a href="/o-nas" class="pbShortcuts__box" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_03.png'; ?>');">
                <p class="title">O nas</p>
            </a>
        </div>
    </section>

    <section class="homeReviews homeReviews--howitworks">
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
        <div class="pbQuestions__dog">
            <img src="<?php echo get_template_directory_uri() . '/images/dogQuestion.svg'; ?>"/>
            <a href="" class="btn btn--clear"><span>Skontaktuj się z nami</span></a>
        </div>
    </section>

</main>

<?php get_footer(); ?>