/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var base_url = $('#base_url').val();

$('.deleteImage').on('click',function (){
    var image = $(this).attr('for');
    $('#deletedImages').append('<input value="'+image+'" name="delete_image[]" hidden=""/>');
    $(this).parent('div').remove();
    return false;
});
$('#imageUpload').on('change',function (){


            $.ajax({
                url: base_url+"/site/uploadimage",
                beforeSend : function (){
                $('#progImage').css('display','block');
            },
                type: "POST",
                data:  new FormData($('#uploadForm')[0]),
                contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,
            }).done(function(data) {
$('#showImages').append('<img src="'+base_url+'/assets/admin/img/tmp/'+data+'" width="50" height=50/>');
$('#imagesSRC').append('<input value="'+data+'" name="images[]" hidden=""/>');
$('#progImage').css('display','none');
            });

});