<?php
    /**
     * Template name: LP - Elastyczne plany 
     */
get_header(); ?>

<main class="psibufet psibufet--elastic">
    <section class="elasticHeader">
        <div class="elasticHeader__wrap">
            <h1 class="getMarker">Zamawiaj PsiBufet <span class="marker">taniej</span></h1>
            <p>Sprawdź, jak może wyglądać Elastyczny Plan dla Ciebie</p>
        </div>
        <a href="#" class="elasticHeader__scroll"></a>
    </section>
    
    <section class="elasticSelector">
        <div class="elasticSelector__wrap container">
            <div class="elasticSelector__heading">
                <h2 class="getMarker">Wybierz <span class="marker">elastyczny</span> plan</h2>
                <p>Wystarczy, że zmniejszysz częstotliwość dostaw lub wybierzesz dwa razy większe porcje (1 saszetka na 2 dni). Poznaj szczegóły Elastycznego Planu, wybierz najlepszą dla siebie opcję i oszczędzaj - już od najbliższej dostawy.</p>
            </div>
            <div class="elasticSelector__select">
                <h3>Dzienna porcja PsiBufet dla Twojego pieska:</h3>
                <div class="dropdownEngine">
                    <div class="dropdownEngine__selected"><p>Oferowana porcja dzienna</p></div>
                    <div class="dropdownEngine__dropdown">
                        <div class="dropdownEngine__option"><div class="wrap"><p>125 G</p></div></div>
                        <div class="dropdownEngine__option"><div class="wrap"><p>200 G</p></div></div>
                        <div class="dropdownEngine__option"><div class="wrap"><p>300 G</p></div></div>
                        <div class="dropdownEngine__option"><div class="wrap"><p>400 G</p></div></div>
                        <div class="dropdownEngine__option"><div class="wrap"><p>500 G</p></div></div>
                        <div class="dropdownEngine__option"><div class="wrap"><p>600 G</p></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>