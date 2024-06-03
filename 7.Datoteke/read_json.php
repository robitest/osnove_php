<?php

include_once("breakRow.php");

$books = file_get_contents('podaci/knjige.json');

var_dump($books);
_Br(5);

$books = json_decode($books, true);

file_put_contents('podaci/knjige.json', $books);

?>