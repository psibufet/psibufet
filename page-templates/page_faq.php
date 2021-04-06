<?php

/*

Template Name: FAQ

*/
	get_header();
?>

<div id="faq_page">
    <section class="faq_header">
        <div class="inner">
            <h1>Potrzebujesz pomocy?</h1>
            <p class="lead">Poznaj najczęściej zadawane pytania.</p>
        </div>
        <a class="header_arrow" href="#first_section"><img src="/wp-content/themes/psibufet/images/chevron_down_white.svg"/></a>
    </section>
    <section id="first_section" class="faq_content">
        <div class="container">
            <div class="content_heading">
                <h2>Najczęściej <span>zadawane pytania</span> :</h2>
            </div>
            <?php if( have_rows('faq_list') ): ?>
				<div class="faq_list page">
				<?php while( have_rows('faq_list') ): the_row(); ?>
					<div class="question_category close" category-id="<?php echo get_row_index(); ?>">
                        <div class="category_heading">
                            <span class="btn">
                                <img src="/wp-content/themes/psibufet/images/chevron_down.svg"/>
                            </span>
                            <p class="title"><?php the_sub_field('question_heading'); ?></p>
                        </div>
                        <div class="category_content">
                            <?php if( have_rows('faq_list_insert_questions') ): ?>
                                <div class="insert_question_list">
                                    <?php while( have_rows('faq_list_insert_questions') ): the_row(); ?>
                                        <div class="question close" que-id="<?php echo get_row_index(); ?>">
                                            <div class="que_heading">
                                                <span class="btn">
                                                    <img src="/wp-content/themes/psibufet/images/chevron_down.svg"/>
                                                </span>
                                                <p class="title"><?php the_sub_field('insert_question'); ?></p>
                                            </div>
                                            <div class="que_content">
                                                <p><?php the_sub_field('insert_answer'); ?></p>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
					</div>	
                <?php endwhile; ?>
				</div>
            <?php endif; ?>
        </div>
    </section>
    <section class="faq_contact">
        <div class="container">
            <div class="contact_heading">
                <h2>Nie znalazłeś odpowiedzi?</h2>
                <p>Napisz do nas!</p>
            </div>
            <p class="info">Nasi konsultanci odpowiedzą na Twoją wiadomość w najkrótszym możliwym czasie.</p>
            <a href="/kontakt" class="check dir">Kontakt</a>
        </div>
    </section>
</div>

<?php get_footer(); ?>

