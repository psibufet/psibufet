/*  Partner page
------------------ */
$(document).ready(function(){
    $('.form__row--dropdown').on('click', function(){
        $(this).toggleClass('form__row--active');
        $(this).find('.form__dropdown').slideToggle().toggleClass('active');

        $(document).mouseup(function(e){
            var dropdown = $('.form__dropdown');
            if (!dropdown.is(e.target) && dropdown.has(e.target).length === 0){
                if(!$(e.target).hasClass('form__row--dropdown')){
                    if(dropdown.parent().hasClass('form__row--active')){
                        dropdown.parent().removeClass('form__row--active');
                        dropdown.removeClass('active');
                        dropdown.slideUp();
                    }
                }
            }
        });
    });

    $('.form__dropdown p').on('click', function(){
        var text = $(this).text();
        var value = $(this).attr('value');
        $(this).parent().parent().find('label').remove();

        $('.form__dropdown p').removeClass('active');
        $(this).addClass('active');

        $('.form__row--dropdown').find('.form__input').val(text).attr('value', value).trigger('change');
    });

    $('.form__input').on('focusin', function(){
        if(!$(this).hasClass('form__input--noaction')){
            $(this).parent().addClass('form__row--focused');
        }
    });
    $('.form__input').on('focusout', function(){
        if(!$(this).val()){
            $(this).parent().removeClass('form__row--focused');
        }
    });

    function validateForm(error){
        var counter = error;
        var partnerForm_type = partnerForm.find('input[name="partnerType"]');
        var partnerForm_company = partnerForm.find('input[name="partnerCompany"]');
        var partnerForm_mail = partnerForm.find('input[name="partnerEmail"]');
        var partnerForm_phone = partnerForm.find('input[name="partnerPhone"]');
        var partnerForm_about = partnerForm.find('textarea');

        if(!partnerForm_type.val()){
            partnerForm_type.parent().removeClass('form__row--validated');
            partnerForm_type.parent().addClass('form__row--error').attr('data-error', 'To pole jest wymagane');

            counter++;
        }
        if(!partnerForm_company.val()){
            partnerForm_company.parent().removeClass('form__row--validated');
            partnerForm_company.parent().addClass('form__row--error').attr('data-error', 'To pole jest wymagane');

            counter++;
        }
        if(!partnerForm_mail.val()){
            partnerForm_mail.parent().removeClass('form__row--validated');
            partnerForm_mail.parent().addClass('form__row--error').attr('data-error', 'To pole jest wymagane');

            counter++;
        }
        if(!partnerForm_phone.val()){
            partnerForm_phone.parent().removeClass('form__row--validated');
            partnerForm_phone.parent().addClass('form__row--error').attr('data-error', 'To pole jest wymagane');

            counter++;
        }
        if(partnerForm_phone.val().length < 9 && partnerForm_phone.val().length > 0){
            partnerForm_phone.parent().removeClass('form__row--validated');
            partnerForm_phone.parent().addClass('form__row--error').attr('data-error', 'Numer telefonu nie jest prawidłowy');

            counter++;
        }
        if(!partnerForm_about.val()){
            partnerForm_about.parent().removeClass('form__row--validated');
            partnerForm_about.parent().addClass('form__row--error').attr('data-error', 'To pole jest wymagane');

            counter++;
        }

        return counter;
    }

    var formError = $('.partnerJoin__form');
    var counter = parseInt(formError.attr('error-count'));
    var partnerForm = $('.partnerJoin__form').find('form');

    $(partnerForm).on('submit', function(e){
        e.preventDefault();

        var errorCount = validateForm(counter);

        var errorInput = $('.form__row--error').find('.form__input')
        errorInput.on('keyup paste', function(){
            $(this).parent().removeClass('form__row--error').attr('data-error', '');
            $(this).parent().addClass('form__row--validated');

            if(!$(this).val()){
                $(this).parent().removeClass('form__row--validated');
                $(this).parent().addClass('form__row--error').attr('data-error', 'To pole jest wymagane');

                var counter = parseInt(formError.attr('error-count')) + 1;
                formError.attr('error-count', counter);
            }
        });

        $('.form__dropdown p').on('click', function(){
            $('.form__row--dropdown').removeClass('form__row--error').attr('data-error', '');
            $('.form__row--dropdown').addClass('form__row--validated');
        });

        if(errorCount == 0){
            partnerForm.addClass('form--loading');
            ajaxSubmit();
        }

        function ajaxSubmit() {
            let type = partnerForm.find('input[name="partnerType"]').val(),
                company = partnerForm.find('input[name="partnerCompany"]').val(),
                mail = partnerForm.find('input[name="partnerEmail"]').val(),
                phone = partnerForm.find('input[name="partnerPhone"]').val();
                about = partnerForm.find('textarea').val();

            $.ajax({ 
                url: PBAjax.ajaxurl,
                type: 'post',
                data: {
                    action: 'availableForm',
                    type: type,
                    company: company,
                    mail: mail,
                    phone: phone,
                    about: about,
                },

                success: function(response) {
                    console.log(response);
                    var data = jQuery.parseJSON(response);

                    $.each(data, function (key, value) {
                        if(key == 'user'){
                            if(value == true){
                                partnerForm.removeClass('form--loading');
                                $('.feedback').addClass('feedback--done');
                                $('.feedback p').html('Formularz zgłoszeniowy został wysłany pomyślnie.');
                                $('.form__submit').find('button').attr('disabled', true);
                            }else{
                                console.error('ERROR: User mail error');
                                partnerForm.removeClass('form--loading');
                                $('.feedback').addClass('feedback--error');
                                $('.feedback p').html('Wystąpił błąd podczas wysyłania formularza.<br/>Spróbuj ponownie później.');
                            }
                        }else{
                            if(value !== true){
                                console.error('ERROR: Admin mail does not sent');
                            }
                        }
                    });
                }
            });
            return false;
        }
    }); 
});