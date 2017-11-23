<?php

class Fractions
{    
    public function addFractions($a, $b)
    {
        $result = $a + $b;
        if (!preg_match('/\//', $result)) {
            $result = $this->convertToFraction($result);
        }
        return $result;
    }

    public function convertToFraction($num)
    {
        return ($num . '/1');
    }
}