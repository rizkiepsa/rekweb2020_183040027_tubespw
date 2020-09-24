$(document).ready(function() {

    $('#cari').hide();

    $('#keyword').on('keyup', function() {
        $('.loader').show();

        $.get('ajax/film.php?keyword=' + $('#keyword').val(), function(data){
            $('#container').html(data);
            $('.loader').hide();
        });
    });

});