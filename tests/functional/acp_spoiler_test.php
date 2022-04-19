<?php

/**
 * Simple Spoiler extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@protonmail.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 */

namespace alfredoramos\simplespoiler\tests\functional;

/**
 * @group functional
 */
class acp_spoiler_test extends \phpbb_functional_test_case
{
	use functional_test_case_trait;

	protected function setUp(): void
	{
		parent::setUp();
		$this->login();
		$this->admin_login();
	}

	public function test_spoiler_nesting_depth_acp_form()
	{
		$crawler = self::request('GET', sprintf(
			'adm/index.php?i=acp_board&mode=post&sid=%s',
			$this->sid
		));

		$form = $crawler->selectButton($this->lang('SUBMIT'))->form();

		$this->assertTrue($form->has('config[max_spoiler_depth]'));
		$this->assertSame(3, (int) $form->get('config[max_spoiler_depth]')->getValue());
	}
}
