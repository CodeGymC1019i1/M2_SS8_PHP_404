<?php

include_once "Node.php";
include_once "MyLinkedList.php";

$linkedList = new MyLinkedList();

$node1 = new ExerciseList\Node('crush');
$node2 = new ExerciseList\Node('dan');
$node3 = new ExerciseList\Node('iz');
$node4 = new ExerciseList\Node("da");
$node5 = new ExerciseList\Node("bezt");
$node6 = new ExerciseList\Node("Hai");

$linkedList->addLast($node1);
$linkedList->addLast($node2);
$linkedList->addLast($node3);
$linkedList->addLast($node4);
$linkedList->addLast($node5);
//$linkedList->remove($node6);
/////   Loi o ham clonelist khi add lan thu 7;
var_dump($linkedList->add($node6, 5));
var_dump($linkedList->add($node6));
$linkedList->addFirst($node6);
var_dump($linkedList->cloneList());