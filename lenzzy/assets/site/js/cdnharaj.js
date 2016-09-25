$(document).ready(function () {

    
    
        var base_url = $('#base_url').val();

    $('.deleteImage').on('click', function () {
        var image = $(this).attr('for');
        $('#deletedImages').append('<input value="' + image + '" name="delete_image[]" hidden=""/>');
        $(this).parent('div').remove();
        return false;
    });
    $('#imageUpload').on('change', function () {
        

        $.ajax({
            url: base_url + "/site/uploadimage",
            beforeSend: function () {
                $('#progImage').css('display', 'block');
            },
            type: "POST",
            data: new FormData($('#uploadForm')[0]),
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false,
        }).done(function (data) {
            $('#showImages').append('<img class="img-icon" src="' + base_url + '/assets/admin/img/tmp/' + data + '" width="150" height="150"/>');
            $('#imagesSRC').append('<input  value="' + data + '" name="images[]" hidden=""/>');
            $('#progImage').css('display', 'none');
        });

    });
});