$(document).ready(function () {

    $('.danger button').click(function () {
        TaskId = $(this).attr('data-id');
        $('#are-you-sure').show(500);
    });

    $('#are-you-sure button').click(function () {
        var value = $(this).val();
        if (value == 1) {
            //yes
            $('#task-'+TaskId).submit();
        }else {
            //no
            $('#are-you-sure').hide(500);
        }
    });

});
