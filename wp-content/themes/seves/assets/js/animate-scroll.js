function singleAnim(el, animation, offset, reverse){
	var element = el.selector;
	var scroll = jQuery(window).scrollTop();
	var elScroll = jQuery(element).offset().top - offset;
	
	if( scroll > elScroll)
		jQuery(element).addClass(animation);
	else if(reverse == true)
		jQuery(element).removeClass(animation);
}

function multipleAnim(el,animation, offset, reverse){
	var element = el.selector;
	var scroll = jQuery(window).scrollTop();

	jQuery(element).each(function(index){
		var elScroll = jQuery(this).offset().top - offset;
		if(scroll >= elScroll)
			jQuery(this).addClass(animation);
		else if(reverse == true)
			jQuery(this).removeClass(animation);
	});
}
