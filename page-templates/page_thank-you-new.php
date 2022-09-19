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
                <div class="referralInfo">
                    <div class="referralInfo__wrap">
                        <div class="referralInfo__heading">
                            <h2>Poleć nas znajomym</h2>
                            <p><b>Super, że jesteś w naszym PsiBufetGang!</b> Znasz kogoś, kto też kocha pieski? Ekstra - niech będzie nas jeszcze więcej! <b>Zaproś znajomych</b> i zyskajcie razem.</p>
                        </div>
                        <div class="info">
                            <div class="info__box">
                                <h3 class="amount">50 zł</h3>
                                <p>dla Ciebie</p>
                                <img src="<?php echo get_template_directory_uri() . '/images/thank-you/referral_01.svg'; ?>"/>
                                <h4>na następne zamówienie</h4>
                            </div>
                            <div class="info__box">
                                <h3 class="amount">50%</h3>
                                <p>dla Twoich znajomych</p>
                                <img src="<?php echo get_template_directory_uri() . '/images/thank-you/referral_02.svg'; ?>"/>
                                <h4>na pierwsze zamówienie</h4>
                            </div>
                        </div>
                        <div class="referralCode">
                            <h2>Skopiuj swój kod i przekaż go dalej</h2>
                            <div class="referralCode__input">
                                <span class="value">www.psibufet.pl/uuid</span>
                                <button type="button" id="copybtn"><span>Kopiuj</span></button>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="typContent__que">
                <div class="heading openQue">
                    <h3>Jak mogę zarządzać moją subskrypcją PsiBufet?</h3>
                </div>
                <div class="content">
                    <p>Dieta PsiBufet działa w modelu subskrypcyjnym. Oznacza to regularne dostawy jedzenia w wybranej przez Ciebie częstotliwości. Nie musisz o niczym pamiętać - to my pilnujemy terminów. Na dwa dni przed planowaną dostawą pobieramy pieniądze z Twojego konta (dzięki podpiętej karcie) i przypominamy o zbliżającej się dostawie. <b>Co ważne, wszystkim możesz samodzielnie zarządzać w Panelu Klienta, a zmian dokonasz na dwa dni przed planowanym terminem do godziny 15:00.</b> Wystarczy, że zalogujesz się na panel.psibufet.pl - w razie potrzeby zmienisz tam adres lub termin dostawy albo zmodyfikujesz zawartość paczki (wybierając inne smaki lub inne gramatury saszetek).</p>
                </div>
            </div>
            <div class="typContent__que">
                <div class="heading openQue">
                    <h3>Ile jedzenia mam podawać?</h3>
                </div>
                <div class="content">
                    <p>Jedna saszetka naszego jedzenia odpowiada dziennemu zapotrzebowaniu energetycznemu Twojego psa. Wyliczamy je na podstawie informacji podanych przez Ciebie w formularzu przy pierwszym zamówieniu. Jeśli uważasz, że jedzenia jest za mało lub zbyt dużo, zawsze możesz zmienić wielkość porcji w Panelu Klienta. Zachęcamy do podzielenia dziennej dawki na minimum dwa posiłki. Karmienie dwa, a nawet trzy razy dziennie jest lepsze dla trawienia i samopoczucia pieska.</p>
                </div>
            </div>
            <div class="typContent__que">
                <div class="heading openQue">
                    <h3>W jaki sposób najlepiej podawać PsiBufet?</h3>
                </div>
                <div class="content">
                    <p>Jedzenie PsiBufet serwuj w temperaturze pokojowej lub lekko podgrzane (np. w kuchence mikrofalowej). Otwartą saszetkę z posiłkiem trzymaj szczelnie zamkniętą w lodówce (możesz ją włożyć np. do lunchboxu) i przechowuj ją maksymalnie 48 godzin. Ze względów behawioralnych i z uwagi na bezpieczeństwo żywienia nie zalecamy zostawiania jedzenia psu w misce na dłużej niż 15-20 minut. Po tym czasie miskę powinniśmy zabierać, a jedzenie podawać dopiero w kolejnej, zaplanowanej porze posiłku. Warto też myć miskę przed każdym karmieniem, a także stosować miski spowalniające lub maty do lizania.</p>
                </div>
            </div>
            <div class="typContent__que">
                <div class="heading openQue">
                    <h3>Czy mogę zmodyfikować mój plan żywienia?</h3>
                </div>
                <div class="content">
                    <p>Oczywiście - subskrypcją możesz zarządzać samodzielnie z poziomu Panelu Klienta. Wystarczy, że zalogujesz się na <a href="https://panel.psibufet.pl/" target="_blank">panel.psibufet.pl</a>. Znajdziesz tam wiele opcji - m.in. zmienisz termin lub adres dostawy albo zmodyfikujesz zawartość paczki. Wszystkich zmian możesz dokonywać na dwa dni przed planowanym terminem dostawy, do godziny 15:00.</p>
                </div>
            </div>
            <div class="typContent__que">
                <div class="heading openQue">
                    <h3>Kiedy otrzymam kolejną dostawę?</h3>
                </div>
                <div class="content">
                    <p>Twoja druga dostawa jest zaplanowana na <span id="deliveryDate"></span>. Dostaniesz przypomnienie o niej na 4 dni przed tym terminem. Jeśli chcesz zmienić datę dostawy, możesz to zrobić, logując się do Panelu Klienta. Pamiętaj, że wszelkich zmian możesz dokonać na dwa dni przed planowanym terminem dostawy, do godziny 15:00.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

