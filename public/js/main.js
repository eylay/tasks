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

function markTask(id) {
    var formData = {
        task_id : id
    }
    sendAjax('mark_tasks',formData,null);
}

function sendAjax(method,formData,target){

    var token = $('input[name="_token"]').val();
    formData._token = token;

    var url = documentRoot+'/ajax/'+method;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    })
    $.ajax({
        type: 'POST',
        url: url,
        data: formData,
        success: function(data) {
            if(target && data){
                target.html(data);
            }
        }
    });
}
