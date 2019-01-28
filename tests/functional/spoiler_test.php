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

	public function test_post_spoiler_bbcode()
	{
		$post = $this->create_topic(
			2,
			'Spoiler functional test 1',
			'[spoiler]Hidden text[/spoiler]'
		);

		$crawler = self::request('GET', sprintf(
			'viewtopic.php?t=%d&sid=%s',
			$post['topic_id'],
			$this->sid
		));

		$expected = <<<EOT
<section class="spoiler spoiler-show"><header class="spoiler-header spoiler-trigger"><div class="spoiler-title">Spoiler</div><div class="spoiler-status">Hide</div></header><div class="spoiler-body">Hidden text</div></section>
EOT;

		$result = $crawler->filter(sprintf(
			'#post_content%d .content',
			$post['topic_id']
		));

		$this->assertContains($expected, $result->html());
	}
}
