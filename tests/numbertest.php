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
        $result = $this->fraction->addFractions(3/4, 3/4);
        $this->assertEquals('15/10', $result);
    }

    public function testConvertToFractionIfRealNumber()
    {
        $result = $this->fraction->convertToFractionIfRealNumber(5);
        $this->assertEquals('5/1', $result);
    }

    public function testConvertToFraction()
    {
        $result = $this->fraction->convertToFraction(1.5);
        $this->assertEquals('15/10', $result);
    }
}
?>