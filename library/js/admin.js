/*
jQuery(document).ready( function($) {

    var htmlSubmitButton = $('#html-upload');
    
    htmlSubmitButton.click( function(e) {
        var postForm = $('#file-form');
        
        postForm.ajaxForm({
            type: 'POST',
            url: ajaxurl,
            data: {
                "action": "browser_upload_override"
            },
            success: function(response){
                var respObj = $.parseJSON(response);
                
                if( respObj.location.length > 0 ) {
                    // redirect to upload page -- necessary to do it this way to bypass redirect to upload.php
                    postForm.append('<a id="redirect-to-image" href="' + respObj.location + '"></a>');
                    document.getElementById('redirect-to-image').click();
                }

            },
            error: function(response) {
                alert('An error occured while trying to upload your image asynchronously.');
            }
        }).submit();
        
        return false;
    });
    
    var formValidation = {
        
        requiredFields:     $('input[aria-required="true"], textarea[aria-required="true"]'),
        checkFields:        function() {
            var returnVal = true;
            this.requiredFields.each( function() {
                if(!$.trim(this.value).length) {
                    returnVal = false;
                    return false;
                }
            });
            return returnVal;
        },
    }
    
    var validFormOnLoad = formValidation.checkFields();
    
    $('a').on( 'click', function(e) {
        var validForm = formValidation.checkFields();
        if(!validForm || !validFormOnLoad ) {
            if(!validForm) {
                alert('Please fill in all required fields.');
            } else {
                alert('Please save changes.');
            }
            e.preventDefault();
            e.stopImmediatePropagation();
            e.stopPropagation();
        }
    });
    
});
*/