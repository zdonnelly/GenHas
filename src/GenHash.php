<?php

namespace GenHash;

class GenHash
{
    function exec($string) {
        $h = 7;
        $letters = "acegikoprs";
        $stringAsArray = str_split($string);
        for($i = 0; $i < count($stringAsArray); $i++) {
            $h = ($h * 37 + strpos($letters, $stringAsArray[$i]));
        }
        return $h;
    }

    /**
     * @param $values
     * @param $expected
     * @return string
     */
    function search($values, $expected) {

        $low = 0;
        $high  = 99999999;

        while ($low <= $high) {
            $testString = "";
            $middle = (int)(($high - $low) / 2) + $low;
            $middleAsArray = str_split($middle);
            for($i = 0; $i < count($middleAsArray); $i++) {
                $testString .= $values[$middleAsArray[$i]];
            }

            $result = $this->exec($testString);

            if($result < $expected) {
                $low = $middle + 1;
            }
            else if($result > $expected) {
                $high = $middle - 1;
            }
            else {
                return $testString;
            }
        }

    }
}