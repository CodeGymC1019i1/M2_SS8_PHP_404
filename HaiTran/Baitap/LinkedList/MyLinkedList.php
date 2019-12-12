<?php

include_once "Node.php";

class MyLinkedList
{
    private $firstNode;
    private $lastNode;
    private $numberOfNodes;

    public function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->numberOfNodes = 0;
    }

    public function add($element, $index = NULL)
    {
        if ($index === NULL)
            $index = $this->numberOfNodes;
        if (!is_integer($index) || $index < 0 || $index >$this->numberOfNodes)
            return false;
        if ($index === 0)
            $this->addFirst($element);
        elseif ($index === $this->numberOfNodes)
            $this->addLast($element);
        else {
            $nodeIndex = $this->get($index);
            $nodeBefore = $this->get($index - 1);
            $nodeBefore->next = $element;
            $element->next = $nodeIndex;
            $this->numberOfNodes++;
        }
        return true;
    }

    public function addFirst($element)
    {
        $element->next = $this->firstNode;
        $this->firstNode = $element;

        if ($this->lastNode === NULL)
            $this->lastNode = $element;

        $this->numberOfNodes++;
        var_dump($this->cloneList());
    }

    public function addLast($element)
    {
        $element->next = NULL;
        $this->lastNode->next = $element;
        $this->lastNode = $element;

        if ($this->firstNode === NULL)
            $this->firstNode = $element;
        $this->numberOfNodes++;
    }

    public function get($index)
    {
        $current = $this->firstNode;
        $count = 0;

        while ($current !== NULL && $count < $index) {
            $count++;
            $current = $current->next;
        }
        return $current;
    }

    public function remove($element)
    {
        $current = $this->firstNode;
        $before = NULL;
        $count = 0;

        if ($element === $this->firstNode)
            $this->firstNode = $this->firstNode->next;

        while ($current !== NULL) {
            if ($current === $element) {
                $before->next = $current->next;
                $current->next = NULL;
                return true;
            }
            $count++;
            $before = $current;
            $current = $current->next;
        }

        if ($element === $this->lastNode)
            $this->lastNode = $before;
        return false;
    }

    public function size()
    {
        return $this->numberOfNodes;
    }

    public function cloneList()
    {
        $arrayDataNodes = [];
        $current = $this->firstNode;
        $count = 0;

        while ($current !== NULL) {
            array_push($arrayDataNodes, $current->getData());
            $current = $current->next;
            $count++;
        }
        return $arrayDataNodes;
    }

    public function constains($element)
    {
        $current = $this->firstNode;

        while ($current !== NULL) {
            if ($current === $element)
                return true;
            $current = $current->next;
        }
        return false;
    }

    public function indexOf($element)
    {
        $current = $this->firstNode;
        $count = 0;

        while ($current != NULL) {
            if ($current === $element)
                return $count;
            $count++;
            $current = $current->next;
        }
        return false;
    }

    public function getFirst()
    {
        return $this->firstNode;
    }

    public function getLast()
    {
        return $this->lastNode;
    }

    public function clear()
    {
        $this->firstNode = Null;
        $this->lastNode = null;
        $this->numberOfNodes = 0;
    }
}