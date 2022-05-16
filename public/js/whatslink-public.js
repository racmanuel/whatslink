(function ($) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).on('load', function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practice to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	$(function () {
		//Hide Elements
		$('p.whatslink-phone-message').hide();
		//Initialize the jQuery Mask
		$('#phone_region_code').mask('+00');
		$('#phone').mask('(000) 000 0000');

		//On Click in the Button of Generate Link
		$('#generate-link').click(function () {
			//Get the Values of the Fields
			var phone_code = $('#phone_region_code').val();
			var phone = $('#phone').val();
			//Send to the Console.
			console.log(phone_code + phone);
		});
		$('#phone_region_code').keyup(function () {
			$('span.phone_code').text($(this).val());
		});
		$('#phone').keyup(function () {
			$('span.phone').text($(this).val());
		});
		$('#greeting').keyup(function () {
			$('#whatslink-phone-input').text($(this).val());
			$('p.whatslink-phone-message').show();
			$('p.whatslink-phone-message').text($('#greeting').val());
			$('#whatslink-phone-input').val('null');
		});
	});
})(jQuery);