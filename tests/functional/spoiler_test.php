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

		self::$spoiler_html = '<details class="spoiler"><summary class="spoiler-header"><span class="spoiler-title">%1$s</span><span class="spoiler-status"><i class="icon fa-fw fa-eye" aria-hidden="true"></i></span></summary><div class="spoiler-body">%2$s</div></details>';
	}

	public function setUp(): void
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
			'Hidden text'
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
			'Hidden text'
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
			'Deprecated markup'
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
