<?php
/*
 *  Template Name: Książka
 */
get_header(); ?>

<main class="psibufet psibufet--book">
    <section class="book__header">
        <div class="book__header__wrap container">
            <h1>KSIĄŻKA KUCHARSKA PSIBUFET</h1>
            <p>63 zdrowe i smakowite przepisy dla Twojego psa</p>
        </div>
    </section>

    <section class="bookContent book__content container">
        <div class="book__content__header">
            <h2 class="getMarker">najlepsia <span class="marker">książka</span> o jedzeniu</h2>
            <p>Jedyna taka psiążka kucharska. <span class="bold">63 przepisy</span> na przepyszne, zdrowe i pełnowartościowe posiłki dla każdego psa.</p>
        </div>
        <div class="book__price">
            <p class="book__price__cost">
                <img src="/wp-content/themes/psibufet/images/chevron_down.svg"/>
                CENA KSIĄŻKI W KSIĘGARNI: 59<span>99</span>ZŁ
            </p>
            <p class="book__price__free">
                <img src="/wp-content/themes/psibufet/images/chevron_down.svg"/>
                CENA PRZY ZAKUPIE KARMY: <span>ZA DARMO!</span>
            </p>
        </div>
        <div class="bookContent__image">
            <img class="book" src="<?php echo get_template_directory_uri() . '/images/book/book_img.png' ?>"/>
            <img class="book_mobile" src="<?php echo get_template_directory_uri() . '/images/book/book_mobile_img.png' ?>"/>
            <img class="gratis" src="<?php echo get_template_directory_uri() . '/images/book/gratis_ico.svg' ?>"/>
        </div>
        <a href="https://zamowienie.psibufet.pl/?code=psiazka" class="btn freeBook"><span>Odbierz za darmo</span></a>
        <a href="https://psibufet.pl/regulamin_promocji_ksiazki.pdf" target="_blank" class="terms">Regulamin Promocji</a>
        <a href="#library" class="buyBook">Nie chcę prezentu. Pokaż, gdzie kupić tylko książkę.</a>
        <div class="book__description">
            <p><b>Twój pies uwielbia ruch i długie zabawy?</b> Zapewnij mu odpowiednią dawkę energii i ugotuj wysokokaloryczne danie z wołowiny z dodatkiem sardynek.</p>
            <p><b>Psiemu seniorowi</b> na deser zaproponuj galaretkę z kurzych łapek – smakuje wyśmienicie i doskonale wspomaga stawy.</p>
            <p>A jeśli twój pupil ma <b>objawy alergii pokarmowej,</b> wypróbuj połączenie banana i mięsa z królika, które z powodzeniem zastąpi tradycyjną karmę.</p>
            <p><b>Gotowanie dla psa wcale nie musi być trudne!</b> W tej książce znajdziesz proste pomysły na <b>PSOTRAWY</b>, czyli dania główne, starannie opracowane tak, aby każdego dnia twój czworonożny przyjaciel otrzymywał to, czego najbardziej potrzebuje.</p>
            <p>Dzięki <b>PSIESMAKOM</b> wzbogacisz dietę swojego pupila zdrowymi, w pełni naturalnymi przekąskami.</p>
            <p>A na <b>specjalne okazje</b> – urodziny, adopciny oraz inne święta – przygotowaliśmy kilka naprawdę wyjątkowych <b>PSIECJAŁÓW!</b></p>
        </div>
        <div class="openDesc">Zobacz więcej</div>
    </section>

    <section class="meetMakers">
        <div class="meetMakers__wrap">
            <h2 class="getMarker">Poznaj <span class="marker">twórców</span></h2>
            <div class="meetMakers__images">
                <div class="image">
                    <img class="no-lazyload" src="<?php echo get_template_directory_uri() . '/images/book/first_person.png'; ?>"/>
                </div>
                <div class="image">
                    <img class="no-lazyload" src="<?php echo get_template_directory_uri() . '/images/book/sec_person.png'; ?>"/>
                </div>
                <div class="image">
                    <img class="no-lazyload" src="<?php echo get_template_directory_uri() . '/images/book/third_person.png'; ?>"/>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri() . '/images/book/autorzy_razem.png'; ?>" />
            <div class="meetMakers__content container">
                <div class="box">
                    <h3 class="box__title">dr inż. Olga Lasek</h3>
                    <p class="box__desc">Psi dietetyk, pracownik akademicki i autorka przepisów PsiBufet.</p>
                </div>
                <div class="box">
                    <h3 class="box__title">Piotr Wawrysiuk</h3>
                    <p class="box__desc">Założyciel firmy PsiBufet, na co dzień zapewniającej karmę kilku tysiącom czworonogów.</p>
                </div>
                <div class="box">
                    <h3 class="box__title">Aleksandra Więcławska</h3>
                    <p class="box__desc">Redaktora serwisu Psy.pl. największego portalu w polskim “psinternecie"</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bookLibrary" id="library">
        <div class="container">
            <h2>KSIĄŻKA DOSTĘPNA RÓWNIEŻ W KSIĘGARNIACH</h2>
            <div class="bookLibrary__box">
                <div class="logo">
                    <img src="/wp-content/themes/psibufet/images/book/bonito_logo.svg" />
                </div>
                <div class="logo">
                    <img src="/wp-content/themes/psibufet/images/book/empik_logo.svg" />
                </div>
                <div class="logo">
                    <img src="/wp-content/themes/psibufet/images/book/znak_logo.svg" />
                </div>
            </div>
            <div class="bookLibrary__cta">
                <a href="https://zamowienie.psibufet.pl/?code=psiazka" class="btn"><span>Odbierz za darmo</span></a>
                <a href="https://psibufet.pl/regulamin_promocji_ksiazki.pdf" target="_blank" class="terms"><span>Regulamin promocji</span></a>
            </div>
        </div>
    </section>

    <section class="pbShortcuts">
        <h2 class="getMarker"><span class="marker">Poznaj</span> nas lepiej</h2>
        <div class="pbShortcuts__wrap">
            <a href="/jak-to-dziala" class="pbShortcuts__box"
                style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_01.png'; ?>');">
                <p class="title">Jak to działa?</p>
            </a>
            <a href="/nasze-przepisy" class="pbShortcuts__box"
                style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_02.png'; ?>');">
                <p class="title">Nasze przepisy</p>
            </a>
            <a href="/o-nas" class="pbShortcuts__box"
                style="background-image: url('<?php echo get_template_directory_uri() . '/images/homepage/homeShortcuts_03.png'; ?>');">
                <p class="title">O nas</p>
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>