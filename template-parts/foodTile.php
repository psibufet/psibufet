<div class="foodTile">
    <div class="foodTile__gallery">
        <?php $gallery = get_field('flavourGallery');
        foreach( $gallery as $image ): ?>
            <div class="galleryImage">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="no-lazyload"/>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="foodTile__name" style="background-color: <?php the_field('flavourColor') ?>;">
        <h3><?php the_field('flavourName'); ?></h3>
        <img src="<?php the_field('flavourIcon'); ?>"/>
    </div>
    <div class="foodTile__content">
        <p class="desc"><?php the_field('flavourDesc_recipe'); ?></p>
        <p class="openFoodModal" data="<?php echo get_the_ID(); ?>"><span>Zobacz skład</span></p>
    </div>
</div>