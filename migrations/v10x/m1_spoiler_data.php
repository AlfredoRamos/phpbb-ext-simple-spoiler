<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GNU GPL-3.0+
 */

namespace alfredoramos\simplespoiler\migrations\v10x;

use phpbb\db\migration\container_aware_migration;
use alfredoramos\simplespoiler\includes\helper as spoiler_helper;

class m1_spoiler_data extends container_aware_migration {

	/**
	 * Install BBCode in database
	 * @return	array
	 */
	public function update_data() {
		return [
			['custom', [
				[
					new spoiler_helper(
						$this->container->get('dbal.conn'),
						$this->container->getParameter('core.root_path'),
						$this->container->getParameter('core.php_ext')
					),
					'install_bbcode']
				]
			]
		];
	}

	/**
	 * Uninstall BBCode from database.
	 * @return	array
	 */
	public function revert_data() {
		return [
			['custom', [
				[
					new spoiler_helper(
						$this->container->get('dbal.conn'),
						$this->container->getParameter('core.root_path'),
						$this->container->getParameter('core.php_ext')
					),
					'uninstall_bbcode']
				]
			]
		];
	}

}
