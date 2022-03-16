<?php
    /**
     * Testimonial Block Template.
     *
     * @param   array $block The block settings and attributes.
     * @param   string $content The block inner HTML (empty).
     * @param   bool $is_preview True during AJAX preview.
     * @param   (int|string) $post_id The post ID this block is saved to.
     */

    // Create id attribute allowing for custom "anchor" value.
    $id = 'breed-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }

    // Create class attribute allowing for custom "className" and "align" values.
    $className = 'breedInfo';
    if( !empty($block['className']) ) {
        $className .= ' ' . $block['className'];
    }
    if( !empty($block['align']) ) {
        $className .= ' align' . $block['align'];
    }

    // Load values and assign defaults.
    $image = get_field('rasa_image');
    $color = get_field('rasa_color');
    $title = get_field('rasa_title') ?: 'Tytuł sekcji';
    $content = get_field('rasa_content') ?: 'Tutaj jest miejsce na treść....';

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="background-color: <?php echo $color . '1a'; ?>">
    <div class="breedInfo__wrap container">
        <div class="sectionContent">
            <h2><?php echo get_the_title($post_id); ?> - <?php echo $title; ?></h2>

            <?php if($image): ?>
            <div class="breedInfo__image">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
            </div>
            <?php endif; ?>

            <div class="breedInfo__content">
                <?php echo $content; ?>
            </div>

            <?php if(get_field('rasa_sections')): ?>
                <?php while(have_rows('rasa_sections')): the_row(); ?>
                    <?php if(!get_sub_field('rasa_sections_ad')): ?>
                    <div class="breedInfo__section">
                        <h3><?php echo get_sub_field('rasa_sections_title'); ?></h3>
                        <?php echo get_sub_field('rasa_sections_content'); ?>
                    </div>
                    <?php else: ?>
                    <div class="breedInfo__banner">
                        <img src="<?php echo get_template_directory_uri() . '/images/lpsale/psibufet_logo_lp.svg'; ?>"/>
                        <h3>Alternatywna dieta dla psa</h3>
                        <div class="usp">
                            <div class="usp__pos">
                                <img src="<?php echo get_template_directory_uri() . '/images/rasy/banner_usp_01.svg'; ?>"/>
                                <p>Dla piesków <br/>wszystkich <br/>rozmiarów</p>
                            </div>
                            <div class="usp__pos">
                                <img src="<?php echo get_template_directory_uri() . '/images/rasy/banner_usp_02.svg'; ?>"/>
                                <p>Porcja rośnie <br/>razem z pieskiem</p>
                            </div>
                            <div class="usp__pos">
                                <img src="<?php echo get_template_directory_uri() . '/images/rasy/banner_usp_03.svg'; ?>"/>
                                <p>Idealnie <br/>dopasowane <br/>do wieku</p>
                            </div>
                            <div class="usp__pos">
                                <img src="<?php echo get_template_directory_uri() . '/images/rasy/banner_usp_04.svg'; ?>"/>
                                <p>Świetne do <br/>wypełniania <br/>zabawek</p>
                            </div>
                            <div class="usp__pos">
                                <img src="<?php echo get_template_directory_uri() . '/images/rasy/banner_usp_05.svg'; ?>"/>
                                <p>Łatwe do <br/>podania w kilku <br/>posiłkach</p>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>