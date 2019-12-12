<?php

namespace ExerciseList;

class Node
{
    public $nodeNext;
    private $objectData;

    public function __construct($objectData = '')
    {
        $this->objectData = $objectData;
    }

    public function getData()
    {
        return $this->objectData;
    }
}