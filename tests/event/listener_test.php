<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0
 */

namespace alfredoramos\simplespoiler\tests\event;

use phpbb_test_case;
use alfredoramos\simplespoiler\event\listener;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * @group event
 */
class listener_test extends phpbb_test_case
{

	public function test_instance()
	{
		$this->assertInstanceOf(
			EventSubscriberInterface::class,
			new listener
		);
	}

	public function test_suscribed_events()
	{
		$this->assertSame(
			[
				'core.user_setup',
				'core.help_manager_add_block_before'
			],
			array_keys(listener::getSubscribedEvents())
		);
	}
}
