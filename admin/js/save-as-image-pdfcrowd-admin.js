(function( $ ) {
    'use strict';

    $(function() {
        // tabs
        var $tabBoxes = $('.save-as-image-pdfcrowd-metaboxes'),
            $currentTab,
            $currentTabLink,
            $tabContent,
            $hash;

        // Tabs on load
        if(window.location.hash && window.location.hash.startsWith('#save-as-image-pdfcrowd')) {
            $hash = window.location.hash;
            $tabBoxes.addClass('hidden');
            $currentTab = $($hash).toggleClass('hidden');
            $('.nav-tab').removeClass('nav-tab-active');
            $('.nav-tab[href='+$hash+']').addClass('nav-tab-active');
        }

        //Tabs on click
        $('#save-as-image-pdfcrowd-nav-tab').on('click', 'a', function(e){
            e.preventDefault();
            $tabContent = $(this).attr('href');
            $('.nav-tab').removeClass('nav-tab-active');
            $tabBoxes.addClass('hidden');
            $currentTab = $($tabContent).toggleClass('hidden');
            $(this).addClass('nav-tab-active');
            if(history.pushState) {
                history.pushState(null, null, $tabContent);
            }
            else {
                location.hash = $tabContent;
            }
        });

        window.SaveAsImagePdfcrowd = function(url, attrs, outputName) {
            console.log('conversion request');
        };

        window.SaveAsImagePdfcrowdShowButtonPreview = function(e) {
            if(e.name == 'save-as-image-pdfcrowd[button_styling]') {
                if(e.value == 'theme') {
                    $('#save-as-image-pdfcrowd-custom-button').hide();
                    return;
                } else {
                    $('#save-as-image-pdfcrowd-custom-button').show();
                }
            }

            var cursor = document.body.style.cursor;

            function getFormData(){
                var unindexed_array = $('#save-as-image-pdfcrowd-appearance :input').serializeArray();
                var indexed_array = {};

                $.map(unindexed_array, function(n, i){
                    indexed_array[n['name'].match(/\[(.*)\]/)[1]] = n['value'];
                });

                return indexed_array;
            }

            // collect values for inputs
            var style = getFormData();
            // console.log(style);

            $.ajax({
                type: 'post',
                url: ajaxurl,
                data: {
                    action: 'save_as_image_pdfcrowd_create_button',
                    style: style
                },
                success: function(data) {
                    $('#save-as-image-pdfcrowd-button-preview-content').html(data);
                },
                error: function(xhr) {
                    if(xhr.status) {
                        alert('Error ' + xhr.status + ' - ' + xhr.statusText);
                    }
                }
            });
        };

        var style_button = $("input[name='save-as-image-pdfcrowd[button_styling]']:checked");
        if(style_button.length) {
            window.SaveAsImagePdfcrowdShowButtonPreview(style_button[0]);
        }

        $('#save-as-image-pdfcrowd-appearance :input').change(function() {
            window.SaveAsImagePdfcrowdShowButtonPreview(this);
        });

        $('.save-as-image-pdfcrowd-color-field').wpColorPicker({
            change: function(event, ui) {
                $(this).val(ui.color.toString());
                window.SaveAsImagePdfcrowdShowButtonPreview(this);
            }
        });

        $('.save-as-image-pdfcrowd-expert').click(function(e) {
            $('.save-as-image-pdfcrowd-devi').show();
            $('.save-as-image-pdfcrowd-expert').hide();
            return false;
        });
    });
})( jQuery );
