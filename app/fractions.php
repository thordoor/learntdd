<?php

class Fractions
{   //ADD FRACTIONS
    public function addFractions($numArray)
    {
        $result = 0;
        for ($i=0; $i < count($numArray); $i++) { 
            $result += $numArray[$i];
        }
        
        $result = $this->convertToFractionAndCalculate($result);
        return $result;
    }

    public function convertToFractionIfInteger($num)
    {
        if (!preg_match('/\//', (string)$num)) {
            $num = $num . '/1';
        }
        return $num;
    }

    public function convertToFractionAndCalculate($num)
    {
        $strnum = (string)$num;
        $numberOfDecimals = strlen(substr(strrchr($num, "."), 1));
        if($numberOfDecimals < 1){
            $numberOfDecimals = 1;
        }
        $nominator = $num * $numberOfDecimals * 10;
        $denominator = $numberOfDecimals * 10;
        $fraction = $nominator . '/' . $denominator;
        $gcd = gmp_gcd((int)$nominator, (int)$denominator);
        $fraction = (int)$nominator/$gcd . '/' . (int)$denominator/$gcd;
        $this->convertToFractionIfInteger($fraction);
        return (string)$fraction;
    }

    //MULTIPLY FRACTIONS
    public function multiplyFractions($numArray)
    {
        $result = 0;
        for ($i=0; $i < count($numArray); $i++) {
            if($result == 0){
                $result = $numArray[$i];
            }
            else{
                $result *= $numArray[$i];
            }
        }
        $result = $this->convertToFractionAndCalculate($result);
        return $result;
    }

    //SUBTRACT FRACTIONS
    public function subtractFractions($numArray)
    {
        $result = 0;
        for ($i=0; $i < count($numArray); $i++) { 
            if ($result == 0) {
                $result = $numArray[$i];
            }
            else{
                $result -= $numArray[$i];
            }
        }
        $result = $this->convertToFractionAndCalculate($result);
        return $result;
    }
}