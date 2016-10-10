<?php

class AdderTest extends PHPUnit_Framework_TestCase {

	private $sum = null;


	public function setUp()
	{
		$this->sum = new Calculator\Adder();
	}


	public function tearDown()
	{
		$this->sum = null;
	}

	/**
	 * it tests the instance of $this->additon .
	 * @test
	 */
	public function testInstanceOf()
	{
		$this->assertInstanceOf('Calculator\Adder', $this->sum);
	}

	/**
	 * it tests an invalid argument and throws an exception.
	 * @expectedException InvalidArgumentException
	 */
	public function testInvalidArgument()
	{
		$this->sum->add('ABC', 2);
	}

	/**
	 * it tests if the result is right.
	 * @test
	 */
	public function testValidResult()
	{
		$this->assertEquals(5, $this->sum->add(3, 3));
	}
	
}
