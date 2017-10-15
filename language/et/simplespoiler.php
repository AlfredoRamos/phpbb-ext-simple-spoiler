<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GNU GPL-2.0
 * Estonian translation by phpBBeesti.net
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
	'SPOILER_HELPLINE'	=> 'Kasutamine: [spoiler]tekst[/spoiler] või [spoiler=title]tekst[/spoiler]',
	'SPOILER_SHOW'		=> 'Näita',
	'SPOILER_HIDE'		=> 'Peida'
]);
