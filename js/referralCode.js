function promobar(dataAmount, dataType){
	var code = GetURLParameter('code');
    var type = GetURLParameter('type');
    var amount = GetURLParameter('amount');

    var promoamount = $('#promocode p .amount');
    var promotype = $('#promocode p .type');
	var promona = $('#promocode p .na');
    

    if (typeof code === 'undefined'){
        var firstletter = code;
    }else{
        var firstletter = code.charAt(0);
    }

	if (typeof type === 'undefined'){
		var type = dataType;
	}

	if (typeof amount === 'undefined'){
		var amount = dataAmount;
	}

    if(typeof code !== 'undefined' && code !== 'psiazka'){
        $('body').addClass('promocode');
        $('.menu_dir a').addClass('dir');
        $('#promocode').addClass('active');
        $('body').trigger('promocode-active');
		$('.siteHeader').addClass('siteHeader--promocode');

        promoamount.html('-' + amount);

        if(type == 'PERCENT'){
            promotype.html('%');
        }
        if(type == 'AMOUNT'){
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
    }else{
        console.log('Code error');
    }
};

function blackweekBar(){
	console.log('blackweek');
	var code = GetURLParameter('code');
    var type = GetURLParameter('type');
    var amount = GetURLParameter('amount');

    var promoamount = $('.blackweek__amount span');

	$('body').addClass('promocode-blackweek');
	$('.menu_dir a').addClass('dir');
	$('#blackweek').addClass('blackweek--active');
	$('.siteHeader').removeClass('siteHeader--promocode');

	promoamount.html('-' + amount);

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
}

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
	var whitelist = ['',
					'jak-to-dziala',
					'jak-to-dziala-new',
					'nasze-przepisy',
					'nasze-przepisy-new',
					'?code=' + sPageURL,
					'o-nas',
					'pracuj-w-psibufet',
					'kontakt',
					'thank-you',
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
				];
	var blackweek = [
		'black50',
		'black100',
	];

    // if (typeof sPageURL === 'undefined'){
    //     var firstletter = sPageURL;
    // }else{
    //     var firstletter = sPageURL.charAt(0);
    // }
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
					$('#promocode').removeClass('active');
					$('#blackweek').removeClass('blackweek--active');
					console.log('Error while code loading :(');
				},
				success: function(){
					$.getJSON("https://app.psibufet.pl/api/order/couponcode/" + code, function (data) {
						if (data.purpose == "MARKETING" || data.purpose == "PARTNER" || data.purpose == "CUSTOMER_CARE" || data.purpose == "CLIENT" || data.purpose == 'INFLUENCER' || data.purpose == 'EVENT' || data.purpose == 'VET'){
							if(blackweek.indexOf(code) !== -1){
								blackweekBar();
							}else{
								var amount = data.amount;
								var type = data.type;
								promobar(amount, type);
							}
						}			
					});
				}
			});
		}
	}else{
		$.ajax({
			url:'https://app.psibufet.pl/api/order/couponcode/' + sPageURL,
			error: function(){
				window.location.replace("https://psibufet.pl/");
				console.log('Error while code loading :(');
			},
			success: function(){
				$.getJSON("https://app.psibufet.pl/api/order/couponcode/" + sPageURL, function (data) {
					if (data.purpose == "CLIENT"){
						window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&utm_source=MGM&utm_medium=referral_link&utm_campaign=' + sPageURL + '&amount=' + data.amount + '&type=' + data.type);
					}else if (data.purpose == "PARTNER"){
						window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&utm_source=partner&utm_medium=referral_link&utm_campaign=' + sPageURL + '&amount=' + data.amount + '&type=' + data.type);
					}else if (data.purpose == "MARKETING"){
						window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&amount=' + data.amount + '&type=' + data.type);
					}else if (data.purpose == "INFLUENCER"){
						window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&utm_source=influencer&utm_medium=referral_link&utm_campaign=' + sPageURL + '&amount=' + data.amount + '&type=' + data.type);
					}else if (data.purpose == "EVENT"){
						window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&utm_source=event&utm_medium=referral_link&utm_campaign=' + sPageURL);
					}else if (data.purpose == "VET"){
						window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&utm_source=vet&utm_medium=referral_link&utm_campaign=' + sPageURL);
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