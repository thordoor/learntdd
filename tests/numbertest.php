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

    //ADD FRACTIONS
    public function testAddFractions()
    {
        $result = $this->fraction->addFractions([3/4, 3/4, 3/4]);
        $this->assertEquals('9/4', $result);
    }

    public function testConvertToFractionIfInteger()
    {
        $result = $this->fraction->convertToFractionIfInteger(5);
        $this->assertEquals('5/1', $result);
    }

    public function testConvertToFractionAndCalculate()
    {
        $result = $this->fraction->convertToFractionAndCalculate(5.5123);
        $this->assertEquals('11/2', $result);
    }

    //MULTIPLY FRACTIONS
    public function testMultiplyFractions()
    {
        $result = $this->fraction->multiplyFractions([1/2, 1/2, 1/2]);
        $this->assertEquals('1/8', $result);
    }

    //SUBTRACT FRACTIONS
    public function testSubtractFractions()
    {
        $result = $this->fraction->subtractFractions([1, 3/4]);
        $this->assertEquals('1/4', $result);
    }

    //DIVIDE FUNCTION
}
?>