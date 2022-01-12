$(document).ready(function(){
    $('#helpForm').on('submit', function(e){
        e.preventDefault();
        var form = $(this);

        var topic = form.find('p[name="helpTopic"]').text();
        var message = form.find('textarea').val();
        var name = form.find('input[name="helpName"]').val();
        var dogName = form.find('input[name="helpDogName"]').val();
        var mail = form.find('input[name="helpEmail"]').val();

        
        if(topic !== '' && message !== '' && name !== '' && dogName !== '' && mail !== ''){
            form.find('p[name="helpTopic"]').text('Jak możemy Ci pomóc?');
            form.find('textarea').val('');
            form.find('input').val('');

            var data = {
                action: 'helpForm',
                topic: topic,
                message: message,
                name: name,
                dogname: dogName,
                mail: mail,
            }

            $.ajax({
                type: 'POST',
                url: PBAjax,
                data: data,
                success: function(response){
                    console.log(response);
                    if(response == 'done'){
                        form.find('.helpForm__notice').append('<p>Formularz został pomyślnie wysłany</p>');
                        form.find('.helpForm__notice').addClass('helpForm__notice--active helpForm__notice--success');
                        setTimeout(function(){
                            form.find('.helpForm__notice').removeClass('helpForm__notice--success helpForm__notice--error helpForm__notice--active');
                            form.find('.helpForm__notice').find('p').remove();
                        }, 4000);
                    }else{
                        form.find('.helpForm__notice').append('<p>Wystąpił błąd podczas wysyłki formularza. Spróbuj ponownie później.</p>');
                        form.find('.helpForm__notice').addClass('helpForm__notice--active helpForm__notice--error');
                        setTimeout(function(){
                            form.find('.helpForm__notice').removeClass('helpForm__notice--success helpForm__notice--error helpForm__notice--active');
                            form.find('.helpForm__notice').find('p').remove();
                        }, 4000);
                    }
                }
            });
        }
    });
});