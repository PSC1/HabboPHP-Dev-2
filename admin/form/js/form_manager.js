jQuery.expr[":"].Contains=function(c,d,b){return jQuery(c).text().toUpperCase().indexOf(b[3].toUpperCase())>=0};jQuery.expr[":"].contains=function(c,d,b){return jQuery(c).text().toUpperCase().indexOf(b[3].toUpperCase())>=0};function reset_form_filter(){$("#mf_form_list > li").hide();$("#mf_pagination").show();if($("#mf_pagination > li.current_page").length>0){$($("#mf_pagination > li.current_page").data("liform_list")).show()}else{$("#mf_form_list > li").show()}$("#mf_form_list h3").unhighlight();$("ul.form_tag_list li").unhighlight();$("#filtered_result_box").fadeOut();$("#filtered_result_none").hide();$("#result_set_show_more").hide()}$(function(){$(".middle_form_bar > h3").click(function(){var a=$(this).parent().parent().attr("id");$("#"+a+" .form_option").slideToggle("medium");$("#"+a+" .form_option").promise().done(function(){$(this).parent().toggleClass("form_selected")})});$(".mf_link_disable a").click(function(){var d=$(this).parent().parent().attr("id");var a=d.split("_");var c=a[1];var b="";if($(this).text()=="Disable" || $(this).text()=="Desactiver"){b="disable"}else{if($(this).text()=="Enable" || $(this).text()=="Activer"){b="enable"}}if(b=="disable"||b=="enable"){$(this).text("Processing...");$(this).parent().css("position","relative");$(this).after('<img src="images/loader_small_grey.gif" style="position: absolute;margin-left: 12px" />');$.ajax({type:"POST",async:true,url:"toggle_form.php",data:{form_id:c,action:b},cache:false,global:true,dataType:"json",error:function(h,f,g){if(b=="disable"){b="Disable"}else{if(b=="Enable"){b="Enable"}}$("#"+d+" .mf_link_disable a").text(b);$("#"+d+" .mf_link_disable img").remove()},success:function(e){if(e.status=="ok"){if(e.action=="disable"){$("#liform_"+e.form_id).addClass("form_inactive");$("#liform_"+e.form_id+" .mf_link_disable a").text("Enable");$("#liform_"+e.form_id+" .mf_link_disable img").remove()}else{$("#liform_"+e.form_id).removeClass("form_inactive");$("#liform_"+e.form_id+" .mf_link_disable a").text("Disable");$("#liform_"+e.form_id+" .mf_link_disable img").remove()}$("#liform_"+e.form_id+" div.middle_form_bar").effect("highlight",{color:"#EDB817"},1500)}else{if(b=="disable"){b="Disable"}else{if(b=="Enable"){b="Enable"}}$("#"+d+" .mf_link_disable a").text(b);$("#"+d+" .mf_link_disable img").remove()}}})}return false});$("#mf_pagination > li").click(function(){var a=$(this).data("liform_list");$("#mf_form_list > li").hide();$(a).show();$("#mf_pagination > li.current_page").removeClass("current_page");$(this).addClass("current_page")});$("#filter_form_input").bind("focusin click",function(){if($("#filter_form_input").val()=="find form..."){$("#filter_form_input").val("");$("#mf_search_box,#filter_form_input").animate({width:"+=165px"},{duration:200,queue:false});$("#mf_search_box,#filter_form_input").promise().done(function(){$("#mf_search_title,#mf_search_tag").slideDown("medium");$("#mf_search_title,#mf_search_tag").promise().done(function(){$("#mf_search_box").addClass("search_focused");$("#mf_search_box,#filter_form_input").removeAttr("style")})})}$(".form_selected .form_option").hide();$(".form_selected").removeClass("form_selected")});$("#mf_search_title").click(function(){$(this).addClass("mf_pane_selected");$("#mf_search_title a").html("&#8674; form title");$("#mf_search_tag a").html("form tags");$("#mf_search_tag").removeClass("mf_pane_selected");$("#filter_form_input").val("");reset_form_filter();$("#filter_form_input").focus();return false});$("#mf_search_tag").click(function(){$(this).addClass("mf_pane_selected");$("#mf_search_tag a").html("&#8674; form tags");$("#mf_search_title a").html("form title");$("#mf_search_title").removeClass("mf_pane_selected");$("#filter_form_input").val("");reset_form_filter();$("#filter_form_input").focus();return false});$("#filter_form_input").keyup(function(){var d=$(this).val();var a=10;if(d!=""){$("#mf_form_list > li").removeClass("result_set").hide();$("#mf_pagination").hide();if($("#mf_search_title").hasClass("mf_pane_selected")){var c=$("#mf_form_list h3:contains('"+d+"')");c.parent().parent().show().addClass("result_set");c.unhighlight();c.highlight(d);$("#filtered_result_box span").text(d);$("#filtered_result_box").fadeIn();$("#filtered_result_total").text("Found "+c.length+" forms");if(c.length==0){$("#filtered_result_none").fadeIn()}else{$("#filtered_result_none").hide()}if(c.length>a){$("#result_set_show_more").show();$(".result_set:gt("+(a-1)+")").hide()}else{$("#result_set_show_more").hide()}}else{var b=$("ul.form_tag_list li:contains('"+d+"')");b.parent().parent().parent().parent().parent().show().addClass("result_set");b.unhighlight();b.highlight(d);$("#filtered_result_box span").text(d);$("#filtered_result_box").fadeIn();$("#filtered_result_total").text("Found "+b.length+" forms");if(b.length==0){$("#filtered_result_none").fadeIn()}else{$("#filtered_result_none").hide()}if(b.length>a){$("#result_set_show_more").show();$(".result_set:gt("+(a-1)+")").hide()}else{$("#result_set_show_more").hide()}}}else{reset_form_filter()}});$("#mf_filter_reset").click(function(){reset_form_filter();$("#mf_search_box").removeClass("search_focused");$("#mf_search_title,#mf_search_tag").hide();$("#filter_form_input").val("find form...");return false});$("#result_set_show_more > a").click(function(){var a=20;var d=$(".result_set:visible").last().index(".result_set");var c=d+1;var b=c+a;$(".result_set").slice(c,b).fadeIn();if(b>=$(".result_set").length){$("#result_set_show_more").hide()}return false});$("#dialog-enter-tagname").dialog({modal:true,autoOpen:false,closeOnEscape:false,width:400,position:["center",150],draggable:false,resizable:false,buttons:[{text:"Save Changes",id:"dialog-enter-tagname-btn-save-changes","class":"bb_button bb_small bb_green",click:function(){var a=parseInt($("#dialog-enter-tagname").data("form_id"));if($("#dialog-enter-tagname-input").val()==""){alert("Please enter a tag name!")}else{$(this).dialog("close");$("#liform_"+a+" ul.form_tag_list").append("<li class=\"processing\"><img src='images/loader_small_grey.gif' /></li>");$.ajax({type:"POST",async:true,url:"save_tags.php",data:{action:"add",form_id:a,tags:$("#dialog-enter-tagname-input").val()},cache:false,global:false,dataType:"json",error:function(d,b,c){$("#liform_"+a+" ul.form_tag_list li.processing").remove();alert("Error! Unable to add tag names. Please try again.")},success:function(b){if(b.status=="ok"){$("#liform_"+b.form_id+" li.form_tag_list_icon").siblings().remove();$("#liform_"+b.form_id+" ul.form_tag_list").append(b.tags_markup)}else{$("#liform_"+b.form_id+" ul.form_tag_list li.processing").remove();alert("Error! Unable to add tag names. Please try again.")}}})}}},{text:"Cancel",id:"dialog-enter-tagname-btn-cancel","class":"btn_secondary_action",click:function(){$(this).dialog("close")}}]});$("#dialog-enter-tagname-form").submit(function(){$("#dialog-enter-tagname-btn-save-changes").click();return false});$("ul.form_tag_list a.addtag").click(function(){var a=$(this).attr("id").split("_");$("#dialog-enter-tagname").data("form_id",a[1]);$("#dialog-enter-tagname-input").val("");$("#dialog-enter-tagname").dialog("open");return false});$("#mf_form_list").delegate("a.removetag","click",function(f){var d=$(this).parent().parent().closest("li").attr("id");var b=d.split("_");var a=parseInt(b[1]);var c=$(this).parent().text();var g=$(this).parent();if($(this).find("img").attr("src")!="images/loader_green_16.png"){$(this).find("img").attr("src","images/loader_green_16.png");$.ajax({type:"POST",async:true,url:"save_tags.php",data:{action:"delete",form_id:a,tags:c},cache:false,global:false,dataType:"json",error:function(j,h,i){g.find("img").attr("src","images/icons/53.png");alert("Error! Unable to delete tag name. Please try again.")},success:function(e){if(e.status=="ok"){g.fadeOut(function(){$(this).remove()})}else{g.find("img").attr("src","images/icons/53.png");alert("Error! Unable to delete tag name. Please try again.")}}})}return false});$("#dialog-enter-tagname-input").autocomplete({source:$("#dialog-enter-tagname-input").data("available_tags")});$(".mf_link_duplicate a").click(function(){var c=$(this).parent().parent().attr("id");var a=c.split("_");var b=a[1];if($(this).text()=="Duplicating..."){return false}$(this).text("Duplicating...");$(this).parent().css("position","relative");$(this).before('<img src="images/loader_small_grey.gif" style="position: absolute;margin-left: -28px" />');$.ajax({type:"POST",async:true,url:"duplicate_form.php",data:{form_id:b},cache:false,global:true,dataType:"json",error:function(g,d,f){$("#"+c+" .mf_link_duplicate a").text("Duplicate");$("#"+c+" .mf_link_duplicate img").remove();alert("Error! Unable to duplicate. Please try again.")},success:function(d){if(d.status=="ok"){window.location.replace("manage_forms.php?id="+d.form_id+"&hl=true")}else{$("#"+c+" .mf_link_duplicate a").text("Duplicate");$("#"+c+" .mf_link_duplicate img").remove();alert("Error! Unable to duplicate. Please try again.")}}});return false});if(selected_form_id_highlight>0){$("#liform_"+selected_form_id_highlight+" div.middle_form_bar").effect("highlight",{color:"#EDB817"},4000)}$("#dialog-confirm-form-delete").dialog({modal:true,autoOpen:false,closeOnEscape:false,width:550,position:["center","center"],draggable:false,resizable:false,open:function(){$("#btn-form-delete-ok").blur()},buttons:[{text:"Yes. Delete this form",id:"btn-form-delete-ok","class":"bb_button bb_small bb_green",click:function(){var a=parseInt($("#dialog-confirm-form-delete").data("form_id"));$("#dropui_theme_options div.dropui-content").attr("style","");$("#btn-form-delete-ok").prop("disabled",true);$("#btn-form-delete-cancel").hide();$("#btn-form-delete-ok").text("Deleting...");$("#btn-form-delete-ok").after("<div class='small_loader_box'><img src='images/loader_small_grey.gif' /></div>");$.ajax({type:"POST",async:true,url:"delete_form.php",data:{form_id:a},cache:false,global:false,dataType:"json",error:function(d,b,c){},success:function(b){if(b.status=="ok"){window.location.replace("manage_forms.php")}}})}},{text:"Cancel",id:"btn-form-delete-cancel","class":"btn_secondary_action",click:function(){$(this).dialog("close")}}]});$(".mf_link_delete a").click(function(){var c=$(this).parent().parent();var b=c.attr("id").split("_");var a=parseInt(b[1]);$("#confirm_form_delete_name").text(c.find("h3").text());$("#dialog-confirm-form-delete").data("form_id",a);$("#dialog-confirm-form-delete").dialog("open");return false});$("#dialog-change-theme").dialog({modal:true,autoOpen:false,closeOnEscape:false,width:400,position:["center","center"],draggable:false,resizable:false,buttons:[{text:"Save Changes",id:"btn-change-theme-ok","class":"bb_button bb_small bb_green",click:function(){var a=parseInt($("#dialog-change-theme").data("form_id"));$("#btn-change-theme-ok").prop("disabled",true);$("#btn-change-theme-cancel").hide();$("#btn-change-theme-ok").text("Applying Theme...");$("#btn-change-theme-ok").after("<div class='small_loader_box'><img src='images/loader_small_grey.gif' /></div>");$.ajax({type:"POST",async:true,url:"change_theme.php",data:{form_id:a,theme_id:$("#dialog-change-theme-input").val()},cache:false,global:false,dataType:"json",error:function(d,b,c){$("#btn-change-theme-cancel").show();$("#btn-change-theme-ok").text("Save Changes");$("#btn-change-theme-ok").next().remove();$("#btn-change-theme-ok").prop("disabled",false);alert("Error! Unable to apply the theme. Please try again.")},success:function(b){$("#btn-change-theme-cancel").show();$("#btn-change-theme-ok").text("Save Changes");$("#btn-change-theme-ok").next().remove();$("#btn-change-theme-ok").prop("disabled",false);if(b.status=="ok"){$("#liform_"+a).data("theme_id",$("#dialog-change-theme-input").val());$("#dialog-change-theme").dialog("close")}else{alert("Error! Unable to apply the theme. Please try again.")}}})}},{text:"Cancel",id:"btn-change-theme-cancel","class":"btn_secondary_action",click:function(){$(this).dialog("close")}}]});$(".mf_link_theme").click(function(){var c=$(this).parent().parent();var b=c.attr("id").split("_");var a=parseInt(b[1]);$("#dialog-change-theme").data("form_id",a);$("#dialog-change-theme-input").val(c.data("theme_id"));$("#dialog-change-theme").dialog("open");return false});$("#dialog-change-theme-input").bind("change",function(){if($(this).val()=="new"){window.location.replace("edit_theme.php")}})});