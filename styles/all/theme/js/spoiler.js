/**
 * Simple Spoiler extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 */

(function($) {
	'use strict';

	// Toggle status icon
	$(document.body).on('click', '.spoiler-header', function() {
		var $elements = {
			container: $(this).parent('.spoiler').first(),
			icon: $(this).find('.spoiler-status > .icon').first()
		};

		console.log($elements.container.attr('open'));
		console.log($elements.icon.attr('class'));

		if (typeof $elements.container.attr('open') === 'undefined') {
			// Is opened
			$elements.icon.removeClass('fa-eye');
			$elements.icon.addClass('fa-eye-slash');
		} else {
			// Is closed
			$elements.icon.removeClass('fa-eye-slash');
			$elements.icon.addClass('fa-eye');
		}
	});
})(jQuery);
