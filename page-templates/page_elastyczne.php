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
            <article class="planBox" data-plan="plan_01" data-name="Aktualny plan" data-portions="loading" data-delivery="loading" data-dayprice="loading" data-total="loading">
                <div class="planBox__heading" style="background-color: #b3b2b1">
                    <h3>Aktualny plan</h3>
                    <p>Twoje obecne zamówienie</p>
                </div>
                <div class="planBox__price">
                    <p class="price">
                        <span class="value">0</span>
                        <span>ZŁ</span>
                        / dzień
                    </p>
                </div>
                <div class="planBox__info">
                    <div class="pos" data-name="planBox_list_dayportion">
                        <p><b>Porcja dzienna:</b> <span>Wczytywanie</span></p>
                    </div>
                    <div class="pos" data-name="planBox_list_gram">
                        <p><b>Gramatura saszetek:</b> <span>Wczytywanie</span></p>
                    </div>
                    <div class="pos" data-name="planBox_list_portioning">
                        <p><b>Porcjowanie:</b> <span>Wczytywanie</span></p>
                    </div>
                    <div class="pos" data-name="planBox_list_count">
                        <p><b>Liczba saszetek:</b> <span>Wczytywanie</span></p>
                    </div>
                    <div class="pos" data-name="planBox_list_delivery">
                        <p><b>Wysyłka:</b> <span>Wczytywanie</span></p>
                    </div>
                </div>
                <div class="planBox__summary">
                    <h4>Wartość zamówienia:</h4>
                    <p class="price price--total">
                        <span class="value">0</span>
                        <span>zł</span>
                    </p>
                    <div class="calc">
                        <p class="price">
                            <span class="value">0</span>
                            <span>zł</span>
                        </p>
                        <p class="days">× 0 dni</p>
                    </div>
                </div>
            </article>
            <article class="planBox" data-plan="plan_02" data-name="Większa oszczędność" data-portions="loading" data-delivery="loading" data-dayprice="loading" data-total="loading">
                <div class="planBox__heading" style="background-color: #129d6f">
                    <h3>Większa oszczędność</h3>
                    <p>Niższa cena | Rzadsze dostawy | Większe saszetki</p>
                </div>
                <div class="planBox__price">
                    <p class="price">
                        <span class="value">0</span>
                        <span>ZŁ</span>
                        / dzień
                    </p>
                    <p class="promotion">Oszczędzisz aż
                        <span class="value">0</span>%
                    </p>
                </div>
                <div class="planBox__apetyt planBox__apetyt--active">
                    <p>Dla psiaków z większym apetytem!</p>
                </div>
                <div class="planBox__info">
                    <div class="pos" data-name="planBox_list_dayportion">
                        <p><b>Porcja dzienna:</b> <span>Wczytywanie</span></p>
                    </div>
                    <div class="pos" data-name="planBox_list_gram">
                        <p><b>Gramatura saszetek:</b> <span>Wczytywanie</span></p>
                    </div>
                    <div class="pos" data-name="planBox_list_portioning">
                        <p><b>Porcjowanie:</b> <span>Wczytywanie</span></p>
                    </div>
                    <div class="pos" data-name="planBox_list_count">
                        <p><b>Liczba saszetek:</b> <span>Wczytywanie</span></p>
                    </div>
                    <div class="pos" data-name="planBox_list_delivery">
                        <p><b>Wysyłka:</b> <span>Wczytywanie</span></p>
                    </div>
                    <div class="pos pos--gift">
                        <p><b>Prezent:</b> <span>pudełko na saszetki</span></p>
                        <div class="content">
                            <p>Saszetkę po otwarciu możesz bezpiecznie przechowywać w lodówce przez 48 godzin. Aby Ci to ułatwić, dostaniesz od nas prezent - pudełko wielorazowego użytku, w którym wygodnie przechowasz jedzonko przez dwa dni.</p>
                        </div>
                    </div>
                </div>
                <div class="planBox__summary">
                    <h4>Wartość zamówienia:</h4>
                    <p class="price price--total">
                        <span class="value">0</span>
                        <span>zł</span>
                    </p>
                    <div class="calc">
                        <p class="price">
                            <span class="value">0</span>
                            <span>zł</span>
                        </p>
                        <p class="days">× 0 dni</p>
                    </div>
                    <button type="button" class="btn btn--button btn--green btn--smallfont btn--center" data-plan="plan_02"><span>Wybierz plan</span></button>
                </div>
            </article>
            <article class="planBox" data-plan="plan_03" data-name="Rzadsze dostawy" data-portions="loading" data-delivery="loading" data-dayprice="loading" data-total="loading">
                <div class="planBox__heading" style="background-color: #129d6f">
                    <h3>Rzadsze dostawy</h3>
                    <p>Więcej porcji | Rzadsze dostawy</p>
                </div>
                <div class="planBox__price">
                    <p class="price">
                        <span class="value">0</span>
                        <span>ZŁ</span>
                        / dzień
                    </p>
                    <p class="promotion">Oszczędzisz aż
                        <span class="value">0</span>%
                    </p>
                </div>
                <div class="planBox__info">
                    <div class="pos" data-name="planBox_list_dayportion">
                        <p><b>Porcja dzienna:</b> <span>Wczytywanie</span></p>
                    </div>
                    <div class="pos" data-name="planBox_list_gram">
                        <p><b>Gramatura saszetek:</b> <span>Wczytywanie</span></p>
                    </div>
                    <div class="pos" data-name="planBox_list_portioning">
                        <p><b>Porcjowanie:</b> <span>Wczytywanie</span></p>
                    </div>
                    <div class="pos" data-name="planBox_list_count">
                        <p><b>Liczba saszetek:</b> <span>Wczytywanie</span></p>
                    </div>
                    <div class="pos" data-name="planBox_list_delivery">
                        <p><b>Wysyłka:</b> <span>Wczytywanie</span></p>
                    </div>
                </div>
                <div class="planBox__summary">
                    <h4>Wartość zamówienia:</h4>
                    <p class="price price--total">
                        <span class="value">0</span>
                        <span>zł</span>
                    </p>
                    <div class="calc">
                        <p class="price">
                            <span class="value">0</span>
                            <span>zł</span>
                        </p>
                        <p class="days">× 0 dni</p>
                    </div>
                    <button type="button" class="btn btn--button btn--green btn--smallfont btn--center" data-plan="plan_03"><span>Wybierz plan</span></button>
                </div>
            </article>
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
            <div class="pbQuestions__images pbQuestions__images--mobile">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/questionSection/quesec_08.png'; ?>"/>
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
                    <img src="<?php echo get_template_directory_uri() . '/images/questionSection/quesec_09.png'; ?>"/>
                </div>
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/questionSection/quesec_04.png'; ?>"/>
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