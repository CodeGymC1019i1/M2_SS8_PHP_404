<?php

include_once "Node.php";

class LinkedList
{
    private $firstNode;
    private $lastNode;
    private $count;

    public function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }

    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        
        if($this->lastNode == NULL)
            $this->lastNode = $link;

        $this->count++;
    }

    public function insertLast($data)
    {
        $link = new Node($data);
        $link->next = NULL;
        $this->lastNode->next = $link;
        $this->lastNode = $link;

        if($this->firstNode == NULL)
            $this->firstNode = $link;

        $this->count++;
    }

    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;
        var_dump($current);
        while($current != NULL)
        {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }

    public function getTotalNodes()
    {
        return $this->count;
    }
}