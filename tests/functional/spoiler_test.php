<?php

/**
 * Simple Spoiler Extension for phpBB.
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
	static protected $spoiler_html;

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
}
