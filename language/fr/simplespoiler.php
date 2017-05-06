<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author Nokorbis
 * @copyright 2017 Alfredo Ramos
 * @license GNU GPL-2.0
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
	'SPOILER_HELPLINE'	=> 'Utilisation : [spoiler]texte[/spoiler] ou [spoiler=titre]texte[/spoiler]',
	'SPOILER_SHOW'		=> 'Afficher',
	'SPOILER_HIDE'		=> 'Masquer'
]);
