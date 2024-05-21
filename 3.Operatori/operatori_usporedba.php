<?php

$a = 10;
$b = 5;
$c = '10';
$d = 10;

var_dump($a > $b); // A veče od B -> true
var_dump($a < $b); // A manje od B -> false

var_dump($a == $b); // A jednako B -> false

var_dump($a == $c); // A jednako C -> true
var_dump($a === $c); // A identicno B -> false
var_dump($a === $d); // A identicno B -> true

var_dump($a != $c); // A identicno B -> false
var_dump($a !== $c); // A identicno B -> true
var_dump($a !== $d); // A identicno B -> false

