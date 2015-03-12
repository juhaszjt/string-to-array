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

	/**
	 * @dataProvider testProcessStringToArrayReturnArrayValueDataProvider
	 */
	public function testProcessStringToArrayReturnArrayValue(array $input)
	{
		$stringToArray = new StringToArray();

		list($expected, $actualParam) = $input;

		$this->assertEquals($expected, $stringToArray->processStringToArray($actualParam));
	}

	public function testProcessStringToArrayReturnArrayValueDataProvider()
	{
		return array(
			array(
				array(array('a', 'b', 'c'), 'a,b,c'),
				array(array('100', '982', '444', '990' , '1'), '100,982,444,990,1'),
				array(array('Mark', 'Anthony', 'marka@lib.de'), 'Mark,Anthony,marka@lib.de'),
			)
		);
	}
}
 