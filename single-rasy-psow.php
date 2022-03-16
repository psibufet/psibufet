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
                        <h3 class="rate"><span>6</span>/10</h3>
                    </div>
                    <div class="usp__pos">
                        <img src="<?php echo get_template_directory_uri() . '/images/rasy/usp/usp_02.svg'; ?>"/>
                        <p class="name">Pielęgnacja</p>
                        <h3 class="rate"><span>6</span>/10</h3>
                    </div>
                    <div class="usp__pos">
                        <img src="<?php echo get_template_directory_uri() . '/images/rasy/usp/usp_03.svg'; ?>"/>
                        <p class="name">Podatność na choroby</p>
                        <h3 class="rate"><span>3</span>/10</h3>
                    </div>
                    <div class="usp__pos">
                        <img src="<?php echo get_template_directory_uri() . '/images/rasy/usp/usp_04.svg'; ?>"/>
                        <p class="name">Długość życia</p>
                        <h3 class="rate"><span>7</span>/10</h3>
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
                    <div class="contentsTable__list">
                        <div class="pos">
                            <h3>1. <?php the_title(); ?> - Opis i wygląd rasy</h3>
                        </div>
                        <div class="pos">
                            <h3>2. <?php the_title(); ?> - Charakter i usposobienie</h3>
                        </div>
                        <div class="pos">
                            <h3>3. <?php the_title(); ?> - Historia rasy</h3>
                        </div>
                        <div class="pos">
                            <h3>4. <?php the_title(); ?> - Pielęgnacja i zdrowie</h3>
                        </div>
                        <div class="pos">
                            <h3>5. <?php the_title(); ?> - Ciekawostki</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content START -->

    <?php the_content(); ?>

    <!-- Content END -->

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
</main>

<?php get_footer(); ?>
