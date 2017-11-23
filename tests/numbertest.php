<?php
use PHPUnit\Framework\TestCase;
require "app/fractions.php";

class FractionsTest extends TestCase
{
    private $fraction;

    protected function setup()
    {
        $this->fraction = new Fractions();
    }

    protected function tearDown()
    {
        $this->calculator = NULL;
    }

    public function testAddFractions()
    {
        $result = $this->fraction->addFractions(1/3, 1/3);
        $this->assertEquals(2/3, $result);
    }

    public function testConvertToFractionIfRealNumber()
    {
        $result = $this->fraction->convertToFractionIfRealNumber(5);
        $this->assertEquals('5/1', $result);
    }

    public function testConvertToFraction()
    {
        $result = $this->fraction->convertToFraction(1.235);
        $this->assertEquals(3, $result);
    }
}
?>