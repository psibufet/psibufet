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

	var currentCode = window.location.pathname.replace('/lp/', '');
    var redirect = window.location.href.replace('/lp/' + currentCode + '', '/lp');
    console.log(currentCode);

    if(currentCode !== '/lp'){
        $.ajax({
            url:'https://app.psibufet.pl/api/order/couponcode/' + currentCode,
            error: function(){
                console.log('Error while code loading :(');
                window.location.replace(redirect);
            },
            success: function(){
                $.getJSON("https://app.psibufet.pl/api/order/couponcode/" + currentCode, function (data) {
                    if (data.purpose == "CLIENT"){
                        window.location.replace(redirect + "?code=" + currentCode + '&utm_source=MGM&utm_medium=referral_link&utm_campaign=' + currentCode + '&amount=' + data.amount + '&type=' + data.type);
                    }else if (data.purpose == "PARTNER"){
                        window.location.replace(redirect + "?code=" + currentCode + '&utm_source=partner&utm_medium=referral_link&utm_campaign=' + currentCode + '&amount=' + data.amount + '&type=' + data.type);
                    }else if (data.purpose == "MARKETING"){
                        window.location.replace(redirect + "?code=" + currentCode + '&amount=' + data.amount + '&type=' + data.type);
                    }else if (data.purpose == "INFLUENCER"){
                        window.location.replace(redirect + "?code=" + currentCode + '&amount=' + data.amount + '&type=' + data.type);
                    }	
                });
            }
        });
    }

    var code = GetURLParameter('code');
    var amount = GetURLParameter('amount');
    var type = GetURLParameter('type');
    var firstletter = code.charAt(0);

    if(typeof code !== 'undefined'){
        var saleBar = $('.salePromobar').find('p')
        if(type == 'PERCENT' && firstletter == '2'){
            saleBar.html('<b>-<span class="amount">' + amount + '</span><span class="type">%</span></b>na dwie pierwsze dostawy');
        }else if (type == 'PERCENT' && firstletter !== '2'){
            saleBar.html('<b>-<span class="amount">' + amount + '</span><span class="type">%</span></b>na Twoje zamówienie');
        }else if (type == 'AMOUNT' && firstletter == '2'){
            saleBar.html('<b>-<span class="amount">' + amount + '</span><span class="type"> PLN</span></b>na dwie pierwsze dostawy');
        }else if (type == 'AMOUNT' && firstletter !== '2'){
            saleBar.html('<b>-<span class="amount">' + amount + '</span><span class="type"> PLN</span></b>na Twoje zamówienie');
        }
        $(document).ready(function(){
            $('.salePromobar').addClass('salePromobar--toggle');
            setTimeout(function(){
                $('.salePromobar').slideDown();
            }, 200);

            $('.stickyBtn').addClass('stickyBtn--toggle');
        });
    }
});