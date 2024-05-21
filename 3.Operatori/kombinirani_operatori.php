<?php

$a = 15;
$b = 10;

echo $a += $b; // Ekvivalent $a = $a + $b
echo $a -= $b; // Ekvivalent $a = $a - $b
echo $a *= $b; // Ekvivalent $a = $a * $b
echo $a /= $b; // Ekvivalent $a = $a / $b
echo $a %= $b; // Ekvivalent $a = $a % $b
echo $a .= $b; // Ekvivalent $a = $a . $b

$ime = 'Robert';
$novi_red = '<br>';
$prezime = 'Hlobik';

$ime .= $novi_red;
$ime .= $prezime;
echo $ime;