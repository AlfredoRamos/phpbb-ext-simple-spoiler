<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 *
 * Translated By : Bassel Taha Alhitary <http://alhitary.net>
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
	'HELP_BBCODE_BLOCK_SPOILERS' => 'إنشاء مُحتويات مَخفِية',

	'HELP_BBCODE_SPOILERS_BASIC_QUESTION'	=> 'إضافة مُحتوى مَخفِي في المشاركة',
	'HELP_BBCODE_SPOILERS_BASIC_ANSWER'		=> 'تستطيع إضافة مُحتوى مَخفِي بوضع المحتوى الذي تريده بين الوسوم <strong>[spoiler][/spoiler]</strong>. على سبيل المثال:<br /><br /><strong>[spoiler]</strong>%2$s<strong>[/spoiler]</strong><br /><br />ستكون النتيجة:<br />%1$s',

	'HELP_BBCODE_SPOILERS_TITLE_QUESTION'	=> 'إضافة مُحتوى مَخفِي مع العنوان في المشاركة',
	'HELP_BBCODE_SPOILERS_TITLE_ANSWER'		=> 'تستطيع بشكل اختياري إضافة عنوان مخصص للمُحتوى المَخفِي, وذلك بوضع المحتوى الذي تريده بين الوسوم <strong>[spoiler title=][/spoiler]</strong> ثم كتابة نص العنوان بعد علامة يساوي لـ title=. على سبيل المثال:<br /><br /><strong>[spoiler title=</strong>%3$s<strong>]</strong>%2$s<strong>[/spoiler]</strong><br /><br />ستكون النتيجة:<br />%1$s',

	'HELP_BBCODE_SPOILERS_DEMO_TITLE'	=> 'هذا عنوان المُحتوى المَخفِي',
	'HELP_BBCODE_SPOILERS_DEMO_BODY'	=> 'هنا سوف تجد المحتوى الذي تريد إخفائه'
]);
