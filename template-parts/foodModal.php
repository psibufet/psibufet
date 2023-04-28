<?php
    $images = get_field('flavourPopup_gallery');
    $name = get_field('flavourName');
    $icon = get_field('flavourIcon');
    $color = get_field('flavourColor');
    $desc = get_field('flavourPopup_desc');

    // New
    $sklad_new = get_field('flavourPopup_new_sklad');
    $analityczny_new = get_field('flavourPopup_new_skladanalityczny');
    $dodatki_new = get_field('flavourPopup_new_dodatki');
?>
<div class="foodModal__content" data="<?php echo get_the_ID(); ?>">
    <div class="gallery" data="<?php echo get_the_ID(); ?>">
        <?php foreach( $images as $image ): ?>
            <div class="gallery__image">
                <img class="no-lazyload" data-original="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="title" style="background-color: <?php echo $color; ?>"><p><?php echo $name; ?><img class="no-lazyload" data-original="<?php echo $icon; ?>"/></p></div>
    <div class="desc">
        <p><?php echo $desc; ?></p>
    </div>
    <div class="usp">
        <div class="usp__pos">
            <div class="thumb">
                <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/jagnie_z_gor.svg'; ?>"/>
            </div>
            <p>Jakość Human-Grade</p>
        </div>
        <div class="usp__pos">
            <div class="thumb">
                <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/ikonki_zbilansowane.svg'; ?>"/>
            </div>
            <p>Zbilansowany, pełnoporcjowy skład</p>
        </div>
        <div class="usp__pos">
            <div class="thumb">
                <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/kurczak_classic.svg'; ?>"/>
            </div>
            <p>Zero ulepszaczy</p>
        </div>
        <div class="usp__pos">
            <div class="thumb">
                <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/wpolsce.svg'; ?>"/>
            </div>
            <p>Bezzbożowe, monobiałkowe</p>
        </div>
        <div class="usp__pos">
            <div class="thumb">
                <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/dopasowanaporcja.svg'; ?>"/>
            </div>
            <p>Idealnie dopasowana porcja</p>
        </div>
        <div class="usp__pos">
            <div class="thumb">
                <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/testowanenaludziach.svg'; ?>"/>
            </div>
            <p>Testowane na ludziach</p>
        </div>
    </div>
    <div class="accordion">
        <div class="accordion__element accordion__element--close">
            <div class="heading" data-info="main-accordion">
                <p>Skład</p>
                <img class="no-lazyload" data-original="<?php echo get_template_directory_uri() . '/images/icons/arrow_down_red_ico.svg'; ?>"/>
            </div>
            <div class="content">
                <div class="innerAccordion">
                    <div class="innerAccordion__element innerAccordion__element--close">
                        <div class="heading" data-info="child-accordion">
                            <p>Skład</p>
                        </div>
                        <div class="content_inner">
                            <p><?php echo $sklad_new; ?></p>
                        </div>
                    </div>
                    <div class="innerAccordion__element innerAccordion__element--close">
                        <div class="heading" data-info="child-accordion">
                            <p>Skład analityczny</p>
                        </div>
                        <div class="content_inner">
                            <p><?php echo $analityczny_new; ?></p>
                        </div>
                    </div>
                    <div class="innerAccordion__element innerAccordion__element--close">
                        <div class="heading" data-info="child-accordion">
                            <p>Dodatki</p>
                        </div>
                        <div class="content_inner">
                            <p><?php echo $dodatki_new; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    