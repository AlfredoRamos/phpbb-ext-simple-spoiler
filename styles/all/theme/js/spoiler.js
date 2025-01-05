/**
 * Simple Spoiler extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@proton.me>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 */

(() => {
	'use strict';

	document.body.addEventListener('click', (e) => {
		if (!e.target.closest('.spoiler-header')) {
			return;
		}

		// Generate elements
		const elements = {
			container: e.target.closest('.spoiler'),
		};

		if (!elements.container) {
			return;
		}

		// Status icon
		elements.icon = elements.container.querySelector(
			'.spoiler-status > .icon'
		);

		if (!elements.icon) {
			return;
		}

		// Check if spoiler is opened
		const isOpen = elements.container.hasAttribute('open');

		// Toggle FontAwesome icon
		elements.icon.classList.toggle('fa-eye', isOpen);
		elements.icon.classList.toggle('fa-eye-slash', !isOpen);
	});
})();
