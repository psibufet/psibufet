<?php 
    /**
     * Template Name: LP - Zwrot kartonów
     */
get_header(); ?>

<main class="psibufet psibufet--kartony">
    <section class="kartonyHeader">
        <div class="kartonyHeader__wrap">
            <h1 class="getMarker"><span class="marker">Zwróć</span> opakowania <br/> i łap rabat</h1>
            <img class="badge" src="<?php echo get_template_directory_uri() . '/images/kartony/badge.svg'; ?>" />
        </div>
    </section>
    <section class="kartonyInfo">
        <div class="kartonyInfo__wrap container">
            <h2><?php echo get_field('kartonyInfo_title'); ?></h2>
            <p><?php echo get_field('kartonyInfo_content'); ?></p>
        </div>
    </section>
    <section class="kartonyTable">
        <div class="kartonyTable__heading">
            <h2 class="getMarker">Jakie kartony <span class="marker">nadają</span> się do zwrotu?</h2>
        </div>
        <div class="kartonyTable__table">
            <?php while(have_rows('kartonyTable')): the_row();
                $name = get_sub_field('kartonyTable_name');
                $value = get_sub_field('kartonyTable_value');
            ?>
            <div class="pos">
                <div class="pos__name">
                    <h3><?php echo $name; ?></h3>
                </div>
                <div class="pos__status pos__status--<?php echo $value['value']; ?>">
                    <h3><?php echo $value['label']; ?></h3>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </section>
    <section class="kartonyGif">
        <div class="kartonyGif__heading">
            <h2 class="getMarker">Jak <span class="marker">spakować</span> kartony do zwrotu?</h2>
        </div>
        <div class="kartonyGif__wrap">
            <img src="<?php echo get_template_directory_uri() . '/images/kartony/kartony_gif.gif'; ?>" />
        </div>
    </section>
    <section class="kartonyContact">
        <div class="kartonyContact__wrap container">
            <form class="kartonyForm">
                <div class="kartonyForm__heading">
                    <h2 class="getMarker">Masz już zestaw z <span class="marker">5 dostaw</span>?</h2>
                    <p>Wypełnij formularz zwrotu opakowań!</p>
                </div>
                <input type="text" name="kartonyName" placeholder="Imię i nazwisko" required/>
                <input type="email" name="kartonyEmail" placeholder="Adres e-mail (powiązany z kontem PsiBufet)" required/>
                <button type="submit" class="btn btn--submit btn--button"><span>Zamawiam odbiór kartonów</button>
                <div class="alert"></div>
            </form>
        </div>
    </section>
</main>

<?php get_footer(); ?>