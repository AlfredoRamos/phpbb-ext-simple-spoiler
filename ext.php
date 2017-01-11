<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GNU GPL-3.0+
 */

namespace alfredoramos\simplespoiler;

use phpbb\extension\base;

class ext extends base {

	const PHPBB_VERSION = '3.2.0';

	/**
	 * Check whether or not the extension can be enabled.
	 * @return	bool
	 */
	public function is_enableable() {
		$config = $this->container->get('config');
		return phpbb_version_compare($config['version'], self::PHPBB_VERSION, '>=');
	}

}
