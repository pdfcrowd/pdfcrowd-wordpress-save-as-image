(function(a){a(function(){var h=a(".save-as-image-pdfcrowd-metaboxes"),g,c,j,d;if(window.location.hash&&window.location.hash.startsWith("#save-as-image-pdfcrowd")){d=window.location.hash;h.addClass("hidden");g=a(d).toggleClass("hidden");a(".nav-tab").removeClass("nav-tab-active");a('.nav-tab[href="'+d+'"]').addClass("nav-tab-active")}a("#save-as-image-pdfcrowd-nav-tab").on("click","a",function(k){k.preventDefault();j=a(this).attr("href");a(".nav-tab").removeClass("nav-tab-active");h.addClass("hidden");g=a(j).toggleClass("hidden");a(this).addClass("nav-tab-active");if(history.pushState){history.pushState(null,null,j)}else{location.hash=j}});window.SaveAsImagePdfcrowd=function(l,n,k,m){if(!k.indicator||window.pdfcrowdConversionInProgress){return}setTimeout(function(){window.pdfcrowdConversionInProgress=false;window.SaveAsImagePdfcrowdIndicators.functionFromName(k.indicator)(false,m)},4000);window.SaveAsImagePdfcrowdIndicators.functionFromName(k.indicator)(true,m);console.log("conversion request");window.pdfcrowdConversionInProgress=true};window.SaveAsImagePdfcrowdShowButtonPreview=function(m){if(m.name=="save-as-image-pdfcrowd[button_styling]"){if(m.value=="theme"){a("#save-as-image-pdfcrowd-custom-button").hide();return}else{a("#save-as-image-pdfcrowd-custom-button").show()}}function k(){var o=a("#save-as-image-pdfcrowd-appearance :input").serializeArray();var n={};a.map(o,function(q,p){n[q.name.match(/\[(.*)\]/)[1]]=q.value});return n}var l=k();a.ajax({type:"post",url:ajaxurl,data:{action:"save_as_image_pdfcrowd_create_button",style:l},success:function(n){a("#save-as-image-pdfcrowd-button-preview-content").html(n);window.SaveAsImagePdfcrowdIndicators.init()},error:function(n){if(n.status){alert("Error "+n.status+" - "+n.statusText)}}})};a("#save-as-image-pdfcrowd-contact-submit").click(function(){alert("Ajax POST to our site");a("#TB_overlay").click()});var i=a("input[name='save-as-image-pdfcrowd[button_styling]']:checked");if(i.length){window.SaveAsImagePdfcrowdShowButtonPreview(i[0])}a("#save-as-image-pdfcrowd-appearance :input").change(function(){window.SaveAsImagePdfcrowdShowButtonPreview(this)});a(".save-as-image-pdfcrowd-color-field").wpColorPicker({change:function(k,l){a(this).val(l.color.toString());window.SaveAsImagePdfcrowdShowButtonPreview(this)}});a(".save-as-image-pdfcrowd-expert-show").click(function(k){a(".save-as-image-pdfcrowd-devi").show();a(".save-as-image-pdfcrowd-expert-hide").show();a(".save-as-image-pdfcrowd-expert-show").hide();return false});a(".save-as-image-pdfcrowd-expert-hide").click(function(k){a(".save-as-image-pdfcrowd-devi").hide();a(".save-as-image-pdfcrowd-expert-hide").hide();a(".save-as-image-pdfcrowd-expert-show").show();return false});a(".save-as-image-pdfcrowd-text-for-radio").click(function(){a(this).prevAll(":radio").prop("checked",true);return false});function f(k){if(k==="email"){a(".save-as-image-pdfcrowd-email-details").show()}else{a(".save-as-image-pdfcrowd-email-details").hide()}}a('input:radio[name="save-as-image-pdfcrowd[button_disposition]"]').change(function(){f(a(this).val())});f(a('input:radio[name="save-as-image-pdfcrowd[button_disposition]"]:checked').val());function b(l){var k=a("#save-as-image-pdfcrowd-cm-content-options input:checkbox");if(l!="content"){k.prop("checked",false);k.prop("disabled",true)}else{k.prop("disabled",false)}}a('input:radio[name="save-as-image-pdfcrowd[conversion_mode]"]').change(function(){b(a(this).val())});b(a('input:radio[name="save-as-image-pdfcrowd[conversion_mode]"]:checked').val());function e(k){if(k=="regular"){a("#save-as-image-pdfcrowd-lic-cred").show()}else{a("#save-as-image-pdfcrowd-lic-cred").hide()}}a('input:radio[name="save-as-image-pdfcrowd[license_type]"]').change(function(){e(a(this).val())});e(a('input:radio[name="save-as-image-pdfcrowd[license_type]"]:checked').val());a("#save-as-image-pdfcrowd-use-predefined-h-html").click(function(){a("#save-as-image-pdfcrowd-header_html").val(a("#save-as-image-pdfcrowd-hidden-header").val())});a("#save-as-image-pdfcrowd-use-predefined-f-html").click(function(){a("#save-as-image-pdfcrowd-footer_html").val(a("#save-as-image-pdfcrowd-hidden-footer").val())});if(a("#save-as-image-pdfcrowd-wizard")){a("#save-as-image-pdfcrowd-wizard-done").click(function(){let mode;switch(a('input:radio[name="save-as-image-pdfcrowd-wizard-cm"]:checked').val()){case"canvas":mode="#save-as-image-pdfcrowd-conversion-mode-content";a("#save-as-image-pdfcrowd-button-user-drawings").prop("disabled",false).prop("checked",true);break;case"data":mode="#save-as-image-pdfcrowd-conversion-mode-content";a("#save-as-image-pdfcrowd-button-user-drawings").prop("disabled",false).prop("checked",false);break;case"pp":case"private":mode="#save-as-image-pdfcrowd-conversion-mode-upload";break;default:mode="#save-as-image-pdfcrowd-conversion-mode-url"}a(mode).prop("checked",true);a("#pdfcrowd-save").click()});a("#save-as-image-pdfcrowd-wizard-next").click(function(){let step=a(this).data("step");a("#save-as-image-pdfcrowd-wizard-step-"+step).hide();step++;if(step==4){a("#save-as-image-pdfcrowd-wizard-next").hide()}a("#save-as-image-pdfcrowd-wizard-step-"+step).show();a(this).data("step",step)});a("#save-as-image-pdfcrowd-output_format").appendTo("#save-as-image-pdfcrowd-wizard-output_format");a("#save-as-image-pdfcrowd-screenshot_width").appendTo("#save-as-image-pdfcrowd-wizard-screenshot_width");a("#save-as-image-pdfcrowd-button-text").appendTo("#save-as-image-pdfcrowd-wizard-button-text");a("#save-as-image-pdfcrowd-public").appendTo("#save-as-image-pdfcrowd-wizard-public");a("#save-as-image-pdfcrowd-private").appendTo("#save-as-image-pdfcrowd-wizard-private");a("#save-as-image-pdfcrowd-pp").appendTo("#save-as-image-pdfcrowd-wizard-pp");a("#save-as-image-pdfcrowd-data").appendTo("#save-as-image-pdfcrowd-wizard-data");a("#save-as-image-pdfcrowd-canvas").appendTo("#save-as-image-pdfcrowd-wizard-canvas");a("#save-as-image-pdfcrowd-wizard-step-1").show()}})})(jQuery);