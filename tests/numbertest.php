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

    public function testAddfractions()
    {
        $result = $this->fraction->addFractions(0, 0);
        $this->assertEquals(0, $result);
    }
}
?>