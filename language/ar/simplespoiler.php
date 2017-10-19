<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author Bassel Taha Alhitary <http://www.alhitary.net>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0
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
	'SPOILER_HELPLINE'	=> 'الإستخدام : [spoiler]النص[/spoiler] أو [spoiler title=العنوان]النص[/spoiler]',
	'SPOILER_SHOW'		=> 'عرض',
	'SPOILER_HIDE'		=> 'إخفاء'
]);
