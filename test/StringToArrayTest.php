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
	 * Test non string exception
	 *
	 * @dataProvider testProcessStringToArrayAcceptOnlyStringReturnExceptionDataProvider
	 * @expectedException \InvalidArgumentException
	 */
	public function testProcessStringToArrayAcceptOnlyStringReturnException()
	{
		$stringToArray = new StringToArray();

		$this->assertNotNull($stringToArray->processStringToArray(9));
	}

	public function testProcessStringToArrayAcceptOnlyStringReturnExceptionDataProvider()
	{
		return array(
			array(
				array(4),
				array(true),
				array(new \stdClass),
			)
		);
	}
}
 