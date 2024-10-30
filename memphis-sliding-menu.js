function mslide_admin_menu() {
    var first_child_bg_hover_color = '';
    var first_child_text_hover_color = '';
    var header_glow_color =  jQuery('#mslide-header-glow-color-mslide-picker').prop('value');
    var header_bg_glow_radius =  jQuery('#mslide-header-bg-glow-radius-mslide-range').prop('value');
    var header_bg_glow_color =  jQuery('#mslide-header-bg-glow-color-mslide-picker').prop('value');
    var header_text_glow_radius =  jQuery('#mslide-header-text-glow-radius-mslide-range').prop('value');
    
    var body_bg_hover_color = '';
    var body_text_hover_color = '';
    var body_glow_color = jQuery('#mslide-body-glow-color-mslide-picker').prop('value');
     // SET STATIC WIDTH OF PREVIEW WINDOWS
    jQuery('.memphis-sliding-menu').addClass('mslide-admin-sliding-menu-width');
    // INIT WORDPRESS COLOR PICKER
    var color_options = {
	change: function(event, ui) {
	    var element = jQuery(this).prop('id');
	    if (element == 'mslide-header-bg-color-mslide-picker') jQuery('.memphis-sliding-menu > ul > li:first-child').css('background', ui.color.toString());
	    else if (element == 'mslide-header-bg-hover-color-mslide-picker') first_child_bg_hover_color = ui.color.toString(); 
	    else if (element == 'mslide-header-text-color-mslide-picker') jQuery('.memphis-sliding-menu > ul > li:first-child a').css('color', ui.color.toString());
	    else if (element == 'mslide-header-text-hover-color-mslide-picker') first_child_text_hover_color = ui.color.toString();
	    else if (element == 'mslide-header-glow-color-mslide-picker') {
		if (jQuery('#mslide-header-glow').is(':checked')) jQuery('.memphis-sliding-menu > ul > li:first-child a').css('text-shadow', '1px 1px '+ header_text_glow_radius+'px '+ui.color.toString());
		header_glow_color = ui.color.toString();
	    }
	    else if (element == 'mslide-header-bg-glow-color-mslide-picker') {
		if (jQuery('#mslide-header-bg-glow').is(':checked')) jQuery('.memphis-sliding-menu > ul > li:first-child').css('box-shadow', 'inset 0px 0px '+ header_bg_glow_radius+'px '+ui.color.toString());
		header_bg_glow_color = ui.color.toString();
	    }
	    
	    
	    else if (element == 'mslide-body-bg-color-mslide-picker') jQuery('.memphis-sliding-menu > ul > li:not(:first-child)').css('background', ui.color.toString());
	    else if (element == 'mslide-body-bg-hover-color-mslide-picker') body_bg_hover_color = ui.color.toString();
	    else if (element == 'mslide-body-text-color-mslide-picker') jQuery('.memphis-sliding-menu > ul > li:not(:first-child) > a').css('color', ui.color.toString());
	    else if (element == 'mslide-body-text-hover-color-mslide-picker') body_text_hover_color = ui.color.toString();
	    else if (element == 'mslide-body-glow-color-mslide-picker') {
		if (jQuery('#mslide-body-glow').is(':checked')) jQuery('.memphis-sliding-menu > ul > li:not(:first-child) > a').css('text-shadow', '1px 1px 5px '+ui.color.toString());
		body_glow_color = ui.color.toString();
	    }
	    
	    else if (element == 'mslide-outter-border-color-mslide-picker') jQuery('.memphis-sliding-menu').css('border-color', ui.color.toString());
	    else if (element == 'mslide-inner-border-color-mslide-picker') jQuery('.memphis-sliding-menu > ul > li').css('border-color', ui.color.toString());

	   
	}
    }
    jQuery('[id$="mslide-picker"]').wpColorPicker(color_options);
    // HEADER HOVER PREVIEW
    jQuery('.memphis-sliding-menu > ul > li:first-child').hover(
	function() {
	    jQuery(this).css('background', first_child_bg_hover_color);
	    jQuery(this).css('box-shadow', 'inset 0px 0px '+header_bg_glow_radius+'px '+header_bg_glow_color);
	    jQuery(this).children().css('color', first_child_text_hover_color);
	}, function() {
	    jQuery(this).css('background', '');
	    if (jQuery('#mslide-header-bg-glow').not(':checked')) jQuery(this).css('box-shadow', '');
	    jQuery(this).children().css('color', '');
	   
	}
    );
    jQuery('#mslide-header-bold').on("input change", function() {
	if (jQuery(this).prop('checked')) jQuery('.memphis-sliding-menu > ul > li:first-child > a').css('font-weight','bold');
	else jQuery('.memphis-sliding-menu > ul > li:first-child > a').css('font-weight','normal');
    });
    jQuery('#mslide-header-italic').on("input change", function() {
	if (jQuery(this).prop('checked')) jQuery('.memphis-sliding-menu > ul > li:first-child > a').css('font-style','italic');
	else jQuery('.memphis-sliding-menu > ul > li:first-child > a').css('font-style','normal');
    });
    jQuery('#mslide-header-strike').on("input change", function() {
	if (jQuery(this).prop('checked')) jQuery('.memphis-sliding-menu > ul > li:first-child > a').css('text-decoration','line-through');
	else jQuery('.memphis-sliding-menu > ul > li:first-child > a').css('text-decoration','none');
    });
    jQuery('#mslide-header-glow').on("input change", function() {
	if (jQuery(this).prop('checked')) jQuery('.memphis-sliding-menu > ul > li:first-child > a').css('text-shadow', '2px 2px '+header_text_glow_radius+'px '+header_glow_color);
	else jQuery('.memphis-sliding-menu > ul > li:first-child > a').css('text-shadow','none');
    });
     jQuery('#mslide-header-bg-glow').on("input change", function() {
	if (jQuery(this).prop('checked')) jQuery('.memphis-sliding-menu > ul > li:first-child').css('box-shadow', 'inset 0px 0px '+header_bg_glow_radius+'px '+header_bg_glow_color);
	else jQuery('.memphis-sliding-menu > ul > li:first-child').css('box-shadow','none');
    });
     // BODY HOVER PREVIEW
    jQuery('.memphis-sliding-menu > ul > li:not(:first-child)').hover(
	function() {
	    jQuery(this).css('background', body_bg_hover_color);
	    jQuery(this).children().css('color', body_text_hover_color);
	}, function() {
	    jQuery(this).css('background', '');
	    jQuery(this).children().css('color', '');
	}
    );
    jQuery('#mslide-body-bold').on("input change", function() {
	if (jQuery(this).prop('checked')) jQuery('.memphis-sliding-menu > ul > li:not(:first-child) > a').css('font-weight','bold');
	else jQuery('.memphis-sliding-menu > ul > li:not(:first-child) > a').css('font-weight','normal');
    });
    jQuery('#mslide-body-italic').on("input change", function() {
	if (jQuery(this).prop('checked')) jQuery('.memphis-sliding-menu > ul > li:not(:first-child) > a').css('font-style','italic');
	else jQuery('.memphis-sliding-menu > ul > li:not(:first-child) > a').css('font-style','normal');
    });
    jQuery('#mslide-body-strike').on("input change", function() {
	if (jQuery(this).prop('checked')) jQuery('.memphis-sliding-menu > ul > li:not(:first-child) > a').css('text-decoration','line-through');
	else jQuery('.memphis-sliding-menu > ul > li:not(:first-child) > a').css('text-decoration','none');
    });
    jQuery('#mslide-body-glow').on("input change", function() {
	if (jQuery(this).prop('checked')) jQuery('.memphis-sliding-menu > ul > li:not(:first-child) > a').css('text-shadow', '2px 2px 5px '+body_glow_color);
	else jQuery('.memphis-sliding-menu > ul > li:not(:first-child) > a').css('text-shadow','none');
    });
    
    // RANGE OPTIONS
    jQuery('[id$="mslide-range"]').on("input change", function() {
	var element = jQuery(this).prop('id');
	var value = jQuery(this).prop('value');
	 if (element == 'mslide-header-padding-tb-mslide-range') {
	    jQuery('.memphis-sliding-menu > ul > li:first-child').css('padding-top', value+'px');
	    jQuery('.memphis-sliding-menu > ul > li:first-child').css('padding-bottom', value+'px');
	    jQuery( '#mslide-header-padding-tb-mslide-range-text').prop('value', value); 
	} else  if (element == 'mslide-header-padding-lr-mslide-range') {
	    jQuery('.memphis-sliding-menu > ul > li:first-child').css('padding-left', value+'px');
	    jQuery('.memphis-sliding-menu > ul > li:first-child').css('padding-right', value+'px');
	    jQuery( '#mslide-header-padding-lr-mslide-range-text').prop('value', value); 
	} else  if (element == 'mslide-body-padding-tb-mslide-range') {
	    jQuery('.memphis-sliding-menu > ul > li:not(:first-child)').css('padding-top', value+'px');
	    jQuery('.memphis-sliding-menu > ul > li:not(:first-child)').css('padding-bottom', value+'px');
	    jQuery( '#mslide-body-padding-tb-mslide-range-text').prop('value', value); 
	} else  if (element == 'mslide-body-padding-lr-mslide-range') {
	    jQuery('.memphis-sliding-menu > ul > li:not(:first-child)').css('padding-left', value+'px');
	    jQuery('.memphis-sliding-menu > ul > li:not(:first-child)').css('padding-right', value+'px');
	    jQuery( '#mslide-body-padding-lr-mslide-range-text').prop('value', value); 
	} else  if (element == 'mslide-header-font-size-mslide-range') {
	    jQuery('.memphis-sliding-menu > ul > li:first-child a').css('font-size', value+'em');
	    jQuery( '#mslide-header-font-size-mslide-range-text').prop('value', value); 
	} else  if (element == 'mslide-body-font-size-mslide-range') {
	    jQuery('.memphis-sliding-menu > ul > li:not(:first-child) > a').css('font-size', value+'em');
	    jQuery( '#mslide-body-font-size-mslide-range-text').prop('value', value); 
	} else  if (element == 'mslide-header-bg-glow-radius-mslide-range') {
	    header_bg_glow_radius = value;
	    if (jQuery('#mslide-header-bg-glow').is(':checked')) jQuery('.memphis-sliding-menu > ul > li:first-child').css('box-shadow', 'inset 0px 0px '+header_bg_glow_radius+'px '+header_bg_glow_color);
	    jQuery( '#mslide-header-bg-glow-radius-mslide-range-text').prop('value', header_bg_glow_radius); 
	} else  if (element == 'mslide-header-text-glow-radius-mslide-range') {
	    header_text_glow_radius = value;
	    jQuery('.memphis-sliding-menu > ul > li:first-child > a').css('text-shadow', '1px 1px '+header_text_glow_radius+'px '+header_glow_color);
	    jQuery( '#mslide-header-text-glow-radius-mslide-range-text').prop('value', header_text_glow_radius); 
	} 
	
    });
    // FONT CHANGES
     jQuery('#mslide-font-family').on("input change", function() {
	var font_family = jQuery(this).prop('value').replace(/-/g,' ');
	if (font_family == 'theme') {
	    jQuery('#memphis-sliding-menu, .memphis-sliding-menu ul, .memphis-sliding-menu li, .memphis-sliding-menu a').css('font-family','inherit');
	} else jQuery('#memphis-sliding-menu, .memphis-sliding-menu ul, .memphis-sliding-menu li, .memphis-sliding-menu a').css('font-family',font_family);
	
    });
    jQuery('#mslide-header-bold').on("input change", function() {
	if (jQuery(this).prop('checked')) jQuery('.memphis-sliding-menu > ul > li:first-child > a').css('font-weight','bold');
	else jQuery('.memphis-sliding-menu > ul > li:first-child > a').css('font-weight','normal');
    });
    jQuery('#mslide-header-italic').on("input change", function() {
	if (jQuery(this).prop('checked')) jQuery('.memphis-sliding-menu > ul > li:first-child > a').css('font-style','italic');
	else jQuery('.memphis-sliding-menu > ul > li:first-child > a').css('font-style','none');
    });
    jQuery('#mslide-header-strike').on("input change", function() {
	if (jQuery(this).prop('checked')) jQuery('.memphis-sliding-menu > ul > li:first-child > a').css('text-decoration','line-through');
	else jQuery('.memphis-sliding-menu > ul > li:first-child > a').css('text-decoration','none');
    });
}

function memphis_sliding_menu() {
	jQuery('.memphis-sliding-menu li:has(ul)').addClass("has-sub");
	jQuery('.memphis-sliding-menu a div').click(function(event) { msm_toogle_menu(this, event); });
	//jQuery('.memphis-sliding-menu ul li').click(function(event) { event.preventDefault(); });
	jQuery( document ).ready(function() {
		var current_ul = jQuery(".memphis-sliding-menu").find(".current_page_item").parent();
		mphs_show_current_menu(current_ul);
		mslide_menus.reverse();
		for(var i=0; i < mslide_menus.length; i++ ) {
			jQuery(mslide_menus[i]).delay(300).show();
			jQuery('.current_page_item').children('ul').delay(300).show();
			jQuery('.current_page_item').closest('li').addClass('active');
			jQuery('.current_page_ancestor').closest('li').addClass('active');
		}
	});
}


var mslide_menus = [];
function mphs_show_current_menu(menu_item) {
	var depth = jQuery(menu_item).parents().length;
	if (jQuery(menu_item).is('ul')) {
		//jQuery(menu_item).show();
		mslide_menus.push(menu_item);
		if (jQuery(menu_item).parent().parent().is('ul') && depth != 8) {
			mphs_show_current_menu(jQuery(menu_item).parent().parent());
		}
	}
}

function msm_toogle_menu(menu_item, event) {
	event.preventDefault();
	var checkElement = jQuery(menu_item).parent().next();
	var depth = jQuery(checkElement).parents().length;
	if(depth == 8) {
		jQuery('.memphis-sliding-menu li').removeClass('active');
		jQuery(menu_item).closest('li').addClass('active');	
	
		if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
			jQuery(menu_item).closest('li').removeClass('active');
			checkElement.slideUp('normal');
		}
	
		if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
			jQuery('.memphis-sliding-menu ul ul:visible').slideUp('normal');
			checkElement.slideDown('normal');
		}
	} else {
		if (jQuery(menu_item).closest('li').hasClass('active')) { jQuery(menu_item).closest('li').removeClass('active'); checkElement.slideUp('normal'); }
		else { jQuery(menu_item).closest('li').addClass('active'); checkElement.slideDown('normal'); }
			
		
	}
}