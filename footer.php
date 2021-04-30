<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
	</div><!-- #content -->

    <a class="go-top"><i class="sydney-svg-icon"><?php sydney_get_svg_icon( 'icon-chevron-up', true ); ?></i></a>
	<footer id="siteFooter" class="siteFooter">
        <div class="siteFooter__wrap">
            <div class="siteFooter__logo">
                <img src="<?php echo get_template_directory_uri() . '/images/psibufet_dog.svg' ?>"/>
            </div>
            <div class="siteFooter__menu">
                <div class="linksWrap">
                    <ul class="links">
                        <li><a href="/jak-to-dziala" class="dir">Jak to działa?</a></li>
                        <li><a href="/nasze-przepisy" class="dir">Nasze przepisy</a></li>
                        <li><a href="/o-nas" class="dir">O PsiBufet</a></li>
                        <li><a href="https://panel.psibufet.pl" class="dir">Zaloguj się</a></li>
                        <li><a href="https://zamowienie.psibufet.pl" class="dir order">Zamów</a></li>
                    </ul>
                    <ul class="links">
                        <li><a href="https://psibufet.pl/blog/" class="dir">Blog</a></li>
                        <li><a href="https://help.psibufet.pl" class="dir">FAQ</a></li>
                        <li><a href="/pracuj-w-psibufet" class="dir">Praca</a>
                            <?php if( get_field('offer_list', 1183) ): ?>
                                <div class="flag">Zatrudniamy</div>
                            <?php endif; ?>
                        </li>
                        <li><a href="/kontakt" class="dir">Kontakt</a></li>
                    </ul>
                </div>
                <div class="info">
                    <a href="tel:+48221046259">+48 22 104 62 59</a>
                    <a href="mailto:kontakt@psibufet.pl">kontakt@psibufet.pl</a>
                    <p class="hours">
                        Godziny otwarcia:<br/>
                        pon.-pt. (9:00-18:00)
                    </p>
                    <div class="social">
                        <a class="social__ig" href="https://www.instagram.com/psibufet/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/footer/ig_ico.svg'; ?>"/></a>
                        <a class="social__fb" href="https://www.facebook.com/psibufet" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/footer/fb_ico.svg'; ?>"/></a>
                    </div>
                </div>
                <div class="payment">
                    <p>Metody płatności:</p>
                    <div class="payment__list">
                        <div><img src="<?php echo get_template_directory_uri() . '/images/footer/blik.svg'; ?>"/></div>
                        <div><img src="<?php echo get_template_directory_uri() . '/images/footer/przelewy24.svg'; ?>"/></div>
                        <div><img src="<?php echo get_template_directory_uri() . '/images/footer/mastercard.svg'; ?>"/></div>
                        <div><img src="<?php echo get_template_directory_uri() . '/images/footer/visa.svg'; ?>"/></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="siteInfo">
            <div class="siteInfo__wrap">
                <div class="siteInfo__left">
                    <p class="company">Feedwell sp. z o.o. NIP: 1133005563<br />
                        ul. Międzyborska 10B/124 , 04-041 Warszawa</p>
                </div>
                <div class="siteInfo__right">
                    <a target="_blank" href="https://wizytowka.rzetelnafirma.pl/FKSA1C9O" rel="nofollow" class="rzetelna"><img src="<?php echo get_template_directory_uri() . '/images/icons/rzetelnafirma_ico.svg'; ?>"/></a>
                    <a class="ue"><img src="<?php echo get_template_directory_uri() . '/images/icons/ue_ico.svg'; ?>" /></a>
                    <a href="https://psibufet.pl/regulamin.pdf" target="_blank" class="dir">Regulamin</a>
                    <a href="https://psibufet.pl/polityka-prywatnosci.pdf" target="_blank" class="dir">Polityka prywatności</a>
                </div>
            </div>
        </div>
    </footer>

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">!function(e,t,n){function a(){var e=t.getElementsByTagName("script")[0],n=t.createElement("script");n.type="text/javascript",n.async=!0,n.src="https://beacon-v2.helpscout.net",e.parentNode.insertBefore(n,e)}if(e.Beacon=n=function(t,n,a){e.Beacon.readyQueue.push({method:t,options:n,data:a})},n.readyQueue=[],"complete"===t.readyState)return a();e.attachEvent?e.attachEvent("onload",a):e.addEventListener("load",a,!1)}(window,document,window.Beacon||function(){});</script>
<script type="text/javascript">window.Beacon('init', 'e88fd2b9-3414-4768-aeaf-282de83ec162')</script>
</body>
</html>
