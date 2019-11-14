<?php

/**
 * Simple Spoiler extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 */

namespace alfredoramos\simplespoiler\tests\event;

use phpbb_test_case;
use alfredoramos\simplespoiler\event\listener;
use alfredoramos\simplespoiler\includes\helper;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * @group event
 */
class listener_test extends phpbb_test_case
{
	/** @var \alfredoramos\simplespoiler\includes\helper */
	protected $helper;

	public function setUp()
	{
		parent::setUp();

		$this->helper = $this->getMockBuilder(helper::class)
			->disableOriginalConstructor()->getMock();
	}

	public function test_instance()
	{
		$this->assertInstanceOf(
			EventSubscriberInterface::class,
			new listener($this->helper)
		);
	}

	public function test_suscribed_events()
	{
		$this->assertSame(
			[
				'core.user_setup',
				'core.text_formatter_s9e_configure_after',
				'core.text_formatter_s9e_parse_after',
				'core.help_manager_add_block_before',
				'core.acp_board_config_edit_add',
				'alfredoramos.seometadata.clean_description_after'
			],
			array_keys(listener::getSubscribedEvents())
		);
	}
}
