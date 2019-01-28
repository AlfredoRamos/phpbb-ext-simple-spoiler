<?php

/**
 * Simple Spoiler extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 */

namespace alfredoramos\simplespoiler\tests\functional;

use phpbb_functional_test_case;

/**
 * @group functional
 */
class spoiler_test extends phpbb_functional_test_case
{
	/** @var string */
	static protected $spoiler_html;

	static protected function setup_extensions()
	{
		return ['alfredoramos/simplespoiler'];
	}

	static public function setUpBeforeClass()
	{
		parent::setUpBeforeClass();

		self::$spoiler_html = '<section class="spoiler">'.
									'<header class="spoiler-header spoiler-trigger">'.
										'<div class="spoiler-title">%1$s</div>'.PHP_EOL.
										'<div class="spoiler-status">Show</div>'.
									'</header>'.
									'<div class="spoiler-body">%2$s</div>'.
								'</section>';
	}

	public function setUp()
	{
		parent::setUp();

		$this->login();
	}

	public function test_acp_post_settings()
	{
		$this->admin_login();

		$crawler = self::request('GET', sprintf(
			'adm/index.php?i=acp_board&mode=post&sid=%s',
			$this->sid
		));

		$form = $crawler->selectButton($this->lang('SUBMIT'))->form();

		$this->assertSame(1, $crawler->filter('#max_spoiler_depth')->count());
		$this->assertTrue($form->has('config[max_spoiler_depth]'));
		$this->assertSame('3', $form->get('config[max_spoiler_depth]')->getValue());
	}
}
