<?php

class Fractions
{    
    public function addFractions($a, $b)
    {
        $result = $a + $b;
        $result = $this->convertToFraction($result);
        if (!preg_match('/\//', $result)) {
            $result = $this->convertToFractionIfRealNumber($result);
        }
        return $result;
    }

    public function convertToFractionIfRealNumber($num)
    {
        return ($num . '/1');
    }

    public function convertToFraction($num)
    {
        $strnum = (string)$num;
        $numberOfDecimals = strlen(substr(strrchr($num, "."), 1));
        $nominator = $num * $numberOfDecimals * 10;
        $denominator = $numberOfDecimals * 10;
        $fraction = $nominator . '/' . $denominator;
        return $fraction;
    }
}