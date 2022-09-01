<style>
@font-face {
  font-family: "Bebas Neue";
  font-display: swap;
  src: url("https://psibufet.pl/wp-content/themes/psibufet/fonts/BebasNeue/BebasNeue-Regular.ttf") format("truetype");
}
@font-face {
  font-family: "Roboto";
  font-display: swap;
  font-weight: 400;
  src: url("https://psibufet.pl/wp-content/themes/psibufet/fonts/Roboto/Roboto-Regular.ttf") format("truetype");
}
@font-face {
  font-family: "Roboto";
  font-display: swap;
  font-weight: 500;
  src: url("https://psibufet.pl/wp-content/themes/psibufet/fonts/Roboto/Roboto-Medium.ttf") format("truetype");
}
@font-face {
  font-family: "Roboto";
  font-display: swap;
  font-weight: 700;
  src: url("https://psibufet.pl/wp-content/themes/psibufet/fonts/Roboto/Roboto-Bold.ttf") format("truetype");
}
.psibufetPopup {
  position: fixed;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background-color: rgba(0, 0, 0, 0.2);
  z-index: 999;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  pointer-events: none;
  transition: ease 0.3s;
}
.psibufetPopup--ready {
  opacity: 1;
  pointer-events: all;
}
.psibufetPopup--active .wrap {
  opacity: 1 !important;
  pointer-events: all !important;
}
.psibufetPopup .wrap {
  box-shadow: 4px 4px 0px rgba(0, 0, 0, 0.1);
  position: relative;
  opacity: 0;
  pointer-events: none;
  transition: ease 0.3s;
}
.psibufetPopup .closebtn {
  position: absolute;
  right: 20px;
  top: 20px;
  width: 20px;
  height: 20px;
  cursor: pointer;
  transition: ease 0.3s;
}
.psibufetPopup .closebtn:hover {
  opacity: 0.7;
}
.psibufetPopup .closebtn:after {
  content: "";
  background-image: url("/wp-content/themes/psibufet/images/popup/close_white.svg");
  background-repeat: no-repeat;
  background-size: 20px;
  width: 20px;
  height: 20px;
  position: relative;
  display: block;
  filter: invert(1);
  opacity: 0.5;
}

@media (max-width: 767px) {
  .psibufetPopup .closebtn {
    right: 12px;
    top: 12px;
    width: 17px;
    height: 17px;
  }
  .psibufetPopup .closebtn:after {
    background-size: 17px;
    width: 17px;
    height: 17px;
  }
}
.newsletterConfirm__wrap {
  background-color: #fff;
  max-width: 630px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  box-shadow: 4px 4px 0px rgba(0, 0, 0, 0.1);
  padding: 100px 40px 74px;
}
.newsletterConfirm__content h2 {
  font-size: 48px;
  font-family: "Bebas Neue", sans-serif;
  font-weight: 400;
  color: #000;
  line-height: 60px;
  text-align: center;
  margin: 0 0 30px;
}
.newsletterConfirm__content h2 .marker {
  position: relative;
  z-index: 3;
}
.newsletterConfirm__content h2 .marker:after {
  content: "";
  width: 105%;
  height: 9px;
  background-color: #f15748;
  position: absolute;
  left: -2.5%;
  bottom: 10px;
  z-index: -1;
}
.newsletterConfirm__content p {
  font-size: 18px;
  line-height: 24px;
  font-family: 'Roboto', sans-serif;
  text-align: center;
  margin: 0 0 20px;
}
.newsletterConfirm__content img {
  display: block;
  max-width: 300px;
  margin: 0 auto;
}

@media (max-width: 767px) {
  .newsletterConfirm__wrap {
    max-width: 360px;
    padding: 25px 15px 10px;
  }
  .newsletterConfirm__content h2 {
    font-size: 36px;
    line-height: 43px;
    margin: 0 0 32px;
  }
  .newsletterConfirm__content p {
    font-size: 14px;
    line-height: 18px;
  }
  .newsletterConfirm__content img {
    max-width: 250px;
  }
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">

    // Close btn
    $('.psibufetPopup .closebtn').on('click', function(){
        $('.psibufetPopup').removeClass('psibufetPopup--active');
        setTimeout(function(){
            $('.psibufetPopup').removeClass('psibufetPopup--ready');
        }, 300);
    });

    // Click over popup close
    $(document).mouseup(function(e){
        var container = $('.psibufetPopup .wrap');
        if (!container.is(e.target) && container.has(e.target).length === 0){
            $('.psibufetPopup').removeClass('psibufetPopup--active');
            setTimeout(function(){
                $('.psibufetPopup').removeClass('psibufetPopup--ready');
            }, 300);
        }
    });
</script>
<div class="newsletterConfirm psibufetPopup" data-name="confirm">
    <div class="newsletterConfirm__wrap wrap">
        <div class="closebtn"></div>
        <div class="newsletterConfirm__content">
            <h2><span class="marker">Potwierdź</span> adres e-mail</h2>
            <p>Wejdź na swoją skrzynkę mailową i potwierdź zapis do Newslettera, aby otrzymać kod zniżkowy na dwie pierwsze dostawy.</p>
            <p>Jeśli nie widzisz wiadomości, sprawdź inne zakładki.</p>
            <img src="https://psibufet.pl/wp-content/themes/psibufet/images/popup/newsletter_confirm.gif"/>
        </div>
    </div>
</div>