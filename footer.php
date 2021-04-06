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

	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="sydney-svg-icon"><?php sydney_get_svg_icon( 'icon-chevron-up', true ); ?></i></a>
		
	<footer id="site_footer_new">
        <div class="container">
            <div class="footer_left">
                <img src="/wp-content/themes/psibufet/images/psibufet_dog.svg" />
            </div>
            <div class="footer_right">
                <ul>
                    <li><a href="/jak-to-dziala" class="dir">Jak to działa?</a></li>
                    <li><a href="/nasze-przepisy" class="dir">Nasze przepisy</a></li>
                    <li><a href="/o-nas" class="dir">O PsiBufet</a></li>
                    <li><a href="https://panel.psibufet.pl" class="dir">Zaloguj się</a></li>
                    <li><a href="https://zamowienie.psibufet.pl" class="dir order">Zamów</a></li>
                </ul>
                <ul>
                    <li><a href="https://psibufet.pl/blog/" class="dir">Blog</a></li>
                    <li><a href="https://help.psibufet.pl" class="dir">FAQ</a></li>
                    <li><a href="/pracuj-w-psibufet" class="dir">Praca
                        <?php if( get_field('offer_list', 1183) ): ?>
                            <div class="flag">Zatrudniamy</div>
                        <?php endif; ?>
                        </a>
                    </li>
                    <li><a href="/kontakt" class="dir">Kontakt</a></li>
                </ul>
                <ul class="links">
                    <li><a>+48 22 104 62 59</a></li>
                    <li><a>kontakt@psibufet.pl</a></li>
                    <li class="social"><a class="instagram-social" href="https://www.instagram.com/psibufet/" target="_blank"><img src="/wp-content/themes/psibufet/images/footer/ig_ico.svg"/></a></li>
                    <li class="social"><a class="facebook-social" href="https://www.facebook.com/psibufet" target="_blank"><img src="/wp-content/themes/psibufet/images/footer/fb_ico.svg"/></a></li>
                </ul>
                <ul class="payment">
                    <li><p>Metody płatności:</p>
                        <ul>
                            <li><img src="/wp-content/themes/psibufet/images/footer/blik.svg"/></li>
                            <li><img src="/wp-content/themes/psibufet/images/footer/przelewy24.svg"/></li>
                            <li><img src="/wp-content/themes/psibufet/images/footer/mastercard.svg"/></li>
                            <li><img src="/wp-content/themes/psibufet/images/footer/visa.svg"/></li>
                            <li><img src="/wp-content/themes/psibufet/images/footer/dhl.svg"/></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="site_info">
            <div class="container">
                <div class="left">
                    <p class="company">Feedwell sp. z o.o. NIP: 1133005563<br />
                        ul. Międzyborska 10B/124 , 04-041 Warszawa</p>
                </div>
                <div class="right">
                    <a target="_blank" href="https://wizytowka.rzetelnafirma.pl/FKSA1C9O" rel="nofollow" class="rzetelna"><img src="/wp-content/themes/psibufet/images/footer/rzetelnafirma.svg"/></a>
                    <a class="ue"><img src="/wp-content/themes/psibufet/images/footer/flaga_ue.svg" /></a>
                    <a href="https://psibufet.pl/regulamin.pdf" target="_blank" class="dir">Regulamin</a>
                    <a href="https://psibufet.pl/polityka-prywatnosci.pdf" target="_blank" class="dir">Polityka prywatności</a>
                </div>
            </div>
        </div>
    </footer><!-- #colophon -->

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">!function(e,t,n){function a(){var e=t.getElementsByTagName("script")[0],n=t.createElement("script");n.type="text/javascript",n.async=!0,n.src="https://beacon-v2.helpscout.net",e.parentNode.insertBefore(n,e)}if(e.Beacon=n=function(t,n,a){e.Beacon.readyQueue.push({method:t,options:n,data:a})},n.readyQueue=[],"complete"===t.readyState)return a();e.attachEvent?e.attachEvent("onload",a):e.addEventListener("load",a,!1)}(window,document,window.Beacon||function(){});</script>
<script type="text/javascript">window.Beacon('init', 'e88fd2b9-3414-4768-aeaf-282de83ec162')</script>
</body>
</html>
