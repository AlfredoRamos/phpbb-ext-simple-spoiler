<?php

/**
 * Simple Spoiler extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@proton.me>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
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
	'SPOILER'			=> 'ספויילר',
	'SPOILER_HELPLINE'	=> 'שימוש: [spoiler]טקסט[/spoiler] או [spoiler title=title]טקסט[/spoiler]'
]);
