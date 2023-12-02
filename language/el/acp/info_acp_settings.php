<?php

/**
 * Simple Spoiler extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@protonmail.com>
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
	'SPOILER_DEPTH_LIMIT' => 'Μέγιστο βάθος spoilers',
	'SPOILER_DEPTH_LIMIT_EXPLAIN' => 'Μέγιστο βάθος spoiler σε μια ανάρτηση. Θέστε <samp>0</samp> για απεριόριστο βάθος.'
]);
