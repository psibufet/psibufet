<?php
    /**
     * Template name: LP - Elastyczne plany 
     */
get_header(); ?>

<main class="psibufet psibufet--elastic">
    <section class="elasticHeader">
        <div class="elasticHeader__wrap">
            <h1 class="getMarker">Zamawiaj PsiBufet <span class="marker">taniej</span></h1>
            <p>Sprawdź, jak może wyglądać Elastyczny Plan dla Ciebie</p>
        </div>
        <a href="#elasticSelector" class="elasticHeader__scroll"></a>
    </section>
    
    <section id="elasticSelector" class="elasticSelector">
        <div class="elasticSelector__wrap container">
            <div class="elasticSelector__heading">
                <h2 class="getMarker">Wybierz <span class="marker">elastyczny</span> plan</h2>
                <p><?php echo get_field('elasticSelector_desc'); ?></p>
            </div>
            <div class="elasticSelector__select">
                <h3>Dzienna porcja PsiBufet dla Twojego pieska:</h3>
                <div id="portion-select" class="dropdownEngine" data-get="portion">
                    <div class="dropdownEngine__selected"><p>Oferowana porcja dzienna</p></div>
                    <div class="dropdownEngine__dropdown">
                        <?php while(have_rows('elasticSelector_list')): the_row(); ?>
                            <div class="dropdownEngine__option" value="<?php echo get_sub_field('elasticSelector_list_pos'); ?>"><div class="wrap"><p><?php echo get_sub_field('elasticSelector_list_pos') ?> G</p></div></div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="elasticPlans">
        <div class="elasticPlans__heading">
            <h2 class="getMarker">Dostępne <span class="marker">plany</span></h2>
        </div>
        <div class="elasticPlans__list">
            <?php while(have_rows('planBox')): the_row();
                $color = get_sub_field('planBox_color');
                $name = get_sub_field('planBox_name');
                $desc = get_sub_field('planBox_desc');
                $price_day_zl = get_sub_field('planBox_price_day_zl');
                $price_day_gr = get_sub_field('planBox_price_day_gr');
                $promotion = get_sub_field('planBox_promotion');
                $promotion_value = get_sub_field('planBox_promotion_value');

                $dayportion = get_sub_field('planBox_list_dayportion');
                $gram = get_sub_field('planBox_list_gram');
                $portioning = get_sub_field('planBox_list_portioning');
                $count = get_sub_field('planBox_list_count');
                $delivery = get_sub_field('planBox_list_delivery');
                $gift = get_sub_field('planBox_gift');
                $gift_name = get_sub_field('planBox_gift_name');
                $gift_desc = get_sub_field('planBox_gift_desc');

                $sum_price_zl = get_sub_field('planBox_ordersum_zl');
                $sum_price_gr = get_sub_field('planBox_ordersum_gr');
                $sum_days = get_sub_field('planBox_order_days');
            ?>
            <article class="planBox" data-plan="<?php echo 'plan_0' . get_row_index(); ?>" data-name="<?php echo $name; ?>" data-portions="<?php echo $count; ?>" data-delivery="<?php echo $delivery; ?>" data-dayprice="<?php echo $price_day_zl . '.' . $price_day_gr; ?>" data-total="<?php echo $sum_price_zl . '.' . $sum_price_gr; ?>"<?php if($gift): ?> data-gift="true"<?php endif; ?>>
                <div class="planBox__heading" style="background-color: <?php echo $color; ?>">
                    <h3><?php echo $name; ?></h3>
                    <p><?php echo $desc; ?></p>
                </div>
                <div class="planBox__price">
                    <p class="price">
                        <span class="value"><?php echo $price_day_zl; ?><small><?php echo $price_day_gr; ?></small></span>
                        <span>ZŁ</span>
                        / dzień
                    </p>
                    <?php if($promotion !== 'brak'): ?>
                    <p class="promotion">
                        <?php if($promotion == 'small'): ?>
                            Oszczędzisz
                        <?php else: ?>
                            Oszczędzisz aż
                        <?php endif; ?>
                        <span class="value"><?php echo $promotion_value ?></span>%
                    </p>
                    <?php endif; ?>
                </div>
                <div class="planBox__info">
                    <div class="pos">
                        <p><b>Porcja dzienna:</b> <span><?php echo $dayportion; ?> G</span></p>
                    </div>
                    <div class="pos">
                        <p><b>Gramatura saszetek:</b> <span><?php echo $gram; ?> G</span></p>
                    </div>
                    <div class="pos">
                        <p><b>Porcjowanie:</b> <span><?php echo $portioning; ?></span></p>
                    </div>
                    <div class="pos">
                        <p><b>Liczba saszetek:</b> <span><?php echo $count; ?></span></p>
                    </div>
                    <div class="pos">
                        <p><b>Wysyłka:</b> <span><?php echo $delivery; ?></span></p>
                    </div>
                    <?php if($gift): ?>
                    <div class="pos pos--gift">
                        <p><b>Prezent:</b> <span><?php echo $gift_name; ?></span></p>
                        <div class="content">
                            <p><?php echo $gift_desc; ?></p>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="planBox__summary">
                    <h4>Wartość zamówienia:</h4>
                    <p class="price">
                        <span class="value"><?php echo $sum_price_zl; ?><small><?php echo $sum_price_gr; ?></small></span>
                        <span>zł</span>
                    </p>
                    <div class="calc">
                        <p class="price">
                            <span class="value"><?php echo $price_day_zl; ?><small><?php echo $price_day_gr; ?></small></span>
                            <span>zł</span>
                        </p>
                        <p class="days">× <?php echo $sum_days; ?> dni</p>
                    </div>
                    <?php if($promotion !== 'brak'): ?>
                        <button type="button" class="btn btn--button btn--green btn--smallfont btn--center" data-plan="<?php echo 'plan_0' . get_row_index(); ?>"><span>Wybierz plan</span></button>
                    <?php endif; ?>
                </div>
            </article>
            <?php endwhile; ?>
        </div>
    </section>

    <section class="elasticFaq">
        <div class="elasticFaq__wrap container">
            <h2>Najczęściej zadawane pytania</h2>
            <div class="elasticFaq__list">
                <?php while( have_rows('faq_list') ): the_row(); 
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
            <a href="https://help.psibufet.pl/" target="_blank" class="moreFaq"><span>Zobacz wszystkie pytania z działu Pomoc</span></a>
        </div>
    </section>

    <section class="elasticContact">
        <div class="elasticContact__wrap container">
            <div class="elasticContact__heading">
                <h2>Skontaktuj się</h2>
                <p>Masz pytania? Nie wiesz, który plan wybrać? Chętnie Ci pomożemy!</p>
            </div>
            <div class="contactInfo">
                <div class="contactInfo__chat">
                    <h3>Napisz na czacie</h3>
                    <p>czynny w godzinach: 9:00 - 18:00</p>
                </div>
                <div class="contactInfo__mail">
                    <h3>Wyślij maila</h3>
                    <h4><a href="mailto:kontakt@psibufet.pl">kontakt@psibufet.pl</a></h4>
                </div>
                <div class="contactInfo__call">
                    <span>lub</span>
                    <h3>Zadzwoń</h3>
                    <h4><a href="tel:+48221046259">+48 22 104 62 59</a></h4>
                    <p>infolinia czynna w godzinach: 10:00 - 16:00</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pbQuestions pbQuestions--help">
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
        </div>
    </section>
    
    <div class="infoPopup">
        <div class="infoPopup__wrap">
            <div class="elasticPopup elasticPopup--form">
                <h2>Pomóż nam Cię znaleźć</h2>
                <p>Podaj adres e-mail, na który masz założone konto PsiBufet.</p>
                <form id="planChanger" class="elasticPopup__form" type="POST">
                    <input type="hidden" name="data" value=""/>
                    <input type="email" name="email" placeholder="Adres e-mail" />
                    <button type="submit" class="btn btn--button btn--center btn--smallfont"><span>Wyślij</span></button>
                </form>
            </div>
            <div class="elasticPopup elasticPopup--success">
                <h2>Super, udało się!</h2>
                <p>Dziękujemy za wybranie nowego planu. Nasz zespół Customer Care zmieni Twój plan tak szybko, jak to możliwe. Potwierdzenie zmiany otrzymasz w wiadomości mailowej.</p>
                <img src="<?php echo get_template_directory_uri() . '/images/icons/email_vec_ico.svg'; ?>"/>
                <p id="closeInfoPopup" class="btn btn--center btn--clear"><span>Zamknij</span></p>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>