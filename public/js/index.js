$( document ).ready(function() {
    console.log( "ready!" );

    $( ".see_also_btn" ).click(function() {
        var container = $(this).closest('.see_also_container');
        container.find('.see_also_content').toggle();
        $(this).css('display', 'none');
    });

});
