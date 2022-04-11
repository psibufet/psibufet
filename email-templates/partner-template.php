<!DOCTYPE html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
        <style>
            @font-face {
                font-family: "Roboto";
                font-weight: 400;
                src: url('https://psibufet.pl/wp-content/themes/psibufet/fonts/Roboto/Roboto-Regular.ttf') format("truetype");
            }
            @font-face {
                font-family: "Roboto";
                font-weight: 500;
                src: url('https://psibufet.pl/wp-content/themes/psibufet/fonts/Roboto/Roboto-Medium.ttf') format("truetype");
            }
            @font-face {
                font-family: "Roboto";
                font-weight: 700;
                src: url('https://psibufet.pl/wp-content/themes/psibufet/fonts/Roboto/Roboto-Bold.ttf') format("truetype");
            }
            .emailWrap{
                background-color: #E8E8E8;
                padding: 20px 0;
            }
            .email{
                background-color: #fff;
                border: 1px solid rgba(0, 0, 0, 0.2);
                box-sizing: border-box;
                box-shadow: 4px 4px 0px rgba(0, 0, 0, 0.1);
                max-width: 600px;
                width: 100%;
                margin: 0 auto;
                padding: 30px 26px;
            }
            .email > img{
                display: block;
                margin: 0 auto 20px;
            }
            .email .logo{
                display: block;
                max-width: 180px;
                width: 100%;
                height: 30px;
                background-image: url('http://psibufet.local/wp-content/themes/psibufet/images/email/psibufet_logo.svg');
                background-repeat: no-repeat;
                background-size: contain;
                margin: 0 auto 20px;
            }
            .email p{
                font-size: 14px;
                line-height: 18px;
                color: #000;
                font-family: 'Roboto';
                margin: 0 0 20px;
            }
            .email p span{
                font-size: 12px;
            }
            .email p.beforeul{
                margin: 0 0 5px;
            }
            .email p.center{
                text-align: center;
            }
            .email ul{
                margin: 0 0 20px;
                padding: 0 0 0 25px;
            }
            .email ul.decimal{
                list-style: decimal;
            }
            .email ul li{
                font-size: 14px;
                line-height: 18px;
                color: #000;
                font-family: 'Roboto';
                margin: 0 0 3px;
            }
            .email ul li:last-of-type{
                margin: 0;
            }
            .btn{
                display: flex;
                max-width: fit-content;
                max-width: -moz-max-content;
                max-width: -webkit-fit-content;
                min-width: 225px;
                margin: 0 auto 20px;
                align-items: center;
                justify-content: center;
                background-color: #f15748;
                height: 52px;
                box-shadow: 4px 4px 0px rgba(0, 0, 0, 0.1);
                text-decoration: none;
                transition: ease .3s;
            }
            .btn:hover{
                opacity: .7;
            }
            .btn span{
                width: 100%;
                font-size: 20px;
                font-weight: 500;
                line-height: 52px;
                font-family: 'Roboto';
                text-decoration: none;
                color: #fff;
                text-align: center;
                padding: 0 20px;
            }
            .email .image{
                text-align: center;
            }
            .email .image img{
                max-width: 150px;
                margin: 0 auto 15px;
            }
            .email .image p{
                font-size: 16px;
                line-height: 19px;
                font-family: 'Roboto', sans-serif;
                color: #000;
                text-align: center;
                margin: 0;
            }
            .email .image p.contact{
                margin: 8px auto 0;
                text-align: center;
            }
            .email .image p.contact span{
                margin: 0 15px;
            }
            .email .image p.contact a{
                font-size: 14px;
                line-height: 17px;
                color: #000;
                cursor: pointer;
                text-decoration: none;
            }
            .email .image p.big{
                font-size: 20px;
                line-height: 24px;
                font-weight: 500;
                color: #000;
                text-align: center;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <div class="emailWrap">
            <div class="email">
                <img src="https://psibufet.pl/wp-content/themes/psibufet/images/email/psibufet_logo.png"/>
                <p>Cześć!<br/>Dziękuję za kontakt i zainteresowanie naszym Programem Partnerskim, dzięki któremu otrzymasz:</p>
                <ul>
                    <li>Twój indywidualny kod zniżkowy <b>-30%</b> na dietę PsiBufet do rozpowszechniania</li>
                    <li>wynagrodzenie <b>100 zł</b> za każde pierwsze oraz <b>50 zł</b> za każde drugie zamówienie złożone przez tego samego użytkownika z użyciem Twojego kodu zniżkowego</li>
                    <li>wsparcie w postaci materiałów edukacyjnych i reklamowych o PsiBufet</li>
                    <li>materiały edukacyjne i reklamowe o PsiBufet,</li>
                    <li>rozliczenie na podstawie podpisanej umowy partnerskiej</li>
                </ul>
                <p>Chcesz do nas dołączyć? Świetnie! Zrobimy to tak:</p>
                <ul class="decimal">
                    <li>Na podstawie Twoich danych sporządzę umowę partnerską i prześlę Ci ją do podpisu poprzez <b>platformę Autenti</b></li>
                    <li>Przekażę Ci wskazówki do promowania diety PsiBufet za pomocą Twojego kodu zniżkowego</li>
                    <li>Kiedy Twój kod zacznie być używany otrzymasz od nas wynagrodzenie oraz dostęp do specjalnych materiałów i wydarzeń</li>
                    <li>Jako Partner PsiBufet zmienisz z nami oblicze żywienia psów w Polsce!</li>
                </ul>
                <p class="center">To co, zaczynamy? <span>😊</span></p>
                <p class="center">Pod poniższym linkiem znajdziesz umowę do wglądu.</p>
                <a href="https://psibufet.pl/umowa_partnerska_psibufet.pdf" class="btn"><span>Umowa partnerska</span></a>
                <p class="center">Czekam na Twoją decyzję, a w razie pytań pozostaję do dyspozycji.<br/>Z psiozdrowieniami,</p>
                <div class="image">
                    <img src="https://psibufet.pl/wp-content/themes/psibufet/images/email/tomasz_kornacki.png"/>
                    <p>Tomek Kornacki</p>
                    <p class="big">Specjalista ds. Programu Partnerskiego</p>
                    <p class="contact"><a href="mailto:tomek@psibufet.pl">tomek@psibufet.pl</a><span>|</span><a href="tel:+48534704083">+48 534 704 083</a></p>
                </div>
            </div>
        </div>
    </body>
</html>