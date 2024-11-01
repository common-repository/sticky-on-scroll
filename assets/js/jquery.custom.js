(function($) {
	jQuery(document).ready(function($) {
		var current_width = jQuery(window).width();
		if(SS_obj.selectors!='' &&  current_width > SS_obj.width){
			jQuery(SS_obj.selectors).stopAtTop();
		}
	});
})(jQuery);