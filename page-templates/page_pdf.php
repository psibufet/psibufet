<?php
    /**
     * Template name: Pobieranie PDF
     */
get_header(); ?>

<main class="psibufet psibufet--pdf">
    <div class="pagePDF" data-pdf="">
        <div class="pagePDF__wrap">
            <img src="<?php echo get_template_directory_uri() . '/images/pdf_dog.gif'; ?>"/>
            <h1 class="status">Czekaj na pobranie pliku PDF</h1>
            <a href="<?php echo get_field('download_pdf'); ?>" id="download_pdf" download></a>
            <a href="https://psibufet.pl/" id="back" class="btn btn--back"><span>Powrót na stronę główną</span></a>
        </div>
    </div>
</main>

<?php get_footer(); ?>