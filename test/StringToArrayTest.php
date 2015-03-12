<?php

namespace Tdd\Test\StringToArray;
use Tdd\StringToArray;

class StringToArrayTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * Test settings
	 */
	public function testSettings()
	{
		$this->assertTrue(true);
	}

	public function testProcessStringToArrayReturnArray()
	{
		$stringToArray = new StringToArray();

		$this->assertNotNull($stringToArray->processStringToArray());
	}

	/**
	 * @expectedException \InvalidArgumentException
	 */
	public function testProcessStringToArrayAcceptOnlyStringReturnException()
	{
		$stringToArray = new StringToArray();

		$this->assertNotNull($stringToArray->processStringToArray(9));
	}
}
 