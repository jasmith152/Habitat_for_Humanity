/*!
* jQuery Image Overlay v1.2.0
* http://www.ferretarmy.com/files/jQuery/ImageOverlay/ImageOverlay.html
*
* Copyright (c) 2009 Jon Neal
* Dual licensed under the MIT and GPL licenses, using the same terms as jQuery.
* Refer to http://docs.jquery.com/License
*
* Date: 2009-09-10 (Thu, 10 September 2009)
* Revision: 1.2.0
*/
(function($) {

	$.fn.ImageOverlay = function(options) {
		
		// Options.
		var opts = $.extend({}, $.fn.ImageOverlay.defaults, options);
		
		return this.each(function() {
		
			// Allows metadata options to be set on the field level that override plugin options
			// if the metadata plugin is installed. http://docs.jquery.com/Plugins/Metadata
			var thisOpts = $.metadata ? $.extend({}, opts, $(this).metadata()) : opts;
			
			// Move the captions below the images, so they are hidden by default.
//			$('a', this).each(function() {
			$('dl', this).each(function() {
				
				var hrefOpts = $.metadata ? $.extend({}, thisOpts, $(this).metadata()) : thisOpts;
				
				$(this).css({
					width : hrefOpts.image_width,
					height : hrefOpts.image_height,
					borderColor : hrefOpts.border_color
				});
				$('img', this).attr({ title : '' });
			
				var imageHeight = $(this).height();
				var captionHeight = $('.caption', this).height();
				var useBottomOrigin = (hrefOpts.overlay_origin == 'top' ? false : true);
				
				if (useBottomOrigin)
				{
					// Set the CSS properties of the caption.
					$('.caption', this).css({
						top: (hrefOpts.always_show_overlay ? (imageHeight - captionHeight) + 'px' : imageHeight + 'px'),
						backgroundColor: hrefOpts.overlay_color,
						color : hrefOpts.overlay_text_color
					});
					
					// Build bottom hover functionality.
					if (!hrefOpts.always_show_overlay)
					{
						if (hrefOpts.animate)
						{
							$(this).hover(function() {
								$('.caption', this).stop().animate({top: (imageHeight - captionHeight) + 'px'}, {queue: false, duration: hrefOpts.overlay_speed});
							}, function() {
								$('.caption', this).stop().animate({top: imageHeight + 'px'}, {queue: false, duration: hrefOpts.overlay_speed});
							});
						}
						else
						{
							$(this).hover(function() {
								$('.caption', this).css('top', (imageHeight - captionHeight) + 'px');
							}, function() {
								$('.caption', this).css('top', imageHeight + 'px');
							});
						}
					}
				}
				else
				{
					// Set the CSS properties of the caption.
					$('.caption', this).css({
						top: (hrefOpts.always_show_overlay ? '0px' : -captionHeight + 'px'),
						backgroundColor: hrefOpts.overlay_color,
						color : hrefOpts.overlay_text_color
					});
				
					// Build top hover functionality.
					if (!hrefOpts.always_show_overlay)
					{
						if (hrefOpts.animate)
						{
							$(this).hover(function() {
								$('.caption', this).stop().animate({top: '0px'}, {queue: false, duration: hrefOpts.overlay_speed});
							}, function() {
								$('.caption', this).stop().animate({top: -captionHeight + 'px'}, {queue: false, duration: hrefOpts.overlay_speed});
							});
						}
						else
						{
							$(this).hover(function() {
								$('.caption', this).css('top', '0px');
							}, function() {
								$('.caption', this).css('top', -captionHeight + 'px');
							});
						}
					}
				}
			});
			
//			$(this).after('<p style="clear: both; height: 0;">&nbsp;</p>');
		});
	};
	
	$.fn.ImageOverlay.defaults = {
		always_show_overlay : false,
		animate : true,
		border_color : '#666',
		image_height : '150px',
		image_width : '200px',
		overlay_color : '#000',
		overlay_origin : 'bottom',
		overlay_speed : 'fast',
		overlay_text_color : '#FFF'
	};

})(jQuery);
