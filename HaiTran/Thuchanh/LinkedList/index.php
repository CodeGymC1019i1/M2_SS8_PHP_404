<?php
include_once ('LinkedList.php');

$linkedList = new LinkedList();

$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$totalNodes = $linkedList->getTotalNodes();
$linkData = $linkedList->readList();

echo $totalNodes."<br>";
echo implode ('-' , $linkData);