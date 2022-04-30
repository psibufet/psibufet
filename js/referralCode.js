function headerClone(){
	var siteHeader = $('.siteHeader');
	var promocode = $('#promocode');
	

	if($('body').hasClass('promocode') && !$('body').hasClass('promocode-blackweek')){
		if($(window).width() < 576){
			$('#masthead').css('margin-top', promocode.height());
			$('.header-clone').css('height', siteHeader.height() + 58);
		}else if($(window).width() < 767 && $(window).width() > 576){
			$('.header-clone').css('height', siteHeader.height() + 39);
		}else{
			$('.header-clone').css('height', siteHeader.height() + 62);
		}
	}else if($('body').hasClass('promocode-blackweek')){
		if($(window).width() < 768){
			$('.header-clone').css('height', 180);
		}else if($(window).width() < 992){
			$('.header-clone').css('height', 160);
		}else{
			$('.header-clone').css('height', 187);
		}
	}else{
		$('.header-clone').css('height', siteHeader.height());
	}
	if($(window).width() < 991){
		$('.mainnav').css('padding-top', siteHeader.height());
	}
}
function bottomBar(code, amount, type){
	if(type == 'PERCENT'){
		var typ = '%';
	}else if(type == 'AMOUNT'){
		var typ = 'PLN';
	}
	$('.siteFooter').before('<div class="bottomBar"><a href="https://zamowienie.psibufet.pl/?code=' + code + '&amount=' + amount + '&type=' + type + '" class="btn btn--green"><span>Odbierz zniżkę -' + amount + typ + '</span></a></div>');
}
function promobar(dataCode, dataAmount, dataType, dataPurpose){
	var code = dataCode;
    var type = dataType;
    var amount = dataAmount;
    var purpose = dataPurpose;
	var firstletter = code.charAt(0);

    var promoamount = $('#promocode p .amount');
    var promotype = $('#promocode p .type');
	var promona = $('#promocode p .na');

	
	if(purpose == 'CLIENT'){
		$('body').addClass('promocode');
		$('.menu_dir a').addClass('dir');
		$('#promocode').addClass('active');
		$('body').trigger('promocode-active');
		$('.siteHeader').addClass('siteHeader--promocode');

		let promobar = $('#promocode').find('p');

		promobar.html('<div><span class="amount">-50</span><span class="type">%</span> na pierwszą | <span class="amount">-25</span><span class="type">%</span> na drugą dostawę. <a href="https://zamowienie.psibufet.pl/?code=' + dataCode + '&amount=' + dataAmount + '&type=' + dataType + '" class="promobutton">ODBIERZ</a></div>');

		// Set header clone height
		headerClone();
	}else{
		if(typeof code !== 'psiazka'){
			$('body').addClass('promocode');
			$('.menu_dir a').addClass('dir');
			$('#promocode').addClass('active');
			$('body').trigger('promocode-active');
			$('.siteHeader').addClass('siteHeader--promocode');
	
			promoamount.html('-' + amount);
	
			if(type == 'PERCENT'){
				promotype.html('%');
			}else if(type == 'AMOUNT'){
				promotype.html('PLN');
			}
	
			if(firstletter == 2){
				promona.html('na dwie pierwsze dostawy');
			}
	
			setTimeout(function(){
				$(".dir").each(function () {
					var $this = $(this);
					var _href = $this.attr("href");
					if(typeof type !== 'undefined' && typeof amount !== 'undefined'){
						$this.attr("href", _href + '?code=' + code + '&amount=' + amount + '&type=' + type);
					}else{
						$this.attr("href", _href + '?code=' + code);
					}
				});
			}, 50);
	
			// Set header clone height
			headerClone();

			if($(window).width() < 768){
				bottomBar(dataCode, dataAmount, dataType);
			}
		}else{
			console.log('Code error');
		}
	}
};

function blackweekBar(dataCode, dataAmount, dataType){
	console.log('blackweek');
	var code = dataCode;
    var type = dataType;
    var amount = dataAmount;

	$('body').addClass('promocode-blackweek');
	$('.menu_dir a').addClass('dir');
	$('.menu-item a').addClass('dir');
	$('#blackweek').addClass('blackweek--active');

	setTimeout(function(){
		$(".dir").each(function () {
			var $this = $(this);
			var _href = $this.attr("href");
			if(typeof type !== 'undefined' && typeof amount !== 'undefined'){
				$this.attr("href", _href + '?code=' + code + '&amount=' + amount + '&type=' + type);
			}else{
				$this.attr("href", _href + '?code=' + code);
			}
		});
	}, 50);

	// Set header clone height
	headerClone();
}

$(document).ready(function(){
	// Set header clone height
	headerClone();
});

$(document).ready(function(){
	function GetURLParameter(sParam){
		var sPageURL = window.location.search.substring(1);
		var sURLVariables = sPageURL.split('&');
		for (var i = 0; i < sURLVariables.length; i++){
			var sParameterName = sURLVariables[i].split('=');
			if (sParameterName[0] == sParam){
				return sParameterName[1];
			}
		}
	}  
   
	var code = GetURLParameter('code');
	var sPageURL = window.location.pathname.replace('/','');
	var whitelist = [
		'',
		'jak-to-dziala',
		'jak-to-dziala-new',
		'nasze-przepisy',
		'nasze-przepisy-new',
		'?code=' + sPageURL,
		'o-nas',
		'o-nas-new',
		'pracuj-w-psibufet',
		'kontakt',
		'thank-you',
		'thank-you-new',
		'failed-payment',
		'regulamin',
		'regulamin.pdf',
		'wolowe-love',
		'jagnie-wcina',
		'kurcze-pieczone',
		'indyczy-kasek',
		'regulamin_dla_hodowcow.pdf',
		'lp',
		'lp-rkmt',
		'program-partnerski',
		'kalkulator',
		'serwis',
		'ksiazka',
		'rasy',
		'restauracje',
		'pomoc',
		'szczeniaki',
		'senior',
	];
	var blackweek = [
		'gwiazdka40',
		'email40',
		'choinka40',
		'prezent40',
		'mikolaj40',
		'mikolaj25',
		'bombka40',
		'bombka25',
		'toro40',
		'leszek40',
		'rico40',
		'pitas40',
		'wafel40',
		'ubi40',
		'lola40',
		'juliusz40',
		'hidan40',
		'ludi40',
		'mikus40',
		'many40',
		'guccio40',
		'lui40',
		'maksio40',
		'jessie40',
		'hauka40',
		'wypasiony40',
		'jestemdyzio40',
		'amigos40',
		'magdaipsy40',
		'niebieskiepieski40',
		'tosieuda40',
		'dogconcept40',
		'psiaglowka40',
		'bombel40',
		'bialymaltan40',
		'szczekajmy40',
		'psijaciele40',
		'gentlemen40',
		'dogadani40',
		'psimszlakiem40',
		'darling40',
		'psiglos40',
		'moreactive40',
		'psietwory40',
		'nora40',
		'animalroom40',
		'dogfulness40',
		'arkadia40',
		'zrozumpsa40',
		'voteforpralka40',
		'dogfan40',
		'psicholozka40',
		'helppsiaki40',
		'zuzia40',
		'oreo40',
		'goofy40',
		'fuksia40',
		'tadek40',
		'wspanialy40',
		'fisia40',
		'pandzia40',
		'malygamon40',
		'filetzuszkami',
	];

	if(whitelist.indexOf(sPageURL) !== -1){
		console.log('This code contains existing page URL');
		
		if(typeof code !== 'undefined' && code !== 'psiazka'){
			var codeFirstLetter = code.charAt(0);
			console.log('Code parameter exists ' + code + codeFirstLetter);

			$.ajax({
				url:'https://app.psibufet.pl/api/order/couponcode/' + code,
				error: function(){
					$('body').removeClass('promocode');
					$('.menu_dir a').removeClass('dir');
					$('#promocode').removeClass('active').remove();
					$('#blackweek').removeClass('blackweek--active').remove();
					console.log('Error while code loading :(');
				},
				success: function(){
					$.getJSON("https://app.psibufet.pl/api/order/couponcode/" + code, function (data) {
						var amount = data.amount;
						var type = data.type;
						var purpose = data.purpose;

						if(blackweek.indexOf(code) !== -1){
							blackweekBar(code, amount, type);
							$('#promocode').remove();
						}else{
							promobar(code, amount, type, purpose);
							$('#blackweek').remove();
						}	
					});
				}
			});
		}
	}else{
		$.ajax({
			url:'https://app.psibufet.pl/api/order/couponcode/' + sPageURL,
			error: function(){
				if($('body').hasClass('page-template-page_pdf')){
					console.log('PDF download page');
				}else if($('body').hasClass('error404')){
					console.log('404');
				}else if($('body').hasClass('post-type-archive-rasy-psow') || $('body').hasClass('single-rasy-psow')){
					console.log('Rasy psów - archive');
				}else{
					window.location.replace("https://psibufet.pl/");
					console.log('Error while code loading :(');
				}
			},
			success: function(){
				$.getJSON("https://app.psibufet.pl/api/order/couponcode/" + sPageURL, function (data) {
					if($('body').hasClass('error404')){
						$('.preloader').attr('style', 'opacity: 1 !important; display: flex !important;');
						if (data.purpose == "CLIENT"){
							window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&utm_source=MGM&utm_medium=referral_link&utm_campaign=' + sPageURL + '&amount=' + data.amount + '&type=' + data.type);
						}else if (data.purpose == "PARTNER"){
							window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&utm_source=partner&utm_medium=referral_link&utm_campaign=' + sPageURL + '&amount=' + data.amount + '&type=' + data.type);
						}else if (data.purpose == "INFLUENCER"){
							window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&utm_source=influencer&utm_medium=referral_link&utm_campaign=' + sPageURL + '&amount=' + data.amount + '&type=' + data.type);
						}else if (data.purpose == "EVENT"){
							window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&utm_source=event&utm_medium=referral_link&utm_campaign=' + sPageURL);
						}else if (data.purpose == "VET"){
							window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&utm_source=vet&utm_medium=referral_link&utm_campaign=' + sPageURL);
						}else{
							window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&amount=' + data.amount + '&type=' + data.type);
						}
					}
				});
				$(".dir").each(function () {
					var $this = $(this);
					var _href = $this.attr("href");
					$this.attr("href", _href + '?code=' + sPageURL);
				});
			}
		});
	} 	
});