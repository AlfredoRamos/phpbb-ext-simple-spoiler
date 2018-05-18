<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 */

namespace alfredoramos\simplespoiler\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use alfredoramos\simplespoiler\includes\helper as helper;

class listener implements EventSubscriberInterface
{

	/** @var \alfredoramos\simplespoiler\includes\helper */
	protected $helper;

	/**
	 * Listener constructor.
	 *
	 * @param \alfredoramos\simplespoiler\includes\helper $helper
	 *
	 * @return void
	 */
	public function __construct(helper $helper)
	{
		$this->helper = $helper;
	}

	/**
	 * Assign functions defined in this class to event listeners in the core.
	 *
	 * @return array
	 */
	static public function getSubscribedEvents()
	{
		return [
			'core.user_setup' => 'user_setup',
			'core.help_manager_add_block_before' => 'bbcode_help'
		];
	}

	/**
	 * Load language files and modify user data on every page.
	 *
	 * @param object $event
	 *
	 * @return void
	 */
	public function user_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = [
			'ext_name'	=> 'alfredoramos/simplespoiler',
			'lang_set'	=> 'posting'
		];
		$event['lang_set_ext'] = $lang_set_ext;
	}

	/**
	 * Add a new BBCode FAQ entry.
	 *
	 * @param object $event
	 *
	 * @return void
	 */
	public function bbcode_help($event)
	{
		$this->helper->add_bbcode_help($event['block_name']);
	}

}
