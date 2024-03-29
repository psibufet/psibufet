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
	<footer id="siteFooter" class="siteFooter">
        <div class="siteFooter__wrap">
            <div class="siteFooter__logo">
                <img src="<?php echo get_template_directory_uri() . '/images/lpsale/psibufet_logo_lp.svg'; ?>"/>
            </div>
            <div class="siteFooter__menu">
                <div class="linksWrap">
                    <ul class="links">
                        <li><a href="/jak-to-dziala" class="dir">Jak to działa?</a></li>
                        <li><a href="/nasze-przepisy" class="dir">Nasze przepisy</a></li>
                        <li><a href="/o-nas" class="dir">O Nas</a></li>
                        <li><a href="https://panel.psibufet.pl" class="dir">Zaloguj się</a></li>
                        <li><a href="https://zamowienie.psibufet.pl" class="dir order">Zamów</a></li>
                        <li><a href="/program-partnerski" class="dir">Zostań partnerem</a></li>
                    </ul>
                    <ul class="links">
                        <li><a href="/restauracje" class="dir">Psyjazne restauracje</a></li>
                        <li><a href="/pomoc" class="dir">Pomoc</a></li>
                        <li><a href="https://psibufet.pl/blog/" class="dir">Blog</a></li>
                        <li><a href="/rasy-psow" class="dir">Rasy psów</a></li>
                        <li><a href="/pracuj-w-psibufet" class="dir">Praca</a>
                            <?php if( get_field('offer_list', 1183) ): ?>
                                <div class="flag">Zatrudniamy</div>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
                <div class="info">
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri() . '/images/lpsale/psibufet_logo_lp.svg'; ?>"/>
                    </div>
                    <a href="mailto:kontakt@psibufet.pl">kontakt@psibufet.pl</a>
                    <p class="hours">
                        Godziny otwarcia:<br/>
                        pon.-pt. (10:00-17:00)
                    </p>
                    <div class="social">
                        <a class="social__ig" href="https://www.instagram.com/psibufet/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/footer/ig_ico.svg'; ?>"/></a>
                        <a class="social__fb" href="https://www.facebook.com/psibufet" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/footer/fb_ico.svg'; ?>"/></a>
                    </div>
                </div>
                <div class="payment">
                    <p>Metody płatności:</p>
                    <div class="payment__list">
                        <div><img src="<?php echo get_template_directory_uri() . '/images/footer/mastercard.svg'; ?>"/></div>
                        <div><img src="<?php echo get_template_directory_uri() . '/images/footer/visa.svg'; ?>"/></div>
                        <div><img src="<?php echo get_template_directory_uri() . '/images/footer/googlepay.svg'; ?>"/></div>
			            <div><img src="<?php echo get_template_directory_uri() . '/images/footer/applepay.svg'; ?>"/></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="siteInfo">
            <div class="siteInfo__wrap">
                <div class="siteInfo__left">
                    <p class="company">Feedwell sp. z o.o. NIP: 1133005563<br />
                    ul. Sienna 64, 00-825 Warszawa</p>
                </div>
                <div class="siteInfo__right">
                    <a target="_blank" href="https://wizytowka.rzetelnafirma.pl/FKSA1C9O" rel="nofollow" class="rzetelna"><img src="<?php echo get_template_directory_uri() . '/images/icons/rzetelnafirma_ico.svg'; ?>"/></a>
                    <a class="ue"><img src="<?php echo get_template_directory_uri() . '/images/icons/ue_ico.svg'; ?>" /></a>
                    <a href="https://psibufet.pl/regulamin" target="_blank" class="dir">Regulamin</a>
                    <a href="https://psibufet.pl/polityka-prywatnosci" target="_blank" class="dir">Polityka prywatności</a>
                </div>
            </div>
        </div>
    </footer>

	<?php do_action('sydney_after_footer'); ?>

    <!-- user.com popups -->
    <?php include get_template_directory() . '/template-parts/popups/newsletter.php'; ?>
    <?php include get_template_directory() . '/template-parts/popups/newsletter_confirm.php'; ?>
    <?php include get_template_directory() . '/template-parts/popups/discount.php'; ?>

</div><!-- #page -->

<script type="text/javascript">
//     let event = new CustomEvent('run-homepage-test');
//     document.dispatchEvent(event);
</script>

<?php wp_footer(); ?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAihhg2fnZvuAF6biw73IE-A2WX0nosQk"></script>
<script type="text/javascript">
        jQuery(document).on( 'nfFormReady', function( e, layoutView ) {
            $('.nf-field-container.text-center .ninja-forms-field').focus(function(){
                var parent = $(this).parent().parent().parent().parent();
                parent.removeClass('ready');
                
                if( !$(this).val() ) {
                    $(this).find('.field-wrap').removeClass('active');
                }
                $(this).parent().parent().addClass('active'); 
            });
        });
        jQuery(document).on( 'nfFormReady', function( e, layoutView ) {
            $('.nf-field-container.text-center .ninja-forms-field').focusout(function(){
                var parent = $(this).parent().parent().parent().parent();
                
                if( $(this).val() ) {
                    $(this).find('.field-wrap').removeClass('active');
                }
                if( !$(this).val() ) {
                    $(this).removeClass('active');
                    parent.addClass('ready');
                }
            });
        });

        var topic;
        var message;
        var name;
        jQuery(document).on( 'nfFormReady', function( e, layoutView ) {
            $("#nf-field-4").prop("type", "submit");

            $('#nf-field-5').on('keyup paste', function(){
                subject = $(this).val();
            });
            $('#nf-field-6').on('keyup paste', function(){
                message = $(this).val();
            });
            $('#nf-field-8').on('keyup paste', function(){
                name = $(this).val();
            });
        });
        
        jQuery(document).on('nfFormSubmitResponse', function(){
            dataLayer.push({
                'event': 'contact',
                'contact':{
                    'topic': subject,
                    'content': message,
                    'name': name,
                }
            });
        });
    </script>
</body>
</html>
