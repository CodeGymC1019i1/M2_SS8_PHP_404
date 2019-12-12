<?php

include_once "MyList.php";
include_once "MyListTest.php";

$list = new MyList();
$list->add(1);
$list->add(2,1);
var_dump($list->objectElements);
var_dump($list->get(0));
var_dump($list->size());
var_dump($list->contains(2));