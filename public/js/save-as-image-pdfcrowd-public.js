(function( $ ) {
    'use strict';

    window.SaveAsImagePdfcrowd = function(options) {
        $("<form class='save-as-image-pdfcrowd-post-form' enctype='application/x-www-form-urlencoded' method='post' action='" +
          ajaxurl + "'><input type='hidden' name='options' value='" + options
          + "'><input type='hidden' name='action' value='save_as_image_pdfcrowd'></form>").appendTo('body').submit();
    };
})( jQuery );
