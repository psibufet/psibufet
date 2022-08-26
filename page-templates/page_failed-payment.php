<?php
/*
 * Template Name: Failed Payment
 */
get_header(); ?>

<main class="psibufet psibufet--failedpayment">
    <header class="typHeader">
        <div class="typHeader__logo">
            <img src="<?php echo get_template_directory_uri() . '/images/thank-you/psibufet_logo.svg'; ?>"/>
        </div>
    </header>
    <section class="failedHeading">
        <div class="failedHeading__wrap container">
            <div class="content">
                <h1 class="getMarker">Już prawie, <span class="marker">prawie</span>...</h1>
            </div>
        </div>
    </section>
    <section class="failedContent">
        <div class="failedContent__wrap">
            <h2>Zarejestrowaliśmy Twoje zamówienie, <br/>ale płatność Twoją kartą nie powiodła się.</h2>
            <div class="image">
                <img src="<?php echo get_template_directory_uri() . '/images/vectors/card_fail.svg'; ?>" />
            </div>
            <div class="line">
                <h3>Nic straconego!</h3>
                <p>Zapisaliśmy Twój profil i zachowaliśmy w nim Twoje zamówienie, dzięki czemu łatwo dokończysz je później – wystarczy, że zalogujesz się na Twoje konto i sfinalizujesz płatność.</p>
            </div>
            <div class="line">
                <h3>Co możesz zrobić</h3>
                <p class="beforeul">Sprawdź, czy Twoja karta płatnicza:<br/>
                    <ul>
                        <li>nie została zablokowana</li>
                        <li>ma aktualny okres ważności</li>
                        <li>ma włączone transakcje internetowe</li>
                        <li>ma określony limit transakcji dziennych</li>
                        <li>dysponuje odpowiednią ilością środków</li>
                    </ul>
                </p>
                <p>Aby spróbować ponownie, kliknij w link poniżej, który przeniesie Cię na Twoje konto. W zakładce 'Dane i płatności' wprowadź ponownie dane swojej karty płatniczej. Następnie wystąpi przekierowanie na stronę Twojego banku w celu autoryzacji.</p>
                <p>(Uwaga! Autoryzacja może być na kwotę 0 PLN). Najczęstszymi metodami autoryzacji są: kod sms, potwierdzenie w aplikacji mobilnej lub pin karty.</p>
            </div>
            <div class="failedContent__cta">
                <a href="https://panel.psibufet.pl/platnosci" class="btn"><span>Spróbuj ponownie</span></a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

