<?php

namespace Tdd\Test\StringToArray;
use Tdd\StringToArray;

class StringToArrayTest extends \PHPUnit_Framework_TestCase
{
	private $stringToArray;

	public function setUp()
	{
		$this->stringToArray = new StringToArray();
	}

	public function tearDown()
	{
		unset($this->stringToArray);
	}

	/**
	 * Test settings
	 */
	public function testSettings()
	{
		$this->assertTrue(true);
	}

	public function testProcessStringToArrayReturnArray()
	{
		$this->assertNotNull($this->stringToArray->processStringToArray());
	}

	/**
	 * Test non string exception
	 *
	 * @dataProvider testProcessStringToArrayAcceptOnlyStringReturnExceptionDataProvider
	 * @expectedException \InvalidArgumentException
	 */
	public function testProcessStringToArrayAcceptOnlyStringReturnException($input)
	{
		$this->assertNotNull($this->stringToArray->processStringToArray($input));
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
		list($expected, $actualParam) = $input;

		$this->assertEquals($expected, $this->stringToArray->processStringToArray($actualParam));
	}

	public function testProcessStringToArrayReturnArrayValueDataProvider()
	{
		return array(
			array(
				array(array(0 => array('a', 'b', 'c')), 'a,b,c'),
				array(array(0 => array('100', '982', '444', '990' , '1')), '100,982,444,990,1'),
				array(array(0 => array('Mark', 'Anthony', 'marka@lib.de')), 'Mark,Anthony,marka@lib.de'),
			)
		);
	}

	public function testProcessStringToArrayMultiLineInputString()
	{
		$this->assertEquals(array(0 => array(211,22,35), 1 => array(10,20,33)), $this->stringToArray->processStringToArray("211,22,35\n10,20,33"));
	}
}
 