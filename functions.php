<?php

function addSum($a) {
    $res = $a+=3;

    if ($a === 4) {
        $b = 1;
        if ($b === 3) {
            $b *= 2;
        }
        return $b -1;
    }

    $food = [
        "milk",
        "buiscdfuit",
        "cookies"
    ];

    return $res;

}

function sumOfThree($a) {
    $res = $a - 4;
    return $res;
}

function multiplyNumb($a) {
    return $a *=2;
}

function divideNum($a) {
    return $a /= 2;
}

addSum(2);
