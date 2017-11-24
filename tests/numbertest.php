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
        $result = $this->fraction->addFractions(1/1, 1/2);
        $this->assertEquals('3/2', $result);
    }

    public function testConvertToFractionIfInteger()
    {
        $result = $this->fraction->convertToFractionIfInteger(5);
        $this->assertEquals('5/1', $result);
    }

    public function testConvertToFractionAndCalculate()
    {
        $result = $this->fraction->convertToFractionAndCalculate(5.0);
        $this->assertEquals('5/1', $result);
    }
}
?>