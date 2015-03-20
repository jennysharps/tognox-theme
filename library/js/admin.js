jQuery(document).ready( function(jQuery) {
    downloadsPostType.init();
});


var downloadsPostType = {
    downloadTypeSelect: null,
    chosenDownloadType: null,
    downloadFields: null,
    init: function() {
        this.downloadTypeSelect = jQuery('#acf-resource_type');

        if(this.downloadTypeSelect.length) {
            var chosenDownloadType = this.downloadTypeSelect.find('select :selected').val() || null;

            this.downloadFields = jQuery('#acf_acf_resource-options .field');

            this.attachEvents();
            this.showCurrentFields(chosenDownloadType);
        }
    },
    attachEvents: function() {
        var self = this;
        self.downloadTypeSelect.change( function() {
            self.chosenDownloadType = jQuery(this).find('select :selected').val();

            self.showCurrentFields(self.chosenDownloadType);

        });
    },
    showCurrentFields: function(current) {
        this.downloadFields.removeClass('current');

        switch(current) {
            case 'gist':
                jQuery('#acf-gist-id').addClass('current');
                break;
            case 'github':
                jQuery('#acf-github-url').addClass('current');
                break;
            case 'video':
                jQuery('#acf-video-id').addClass('current');
                break;
            case 'file':
                jQuery('#acf-related-file').addClass('current');
                break;
        }

        console.log('current: '+current);
    }
}