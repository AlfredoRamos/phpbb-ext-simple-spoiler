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

		$expected =	'<div class="spoiler">'.PHP_EOL.
						'<div class="spoiler-header spoiler-trigger">'.PHP_EOL.
							'<span class="spoiler-title">Spoiler</span>'.
							'<span class="spoiler-status">Show</span>'.PHP_EOL.
						'</div>'.PHP_EOL.
						'<div class="spoiler-body">Hidden text</div>'.PHP_EOL.
						'</div>';
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

		$expected =	'<div class="spoiler">'.PHP_EOL.
						'<div class="spoiler-header spoiler-trigger">'.PHP_EOL.
							'<span class="spoiler-title">Spoiler title</span>'.
							'<span class="spoiler-status">Show</span>'.PHP_EOL.
						'</div>'.PHP_EOL.
						'<div class="spoiler-body">Hidden text</div>'.PHP_EOL.
						'</div>';
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

		$expected =	'<div class="spoiler">'.PHP_EOL.
						'<div class="spoiler-header spoiler-trigger">'.PHP_EOL.
							'<span class="spoiler-title">Spoiler title</span>'.
							'<span class="spoiler-status">Show</span>'.PHP_EOL.
						'</div>'.PHP_EOL.
						'<div class="spoiler-body">Deprecated markup</div>'.PHP_EOL.
						'</div>';
		$result = $crawler->filter(sprintf(
			'#post_content%d .content',
			$post['topic_id']
		));

		$this->assertSame(1, $result->filter('.spoiler')->count());
		$this->assertContains($expected, $result->html());
	}
}
