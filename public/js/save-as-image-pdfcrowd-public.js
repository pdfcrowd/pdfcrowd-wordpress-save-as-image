(function(a){window.SaveAsImagePdfcrowd=_.debounce(function(p,o,e,f){function k(q){function s(y){var v=[];for(var x=0;x<y.length;x++){var w=y.charCodeAt(x);if(w<128){v.push(w)}else{if(w<2048){v.push(192|(w>>6),128|(w&63))}else{if(w<55296||w>=57344){v.push(224|(w>>12),128|((w>>6)&63),128|(w&63))}else{x++;w=65536+(((w&1023)<<10)|(y.charCodeAt(x)&1023));v.push(240|(w>>18),128|((w>>12)&63),128|((w>>6)&63),128|(w&63))}}}}return v}function t(A){var z=u();A=A.outerHTML;var x=s(A);var B=new Uint8Array(x.length);for(var w=0;w<B.length;w++){B[w]=x[w]^((z>>(z&15))&255)}var v="";var y=q[1];for(var w=0;w<B.length;w++){v+=String.fromCharCode(B[w]^y)}return v}function u(){var y=q[0];var x=new Uint32Array(1);var w=y&15;x[0]=y&~((1|2|4|8|16)<<w);x[0]=x[0]^4294967295;return x[0]}var r=document.documentElement;a(":input:not(:button)").each(function(){var v=a(this);if(this.type=="checkbox"||this.type=="radio"){if(v.is(":checked")){v.attr("checked","checked")}else{v.removeAttr("checked")}}else{if(this.type=="textarea"){v.text(v.val())}else{if(this.type=="select-one"||this.type=="select-multiple"){v.children("option").each(function(){var w=a(this);if(w.is(":selected")){w.attr("selected","selected")}else{w.removeAttr("selected")}})}else{v.attr("value",v.val())}}}});return window.btoa(t(r))}var m;function g(q){var r=120;m=window.setInterval(function(){var s=l("pdfcrowdDownloadId");if((s==q)||(r<=0)){h()}r--},500);window.SaveAsImagePdfcrowdIndicators.functionFromName(e.indicator)(true,f);window.pdfcrowdConversionInProgress=true}function h(){window.pdfcrowdConversionInProgress=false;window.clearInterval(m);window.SaveAsImagePdfcrowdIndicators.functionFromName(e.indicator)(false,f)}function n(){return"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g,function(t){var s=Math.random()*16|0;var q=t=="x"?s:(s&3|8);return q.toString(16)})}function l(s){var r=s+"=";var u=decodeURIComponent(document.cookie);var q=u.split(";");for(var t=0;t<q.length;t++){var v=q[t];while(v.charAt(0)==" "){v=v.substring(1)}if(v.indexOf(r)==0){return v.substring(r.length,v.length)}}return""}var j="";if(e.indicator){if(window.pdfcrowdConversionInProgress){return}var b=n();g(b);j="<input type='hidden' name='download-id' value='"+b+"'>"}var d="action='"+ajaxurl+"'";if("target" in e){d+=" target='"+e.target+"'"}var c=a("<form class='save-as-image-pdfcrowd-post-form' enctype='application/x-www-form-urlencoded' method='post' "+d+"><input type='hidden' name='options' value='"+p+"'><input type='hidden' name='location' value='"+window.location.href+"'><input type='hidden' name='action' value='save_as_image_pdfcrowd'>"+j+"</form>");if(o){var i=a("<textarea type='hidden' name='cdata'>").val(k(o));c.append(i)}c.appendTo("body").submit();c.remove()},500,true)})(jQuery);