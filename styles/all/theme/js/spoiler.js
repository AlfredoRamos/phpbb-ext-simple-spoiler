/**
 * Spoiler jQuery
 * https://github.com/AlfredoRamos/snippets/tree/master/javascript/spoiler
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @version 0.2.0
 * @copyright (c) 2016 Alfredo Ramos
 * @license GNU GPL-2.0
 */
(function($) {
	'use strict';
	$.fn.initSpoilers = function($settings) {
		// Overwrite settings
		$settings = $.extend({
			lang: {
				show: 'Show',
				hide: 'Hide'
			},
			selector: '.spoiler'
		}, $settings);

		// Event delegation
		this.on('click', $settings.selector + '-trigger', function() {
			// Spoiler elements relative to the object that is pointed to
			var $elements = {
				wrapper: $(this).parents($settings.selector).first(),
				status: $(this).parents($settings.selector)
					.find($settings.selector + '-status').first(),
				body: $(this).parents($settings.selector)
					.children($settings.selector + '-body').first()
			};

			// Toggle CSS class
			$elements.wrapper.toggleClass($settings.selector.replace('.','') + '-show');

			// Toggle status text
			$elements.status.text(
				$elements.body.is(':visible') ? $settings.lang.hide : $settings.lang.show
			);
		});
	};
})(jQuery);
