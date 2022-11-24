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
            <h2>Czy wiesz, że...</h2>
            <p>... możesz zwrócić nam kartony, w których przyszedł do Ciebie PsiBufet? My wykorzystamy je ponownie, a Ty <b>otrzymasz rabat 10 zł na kolejną dostawę!</b> Wystarczy, że zbierzesz <b>5 kartonów wraz z przekładkami</b> (folia termiczna też mile widziana!), spakujesz je i wypełnisz znajdujący się poniżej formularz. Wtedy <b>my zamówimy kuriera</b>, który je od Ciebie odbierze <b>w najbliższą środę</b> od zgłoszenia, a w podziękowaniu <b>damy Ci zniżkę.</b></p>
        </div>
    </section>
    <section class="kartonyTable">
        <div class="kartonyTable__heading">
            <h2 class="getMarker">Jakie kartony <span class="marker">nadają</span> się do zwrotu?</h2>
        </div>
        <div class="kartonyTable__table">
            <div class="pos">
                <div class="pos__name">
                    <h3>Kartony ze zgniecionymi rogami</h3>
                </div>
                <div class="pos__status pos__status--false">
                    <h3>Nie</h3>
                </div>
            </div>
            <div class="pos">
                <div class="pos__name">
                    <h3>Kartony różnych wielkości</h3>
                </div>
                <div class="pos__status pos__status--true">
                    <h3>Tak</h3>
                </div>
            </div>
            <div class="pos">
                <div class="pos__name">
                    <h3>Same kartony, bez przekładek</h3>
                </div>
                <div class="pos__status pos__status--false">
                    <h3>Nie</h3>
                </div>
            </div>
            <div class="pos">
                <div class="pos__name">
                    <h3>Inna ilość kartonów niż 5</h3>
                </div>
                <div class="pos__status pos__status--false">
                    <h3>Nie</h3>
                </div>
            </div>
            <div class="pos">
                <div class="pos__name">
                    <h3>Brudne kartony lub takie, <br/>które uległy uszkodzeniu w transporcie</h3>
                </div>
                <div class="pos__status pos__status--false">
                    <h3>Nie</h3>
                </div>
            </div>
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
                    <h2 class="getMarker">Masz już <span class="marker">5 kartonów</span>?</h2>
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