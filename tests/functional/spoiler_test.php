<?php

/**
 * Simple Spoiler extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 */

namespace alfredoramos\simplespoiler\tests\functional;

/**
 * @group functional
 */
class spoiler_test extends \phpbb_functional_test_case
{
	use functional_test_case_trait;

	/** @var string */
	static protected $spoiler_html;

	static public function setUpBeforeClass(): void
	{
		parent::setUpBeforeClass();
		self::$spoiler_html = '<details class="spoiler"><summary class="spoiler-header"><span class="spoiler-title">%1$s</span><span class="spoiler-status"><i class="icon fa-fw fa-eye" aria-hidden="true"></i></span></summary><div class="spoiler-body">%2$s</div></details>';
	}

	protected function setUp(): void
	{
		parent::setUp();
		$this->add_lang_ext('alfredoramos/simplespoiler', 'posting');
		$this->login();
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
		$this->assertStringContainsString($expected, $result->html());
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
		$this->assertStringContainsString($expected, $result->html());
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
		$this->assertStringContainsString($expected, $result->html());
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
}
