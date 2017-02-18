<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author Smayliks
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

/*
 * DEVELOPERS PLEASE NOTE
 *
 * All language files should use UTF-8 as their encoding and the files must not contain a BOM.
 *
 * Placeholders can now contain order information, e.g. instead of
 * 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
 * translators to re-order the output of data while ensuring it remains correct
 *
 * You do not need this where single placeholders are used, e.g. 'Message %d' is fine
 * equally where a string contains only two placeholders which are used to wrap text
 * in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
 *
 * Some characters you may want to copy&paste:
 * ’ » “ ” …
 */

$lang = array_merge($lang, [
	'SPOILER'			=> 'Спойлер',
	'SPOILER_HELPLINE'	=> 'Использование: [spoiler]Текст[/spoiler] или [spoiler=Заголовок]Текст[/spoiler]',
	'SPOILER_SHOW'		=> 'Показать',
	'SPOILER_HIDE'		=> 'Скрыть'
]);
