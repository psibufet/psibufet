<?php

/*

Template Name: Jak to działa?

*/
	get_header();
?>

<div id="hiw_page">
    <section class="hiw_header">
        <div class="inner">
            <h1>Świeża karma w kilku krokach</h1>
            <p class="lead">Chcesz zacząć, ale nie wiesz jak?<br/>Dowiedz się, jak działa PsiBufet!</p>
        </div>
        <a class="header_arrow" href="#first_section"><img src="/wp-content/themes/psibufet/images/chevron_down_white.svg"/></a>
    </section>
    <section id="first_section" class="hiw_howitworks">
        <div class="container">
            <div class="howitworks_heading">
                <h2>Jak to działa?</h2>
            </div>
            <div class="slider_wrapper">
                <div class="howitworks_slider">
                    <?php if( have_rows('how_it_works_slides', 5) ): ?>
                        <ul class="slides">
                            <?php while( have_rows('how_it_works_slides', 5) ): the_row(); 
                                $image = get_sub_field('hiw_image', 5);
                                $title = get_sub_field('hiw_title', 5);
                                $content = get_sub_field('hiw_content', 5);
                            ?>
                                <li>
                                    <img src="<?php echo $image; ?>"/>
                                    <div class="slide_inner">
                                        <h4 class="slide_title"><?php echo get_row_index(); ?>. <?php echo $title; ?></h4>
                                        <p class="slide_content"><?php echo $content; ?></p>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            <div class="navigation">
                <ul class="slide_control">
                    <li>
                        <div class="image">
                            <img src="/wp-content/themes/psibufet/images/step_1.svg"/>
                        </div>
                        <p><span>1.</span> Poznanie Twojego pupila</p>
                    </li>
                    <li>
                        <div class="image">
                            <img src="/wp-content/themes/psibufet/images/step_2.svg"/>
                        </div>
                        <p><span>2.</span> Dopasowanie diety</p>
                    </li>
                    <li>
                        <div class="image">
                            <img src="/wp-content/themes/psibufet/images/step_3.svg" style="margin-top: -10px;"/>
                        </div>
                        <p><span>3.</span> Gotowanie karmy</p>
                    </li>
                    <li>
                        <div class="image">
                            <img src="/wp-content/themes/psibufet/images/step_4.svg" style="padding: 10px;"/>
                        </div>
                        <p><span>4.</span> Dostawa paczki</p>
                    </li>
                    <li>
                        <div class="image">
                            <img src="/wp-content/themes/psibufet/images/step_5.svg" style="margin-top: -5px;"/>
                        </div>
                        <p><span>5.</span> Przechowywanie i karmienie</p>
                    </li>
                    <li>
                        <div class="image">
                            <img src="/wp-content/themes/psibufet/images/step_6.svg" style="margin-top: -5px;"/>
                        </div>
                        <p><span>6.</span> Cykliczne dostawy</p>
                    </li>
                </ul>
            </div>
            <a href="https://psibufet.pl/serwis" class="check dir"><?php the_field('hit_howitworks_btn'); ?></a>
        </div>
    </section>
    <section class="hiw_plan">
        <div class="container">
            <h2>Plan Psibufet to:</h2>
            <div class="boxes">
                <div class="box 1">
                    <div class="inner">
                        <img src="/wp-content/themes/psibufet/images/dog_paw.svg"/>
                        <p><b>Darmowa dostawa</b><br/>na terenie całej Polski</p>
                    </div>
                </div>
                <div class="box 2">
                    <div class="inner">
                        <img src="/wp-content/themes/psibufet/images/dog_paw.svg"/>
                        <p>Skomponuj dowolny<br/><b>zestaw smaków</b></p>
                    </div>
                </div>
                <div class="box 3">
                    <div class="inner">
                        <img src="/wp-content/themes/psibufet/images/dog_paw.svg"/>
                        <p><b>Wstrzymuj lub przesuwaj</b><br/>dostawy</p>
                    </div>
                </div>
                <div class="box 4">
                    <div class="inner">
                        <img src="/wp-content/themes/psibufet/images/dog_paw.svg"/>
                        <p><b>Łatwo zarządzaj planem</b><br/>z panelu klienta</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hiw_foodplans">
        <div class="container">
            <h2 class="sec_title">Dostępne plany żywienia</h2>
            <div class="foodplans_columns">
                <div class="column_psibufet">
                    <div class="column_header">
                        <h2>100% Psibufet</h2>
                    </div>
                    <div class="column_bg"></div>
                    <div class="column_content">
                        <div class="inner">
                            <p>Zapewnia <b>pełne dzienne zapotrzebowanie kaloryczne</b> Twojego psa.
                                <br/><br/>
                                Rekomendowany plan przygotowany przez dietetyków zwierzęcych, zapewniający Twojemu pupilowi <b>niezbędną ilość kalorii, witamin i minerałów.</b>
                                <br/><br/>
                                <b>Psst…</b> Zostawiamy trochę miejsca na ulubione smaczki.</p>
                        </div>
                    </div>
                </div>
                <div class="column_mix">
                    <div class="column_header">
                        <h2>Plan mix</h2>
                    </div>
                    <div class="column_bg"></div>
                    <div class="column_content">
                        <div class="inner">
                            <p>Pokryje około <b>60% zapotrzebowania kalorycznego</b> Twojego psa.
                                <br/><br/>
                                Opcja dla wszystkich właścicieli psów, którzy chcą łączyć PsiBufet z inna karmą, a także z ulubionymi smaczkami.</b>
                                <br/><br/>
                                Plan nie gwarantuje dostarczenia pupilowi wszystkich niezbędnych kalorii, witamin oraz składników odżywczych.</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="https://psibufet.pl/serwis" class="check dir"><span><?php the_field('hit_compare_cta'); ?></span></a>
        </div>
    </section>
    <section class="hiw_testimonials">
        <div class="container">
            <h2>Opracowane przez dietetyków zwierzęcych, rekomendowane przez specjalistów i weterynarzy</h2>
            <div class="testimonial">
                <?php if( have_rows('testimonial_opinia', 5) ): ?>
                <ul class="testi_slides">
                    <?php while( have_rows('testimonial_opinia', 5) ): the_row(); 
                        $image = get_sub_field('testi_img', 5);
                        $name = get_sub_field('testi_name', 5);
                        $stanowisko = get_sub_field('testi_stanowisko', 5);
                        $content = get_sub_field('testi_content', 5);
                    ?>
                    <li class="slide">
                        <div class="inner">
                            <img src="<?php echo $image; ?>"/>
                            <p class="name"><?php echo $name; ?></p>
                            <?php if( $stanowisko ): ?>
                                <p class="lead"><?php echo $stanowisko; ?></p>
                            <?php endif; ?>
                            <p class="content">"<?php echo $content; ?>"</p>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
                <div class="nav">
                    <i class="arrow testi-prev"><img class="left" src="/wp-content/themes/psibufet/images/slider_arrow_l.svg"/></i>
                    <i class="arrow testi-next"><img class="right" src="/wp-content/themes/psibufet/images/slider_arrow_r.svg"/></i>
                </div>
            </div>
        </div>
    </section>
    <div class="section_background">
        <section class="hiw_delivery">
            <div class="container">
                <img src="/wp-content/themes/psibufet/images/howitworks/poland_ico.svg"/>
                <h3>Dostarczamy w całej polsce</h3>
                <p>Od Szczecina po Wieliczkę, świeża karma w każdej misce!</p>
            </div>
        </section>
        <section class="hiw_contact">
            <div class="container">
                <div class="contact_heading">
                    <h2>Masz pytania?</h2>
                    <p>Pisz śmiało!</p>
                </div>
                <p class="info">Wiedz, że możemy porozmawiać o wszystkim. Chcielibyśmy rozwiać Twoje wątpliwości, a także omówić <b>plan żywienia dla Twojego pupila.</b>
                <br/><br/>
                Widzisz obszary, które możemy poprawić? Liczymy się z Twoim zdaniem, więc chętnie poznamy Twoją opinię!</p>
                <a href="/kontakt" class="check dir">Kontakt</a>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>

