<?php

class RechnerTest extends PHPUnit_Framework_TestCase {

	private $additon = null;


	public function setUp()
	{
		$this->additon = new Kathi\Rechner();
	}


	public function tearDown()
	{
		$this->additon = null;
	}

	/**
	 * Test der Instanz von $this->additon
	 * @test
	 */
	public function testInstanceOf()
	{
		$this->assertInstanceOf('Kathi\Rechner', $this->additon);
	}

	/**
	 * Test, dass bei einem ungueltigen Argument eine Exception geworfen wird.
	 * @expectedException InvalidArgumentException
	 */
	public function testUngueltigesArgument()
	{
		$this->additon->addieren('ABC', 2);
	}

	/**
	 * Test, ob das Ergebnis richtig ist.
	 *
	 * @test
	 */
	public function testGueltigesErgebnis()
	{
		$this->assertEquals(5, $this->additon->addieren(2, 3));
	}
	
}
