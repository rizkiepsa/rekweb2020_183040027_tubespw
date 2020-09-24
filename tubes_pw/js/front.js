$(document).ready(function() {

    $('#cari').hide();

    $('#keyword').on('keyup', function() {
        $('.loader').show();

        $.get('ajax/front.php?keyword=' + $('#keyword').val(), function(data){
            $('#front').html(data);
            $('.loader').hide();
        });
    });

});