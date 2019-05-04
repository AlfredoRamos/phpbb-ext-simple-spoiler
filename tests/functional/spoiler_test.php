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

	static public function setUpBeforeClass()
	{
		parent::setUpBeforeClass();

		self::$spoiler_html = '<div class="spoiler">'.PHP_EOL.
									'<div class="spoiler-header spoiler-trigger">'.PHP_EOL.
										'<div class="spoiler-title">%1$s</div>'.PHP_EOL.
										'<div class="spoiler-status">'.PHP_EOL.
											'<i class="icon fa-eye-slash fa-fw" aria-hidden="true" title="%3$s"></i>'.
											'<span>%3$s</span>'.PHP_EOL.
										'</div>'.PHP_EOL.
									'</div>'.PHP_EOL.
									'<div class="spoiler-body">%2$s</div>'.PHP_EOL.
								'</div>';
	}

	public function setUp()
	{
		parent::setUp();

		$this->add_lang_ext('alfredoramos/simplespoiler', 'posting');

		$this->login();
	}

	static protected function setup_extensions()
	{
		return ['alfredoramos/simplespoiler'];
	}

	public function test_spoiler_bbcode()
	{
		$post = $this->create_topic(
			2,
			'Spoiler Functional Test 1',
			'[spoiler]Hidden text[/spoiler]'
		);
		$crawler = self::request('GET', sprintf(
			'viewtopic.php?t=%d&sid=%s',
			$post['topic_id'],
			$this->sid
		));

		$expected = vsprintf(self::$spoiler_html, [
			'Spoiler',
			'Hidden text',
			$this->lang('SPOILER_SHOW')
		]);
		$result = $crawler->filter(sprintf(
			'#post_content%d .content',
			$post['topic_id']
		));

		$this->assertSame(1, $result->filter('.spoiler')->count());
		$this->assertContains($expected, $result->html());
	}

	public function test_spoiler_title_bbcode()
	{
		$post = $this->create_topic(
			2,
			'Spoiler Functional Test 2',
			'[spoiler title=Spoiler title]Hidden text[/spoiler]'
		);
		$crawler = self::request('GET', sprintf(
			'viewtopic.php?t=%d&sid=%s',
			$post['topic_id'],
			$this->sid
		));

		$expected = vsprintf(self::$spoiler_html, [
			'Spoiler title',
			'Hidden text',
			$this->lang('SPOILER_SHOW')
		]);
		$result = $crawler->filter(sprintf(
			'#post_content%d .content',
			$post['topic_id']
		));

		$this->assertSame(1, $result->filter('.spoiler')->count());
		$this->assertContains($expected, $result->html());
	}

	public function test_deprecated_spoiler_title_bbcode()
	{
		$post = $this->create_topic(
			2,
			'Spoiler Functional Test 3',
			'[spoiler=Spoiler title]Deprecated markup[/spoiler]'
		);
		$crawler = self::request('GET', sprintf(
			'viewtopic.php?t=%d&sid=%s',
			$post['topic_id'],
			$this->sid
		));

		$expected = vsprintf(self::$spoiler_html, [
			'Spoiler title',
			'Deprecated markup',
			$this->lang('SPOILER_SHOW')
		]);
		$result = $crawler->filter(sprintf(
			'#post_content%d .content',
			$post['topic_id']
		));

		$this->assertSame(1, $result->filter('.spoiler')->count());
		$this->assertContains($expected, $result->html());
	}

	public function test_spoiler_nesting_depth()
	{
		$post = $this->create_topic(
			2,
			'Spoiler Functional Test 4',
			'[spoiler][spoiler][spoiler][spoiler]Text[/spoiler][/spoiler][/spoiler][/spoiler]'
		);
		$crawler = self::request('GET', sprintf(
			'viewtopic.php?t=%d&sid=%s',
			$post['topic_id'],
			$this->sid
		));

		$result = $crawler->filter(sprintf(
			'#post_content%d .content',
			$post['topic_id']
		));

		$this->assertSame(3, $result->filter('.spoiler')->count());
	}

	public function test_spoiler_nesting_depth_acp_form()
	{
		$this->admin_login();

		$crawler = self::request('GET', sprintf(
			'adm/index.php?i=acp_board&mode=post&sid=%s',
			$this->sid
		));

		$form = $crawler->selectButton($this->lang('SUBMIT'))->form();

		$this->assertTrue($form->has('config[max_spoiler_depth]'));
		$this->assertSame(3, (int) $form->get('config[max_spoiler_depth]')->getValue());
	}
}
