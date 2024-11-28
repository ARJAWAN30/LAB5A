<?php

function calculateArea($panjang, $lebar)
{
    $area = $panjang * $lebar;
    return $area;
}

$panjang = 50;
$lebar = 30;

$luas = calculateArea($panjang, $lebar);
echo "The area of a rectangle with a width of $panjang and $lebar is $luas";

?>