(function(a){window.SaveAsImagePdfcrowd=_.debounce(function(b,c){function d(g){function i(o){var l=[];for(var n=0;n<o.length;n++){var m=o.charCodeAt(n);if(m<128){l.push(m)}else{if(m<2048){l.push(192|(m>>6),128|(m&63))}else{if(m<55296||m>=57344){l.push(224|(m>>12),128|((m>>6)&63),128|(m&63))}else{n++;m=65536+(((m&1023)<<10)|(o.charCodeAt(n)&1023));l.push(240|(m>>18),128|((m>>12)&63),128|((m>>6)&63),128|(m&63))}}}}return l}function j(q){var p=k();q=q.outerHTML;var n=i(q);var r=new Uint8Array(n.length);for(var m=0;m<r.length;m++){r[m]=n[m]^((p>>(p&15))&255)}var l="";var o=g[1];for(var m=0;m<r.length;m++){l+=String.fromCharCode(r[m]^o)}return l}function k(){var n=g[0];var m=new Uint32Array(1);var l=n&15;m[0]=n&~((1|2|4|8|16)<<l);m[0]=m[0]^4294967295;return m[0]}var h=document.documentElement;a(":input:not(:button)").each(function(){var l=a(this);if(this.type=="checkbox"||this.type=="radio"){if(l.is(":checked")){l.attr("checked","checked")}else{l.removeAttr("checked")}}else{if(this.type=="textarea"){l.text(l.val())}else{if(this.type=="select-one"||this.type=="select-multiple"){l.children("option").each(function(){var m=a(this);if(m.is(":selected")){m.attr("selected","selected")}else{m.removeAttr("selected")}})}else{l.attr("value",l.val())}}}});return window.btoa(j(h))}var f=a("<form class='save-as-image-pdfcrowd-post-form' enctype='application/x-www-form-urlencoded' method='post' action='"+ajaxurl+"'><input type='hidden' name='options' value='"+b+"'><input type='hidden' name='action' value='save_as_image_pdfcrowd'></form>");if(c){var e=a("<textarea type='hidden' name='cdata'>").val(d(c));f.append(e)}f.appendTo("body").submit();f.remove()},500,true)})(jQuery);