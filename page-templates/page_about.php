<?php
    /**
     * Template name: About us
     */
get_header(); ?>

<main class="psibufet psibufet--about">
    <header class="aboutHeader">
        <div class="aboutHeader__wrap">
            <h1><?php the_field('aboutHeader_title'); ?></h1>
            <p><?php the_field('aboutHeader_content'); ?></p>
        </div>
    </header>
    <section class="aboutHistory">
        <div class="aboutHistory__wrap">
            <div class="aboutHistory__heading">
                <h2 class="getMarker getMarker--lower"><span class="marker">Historia</span> PsiBufet</h2>
            </div>
            <div class="aboutHistory__video">
                <div class="video">
                    <?php
                    $video = get_field('aboutVideo');
                    $attr = array(
                        'src'       => $video['url'],
                        'poster'    => $video['sizes']['large'],
                    );
                    echo wp_video_shortcode($attr); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutSteps">
        <div class="aboutSteps__wrap">
            <?php while(have_rows('aboutSteps')): the_row(); 
                $title = get_sub_field('aboutSteps_title');
                $content = get_sub_field('aboutSteps_content');
                $imageType = get_sub_field('aboutSteps_image_type');
                $image = get_sub_field('aboutSteps_image');
                $imageTwo = get_sub_field('aboutSteps_image_two');
                $imageTitle = get_sub_field('aboutSteps_image_title');
                $imageTwoTitle = get_sub_field('aboutSteps_image_two_title');
                $imageIcon = get_sub_field('aboutSteps_image_icon');
            ?>
            <div class="aboutSteps__step">
                <div class="content">
                    <h3 class="getMarker getMarker--lower"><?php echo get_row_index(); ?>. <?php echo $title; ?></h3>
                    <p><?php echo $content; ?></p>
                </div>
                <div class="image<?php if($imageType == 'two'): ?> image--two<?php endif; ?>">
                    <div class="image__image">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>

                        <div class="image__caption<?php if($imageIcon): ?> image__caption--icon<?php endif; ?>">
                            <h4><?php echo $imageTitle; ?></h4>
                        </div>
                    </div>

                    <?php if($imageType == 'two'): ?>
                        <div class="image__image">
                            <img src="<?php echo $imageTwo['url']; ?>" alt="<?php echo $imageTwo['alt']; ?>"/>

                            <div class="image__caption<?php if($imageIcon): ?> image__caption--icon<?php endif; ?>">
                                <h4><?php echo $imageTwoTitle; ?></h4>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="contentMobile">
                    <p><?php echo $content; ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </section>

    <?php if(get_field('aboutTeam_gif')): ?>
    <section class="aboutTeam">
        <div class="aboutTeam__wrap">
            <div class="aboutTeam__content">
                <div class="video video--desktop">
                    <img src="<?php echo get_field('aboutTeam_gif')['url']; ?>" alt="<?php echo get_field('aboutTeam_gif')['alt']; ?>"/>
                </div>
                <div class="content">
                    <h3 class="getMarker getMarker--small"><?php the_field('aboutTeam_title'); ?></h3>
                    <p><?php the_field('aboutTeam_content'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="aboutInfo">
        <div class="aboutInfo__heading">
            <h2 class="getMarker"><span class="marker">Dajemy</span> coś w zamian</h2>
        </div>
        <div class="aboutInfo__wrap container">
            <?php while(have_rows('aboutInfo')): the_row();
                $title = get_sub_field('aboutInfo_title');
                $content = get_sub_field('aboutInfo_content');
                $content_mobile = get_sub_field('aboutInfo_content_mobile');
                $image01 = get_sub_field('aboutInfo_image1');
                $image02 = get_sub_field('aboutInfo_image2');
            ?>
            <div class="aboutInfo__slide">
                <div class="images">
                    <img src="<?php echo $image01['url']; ?>" alt="<?php echo $image01['alt']; ?>" />
                    <img src="<?php echo $image02['url']; ?>" alt="<?php echo $image02['alt']; ?>"/>
                </div>
                <div class="content">
                    <h3 class="getMarker"><?php echo $title; ?></h3>
                    <p class="desktop"><?php echo $content; ?></p>
                    <p class="mobile"><?php echo $content_mobile; ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </section>

    <?php 
    $posts = get_posts(array(
        'posts_per_page'	=> -1,
        'post_type'			=> 'instagram_posts'
    ));
    if( $posts ): ?>
    <section class="homeInstagram homeInstagram--about">
        <div class="homeInstagram__wrap container">
            <h2>Szczęśliwi członkowie <span>#psibufetgang</span></h2>
            <div class="homeInstagram__posts">
            <?php foreach( $posts as $post ): setup_postdata( $post ); ?>
                <div class="post">
                    <div class="thumb">
                        <img data-original="<?php the_field('post_thumbnail'); ?>" class="no-lazyload"/>
                    </div>
                    <div class="content">
                        <div class="actions">
                            <img data-original="<?php echo get_template_directory_uri() . '/images/ig_like.svg'; ?>" class="no-lazyload"/>
                            <img data-original="<?php echo get_template_directory_uri() . '/images/ig_comment.svg'; ?>" class="no-lazyload"/>
                            <img data-original="<?php echo get_template_directory_uri() . '/images/ig_send.svg'; ?>" class="no-lazyload"/>
                        </div>
                        <p><b><?php the_field('user_name'); ?>:</b> <?php the_field('post_content'); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            </div>
            <div class="homeInstagram__cta">
                <a href="https://zamowienie.psibufet.pl/" class="btn"><span>Stwórz dietę</span></a>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="pbShortcuts">
        <h2 class="getMarker getMarker--lower"><span class="marker">Poznaj</span> nas lepiej</h2>
        <div class="pbShortcuts__wrap">
            <a href="/jak-to-dziala" class="pbShortcuts__box dir" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_01.webp'; ?>');">
                <p class="title">Jak to działa?</p>
            </a>
            <a href="/nasze-przepisy" class="pbShortcuts__box dir" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_02.webp'; ?>');">
                <p class="title">Nasze przepisy</p>
            </a>
            <a href="/pomoc" class="pbShortcuts__box dir" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_04.webp'; ?>');">
                <p class="title">Centrum pomocy</p>
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
        <h2 class="pbQuestions__title getMarker getMarker--lower">Masz <span class="marker">pytanie</span>?</h2>
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