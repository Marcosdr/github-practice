<?php

function addSum($a) {
    $res = $a+=3;

    if ($a === 2) {
        $b = 1;
        if ($b === 3) {
            $b = 4;
        }
    }

    $food = [
        "milk",
        "buiscuit",
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
