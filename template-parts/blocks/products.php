<?php
/**
 * Block Name: Produkty
 *
 * This is the template that displays the testimonial block.
 */

// get image field (array)
$select = get_field('product_select');

// create id attribute for specific styling
$product = get_page_by_path( $select['value'], OBJECT, 'falvours' );
$product_id = $product->ID;

?>
<section class="product product--<?php echo $select['value']; ?> container">
    <div class="product__wrap" style="background-color: <?php echo get_field('product_color', $product_id); ?>0d">
        <div class="product__image">
            <img src="<?php echo get_field('product_image', $product_id)['url']; ?>" />
        </div>
        <div class="product__content">
            <h3>
                <span class="left" style="background-color: <?php echo get_field('product_color', $product_id); ?>"></span>
                <?php echo get_the_title($product_id); ?>
                <span class="right" style="background-color: <?php echo get_field('product_color', $product_id); ?>"></span>
            </h3>
            <div><?php echo get_field('product_desc', $product_id); ?></div>
            <div><?php echo get_field('product_for', $product_id); ?></div>
            <a href="<?php echo get_field('product_url', $product_id); ?>" class="btn"><span>Wypróbuj</span></a>
        </div>
    </div>
    <div class="product__cta">
        <a href="<?php echo get_field('product_url', $product_id); ?>" class="btn"><span>Wypróbuj</span></a>
    </div>
</section>