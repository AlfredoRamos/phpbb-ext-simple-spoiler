<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GNU GPL-2.0
 *
 * Translated by Bassel Taha Alhitary - www.alhitary.net
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
	'SPOILER_HELPLINE'	=> 'الإستخدام : [spoiler]النص[/spoiler] أو [spoiler=العنوان]النص[/spoiler]',
	'SPOILER_SHOW'		=> 'عرض',
	'SPOILER_HIDE'		=> 'إخفاء'
]);
