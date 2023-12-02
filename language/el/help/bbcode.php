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
	'HELP_BBCODE_BLOCK_SPOILERS' => 'Δημιουργία Spoilers',

	'HELP_BBCODE_SPOILERS_BASIC_QUESTION'	=> 'Προσθέστε ένα spoiler σε μια ανάρτηση',
	'HELP_BBCODE_SPOILERS_BASIC_ANSWER'		=> 'Ένα βασικό spoiler αποτελείται από ένα κείμενο το οποίο περικλείεται σε <strong>[spoiler][/spoiler]</strong>. Για παράδειγμα:<br><br><strong>[spoiler]</strong>%2$s<strong>[/spoiler]</strong><br><br>Αυτό δημιουργεί το:<br>%1$s',

	'HELP_BBCODE_SPOILERS_TITLE_QUESTION'	=> 'Προσθέστε ένα spoiler με κάποιον τίτλο σε μια ανάρτηση',
	'HELP_BBCODE_SPOILERS_TITLE_ANSWER'		=> 'Ένα spoiler μπορεί προαιρετικά να εμφανιστεί με έναν τίτλο, για να γίνει αυτό το κείμενο πρέπει να περικλείεται σε <strong>[spoiler title=][/spoiler]</strong>. Για παράδειγμα:<br><br><strong>[spoiler title=</strong>%3$s<strong>]</strong>%2$s<strong>[/spoiler]</strong><br><br>Αυτό δημιουργεί το:<br>%1$s',

	'HELP_BBCODE_SPOILERS_DEMO_TITLE'	=> 'Ενδεικτικός τίτλος',
	'HELP_BBCODE_SPOILERS_DEMO_BODY'	=> 'Λοιπές λεπτομέρειες σχετικές με το θέμα'
]);
