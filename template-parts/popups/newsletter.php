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

.popupNewsletter__wrap {
  width: 100%;
  max-width: 1256px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: #fff;
}
.popupNewsletter__left {
  display: flex;
  width: 50%;
}
.popupNewsletter__left img {
  width: 100%;
  height: 100%;
  object-fit: contain;
}
.popupNewsletter__left img.mobile {
  display: none;
}
.popupNewsletter__right {
  width: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.popupNewsletter__right .content {
  max-width: 440px;
  margin: 0 auto;
}
.popupNewsletter__right .content h2 {
  font-size: 48px;
  font-family: "Bebas Neue", sans-serif;
  font-weight: 400;
  color: #000;
  line-height: 50px;
  text-align: center;
  margin: 0 0 30px;
}
.popupNewsletter__right .content h2 .value {
  font-size: 60px;
}
.popupNewsletter__right .content h2 .marker {
  position: relative;
  z-index: 3;
}
.popupNewsletter__right .content h2 .marker:after {
  content: "";
  width: 105%;
  height: 9px;
  background-color: #f15748;
  position: absolute;
  left: -2.5%;
  bottom: 10px;
  z-index: -1;
}
.popupNewsletter__right .content p {
  font-size: 18px;
  line-height: 24px;
  font-family: 'Roboto', sans-serif;
  color: #000;
  text-align: center;
  margin: 0 0 34px;
}
.popupNewsletter__right .content form {
  max-width: 435px;
  margin: 0 auto;
}
.popupNewsletter__right .content form input {
  width: 100%;
  height: 50px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  box-shadow: 4px 4px 0px rgba(0, 0, 0, 0.1);
  padding: 4px 20px;
  border-radius: 0;
  font-family: "Roboto", sans-serif;
  background-color: #fff;
  text-align: center;
  font-size: 20px;
  color: #000;
  margin: 0 0 40px;
  outline: none;
  transition: ease 0.3s;
}
.popupNewsletter__right .content form input:focus {
  border-color: #000;
}
.popupNewsletter__right .content form input::placeholder {
  color: rgba(0, 0, 0, 0.5);
}
.popupNewsletter__right .content form button {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    border: 0;
    border-radius: 0;
    font-family: 'Roboto', sans-serif;
    outline: none;
  width: 100%;
  min-width: 225px;
    height: 52px;
    line-height: 52px;
    background-color: #f15748;
    text-align: center;
    box-shadow: 3px 3px #0000001a;
    user-select: none;
    cursor: pointer;
    transition: ease 0.3s;
}
.popupNewsletter__right .content form button span {
  text-transform: none;
  font-family: 'Roboto', sans-serif;
  font-size: 20px;
}

@media (max-width: 1299px) {
  .popupNewsletter__wrap {
    max-width: 970px;
  }
  .popupNewsletter__right .content {
    max-width: 400px;
  }
  .popupNewsletter__right .content h2 {
    font-size: 38px;
    line-height: 40px;
    margin: 0 0 16px;
  }
  .popupNewsletter__right .content h2 .value {
    font-size: 48px;
  }
  .popupNewsletter__right .content h2 .marker:after {
    height: 7px;
    bottom: 8px;
  }
  .popupNewsletter__right .content p {
    font-size: 16px;
    line-height: 22px;
    margin: 0 0 20px;
  }
  .popupNewsletter__right .content form {
    max-width: 360px;
  }
  .popupNewsletter__right .content form input {
    height: 44px;
    font-size: 16px;
    margin: 0 0 20px;
  }
}
@media (max-width: 991px) {
  .popupNewsletter__wrap {
    flex-direction: column;
    max-width: 450px;
  }
  .popupNewsletter__left {
    width: 100%;
    height: 250px;
  }
  .popupNewsletter__left img.desktop {
    display: none;
  }
  .popupNewsletter__left img.mobile {
    display: block;
    object-fit: cover;
  }
  .popupNewsletter__right {
    width: 100%;
    padding: 26px 0;
  }
}
@media (max-width: 767px) {
  .popupNewsletter__wrap {
    max-width: 360px;
  }
  .popupNewsletter__left {
    height: 162px;
  }
  .popupNewsletter__right .content {
    max-width: 372px;
    padding: 0 10px;
  }
  .popupNewsletter__right .content h2 {
    font-size: 36px;
  }
  .popupNewsletter__right .content h2 br {
    display: none;
  }
  .popupNewsletter__right .content p {
    font-size: 14px;
    line-height: 18px;
  }
  .popupNewsletter__right .content form {
    max-width: 320px;
  }
  .popupNewsletter__right .content form input {
    font-size: 14px;
  }
  .popupNewsletter__right .content form button {
    height: 40px;
    line-height: 40px;
  }
  .popupNewsletter__right .content form button span {
    font-size: 14px;
  }
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    // Close btn
    document.querySelector('.closebtn').addEventListener('click', function(){
        document.querySelector('.psibufetPopup').classList.add('psibufetPopup--hide');
    });

    // Click over popup close
    // document.querySelector(document).mouseup(function(e){
    //     var container = document.querySelector('.psibufetPopup .wrap');
    //     if (!container.is(e.target) && container.has(e.target).length === 0){
    //         document.querySelector('.psibufetPopup').classList.remove('psibufetPopup--active');
    //         setTimeout(function(){
    //             document.querySelector('.psibufetPopup').classList.remove('psibufetPopup--ready');
    //         }, 300);
    //     }
    // });
</script>
<div class="popupNewsletter psibufetPopup" data-name="newsletter">
    <div class="popupNewsletter__wrap wrap">
        <div class="closebtn"></div>
        <div class="popupNewsletter__left">
            <img class="mobile" src="https://psibufet.pl/wp-content/themes/psibufet/images/popup/newsletter_image_mobile.png"/>
            <img class="desktop" src="https://psibufet.pl/wp-content/themes/psibufet/images/popup/newsletter_image.png"/>
        </div>
        <div class="popupNewsletter__right">
            <div class="content">
                <h2><span class="value">20</span>% <span class="marker">zniżki</span> <br/>na <span class="value">2</span> <span class="marker">dostawy</span> PsiBufet</h2>
                <p><b>Dołącz</b> do naszego newslettera i <b>odbierz kod rabatowy na 2 pierwsze zamówienia</b> jedzenia PsiBufet.</p>
                <form name="popupNewsletter" method="post">
                    <input type="email" name="popupNewsletter_name" placeholder="Wpisz swój adres e-mail"/>
                    <button type="submit" class="btn btn--button"><span>Odbieram 20% zniżki</span></button>
                </form>
            </div>
        </div>
    </div>
</div>