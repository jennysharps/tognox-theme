jQuery(document).ready(function($) {
    $('.certification-add-button').live('click', function() {
        var parent = $(this).parent();
        debugger;
        var container = parent.find('.certification-container');
        var template = parent.find('.certificationItemTemplate').html();
        $(template).appendTo(container);
    })

    $('.certification-delete-button').live('click', function() {
        $(this).parent().remove();
    })
});