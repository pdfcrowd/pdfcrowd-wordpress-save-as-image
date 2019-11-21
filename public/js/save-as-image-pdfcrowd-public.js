(function( $ ) {
    'use strict';

    window.SaveAsImagePdfcrowd = _.debounce(function(options) {
        $("<form class='save-as-image-pdfcrowd-post-form' enctype='application/x-www-form-urlencoded' method='post' action='" +
          ajaxurl + "'><input type='hidden' name='options' value='" + options
          + "'><input type='hidden' name='action' value='save_as_image_pdfcrowd'></form>").appendTo('body').submit();
    }, 500, true);
})( jQuery );
