(function($){
    $(document).ready(function(){
        $('.pos--gift').on('click', function(){
            let content = $(this).find('.content');
    
            $(this).toggleClass('pos--active');
            content.slideToggle('fast');
        });

        // Insert data to plans
        function insertPlansData(selected){
            let data = selected.plans;

            console.log(data);
            
            $.each(data, function(key, value){
                $('article.planBox[data-plan="plan_0' + value['id'] + '"]').each(function(){
                    let dayprice = value['planBox_price_day'].split('.'),
                        totalprice = value['planBox_ordersum'].split('.');

                    $(this).attr('data-portions', value['planBox_list_count']);
                    $(this).attr('data-delivery', value['planBox_list_delivery']);
                    $(this).attr('data-dayprice', value['planBox_price_day']);
                    $(this).attr('data-total', value['planBox_ordersum']);

                    // Day price
                    $(this).find('.planBox__price').find('.price').find('span.value').html(dayprice[0] + '<small>' + dayprice[1] + '</small>');

                    // Promotion
                    if(typeof value['planBox_promotion_value'] !== 'undefined'){
                        $(this).find('.promotion').find('span.value').html(value['planBox_promotion_value']);
                    }

                    // List
                    $(this).find('.planBox__info').find('.pos[data-name="planBox_list_dayportion"]').find('span').html(value['planBox_list_dayportion'] + ' G');
                    $(this).find('.planBox__info').find('.pos[data-name="planBox_list_gram"]').find('span').html(value['planBox_list_gram'] + ' G');
                    $(this).find('.planBox__info').find('.pos[data-name="planBox_list_portioning"]').find('span').html(value['planBox_list_portioning']);
                    $(this).find('.planBox__info').find('.pos[data-name="planBox_list_count"]').find('span').html(value['planBox_list_count']);
                    $(this).find('.planBox__info').find('.pos[data-name="planBox_list_delivery"]').find('span').html(value['planBox_list_delivery']);


                    // Summary
                    $(this).find('.planBox__summary').find('.price--total').find('span.value').html(totalprice[0] + '<small>' + totalprice[1] + '</small>');
                    $(this).find('.planBox__summary').find('.calc').find('.price').find('span.value').html(dayprice[0] + '<small>' + dayprice[1] + '</small>');
                    $(this).find('.planBox__summary').find('.days').html('× ' + value['planBox_list_days'] + ' dni');
                });
            });
        }

        // Get JSON
        $.getJSON('/wp-content/themes/psibufet/elastyczneplany.json', function(data) {
            let param_portion = GetURLParameter('portion'),
                selected = data.find(({portion}) => portion == param_portion);

            $.each(data, function(){
                if(typeof selected == 'undefined'){
                    selected = data.find(({portion}) => portion == '125');
                }
                insertPlansData(selected);
                
                return false;
            });
        });

        // Get JSON on dropdown select
        let dropdownOption = $('#portion-select').find('.dropdownEngine__option');
        $(dropdownOption).on('click', function(){
            let selected_value = $(this).attr('value');

            $.getJSON('/wp-content/themes/psibufet/elastyczneplany.json', function(data) {
                let selected = data.find(({portion}) => portion == selected_value);
    
                insertPlansData(selected);

                // Dla psiaków z większym apetytem badge
                if(selected_value == '125'){
                    $('.planBox[data-plan="plan_02"]').find('.planBox__apetyt').addClass('planBox__apetyt--active');
                }else{
                    $('.planBox[data-plan="plan_02"]').find('.planBox__apetyt').removeClass('planBox__apetyt--active');
                }

                if(selected_value == '400' || selected_value == '500' || selected_value == '600'){
                    // $('.planBox[data-plan="plan_02"]').find('.pos--gift').hide();
                    $('.planBox[data-plan="plan_02"]').hide();
                }else{
                    // $('.planBox[data-plan="plan_02"]').find('.pos--gift').show();
                    $('.planBox[data-plan="plan_02"]').show();
                }

                return false;
                // $.each(data, function(){
                //     if(typeof selected == 'undefined'){
                //         selected = data.find(({portion}) => portion == '125');
                //     }
    
                    
                    
                //     return false;
                // });
            });
        });
    
        // Popups
        function openPopup(open, type){
            if(open == true){
                $('body').addClass('noscroll');
                $('.infoPopup').addClass('infoPopup--ready');
                $('.elasticPopup--' + type).addClass('elasticPopup--active');
                setTimeout(function(){
                    $('.infoPopup').addClass('infoPopup--active');
                }, 300);
            }else if(open == false && type !== 'all'){
                $('body').removeClass('noscroll');
                $('.infoPopup').removeClass('infoPopup--active');
                $('.elasticPopup--' + type).removeClass('elasticPopup--active');
                setTimeout(function(){
                    $('.infoPopup').removeClass('infoPopup--ready');
                }, 300);
            }else if(open == false && type == 'all'){
                $('body').removeClass('noscroll');
                $('.infoPopup').removeClass('infoPopup--active');
                setTimeout(function(){
                    $('.elasticPopup').removeClass('elasticPopup--active');
                    $('.infoPopup').removeClass('infoPopup--ready');
                }, 300);
            }
        }
    
        // Inner popup close
        $('.closeInfoPopup').on('click', function(){
            openPopup(false, 'all');
        });
    
        // Outer click popup close
        $(document).mouseup(function(e){
            var container = $('.infoPopup__wrap');
            if (!container.is(e.target) && container.has(e.target).length === 0){
                if($('.infoPopup').hasClass('infoPopup--active')){
                    openPopup(false, 'all');
                }
            }
        });
    
        $('button[data-plan]').on('click', function(){
            let planid = $(this).attr('data-plan'),
                plan = $('.planBox[data-plan="' + planid + '"]'),
                uuid = GetURLParameter('uuid'),
                current_grammage = GetURLParameter('portion');

            if(typeof current_grammage !== 'undefined'){
                current_grammage = GetURLParameter('portion') + ' G';
            }else{
                current_grammage = 'Nie wykryto';
            }
    
            // Plan info
            let data = {
                name: plan.data('name'),
                current: current_grammage,
                grammage: $('#portion-select').find('.dropdownEngine__selected').data('selected'),
                portions: plan.data('portions'),
                delivery: plan.data('delivery'),
                dayprice: plan.data('dayprice'),
                total: plan.data('total'),
                gift: plan.data('gift'),
                
            }
    
            console.log(data);
            
            $.each(data, function( index, value ) {
                if(index == 'gift'){
                    if(value !== true){
                        $('#planChanger').find('input[name="data"]').removeAttr('data-gift');
                    }else{
                        $('#planChanger').find('input[name="data"]').attr('data-gift', value);
                    }
                }else{
                    $('#planChanger').find('input[name="data"]').attr('data-' + index, value);
                }
            });
    
            if(typeof uuid !== 'undefined'){
                if(uuid !== false){
                    $('#planChanger').trigger('submit');
                    openPopup(true, 'success');
                }else{
                    openPopup(true, 'form');
                }
            }else{
                openPopup(true, 'form');
            }
        });
    
        // Form send
        $('#planChanger').on('submit', function(e){
            e.preventDefault();
    
            let hidden = $(this).find('input[name="data"]'),
                email = $(this).find('input[name="email"]').val(),
                data = {
                    action: 'elasticPlan',
                    name: hidden.data('name'),
                    current: hidden.data('current'),
                    grammage: hidden.data('grammage'),
                    portions: hidden.data('portions'),
                    delivery: hidden.data('delivery'),
                    dayprice: hidden.data('dayprice'),
                    total: hidden.data('total'),
                    // gift: hidden.data('gift'),
                    email: email,
                    uuid: GetURLParameter('uuid'),
                };
    
            $.ajax({
                type: 'POST',
                url: PBAjax.ajaxurl,
                data: data,
                beforeSend: function(){
                    $('.elasticPopup').addClass('elasticPopup--loading');
                },
                success: function(response){
                    $('.elasticPopup').removeClass('elasticPopup--loading');
                    let data = jQuery.parseJSON(response);
    
                    $.each(data, function (key, v) {
                        if(key == 'status'){
                            if(v == true){
                                console.log('[FORM] Zgłoszenie zostało pomyślnie wysłane');
                            }else{
                                console.error('[FORM] Wystąpił błąd podczas wysyłki zgłoszenia');
                            }
                        }
                        if(key == 'uuid'){
                            if(v == ''){
                                openPopup(false, 'form');

                                setTimeout(function(){
                                    openPopup(true, 'success');
                                }, 300);
                            }
                        }
                    });
                }
            });
        });
    });


    /**
     * Plan popups
     */
    $(document).ready(function(){
        $('.trigger p').on('click', function(){
            var name = $(this).data('name');

            if(name == 'popupplan'){
                $('body').addClass('noscroll');
                $('.planPopup').addClass('planPopup--ready');
                setTimeout(function(){
                    $('.planPopup').addClass('planPopup--active');
                }, 300);
            }else{
                console.log(name);
                $('body').addClass('noscroll');
                $('.infoPopup').addClass('infoPopup--ready');
                $('.elasticPopup--' + name).addClass('elasticPopup--active');
                setTimeout(function(){
                    $('.infoPopup').addClass('infoPopup--active');
                }, 300);
            }
        });


        // Close modal
        $('.planPopup__close').on('click', function(){
            $('body').removeClass('noscroll');
            $('.planPopup').removeClass('planPopup--active');
            setTimeout(function(){
                $('.planPopup').removeClass('planPopup--ready');
            }, 300);
        });

        // Outer click popup close
        $(document).mouseup(function(e){
            var container = $('.planPopup__wrap');
            if (!container.is(e.target) && container.has(e.target).length === 0){
                if($('.planPopup').hasClass('planPopup--active')){
                    $('body').removeClass('noscroll');
                    $('.planPopup').removeClass('planPopup--active');
                    setTimeout(function(){
                        $('.planPopup').removeClass('planPopup--ready');
                    }, 300);
                }
            }
        });
    });
}(jQuery));