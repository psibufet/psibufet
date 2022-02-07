$(document).ready(function(){
    setTimeout(function(){
        $('#download_pdf')[0].click();
        $('h1.status').fadeOut();
        setTimeout(function(){
            $('h1.status').text('Plik PDF został pomyślnie pobrany');
            $('#back').addClass('visible');
        }, 400);    
        $('h1.status').fadeIn();
    }, 2000);
});