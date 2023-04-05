<?php
/*
 *  Template Name: Kalkulator
 */
get_header(); ?>

<main class="psibufet psibufet--calculator">
    <section class="calcHeader">
        <div class="calcHeader__wrap">
            <?php echo get_field('calcHeader'); ?>
        </div>
    </section>
    <section class="calcInfo">
        <div class="calcInfo__wrap container">
            <?php echo get_field('calcInfo'); ?>
            <div class="calcInfo__boxes">
                <div class="box">
                    <div class="box__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcInfo_01.svg'; ?>"/>
                    </div>
                    <h3>Bezpieczna<br/>redukcja nadwagi</h3>
                </div>
                <div class="box">
                    <div class="box__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcInfo_02.svg'; ?>"/>
                    </div>
                    <h3>Utrzymanie<br/>wagi</h3>
                </div>
                <div class="box">
                    <div class="box__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcInfo_03.svg'; ?>"/>
                    </div>
                    <h3>Nabranie<br/>masy</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="calcHow">
        <div class="calcHow__wrap container">
            <?php echo get_field('calcHow'); ?>
            <div class="calcHow__list">
                <div class="pos">
                    <div class="pos__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcHow_01.svg'; ?>"/>
                    </div>
                    <h4>Wiek psa</h4>
                </div>
                <div class="pos">
                    <div class="pos__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcHow_02.svg'; ?>"/>
                    </div>
                    <h4>Masa ciała</h4>
                </div>
                <div class="pos">
                    <div class="pos__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcHow_03.svg'; ?>"/>
                    </div>
                    <h4>Sylwetka</h4>
                </div>
                <div class="pos">
                    <div class="pos__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcHow_04.svg'; ?>"/>
                    </div>
                    <h4>Aktywność fizyczna</h4>
                </div>
                <div class="pos">
                    <div class="pos__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcHow_05.svg'; ?>"/>
                    </div>
                    <h4>Smakołyki</h4>
                </div>
            </div>
            <a href="https://zamowienie.psibufet.pl/" class="btn btn--center"><span>Przejdź do kalkulatora</span></a>
        </div>
    </section>
    <section class="calcMiska">
        <div class="calcMiska__wrap container">
            <?php echo get_field('calcMiska'); ?>
            <div class="calcMiska__miskaWrap animateMiska">
                <div class="calcMiska__miska">
                    <div class="ba_img before"></div>
                    <div class="ba_img after"></div>
                </div>
                <div class="calcMiska__usp">
                    <img class="usp" src="<?php echo get_template_directory_uri() . '/images/lpsale/salemiska_usp.svg'; ?>"/>
                    <img class="arrows" src="<?php echo get_template_directory_uri() . '/images/lpsale/salemiska_arrows.svg'; ?>"/>
                </div>
                <div class="calcMiska__uspMobile">
                    <div class="box">
                        <div class="box__thumb">
                            <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/jagnie_z_gor.svg'; ?>"/>
                        </div>
                        <p>Jakość<br/>Human-Grade</p>
                    </div>
                    <div class="box">
                        <div class="box__thumb">
                            <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/ikonki_zbilansowane.svg'; ?>"/>
                        </div>
                        <p>Zbilansowany,<br/>pełnoporcjowy skład</p>
                    </div>
                    <div class="box">
                        <div class="box__thumb">
                            <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/kurczak_classic.svg'; ?>"/>
                        </div>
                        <p>Zero ulepszaczy</p>
                    </div>
                    <div class="box">
                        <div class="box__thumb">
                            <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/wpolsce.svg'; ?>"/>
                        </div>
                        <p>Bezzbożowe,<br/>monobiałkowe</p>
                    </div>
                </div>
            </div>
            <a href="<?php echo home_url(); ?>" class="btn btn--center"><span>Dowiedz się więcej</span></a>
        </div>
    </section>
    <section class="calcContent">
        <div class="calcContent__wrap container">
            <div class="calcContent__heading">
                <?php echo get_field('calcContent_title'); ?>
            </div>
            <?php while(have_rows('calcContent')): the_row();
                $type = get_sub_field('calcContent_type');
                $icon = get_sub_field('calcContent_icon');
                $content = get_sub_field('calcContent_content');
            if($type == 'normal'): ?>
            <div class="calcContent__section">
                <div class="icon">
                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>"/>
                </div>
                <div class="content">
                    <?php echo $content; ?>
                </div>
            </div>
            <?php else: ?>
            <div class="calcContent__figure">
                <?php while(have_rows('calcContent_blocks')): the_row();
                    $icon = get_sub_field('block_icon');
                    $content = get_sub_field('block_content');
                ?>
                <div class="dogFigure">
                    <div class="dogFigure__icon">
                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>"/>
                    </div>
                    <div class="dogFigure__desc">
                        <?php echo $content; ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; endwhile; ?>
            <div class="calcContent__info">
                <?php echo get_field('calcContent_footer'); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>