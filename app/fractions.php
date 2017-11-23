<?php

class Fractions
{
    public function addFractions($a, $b)
    {
        if (!preg_match('/\/', $a)) {
            convertToFraction();
        }
        return $a + $b;
    }

    public function convertToFraction($a, $b)
    {
        $resultArray = [];
        $resultArray[0] = ($a/1);
        $resultArray[0] = ($b/1);
        return $resultArray;
    }
}