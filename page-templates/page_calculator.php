<?php
/*
 *  Template Name: Kalkulator
 */
get_header(); ?>

<main class="psibufet psibufet--calculator">
    <section class="calcHeader">
        <div class="calcHeader__wrap">
            <h1>Kalkulator żywienia psa</h1>
            <p>Dowiedz się ile karmy powinien jeść Twój pies na co dzień</p>
        </div>
    </section>
    <section class="calcInfo">
        <div class="calcInfo__wrap container">
            <h2 class="getMarker">Do czego <span class="marker">służy</span> kalkulator karmy dla psa?</h2>
            <p>Dzięki naszemu kalkulatorowi w prosty sposób <b>wyliczysz zapotrzebowania kaloryczne swojego psa</b>.<br/>Umożliwi to <b>dobranie odpowiedniej porcji karmy</b>, czego efektem będzie, w zależności od potrzeb:</p>
            <div class="calcInfo__boxes">
                <div class="box">
                    <div class="box__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcInfo_01.svg'; ?>"/>
                    </div>
                    <h3>Bezpieczna<br/>redukcja nadwagi</h3>
                </div>
                <div class="box">
                    <div class="box__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcInfo_02.svg'; ?>"/>
                    </div>
                    <h3>Utrzymanie<br/>wagi</h3>
                </div>
                <div class="box">
                    <div class="box__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcInfo_03.svg'; ?>"/>
                    </div>
                    <h3>Nabranie<br/>masy</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="calcHow">
        <div class="calcHow__wrap container">
            <h2 class="getMarker">Jak <span class="marker">obliczamy</span> zapotrzebowanie kaloryczne psa?</h2>
            <h3>Najważniejsze czynniki brane pod uwagę:</h3>
            <div class="calcHow__list">
                <div class="pos">
                    <div class="pos__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcHow_01.svg'; ?>"/>
                    </div>
                    <h4>Wiek psa</h4>
                </div>
                <div class="pos">
                    <div class="pos__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcHow_02.svg'; ?>"/>
                    </div>
                    <h4>Masa ciała</h4>
                </div>
                <div class="pos">
                    <div class="pos__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcHow_03.svg'; ?>"/>
                    </div>
                    <h4>Sylwetka</h4>
                </div>
                <div class="pos">
                    <div class="pos__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcHow_04.svg'; ?>"/>
                    </div>
                    <h4>Aktywność fizyczna</h4>
                </div>
                <div class="pos">
                    <div class="pos__thumb">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcHow_05.svg'; ?>"/>
                    </div>
                    <h4>Smakołyki</h4>
                </div>
            </div>
            <a href="https://zamowienie.psibufet.pl/" class="btn btn--center"><span>Przejdź do kalkulatora</span></a>
        </div>
    </section>
    <section class="calcMiska">
        <div class="calcMiska__wrap container">
            <h2 class="getMarker"><span class="marker">Dzienna</span> porcja kalorii z PsiBufet</h2>
            <p>Cieszymy się, że chcesz <b>właściwie żywić swojego psa</b>.</p>
            <p><b>My też!</b></p>
            <p>Dlatego korzystamy tylko ze świeżych, naturalnych składników by stworzyć dla Twojego psiaka idealnie dopasowaną porcję karmy.</p>

            <div class="calcMiska__miskaWrap animateMiska">
                <div class="calcMiska__miska">
                    <div class="ba_img before"></div>
                    <div class="ba_img after"></div>
                </div>
                <div class="calcMiska__usp">
                    <img class="usp" src="<?php echo get_template_directory_uri() . '/images/lpsale/salemiska_usp.svg'; ?>"/>
                    <img class="arrows" src="<?php echo get_template_directory_uri() . '/images/lpsale/salemiska_arrows.svg'; ?>"/>
                </div>
                <div class="calcMiska__uspMobile">
                    <div class="box">
                        <div class="box__thumb">
                            <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/jagnie_z_gor.svg'; ?>"/>
                        </div>
                        <p>Jakość<br/>Human-Grade</p>
                    </div>
                    <div class="box">
                        <div class="box__thumb">
                            <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/ikonki_zbilansowane.svg'; ?>"/>
                        </div>
                        <p>Zbilansowany,<br/>pełnoporcjowy skład</p>
                    </div>
                    <div class="box">
                        <div class="box__thumb">
                            <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/kurczak_classic.svg'; ?>"/>
                        </div>
                        <p>Zero ulepszaczy</p>
                    </div>
                    <div class="box">
                        <div class="box__thumb">
                            <img src="<?php echo get_template_directory_uri() . '/images/info_boxes/wpolsce.svg'; ?>"/>
                        </div>
                        <p>Bezzbożowe,<br/>monobiałkowe</p>
                    </div>
                </div>
            </div>
            <a href="<?php echo home_url(); ?>" class="btn btn--center"><span>Dowiedz się więcej</span></a>
        </div>
    </section>
    <section class="calcContent">
        <div class="calcContent__wrap container">
            <div class="calcContent__heading">
                <h2>Jak poprawnie wprowadzić dane do kalkulatora żywienia psa?</h2>
                <p>Dzienna porcja jedzenia dla psa zależeć będzie od wielu indywidualnych cech twojego pupila. Ile jedzenia potrzebuje pies?<br/>Sprawdź, na jakiej podstawie oblicza się ilość karmy dla psa i jak wprowadzić dane do kalkulatora kalorii.</p>
            </div>
            <div class="calcContent__section">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcHow_01.svg'; ?>"/>
                </div>
                <div class="content">
                    <h3>Wiek psa</h3>
                    <p>Potrzeby żywieniowe dorosłych psów i szczeniąt znacząco się od siebie różnią. Organizm rosnącego szczeniaka potrzebuje wysokiej koncentracji białka, tłuszczui witamin w karmie, przez co jego dobowe zapotrzebowanie na energię i składniki odżywcze będzie znacznie wyższe, niż u psa dorosłego. Wprowadzenie do kalkulatora dokładnego wieku szczeniaka umożliwi precyzyjne dobranie ilości karmy. W przypadku dorosłych psów powyżej drugiego roku życia wystarczy podać orientacyjny wiek w pełnych latach.</p>
                </div>
            </div>
            <div class="calcContent__section">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcHow_02.svg'; ?>"/>
                </div>
                <div class="content">
                    <h3>Masa ciała</h3>
                    <p>Masa ciała czworonoga niezbędna jest do obliczenia racji pokarmu dla psa. By sprawdzić, ile dokładnie waży nasz pupil, możemy wprowadzić go na wagę dostępną w każdym gabinecie weterynaryjnym. Podczas ważenia powinniśmy upewnić się, że wszystkie łapy psa znajdują się na wadze, a zwierzak przynajmniej przez chwilę powinien stać spokojnie.</p>
                </div>
            </div>
            <div class="calcContent__section">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcHow_03.svg'; ?>"/>
                </div>
                <div class="content">
                    <h3>Ocena sylwetki psa</h3>
                    <p>Odpowiednio dostosowane porcje jedzenia pozwolą psu utrzymać prawidłową masę ciała, a w razie potrzeby także zrzucić zbędne kilogramy lub przybrać na wadze. By tak się stało, konieczne jest obliczenie rzeczywistego zapotrzebowania kalorycznego psa, które wynika nie tylko z jego obecnej masy ciała, ale także kondycji fizycznej. Po czym poznać, ze pies ma nadwagę, jest zbyt chudy lub jegomasa ciała jest prawidłowa? Sprawdź to w tabeli.</p>
                </div>
            </div>
            <div class="calcContent__figure">
                <div class="dogFigure">
                    <div class="dogFigure__icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/dogFigure_01.svg'; ?>"/>
                    </div>
                    <div class="dogFigure__desc">
                        <h3>Niedowaga</h3>
                        <p>Widoczne żebra oraz kości miednicy, zaznaczone wcięcie za żebrami (podkasanie brzucha), wyczuwalna niewielka warstwa tkanki tłuszczowej, możliwe zaniki mięśniowe.</p>
                    </div>
                </div>
                <div class="dogFigure">
                    <div class="dogFigure__icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/dogFigure_02.svg'; ?>"/>
                    </div>
                    <div class="dogFigure__desc">
                        <h3>Prawidłowa waga psa</h3>
                        <p>Niewidoczne, ale dobrze wyczuwalne żebra i kręgosłup, widoczne wcięcie za żebrami (linia brzucha dobrze zarysowana), wyczuwalna niewielka warstwa tkanki tłuszczowej.</p>
                    </div>
                </div>
                <div class="dogFigure">
                    <div class="dogFigure__icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/dogFigure_03.svg'; ?>"/>
                    </div>
                    <div class="dogFigure__desc">
                        <h3>Nadwaga</h3>
                        <p>Trudno wyczuwalne żebra i kręgosłup, brak talii, gruba warstwa tkanki tłuszczowej (także w okolicy kręgosłupa i nasady ogona).</p>
                    </div>
                </div>
                <div class="dogFigure">
                    <div class="dogFigure__icon">
                        <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/dogFigure_04.svg'; ?>"/>
                    </div>
                    <div class="dogFigure__desc">
                        <h3>Otyłość</h3>
                        <p>Otłuszczenie klatki piersiowej, okolicy kręgosłupa i nasadyogona, widoczny i obwisły brzuch, brak talii.</p>
                    </div>
                </div>
            </div>
            <div class="calcContent__section">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcHow_04.svg'; ?>"/>
                </div>
                <div class="content">
                    <h3>Aktywność fizyczna</h3>
                    <p>Aktywność fizyczna znacząco wpływa na zapotrzebowanie kaloryczne psa. Dlatego to, ile powinien jeść pies, będzie uzależnione od jego trybu życia i długości spacerów. Zwierzaki wychodzące wyłącznie na krótkie spacery trwające w sumie mniej, niż godzinę dziennie, będą potrzebowały znacznie mniejszych porcji jedzenia, niż czworonogi spędzające na świeżym powietrzu więcej czasu. Wprzypadku psów chodzących na bardzo długie spacery (powyżej 3 godzin dziennie) lub trenujących psie sporty, dzienna ilość karmy powinna być naprawdę duża.</p>
                </div>
            </div>
            <div class="calcContent__section">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/kalkulator/calcHow_05.svg'; ?>"/>
                </div>
                <div class="content">
                    <h3>Ilość podawanych smakołyków</h3>
                    <p>Dodatkowe smakołyki także zawierają kalorie. Dlatego przy wprowadzaniu danych do kalkulatora żywienia należy zastanowić się, czy nasz pupil oprócz dziennej porcji jedzenia dostaje także gryzaki i przysmaki treningowe. Kalkulator kalorii zmodyfikuje odpowiednio ilość karmy potrzebnej zwierzakowi, co pozwoli uniknąć niebezpiecznej nadwagi.</p>
                </div>
            </div>
            <div class="calcContent__info">
                <h3>Najważniejsze zasady żywienia psów</h3>
                <div class="content">
                    <h4>Czy pies może mieć stały dostęp do miski z jedzeniem?</h4>
                    <p>Żywienie psa do woli, czyli zapewnienie czworonogowi stałego dostępu do miski, nie jest odpowiednim sposobem karmienia. Zalegające w misce jedzenie szybko się psuje, traci smak i wartości odżywcze. Stały dostęp do miski wypełnionej karmą nie pozwala opiekunowi odpowiednio dawkować psich posiłków i sprzyja przejadaniu, które może prowadzić do nadwagi i otyłości u psa.</p>
                </div>
                <div class="content">
                    <h4>Ile razy dziennie karmić psa?</h4>
                    <p>Ilość posiłków dla psa powinna być dostosowana do wieku i wielkości zwierzaka. Szczenięta i małe psy powinny otrzymywać przynajmniej 3 posiłki dziennie, gdyż ich niewielkie żołądki nie zmieszczą na raz zbyt dużej porcji jedzenia. Natomiast dorosłe, duże psy najlepiej jest karmić dwa razy dziennie - dzięki temu psiak nie będzie chodził głodny. Żywienie psa dwa razy dziennie może także zmniejszyć ryzyko śmiertelnego dla czworonoga skrętu żołądka.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>