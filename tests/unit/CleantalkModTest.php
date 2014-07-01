<?php

require_once 'CleantalkMod.php';

class CleantalkModTest extends \Codeception\TestCase\Test
{
	/**
	 * @var \UnitTester
	 */
	protected $tester;

	protected function _before()
	{

	}

	protected function _after()
	{
	}

	// tests
	public function testCleantalk_get_api_key()
	{
		global $modSettings;
		$modSettings = ['cleantalk_api_key' => 'test_key'];

		$this->assertEquals('test_key', cleantalk_get_api_key());
	}

	public function testCleantalk_general_mod_settings()
	{
		$menu = [
			['title', 'some_settings'],
		];
		cleantalk_general_mod_settings($menu);
		$last = end($menu);
		$this->assertEquals('some_settings', $menu[0][1]);

		$this->assertEquals('cleantalk_api_key_description', $last[1]);
	}


}