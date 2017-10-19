<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author phpBBeesti.net
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
	'SPOILER_HELPLINE'	=> 'Kasutamine: [spoiler]tekst[/spoiler] või [spoiler title=pealkiri]tekst[/spoiler]',
	'SPOILER_SHOW'		=> 'Näita',
	'SPOILER_HIDE'		=> 'Peida'
]);
