<?php
/**
 * Template name: Pomoc
 */
get_header(); ?>

<main class="pbpage pbpage--help">
    <header class="helpHeader">
        <div class="helpHeader__wrap">
            <h1 class="getMarker"><?php the_field('helpHeader_title'); ?></h1>
            <h2><?php the_field('helpHeader_content'); ?></h2>
        </div>
    </header>

    <section class="helpCategories">
        <div class="helpCategories__heading">
            <h2><?php the_field('helpCategories_heading'); ?></h2>
        </div>
        <div class="helpCategories__wrap">
            <a href="https://help.psibufet.pl/category/25-dostawy" class="helpCategories__cat">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/help/catIco_01.svg'; ?>" class="no-lazyload"/>
                </div>
                <p>Dostawy</p>
            </a>
            <a href="https://help.psibufet.pl/category/36-nasze-karmy" class="helpCategories__cat">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/help/catIco_02.svg'; ?>" class="no-lazyload"/>
                </div>
                <p>Nasze karmy</p>
            </a>
            <a href="https://help.psibufet.pl/category/19-program-darmowa-karma" class="helpCategories__cat">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/help/catIco_03.svg'; ?>" class="no-lazyload"/>
                </div>
                <p>Program darmowa karma</p>
            </a>
            <a href="https://help.psibufet.pl/category/31-przechowywanie-i-karmienie" class="helpCategories__cat">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/help/catIco_04.svg'; ?>" class="no-lazyload"/>
                </div>
                <p>Przechowywanie i karmienie</p>
            </a>
            <a href="https://help.psibufet.pl/category/21-platnosci" class="helpCategories__cat">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/help/catIco_05.svg'; ?>" class="no-lazyload"/>
                </div>
                <p>Płatności</p>
            </a>
            <a href="https://help.psibufet.pl/category/10-zarzadzanie-planem-zywienia" class="helpCategories__cat">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/help/catIco_06.svg'; ?>" class="no-lazyload"/>
                </div>
                <p>Zarządzanie planem żywienia</p>
            </a>
        </div>
    </section>

    <section class="helpAction">
        <div class="helpAction__wrap">
            <div class="helpAction__heading">
                <h2>nadal szukasz odpowiedzi na swoje pytanie?</h2>
                <h3>Skontaktuj się z nami</h3>
            </div>
            <form id="helpForm" class="helpForm" name="helpForm" method="POST">
                <div class="helpForm__heading">
                    <h2>Wybierz temat rozmowy</h2>
                </div>
                <div class="helpForm__row">
                    <div class="helpForm__select">
                        <div class="selectValue"><p name="helpTopic">Jak możemy Ci pomóc?</p></div>
                        <div class="selectDropdown">
                            <?php while(have_rows('helpForm_qa')): the_row();
                                $question = get_sub_field('helpForm_qa_question');
                            ?>
                                <div class="selectDropdown__option" value="<?php echo get_row_index(); ?>"><p><?php echo $question; ?></p></div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                <div class="helpForm__info">
                    <?php while(have_rows('helpForm_qa')): the_row();
                        $answer = get_sub_field('helpForm_qa_answer');
                        $image = get_sub_field('helpForm_qa_image');
                        $name = get_sub_field('helpForm_qa_name');
                        $position = get_sub_field('helpForm_qa_position');
                    ?>
                    <div class="answer" data-id="<?php echo get_row_index(); ?>" style="display: none;">
                        <div class="info">
                            <?php echo $answer; ?>
                        </div>
                        <div class="author">
                            <div class="author__image">
                                <img src="<?php echo $image; ?>"/>
                            </div>
                            <div class="author__content">
                                <h3><?php echo $name; ?></h3>
                                <p><?php echo $position; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <div class="helpForm__row">
                    <div class="helpForm__textarea">
                        <textarea name="helpMessage" class="helpForm__input" placeholder="Twoja wiadomość" required></textarea>
                    </div>
                </div>
                <div class="helpForm__row">
                    <div class="helpForm__text">
                        <input type="text" class="helpForm__input" name="helpName" placeholder="Imię i naziwsko" required/>
                    </div>
                </div>
                <div class="helpForm__row">
                    <div class="helpForm__text">
                        <input type="text" class="helpForm__input" name="helpDogName" placeholder="Imię Twojego pieska" required/>
                    </div>
                </div>
                <div class="helpForm__row">
                    <div class="helpForm__text">
                        <input type="email" class="helpForm__input" name="helpEmail" placeholder="Adres e-mail" required/>
                    </div>
                </div>
                <div class="helpForm__submit">
                    <button type="submit"><span>Wyślij</span></button>
                </div>
                <div class="helpForm__notice"></div>
            </form>
        </div>
    </section>

    <section class="helpInfo">
        <div class="helpInfo__wrap">
            <h2>Jeśli potrzebujesz pomocy,<br/>nasz przyjazny zespół Customer Care jest <a href="#helpContact">tutaj</a></h2>
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

    <section class="helpContact" id="helpContact">
        <div class="helpContact__wrap">
            <h2>Skontaktuj się z nami</h2>
            <div class="helpContact__chat">
                <h3>Napisz na czacie</h3>
                <p>czynny w godzinach: 9:00 - 18:00</p>
            </div>
            <div class="helpContact__mail">
                <h3>Wyślij maila</h3>
                <h4><a href="mailto:kontakt@psibufet.pl">kontakt@psibufet.pl</a></h4>
            </div>
            <div class="helpContact__call">
                <span>lub</span>
                <h3>Zadzwoń</h3>
                <h4><a href="tel:+48221046259">+48 22 104 62 59</a></h4>
                <p>infolinia czynna w godzinach: 10:00 - 16:00</p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>