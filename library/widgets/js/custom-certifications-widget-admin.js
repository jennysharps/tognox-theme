jQuery(document).ready(function($) {
    $('.certification-add-button').live('click', function() {
        var parent = $(this).parent();
        var template = parent.find('.certificationItemTemplate').html();
        $(template).appendTo(parent);
    })

    $('.certification-delete-button').live('click', function() {
        $(this).parent().remove();
    })
});