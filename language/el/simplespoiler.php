<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author manicx
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
	'SPOILER_HELPLINE'	=> 'Χρήση: [spoiler]κείμενο[/spoiler] ή [spoiler title=τίτλος]κείμενο[/spoiler]',
	'SPOILER_SHOW'		=> 'Εμφάνιση',
	'SPOILER_HIDE'		=> 'Κρύψιμο'
]);
