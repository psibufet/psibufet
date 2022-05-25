<?php
/*
Template Name: Homepage
*/

get_header(); ?>

<main class="pbpage pbpage--home">

    <section class="homeHeaderV3" style="background-image: url('/wp-content/themes/psibufet/images/frontpage/homeHeaderV3_bg.webp');">
        <div class="homeHeaderV3__wrap">
            <div class="homeHeaderV3__content">
                <h2>Świeże spojrzenie na psie jedzenie</h2>
                <p>Zdrowe i pyszne posiłki z dostawą pod drzwi</p>
                <a href="https://zamowienie.psibufet.pl/" class="btn btn--big btn--center dir"><span><?php the_field('front_header_cta') ?></span></a>
            </div>
        </div>
    </section>
    
    <div class="mainUSP">
        <div class="mainUSP__google">
            <img class="google" src="<?php echo get_template_directory_uri() . '/images/home/google_logo.svg'; ?>"/>
            <div class="stars">
                <?php for($i = 1; $i <= 5; $i++): ?>

                    <img class="stars__star" src="<?php echo get_template_directory_uri() . '/images/reviews/star_new.svg'; ?>"/>
                <?php endfor; ?>
            </div>
            <p>4.9 / 5 na podstawie <b><?php echo get_field('reviewsCount'); ?> opinii</b></p>
        </div>
        <div class="mainUSP__wrap">
            <?php while(have_rows('homeAfterheader')): the_row(); ?>
            <div class="usp">
                <div class="usp__icon">
                    <img src="<?php echo get_sub_field('homeAfterheader_icon')['url']; ?>" alt="<?php echo get_sub_field('homeAfterheader_icon')['alt']; ?>"/>
                </div>
                <p><?php echo get_sub_field('homeAfterheader_text'); ?></p>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

    <section class="homeMiska homeMiska--new animateMiska">
        <div class="homeMiska__wrap container">
            <div class="homeMiska__left">
                <h2 class="getMarker">Czym jest <span class="marker">świeże</span> psie jedzenie?</h2>
                <p class="subtitle">Mięso i warzywa jakości human-grade, delikatnie gotowane na parze, z dodatkiem witamin i minerałów - to właśnie świeże jedzenie. W ten prosty sposób powstają pyszne, zbilansowane posiłki, idealne dla psów w każdym wieku.</p>
                <div class="info_boxes">
                    <div class="box">
                        <div class="box__thumb">
                            <img src="/wp-content/themes/psibufet/images/info_boxes/kurczak_classic.svg"/>
                        </div>
                        <p>Zero ulepszaczy</p>
                    </div>
                    <div class="box">
                        <div class="box__thumb">
                            <img src="/wp-content/themes/psibufet/images/info_boxes/wpolsce.svg"/>
                        </div>
                        <p>Brak zbóż</p>
                    </div>
                    <div class="box">
                        <div class="box__thumb">
                            <img src="/wp-content/themes/psibufet/images/info_boxes/ogien.svg"/>
                        </div>
                        <p>Bez ekstruzji</p>
                    </div>
                </div>
                <div class="homeMiska__badge"></div>
                <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span><?php the_field('front_uknow_cta') ?></span></a>
            </div>
            <div class="homeMiska__right">
                <div class="homeMiska__imageWrap">
                    <div class="ba_img before"></div>
                    <div class="ba_img after"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="homeFood">
        <div class="homeFood__wrap">
            <div class="homeFood__image">
                <img src="<?php echo get_template_directory_uri() . '/images/home/homeFood.png'; ?>"/>
            </div>
            <div class="homeFood__content">
                <h2 class="getMarker">Poznaj nasz <span class="marker">smaki</span></h2>
                <div class="homeFood__slider">
                    <?php while( have_rows('slider_z_karmami') ): the_row(); 
                        $image = get_sub_field('karma_img');
                        $name = get_sub_field('karma_name');
                        $desc = get_sub_field('karma_short_desc');
                        $color = get_sub_field('karma_color');
                    ?>
                    <div class="homeFood__food">
                        <div class="image">
                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']; ?>"/>
                        </div>
                        <div class="content">
                            <h3 class="name" style="--dots-color: <?php echo $color; ?>;"><?php echo $name; ?></h3>
                            <p><?php echo $desc; ?></p>
                            <div class="image">
                                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']; ?>"/>
                            </div>
                            <a href="/nasze-przepisy"><span>Zobacz nasze przepisy</span></a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>

    <div class="mainUSP mainUSP--yellow">
        <div class="mainUSP__wrap">
            <?php while(have_rows('homeUSP')): the_row(); ?>
            <div class="usp">
                <div class="usp__icon usp__icon--nomargin">
                    <img src="<?php echo get_sub_field('homeUSP_icon')['url']; ?>" alt="<?php echo get_sub_field('homeUSP_icon')['alt']; ?>"/>
                </div>
                <p><?php echo get_sub_field('homeUSP_text'); ?></p>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

    <?php if(get_field('howitworks_step')): ?>
    <section class="homeHowitworks homeHowitworks--new homeHowitworks--nodog">
        <div class="homeHowitworks__wrap container">
            <h2 class="getMarker">Jak działa <span class="marker">subskrypcja?</span></h2>
            <div class="homeHowitworks__steps">
                <?php while(have_rows('howitworks_step')): the_row();
                    $image = get_sub_field('howitworks_step_image');
                    $title = get_sub_field('howitworks_step_title');
                    $content = get_sub_field('howitworks_step_content');
                ?>
                <div class="homeHowitworks__step">
                    <div class="image">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    </div>
                    <div class="content">
                        <h3><?php echo get_row_index(); ?>. <?php echo $title; ?></h3>
                        <p><?php echo $content; ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="discountInfo">
                <img src="<?php echo get_template_directory_uri() . '/images/home/discountInfo.svg'; ?>"/>
            </div>
            <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span><?php the_field('front_howitworks_cta') ?></span></a>
        </div>
    </section>
    <?php endif; ?>

    <section class="homeClients">
        <div class="homeClients__wrap container">
            <h2 class="getMarker">Tysiące <span class="marker">zadowolonych</span> klientów</h2>
            <div class="homeClients__container">
                <div class="google">
                    <img class="logo" src="<?php echo get_template_directory_uri() . '/images/home/google_logo.svg'; ?>"/>
                    <div class="stars">
                    <?php for($i = 1; $i <= 5; $i++): ?>
                        <img class="stars__star" src="<?php echo get_template_directory_uri() . '/images/reviews/star_new.svg'; ?>"/>
                    <?php endfor; ?>
                    </div>
                    <p>4.9 / 5 na podstawie <b><?php echo get_field('reviewsCount'); ?> opinii</b></p>
                </div>
                <div class="reviews">

                    <?php
                    $colors = array('#795405', '#4769B2', '#F95892', '#5bb7c9', '#975bc9');
                    while(have_rows('homeClients')): the_row();
                        $letter = substr(get_sub_field('homeClients_author'), -100, 1);
                        $author = get_sub_field('homeClients_author');
                        $stars = get_sub_field('homeClients_stars');
                        $content = get_sub_field('homeClients_content');
                        $color = array_rand($colors, 2);
                    ?>
                    <div class="reviews__review">
                        <div class="author">
                            <span style="background-color: <?php echo $colors[$color[0]] ?>"><?php echo $letter; ?></span>
                            <p><?php echo $author; ?></p>
                        </div>
                        <div class="stars">
                        <?php for($i = 1; $i <= $stars; $i++): ?>
                            <img class="stars__star" src="<?php echo get_template_directory_uri() . '/images/reviews/star_new.svg'; ?>"/>
                        <?php endfor; ?>
                        </div>
                        <div class="content">
                            <?php echo $content; ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>

    <?php 
    $posts = get_posts(array(
        'posts_per_page'	=> -1,
        'post_type'			=> 'instagram_posts'
    ));
    if( $posts ): ?>
    <section class="homeInstagram homeInstagram--new">
        <div class="homeInstagram__wrap container">
            <h2>Szczęśliwi członkowie <span>#psibufetgang</span></h2>
            <div class="homeInstagram__posts">
            <?php foreach( $posts as $post ): setup_postdata( $post ); ?>
                <div class="post">
                    <div class="thumb">
                        <img data-original="<?php the_field('post_thumbnail', $post->ID); ?>" class="no-lazyload"/>
                    </div>
                    <div class="content">
                        <div class="actions">
                            <img data-original="<?php echo get_template_directory_uri() . '/images/ig_like.svg'; ?>" class="no-lazyload"/>
                            <img data-original="<?php echo get_template_directory_uri() . '/images/ig_comment.svg'; ?>" class="no-lazyload"/>
                            <img data-original="<?php echo get_template_directory_uri() . '/images/ig_send.svg'; ?>" class="no-lazyload"/>
                        </div>
                        <p><b><?php the_field('user_name', $post->ID); ?>:</b> <?php the_field('post_content', $post->ID); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            </div>
            <div class="homeInstagram__cta">
                <a href="https://zamowienie.psibufet.pl/" class="btn dir"><span>Zamów i dołącz</span></a>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="homeAbout">
        <div class="homeAbout__wrap container">
            <div class="homeAbout__content">
                <h2 class="getMarker"><?php echo the_field('homeAbout_title'); ?></h2>
                <p><?php echo the_field('homeAbout_content'); ?></p>
                <div class="usp">
                    <div class="usp__usp">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/frontpage/about_usp01.svg'; ?>"/>
                        </div>
                        <p>Świeże<br/>posiłki</p>
                    </div>
                    <div class="usp__usp">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/frontpage/about_usp02.svg'; ?>"/>
                        </div>
                        <p>Testowane<br/>na ludziach</p>
                    </div>
                    <div class="usp__usp">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/frontpage/about_usp03.svg'; ?>"/>
                        </div>
                        <p>Z miłości<br/>do piesków</p>
                    </div>
                </div>
                <a href="/o-nas" class="btn btn--info btn--center"><span>Więcej o nas</span></a>
            </div>
            <div class="homeAbout__gif">
                <div class="image">
                    <img src="<?php echo get_field('homeAbout_image')['url']; ?>" alt="<?php echo get_field('homeAbout_image')['alt']; ?>"/>
                </div>
                <a href="/o-nas" class="btn btn--info btn--center"><span>Więcej o nas</span></a>
            </div>
        </div>
    </section>

    <section class="homeStartnew">
        <div class="homeStartnew__wrap container">
            <div class="clearfix"></div>
            <div class="homeStartnew__content">
                <h2 class="getMarker">Nie wiesz, od czego <span class="marker">zacząć</span>?</h2>
                <p>Wypełnij 1-minutowy formularz i stwórz idealny plan żywienia.</p>
                <form class="dogNameForm" name="userStart" action="https://zamowienie.psibufet.pl/" autocomplete="off">
                    <input type="text" name="dogName" placeholder="Wpisz imię swojego pupila" autocomplete="off"/>
                    <button type="submit" value="Rozpocznij" class="btn btn--button btn--center"><span>Rozpocznij</span></button>
                </form>
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
            <a href="/jak-to-dziala" class="pbShortcuts__box" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_01.webp'; ?>');">
                <p class="title">Jak to działa?</p>
            </a>
            <a href="/nasze-przepisy" class="pbShortcuts__box" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_02.webp'; ?>');">
                <p class="title">Nasze przepisy</p>
            </a>
            <a href="/o-nas" class="pbShortcuts__box" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_03.webp'; ?>');">
                <p class="title">O nas</p>
            </a>
        </div>
    </section>

    <?php if(get_field('faq_list')): ?>
    <section class="homeFaq">
        <div class="homeFaq__wrap container">
            <h2>Najczęściej zadawane pytania</h2>
            <div class="homeFaq__list">
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
            <a href="https://help.psibufet.pl/" target="_blank" class="moreFaq"><span>Zobacz wszystkie pytania z działu FAQ</span></a>
            <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span>Wypróbuj</span></a>
        </div>
    </section>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
