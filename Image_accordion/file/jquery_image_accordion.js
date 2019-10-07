 

jQuery(document).ready(function(){
	jQuery(".oxi-addons-image").width(jQuery("#oxi-addons-slider").width()/3.3);
	jQuery(".oxi-addons-item-img-1").addClass("oxi-addons-item-img-loaded")

	var loaded = true;

	function reset(){
		jQuery(".oxi-addons-image").width(jQuery("#oxi-addons-slider").width()/3.3);
		jQuery(".oxi-addons-image").attr("data-click",0);

		jQuery(".oxi-addons-image").find(".oxi-addons-item-img-2").css({
			opacity:0
		})

		jQuery(".oxi-addons-image").find(".oxi-addons-item-img-1").css({
			opacity:1
		})
	}

	reset();

	jQuery(window).resize(function(){
		reset();
	})

	jQuery(".oxi-addons-item-img-1, .oxi-addons-item-img-2").each(function(){
		var src = jQuery(this).attr("data-src")
		jQuery(this).css({
			background:`url(${src}) no-repeat`,
		})
	})

	jQuery(".oxi-addons-image").mouseover(function(){
		if (jQuery(window).width() > 980) {
			if (loaded) {
				jQuery(".oxi-addons-image:first-child").mouseout();
			}
			jQuery(this).find(".oxi-addons-item-img-1").css({
				opacity:0
			})

			jQuery(this).find(".oxi-addons-item-img-2").css({
				opacity:1,
			})

			jQuery(this).find(".oxi-addons-image-text").css({
				opacity:1
			})

			jQuery(".oxi-addons-image").width(jQuery("#oxi-addons-slider").width()/4)
			jQuery(this).width(jQuery("#oxi-addons-slider").width()/2)
		}
	})

	jQuery(".oxi-addons-image").mouseout(function(){
		if (jQuery(window).width() > 980) {
			jQuery(this).find(".oxi-addons-item-img-2").css({
				opacity:0
			})

			jQuery(this).find(".oxi-addons-item-img-1").css({
				opacity:1
			})

			jQuery(".oxi-addons-image").width(jQuery("#oxi-addons-slider").width()/3.3)
		}
	})

	jQuery(".oxi-addons-image:last-child").mouseover(function(event){
		if (jQuery(window).width() > 980) {
			jQuery(this).find(".oxi-addons-item-img-1").css({
				opacity:0
			})
	 
			jQuery(this).find(".oxi-addons-item-img-2").css({
				opacity:1
			})

			jQuery(".oxi-addons-image").width(jQuery("#oxi-addons-slider").width()/5)
			jQuery(this).width(jQuery("#oxi-addons-slider").width()/1.5)
		}
	})
 
	// note to remove
	jQuery(".oxi-addons-image:first-child").mouseover();

	jQuery(window).click(function(){
		reset();
	})
})
