<?php

function maakRij(int $min, int $max, int $stap = 1) :array
{
    $result = array();
    if ($stap > 0) {
        while ($min <= $max) {
            $result[] = $min;
            $min += $stap;
        }
    } else {
        while ($min >= $max) {
            $result[] = $min;
            $min += $stap;
        }
    }
    return $result;
}

$result = maakRij(5, 1, -2);
var_dump($result);
