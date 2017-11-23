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
        $result = $this->fraction->addFractions(2, 1);
        $this->assertEquals('3/1', $result);
    }

    public function testConvertToFraction()
    {
        $result = $this->fraction->convertToFraction(5);
        $this->assertEquals('5/1', $result);
    }
}
?>