<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GNU GPL-3.0+
 */

namespace alfredoramos\simplespoiler\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use phpbb\config\config;
use phpbb\controller\helper;
use phpbb\template\template;
use phpbb\user;
use alfredoramos\simplespoiler\includes\helper as spoiler_helper;

class listener implements EventSubscriberInterface {

	protected $config;
	protected $controller_helper;
	protected $template;
	protected $user;
	protected $php_ext;
	protected $spoiler_helper;

	public function __construct(
		config $config,
		helper $controller_helper,
		template $template,
		user $user,
		$phpbb_ext,
		spoiler_helper $spoiler_helper
	) {
		$this->config = $config;
		$this->controller_helper = $controller_helper;
		$this->template = $template;
		$this->user = $user;
		$this->php_ext = $php_ext;
		$this->spoiler_helper = $spoiler_helper;
	}

	static public function getSubscribedEvents() {
		return [
			'core.user_setup'	=> 'user_setup'
		];
	}

	public function user_setup($event) {
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = [
			'ext_name'	=> 'alfredoramos/simplespoiler',
			'lang_set'	=> 'common'
		];
		$event['lang_set_ext'] = $lang_set_ext;
	}
}
