$(document).ready(function () {

    $('.danger button').click(function () {
        $('#are-you-sure').show(500);
    });

    $('#are-you-sure button').click(function () {
        var value = $(this).val();
        if (value == 1) {
            //yes
            alert('Yes');
        }else {
            //no
            $('#are-you-sure').hide(500);
        }
    });

});
