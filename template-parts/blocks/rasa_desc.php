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
    $color = get_field('rasa_color') ?: '#ffffff';
    $title = get_field('rasa_title') ?: 'Tytuł sekcji';
    $content = get_field('rasa_content') ?: 'Tutaj jest miejsce na treść....';

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="background-color: <?php echo $color . '1a'; ?>" data-title="<?php echo $title; ?>">
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
                    <?php $secID = $id . rand(); ?>
                    <div id="<?php echo $secID; ?>" class="breedInfo__section" data-title="<?php echo get_sub_field('rasa_sections_title'); ?>">
                        <h3><?php echo get_sub_field('rasa_sections_title'); ?></h3>
                        <?php echo get_sub_field('rasa_sections_content'); ?>
                    </div>
                    <?php else: ?>
                    <div class="breedInfo__banner">
                        <img src="<?php echo get_template_directory_uri() . '/images/lpsale/psibufet_logo_lp.svg'; ?>"/>
                        <h3><?php the_field('ad_title', 'cpt_rasy-psow_ustawienia'); ?></h3>
                        <div class="usp">
                            <?php while(have_rows('ad_usp', 'cpt_rasy-psow_ustawienia')): the_row(); ?>
                            <div class="usp__pos">
                                <img src="<?php echo get_sub_field('ad_usp_ico')['url']; ?>" alt="<?php echo get_sub_field('ad_usp_ico')['alt']; ?>"/>
                                <p><?php echo get_sub_field('ad_usp_text'); ?></p>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="cta">
                            <a href="<?php the_field('ad_link', 'cpt_rasy-psow_ustawienia'); ?>" class="btn btn--center"><span>Dowiedz się więcej</span></a>
                        </div>
                    </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>