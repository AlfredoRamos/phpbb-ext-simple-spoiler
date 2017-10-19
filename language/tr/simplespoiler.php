<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author pikachuturkey
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
	'SPOILER'			=> 'Spoiler',
	'SPOILER_HELPLINE'	=> 'Kullanımı: [spoiler]yazı metni[/spoiler] veya [spoiler title=başlık]yazı metni[/spoiler]',
	'SPOILER_SHOW'		=> 'Göster',
	'SPOILER_HIDE'		=> 'Gizle'
]);
