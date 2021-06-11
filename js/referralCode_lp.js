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

	var currentCode = GetURLParameter('code');
    if(typeof currentCode !== 'undefined'){
        $.ajax({
            url:'https://app.psibufet.pl/api/order/couponcode/' + currentCode,
            error: function(){
                console.log('Error while code loading :(');
            },
            success: function(){
                $.getJSON("https://app.psibufet.pl/api/order/couponcode/" + currentCode, function (data) {
                    var amount = data.amount;
                    var type = data.type;
                    var firstletter = currentCode.charAt(0);

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
                });
            }
        });
    }
});