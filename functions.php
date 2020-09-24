<?php

function addSum($a) {
    $res = $a+=3;

    return $res;
}

function restFunc($a) {
    $res = $a-=3;

    return $res;
}

function multiplyNumb($a) {
    return $a *=2;
}

function divideNum($a) {
    return $a /= 2;
}

addSum(2);
