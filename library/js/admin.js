jQuery(document).ready( function(jQuery) {
    downloadsPostType.init();
});


var downloadsPostType = {
    downloadTypeSelect: null,
    chosenDownloadType: null,
    downloadFields: null,
    init: function() {
        this.downloadTypeSelect = jQuery('#acf-download_type');

        if(this.downloadTypeSelect.length) {
            var chosenDownloadType = this.downloadTypeSelect.find('select :selected').text();
            this.chosenDownloadType = chosenDownloadType ? chosenDownloadType : jQuery(this.downloadTypeSelect.find('select'))[0].text();

            this.downloadFields = jQuery('#acf_acf_download-options .field');

            this.attachEvents();
            this.showCurrentFields(chosenDownloadType);
        }
    },
    attachEvents: function() {
        var self = this;
        self.downloadTypeSelect.change( function() {
            self.chosenDownloadType = jQuery(this).find('select :selected').text();

            self.showCurrentFields(self.chosenDownloadType);

        });
    },
    showCurrentFields: function(current) {
        this.downloadFields.removeClass('current');

        switch(current.trim().toLowerCase()) {
            case 'gist':
                jQuery('#acf-gist-id').addClass('current');
                break;
            case 'github':
                jQuery('#acf-github-url').addClass('current');
                break;
            default:
                jQuery('#acf-related-file').addClass('current');
                break;
        }
    }
}