<?php
/*
 * Template Name: NEW Thank you page
 */
 get_header(); ?>

<main class="psibufet psibufet--typ">
    <div id="tsparticles"></div>
    <header class="typHeader">
        <div class="typHeader__logo">
            <img src="<?php echo get_template_directory_uri() . '/images/thank-you/psibufet_logo.svg'; ?>"/>
        </div>
    </header>
    <section class="typMain">
        <div class="doggieOne">
            <img class="shadow" src="<?php echo get_template_directory_uri() . '/images/thank-you/typ_dog01_shadow.png'; ?>"/>
            <img src="<?php echo get_template_directory_uri() . '/images/thank-you/typ_dog01.png'; ?>"/>
        </div>
        <div class="doggieTwo">
            <img class="shadow" src="<?php echo get_template_directory_uri() . '/images/thank-you/typ_dog02_shadow.png'; ?>"/>
            <img src="<?php echo get_template_directory_uri() . '/images/thank-you/typ_dog02.png'; ?>"/>
        </div>
        <div class="typMain__heading">
            <h1>Witamy!</h1>
            <h2>w #PsiBufetGang</h2>
        </div>
        <div class="typContent">
            <div class="typContent__solid">
                <h2>Razem z Twoim pieskiem dziękujemy Ci <br/>za świetny wybór i złożenie zamówienia.</h2>
                <div class="courier">
                    <div class="courier__wrap"></div>
                </div>
                <p class="courierText">Porcje na pierwsze 7 dni umieść w lodówce, a resztę jedzenia włóż do zamrażalnika. Następnie stopniowo przekładaj do lodówki porcje, które podasz pupilowi w kolejnych dniach.</p>
                <p class="infoGroup">Tymczasem dołącz do naszej grupy PsiBufetGang na Facebooku i przedstaw swojego pupila!</p>
                <a href="https://www.facebook.com/groups/271702244086017" target="_blank" class="btn btn--blue btn--center"><span>Dołącz do grupy</span></a>
            </div>
            <div class="typContent__que">
                <div class="heading openQue">
                    <h3>Ile karmy podawać?</h3>
                </div>
                <div class="content">
                    <p>Jedna porcja naszej karmy odpowiada dziennemu zapotrzebowaniu energetycznemu Twojego psa. Wyliczamy ją na podstawie informacji podanych przez Ciebie w formularzu pierwszego zamówienia. Jeśli zauważysz, że karmy jest za mało lub zbyt dużo, możesz zmienić wielkość porcji. Zachęcamy do podawania dziennej porcji w minimum dwóch posiłkach. Częstsze karmienie mniejszą porcją jest lepsze dla trawienia i chroni psa przed zagrożeniem jak choćby skręt żołądka.</p>
                </div>
            </div>
            <div class="typContent__que">
                <div class="heading openQue">
                    <h3>jak najlepiej podawać karmy psibufet?</h3>
                </div>
                <div class="content">
                    <p>Nasze jedzonko serwuj w temperaturze pokojowej lub lekko podgrzane w kuchence mikrofalowej. Między posiłkami zadbaj, aby karma nie wyschła np. przez pozostawienie jej w otwartej saszetce. Po otwarciu, cała zawartość saszetki ma ważność do 48 godzin. Ze względów behawiorystycznych nie zalecamy dłuższego pozostawiania karmy w misce – psy powinny mieć dostęp do pożywienia tylko w porach karmienia.</p>
                </div>
            </div>
            <div class="typContent__que">
                <div class="heading openQue">
                    <h3>czy mogę zmodyfikować mój plan?</h3>
                </div>
                <div class="content">
                    <p>Jasne! Subskrypcją możesz zarządzać z poziomu panelu klienta.</p>
                </div>
            </div>
            <div class="typContent__que">
                <div class="heading openQue">
                    <h3>kiedy otrzymam kolejną dostawę?</h3>
                </div>
                <div class="content">
                    <p>Twoja druga paczka zostanie dostarczona 14 dni po pierwszej. Możesz dostosować tę datę do swoich preferencji z poziomu panelu klienta..</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

