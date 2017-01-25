<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GNU GPL-3.0+
 */

namespace alfredoramos\simplespoiler\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface {

	/**
	 * Assign functions defined in this class to event listeners
	 * in the core.
	 * @return	array
	 */
	static public function getSubscribedEvents() {
		return [
			'core.user_setup'	=> 'user_setup'
		];
	}

	/**
	 * Load language files and modify user data on every page.
	 * @param	object	$event
	 * @return	void
	 */
	public function user_setup($event) {
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = [
			'ext_name'	=> 'alfredoramos/simplespoiler',
			'lang_set'	=> 'simplespoiler'
		];
		$event['lang_set_ext'] = $lang_set_ext;
	}

}
