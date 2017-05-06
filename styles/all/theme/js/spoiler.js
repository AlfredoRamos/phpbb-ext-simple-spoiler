/**
 * Spoiler jQuery
 * https://github.com/AlfredoRamos/snippets/tree/master/javascript/spoiler
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @version 0.1.1
 * @copyright (c) 2016 Alfredo Ramos
 * @license GNU GPL-2.0
 */

$(function() {
	$.fn.initSpoilers = function($options) {
		// Overwrite options
		$options = $.extend({
			showText: 'Show',
			hideText: 'Hide',
			selector: '.' + this.attr('class')
		}, $options);

		$.each(this, function() {
			var $spoiler = {
				wrapper: $(this),
				trigger: $(this).children($options.selector + '-trigger').first(),
				status: $(this).find($options.selector + '-status').first(),
				body: $(this).children($options.selector + '-body').first()
			};

			$spoiler.trigger.on('click', function() {
				// Toggle CSS class
				$spoiler.wrapper.toggleClass($options.selector.replace('.', '') + '-shown');

				// Toggle status text
				$spoiler.status.text(
					$spoiler.body.is(':visible') ? $options.hideText : $options.showText
				);
			});
		});
	};
});
