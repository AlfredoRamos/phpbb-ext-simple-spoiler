<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 *
 * Translated By : Bassel Taha Alhitary <http://alhitary.net>
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'SPOILER'			=> 'مُحتوى مَخفِي',
	'SPOILER_HELPLINE'	=> 'الإستخدام: [spoiler]النص[/spoiler] أو [spoiler title=العنوان]النص[/spoiler]',
	'SPOILER_SHOW'		=> 'إظهار',
	'SPOILER_HIDE'		=> 'إخفاء'
]);
