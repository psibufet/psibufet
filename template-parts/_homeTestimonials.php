<?php if( have_rows('testimonial_opinia') ): ?>
    <section class="homeTestimonials">
        <div class="homeTestimonials__wrap container">
            <h2>Opracowane przez dietetyków zwierzęcych, rekomendowane przez specjalistów i weterynarzy</h2>
            <div class="homeTestimonials__slider">
                <?php while( have_rows('testimonial_opinia') ): the_row(); 
                    $image = get_sub_field('testi_img');
                    $name = get_sub_field('testi_name');
                    $pos = get_sub_field('testi_stanowisko');
                    $content = get_sub_field('testi_content');
                ?>
                    <div class="slide">
                        <div class="image">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                        </div>
                        <div class="name">
                            <p><?php echo $name; ?></p>
                            <p class="position"><?php echo $pos; ?></p>
                        </div>
                        <p class="quote">"<?php echo $content; ?>"</p>
                    </div>
                <?php endwhile; ?>
            </div>
            <a href="https://zamowienie.psibufet.pl/" class="btn btn--center dir"><span><?php the_field('front_testi_cta') ?></span></a>
        </div>
    </section>
<?php endif; ?>