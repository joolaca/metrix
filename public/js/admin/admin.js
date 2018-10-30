$(document).ready(function(){

    $('.crop_image').click(function(e) {


        e.preventDefault();

        var data = {
            'img_path' : $(this).data('img-path'),
            'crop_width' : $(this).data('crop-width'),
            'crop_height' : $(this).data('crop-height'),
        }
        // $('form').serialize()

        $.ajax({
            url: "/admin/show_crop_image_modal" ,
            type: 'POST',
            data: data,
            success: function(result){
                $(result).modal();
            }
        });

    });

});
