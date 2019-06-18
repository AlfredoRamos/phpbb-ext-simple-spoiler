/**
 * Spoiler jQuery
 * https://github.com/AlfredoRamos/snippets/tree/master/javascript/spoiler
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @version 0.4.0
 * @copyright 2016 Alfredo Ramos
 * @license GPL-2.0-only
 */

(function($) {
	'use strict';

	// Ensure settings exist
	if (typeof window.$spoiler === 'undefined') {
		var $spoiler = {};
	} else {
		$spoiler = window.$spoiler;
	}

	// Overwrite settings
	$spoiler = $.extend({
		lang: {
			show: 'Show',
			hide: 'Hide'
		},
		selector: '.spoiler'
	}, $spoiler);

	// Event delegation
	$('body').on('click', $spoiler.selector + '-trigger', function() {
		var $elements = {};

		// Spoiler elements relative to the object that triggered the event
		$elements.wrapper = $(this).parents($spoiler.selector).first();
		$elements.status = $elements.wrapper
			.find($spoiler.selector + '-status').first();
		$elements.body = $elements.wrapper
			.children($spoiler.selector + '-body').first();

		// Toggle spoiler class
		$elements.wrapper.toggleClass($spoiler.selector.replace('.','') + '-show');

		// Toggle status icon
		$elements.status.children('.icon').first().toggleClass(function() {
			var $iconClass = 'fa-eye';

			if ($elements.body.is(':visible')) {
				$(this).removeClass($iconClass);
				return $iconClass + '-slash';
			} else {
				$(this).removeClass($iconClass + '-slash');
				return $iconClass;
			}
		});

		// Toggle status text
		$elements.status.children('span').first().text(
			$elements.body.is(':visible') ? $spoiler.lang.hide : $spoiler.lang.show
		);
	});
})(jQuery);
