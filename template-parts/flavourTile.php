<article class="flavourTile">
    <div class="flavourTile__thumb">
        <img src="<?php the_field('flavourThumb'); ?>"/>
    </div>
    <div class="flavourTile__bar" style="background-color: <?php echo the_field('flavourColor'); ?>">
        <p><?php the_field('flavourName'); ?></p>
        <img class="no-lazyload" src="<?php the_field('flavourIcon'); ?>"/>
    </div>
    <div class="flavourTile__content">
        <p class="desc"><?php echo the_field('flavourDesc'); ?></p>
        <a href="#" class="btn btn--center"><span>Sprawdź</span></a>
    </div>
</article>