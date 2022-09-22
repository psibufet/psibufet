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
function promobar(dataCode, dataAmount, dataAmount2, dataType, dataPurpose){
	var code = dataCode;
    var type = dataType;
    var amount = dataAmount;
    var amount2 = dataAmount2;
    var purpose = dataPurpose;
	var firstletter = code.charAt(0);
    var influ = [
        'ulaniec',
        'simba',
        'dropsik',
        'figa',
        'karmelek',
        'kaziulek35',
    ];

    var promoamount = $('#promocode p .amount');
    var promotype = $('#promocode p .type');
	var promona = $('#promocode p .na');

	if(typeof amount2 !== undefined || amount2 !== ''){
        console.log(amount + ' | ' + amount2);
		$('body').addClass('promocode');
		$('.menu_dir a').addClass('dir');
		$('#promocode').addClass('active');
		$('body').trigger('promocode-active');
		$('.siteHeader').addClass('siteHeader--promocode');

		let promobar = $('#promocode').find('p');

		promobar.html('<div><span class="amount">-' + amount + '</span><span class="type">%</span> na pierwszą | <span class="amount">-' + amount2 + '</span><span class="type">%</span> na drugą dostawę. <a href="https://zamowienie.psibufet.pl/?code=' + dataCode + '&amount=' + dataAmount + '&type=' + dataType + '" class="promobutton">ODBIERZ</a></div>');

		// Set header clone height
		headerClone();
		if($(window).width() < 768){
			bottomBar(dataCode, dataAmount, dataType);
		}
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
	
			if(firstletter == 2 || influ.indexOf(code) !== -1){
				promona.html('na dwie pierwsze dostawy');
			}
	
			// Set header clone height
			headerClone();

			if($(window).width() < 768){
				bottomBar(dataCode, dataAmount, dataType);
			}
		}else{
			console.log('Code error');
		}
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
   
	let code = GetURLParameter('code');

    if(typeof code !== 'undefined' && code !== 'psiazka'){
        let codeFirstLetter = code.charAt(0);
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
                    let amount = data.amount,
                        amount2 = data.amount2,
                        type = data.type,
                        purpose = data.purpose,
                        test = data.purpose;

                    if(test == 'blackweek'){
                        blackweekBar(code, amount, type);
                        $('#promocode').remove();
                    }else{
                        promobar(code, amount, amount2, type, purpose);
                        $('#blackweek').remove();
                    }	
                });
            }
        });
    }

	// if(whitelist.indexOf(sPageURL) !== -1){
	// 	console.log('This code contains existing page URL');
		
	// 	if(typeof code !== 'undefined' && code !== 'psiazka'){
	// 		var codeFirstLetter = code.charAt(0);
	// 		console.log('Code parameter exists ' + code + codeFirstLetter);

	// 		$.ajax({
	// 			url:'https://app.psibufet.pl/api/order/couponcode/' + code,
	// 			error: function(){
	// 				$('body').removeClass('promocode');
	// 				$('.menu_dir a').removeClass('dir');
	// 				$('#promocode').removeClass('active').remove();
	// 				$('#blackweek').removeClass('blackweek--active').remove();
	// 				console.log('Error while code loading :(');
	// 			},
	// 			success: function(){
	// 				$.getJSON("https://app.psibufet.pl/api/order/couponcode/" + code, function (data) {
	// 					var amount = data.amount;
	// 					var amount2 = data.amount2;
	// 					var type = data.type;
	// 					var purpose = data.purpose;

	// 					if(blackweek.indexOf(code) !== -1){
	// 						blackweekBar(code, amount, type);
	// 						$('#promocode').remove();
	// 					}else{
	// 						promobar(code, amount, amount2, type, purpose);
	// 						$('#blackweek').remove();
	// 					}	
	// 				});
	// 			}
	// 		});
	// 	}
	// }else{
	// 	$.ajax({
	// 		url:'https://app.psibufet.pl/api/order/couponcode/' + sPageURL,
	// 		error: function(){
	// 			if($('body').hasClass('page-template-page_pdf')){
	// 				console.log('PDF download page');
	// 			}else if($('body').hasClass('error404')){
	// 				console.log('404');
	// 			}else if($('body').hasClass('post-type-archive-rasy-psow') || $('body').hasClass('single-rasy-psow')){
	// 				console.log('Rasy psów - archive');
	// 			}else{
	// 				window.location.replace("https://psibufet.pl/");
	// 				console.log('Error while code loading :(');
	// 			}
	// 		},
	// 		success: function(){
	// 			$.getJSON("https://app.psibufet.pl/api/order/couponcode/" + sPageURL, function (data) {
	// 				if($('body').hasClass('error404')){
	// 					$('.preloader').attr('style', 'opacity: 1 !important; display: flex !important;');
	// 					if (data.purpose == "CLIENT"){
	// 						window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&utm_source=MGM&utm_medium=referral_link&utm_campaign=' + sPageURL + '&amount=' + data.amount + '&type=' + data.type);
	// 					}else if (data.purpose == "PARTNER"){
	// 						window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&utm_source=partner&utm_medium=referral_link&utm_campaign=' + sPageURL + '&amount=' + data.amount + '&type=' + data.type);
	// 					}else if (data.purpose == "INFLUENCER"){
	// 						window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&utm_source=influencer&utm_medium=referral_link&utm_campaign=' + sPageURL + '&amount=' + data.amount + '&type=' + data.type);
	// 					}else if (data.purpose == "EVENT"){
	// 						window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&utm_source=event&utm_medium=referral_link&utm_campaign=' + sPageURL);
	// 					}else if (data.purpose == "VET"){
	// 						window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&utm_source=vet&utm_medium=referral_link&utm_campaign=' + sPageURL);
	// 					}else{
	// 						window.location.replace("https://psibufet.pl/?code=" + sPageURL + '&amount=' + data.amount + '&type=' + data.type);
	// 					}
	// 				}
	// 			});
	// 			$(".dir").each(function () {
	// 				var $this = $(this);
	// 				var _href = $this.attr("href");
	// 				$this.attr("href", _href + '?code=' + sPageURL);
	// 			});
	// 		}
	// 	});
	// } 	
});
