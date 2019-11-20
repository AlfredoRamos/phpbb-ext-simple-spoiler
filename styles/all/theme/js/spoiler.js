/**
 * Simple Spoiler extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 */

function fixIESpoilers() {
	var userAgent = window.navigator.userAgent;
	var isIE =	userAgent.indexOf('MSIE') >= 0 ||
		userAgent.indexOf('Trident/') >= 0;
	var spoilers = document.querySelectorAll('.spoiler');

	if (spoilers.length <= 0 || !isIE) {
		return;
	}

	// Fix spoilers for IE
	for (var i = 0; i < spoilers.length; i++) {
		var cssClass = spoilers[i].className + ' ie';
		spoilers[i].className = cssClass.trim();
	}
}

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

	// Fix spoilers for IE11
	fixIESpoilers();
})(jQuery);
