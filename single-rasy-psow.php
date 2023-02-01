<?php
/**
 * The template for displaying rasy psów.
 */

if($_SERVER['SERVER_NAME'] == 'psibufet.local'){
    $howitworks = 1996;
}else if($_SERVER['SERVER_NAME'] == 'psibufet.codestick.pl'){
    $howitworks = 1985;
}else{
    $howitworks = 2310;
}

get_header(); ?>

<main class="psibufet psibufet--rasapsa">
    <header class="raspostHeader" style="background-image: url('<?php echo get_field('raspostHeader_bg'); ?>')">
        <div class="raspostHeader__wrap container">
            <h1><?php the_title(); ?></h1>
        </div>
    </header>

    <section class="postContent">
        <section class="raspostMainInfo">
            <div class="raspostMainInfo__wrap container">
                <div class="sectionContent">
                    <div class="info">
                        <?php echo get_field('raspostInfo_desc'); ?>
                    </div>
                    <div class="usp">
                        <div class="usp__pos">
                            <img src="<?php echo get_template_directory_uri() . '/images/rasy/usp/usp_01.svg'; ?>"/>
                            <p class="name">Aktywność</p>
                            <h3 class="rate"><span><?php echo get_field('review_aktywnosc'); ?></span>/10</h3>
                        </div>
                        <div class="usp__pos">
                            <img src="<?php echo get_template_directory_uri() . '/images/rasy/usp/usp_02.svg'; ?>"/>
                            <p class="name">Pielęgnacja</p>
                            <h3 class="rate"><span><?php echo get_field('review_pielegnacja'); ?></span>/10</h3>
                        </div>
                        <div class="usp__pos">
                            <img src="<?php echo get_template_directory_uri() . '/images/rasy/usp/usp_03.svg'; ?>"/>
                            <p class="name">Podatność na choroby</p>
                            <h3 class="rate"><span><?php echo get_field('review_podatnosc'); ?></span>/10</h3>
                        </div>
                        <div class="usp__pos">
                            <img src="<?php echo get_template_directory_uri() . '/images/rasy/usp/usp_04.svg'; ?>"/>
                            <p class="name">Długość życia</p>
                            <h3 class="rate"><span><?php echo get_field('review_dlugosc'); ?></span>/10</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="raspostMainheading">
            <div class="raspostMainheading__wrap container">
                <div class="sectionContent">
                    <h2 class="tags__heading">Z tego artykułu dowiesz się:</h2>
                    <div class="tags">
                        <?php while(have_rows('raspostInfo_tags')): the_row(); ?>
                            <p class="tags__tag"><?php echo get_sub_field('raspostInfo_tags_pos'); ?></p>
                        <?php endwhile; ?>
                    </div>
                    <div class="contentsTable">
                        <div class="contentsTable__heading">
                            <h2>Spis treści</h2>
                        </div>
                        <div class="contentsTable__list" data-name="<?php the_title(); ?>"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content START -->

        <?php the_content(); ?>

        <!-- Content END -->

        <!-- <aside class="postSidebar">
            <a href="<?php echo get_field('rasa_banner_url', 'cpt_rasy-psow_ustawienia'); ?>" target="_blank">
                <img src="<?php echo get_field('rasa_banner', 'cpt_rasy-psow_ustawienia')['url']; ?>" alt="<?php echo get_field('rasa_banner', 'cpt_rasy-psow_ustawienia')['alt']; ?>" class="desktop"/>
                <img src="<?php echo get_field('rasa_banner_mobile', 'cpt_rasy-psow_ustawienia')['url']; ?>" alt="<?php echo get_field('rasa_banner_mobile', 'cpt_rasy-psow_ustawienia')['alt']; ?>" class="mobile"/>
            </a>
        </aside> -->
    </section>

    <section class="postAuthor">
        <div class="postAuthor__wrap container">
            <div class="sectionContent">
                <h2 class="postAuthor__title">Kilka słów o autorce artykułu</h2>
                <div class="postAuthor__content">
                    <div class="postAuthor__author">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri() . '/images/rasy/postAuthor.png'; ?>"/>
                        </div>
                        <h3>Aleksandra Więcławska</h3>
                    </div>
                    <div class="postAuthor__about">
                        <p><?php the_field('rasa_author', 'cpt_rasy-psow_ustawienia'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="howVideo howVideo--breed">
        <div class="howVideo__wrap container">
            <div class="sectionContent">
                <div class="howVideo__heading">
                    <h2 class="getMarker">Jak to <span class="marker">działa?</span></h2>
                </div>
                <div class="howVideo__content">
                    <div class="video video--desktop">
                        <?php
                        $attr = array(
                            'src'       => get_field('howVideo_video', $howitworks),
                            'poster'    => false,
                        );
                        echo wp_video_shortcode($attr); ?>
                    </div>
                    <div class="video video--mobile">
                        <?php
                        $attr = array(
                            'src'       => get_field('howVideo_video_mobile', $howitworks),
                            'poster'    => false,
                        );
                        echo wp_video_shortcode($attr); ?>
                    </div>
                    <div class="content">
                        <h3 class="getMarker getMarker--small"><?php the_field('howVideo_box_title', $howitworks); ?></h3>
                        <p><?php the_field('howVideo_box_content', $howitworks); ?></p>
                    </div>
                </div>  
            </div>
        </div>
    </section>

    <section class="pbShortcuts">
        <h2 class="getMarker"><span class="marker">Poznaj</span> nas lepiej</h2>
        <div class="pbShortcuts__wrap">
            <a href="/nasze-przepisy" class="pbShortcuts__box"
                style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_02.webp'; ?>');">
                <p class="title">Nasze przepisy</p>
            </a>
            <a href="/o-nas" class="pbShortcuts__box"
                style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_03.webp'; ?>');">
                <p class="title">O nas</p>
            </a>
            <a href="/pomoc" class="pbShortcuts__box"
                style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_04.webp'; ?>');">
                <p class="title">Centrum pomocy</p>
            </a>
        </div>
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
            <a href="https://psibufet.pl/pomoc" class="btn btn--clear"><span>Skontaktuj się z nami</span></a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
