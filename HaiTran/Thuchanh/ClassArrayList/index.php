<?php

include_once "ArrayList.php";

$intergers = [1, 2, 3, 4];

$array = new ArrayList($intergers);

var_dump($array->get(3));
var_dump($array->get(-1));
var_dump($array->get(4));
$array->add(-2,2);
$array->delete(2);
var_dump($array->arrayList);

