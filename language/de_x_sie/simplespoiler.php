<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author ConeRX
 * @copyright 2017 Alfredo Ramos
 * @license GNU GPL-3.0+
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB')) {
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang)) {
	$lang = [];
}

$lang = array_merge($lang, [
	'SPOILER'			=> 'Spoiler',
	'SPOILER_HELPLINE'	=> 'Verwendung: [spoiler]Text[/spoiler] oder [spoiler=title]Text[/spoiler]',
	'SPOILER_SHOW'		=> 'Anzeigen',
	'SPOILER_HIDE'		=> 'Ausblenden'
]);
