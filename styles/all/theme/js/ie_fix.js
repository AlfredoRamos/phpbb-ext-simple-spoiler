/**
 * Simple Spoiler extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 */

'use strict';

var _userAgent = window.navigator.userAgent;
var _isIE =	_userAgent.indexOf('MSIE') >= 0 ||
	_userAgent.indexOf('Trident/') >= 0;
var _spoilers = document.querySelectorAll('.spoiler');

// Fix spoilers for IE
if (_spoilers.length > 0 && _isIE) {
	for (var i = 0; i < _spoilers.length; i++) {
		var _cssClass = _spoilers[i].className + ' ie';
		_spoilers[i].className = _cssClass.trim();
	}
}
