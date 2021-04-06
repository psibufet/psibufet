<?php

/*

Template Name: Thank you page

*/
	get_header();
?>
<!--<script> fbq('track', 'Purchase'); </script>-->

<div id="typ">
    <div class="typ_header">
        <a href="/">
            <img src="https://psibufet.pl/wp-content/uploads/2020/03/psibufet_logo.svg"/>
        </a>
    </div>
    <div class="typ_front">
        <div class="heading">
            <h2>Dziękujemy!</h2>
            <div class="text">
                <p>Za złożenie zamówienia</p>
            </div>
        </div>
        <div class="content">
            <p class="lead">Od teraz możesz zarządzać swoim planem żywienia z poziomu <a href="https://panel.psibufet.pl/">Panelu klienta</a>.</p>
            <a href="https://panel.psibufet.pl/" class="typ_button"><span>Zaloguj się</span></a>
        </div>
    </div>
    <div class="typ_welcome">
        <h2>Witaj w #psibufetgang</h2>
        <img src="/wp-content/themes/psibufet/images/gang_wszyscy.svg"/>
        <p>Od teraz należysz do naszego klubu!<br/>
        Pokaż, jak Twój pies cieszy się z pierwszej przesyłki. Oznacz nas na FB lub Insta:<br/>
        <b>@PsiBufet</b> lub <b>#PsiBufetGang</b></p>
        <div class="social">
            <a href="https://www.facebook.com/psibufet">
                <img src="/wp-content/themes/psibufet/images/facebook_ico.svg"/>
            </a>
            <a href="https://www.instagram.com/psibufet/">
                <img src="/wp-content/themes/psibufet/images/instagram_ico.svg"/>
            </a>
        </div>
    </div>
    <!--<div class="darmowa_karma">
        <div class="container">
            <div class="karma_heading">
                <h2>Darmowa karma</h2>
                <p>Przekaż -50%, odbierz 50 zł!</p>
            </div>
            <p class="info">Poleć karmę swoim najbliższym, wysyłając link polecający i otrzymaj bon o wartości 50 zł na kolejne zakupy.</p>
            <div class="karma_link">
                <p>Twój unikalny link polecający:</p>
                <div class="input_wrap">
                    <span id="link" class="link">www.psibufet.pl/uuid</span>
                        <button id="copybtn" onclick="copyToClipboard('#link')" class="submit">Kopiuj<img src="/wp-content/themes/psibufet/images/copy.svg" /><p>Skopiowano!</p></button>
                </div>
            </div>
            <div class="link_wrap">
                <a href="/pb_free.php" class="karma_button"><span>Dowiedz się więcej</span></a>
            </div>
        </div>
    </div>-->
</div>

<?php get_footer(); ?>

