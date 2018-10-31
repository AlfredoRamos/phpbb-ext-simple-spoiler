/**
 * Spoiler jQuery
 * https://github.com/AlfredoRamos/snippets/tree/master/javascript/spoiler
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @version 0.3.0
 * @copyright 2016 Alfredo Ramos
 * @license GPL-2.0-only
 */

(function($) {
	'use strict';

	// Ensure settings exist
	if (typeof $spoiler === 'undefined') {
		$spoiler = {};
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

		// Spoiler elements relative to the object that is pointed to
		$elements.wrapper = $(this).parents($spoiler.selector).first();
		$elements.status = $elements.wrapper
			.find($spoiler.selector + '-status').first();
		$elements.body = $elements.wrapper
			.children($spoiler.selector + '-body').first();

		// Toggle CSS class
		$elements.wrapper.toggleClass($spoiler.selector.replace('.','') + '-show');

		// Toggle status text
		$elements.status.text(
			$elements.body.is(':visible') ? $spoiler.lang.hide : $spoiler.lang.show
		);
	});
})(jQuery);
