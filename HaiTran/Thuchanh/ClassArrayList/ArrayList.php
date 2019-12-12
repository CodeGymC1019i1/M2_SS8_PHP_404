<?php

class ArrayList
{
    public $arrayList;

    public function __construct($arr = [])
    {
        if (is_array($arr))
            $this->arrayList = $arr;
        else
            $this->arrayList = array();
    }

    public function add($element, $index)
    {
        if ($index >= 0 && $index <= ($size = count($this->arrayList)) && $this->isInteger($index)) {
            for ($i = $size; $i > $index; $i--) {
                $this->arrayList[$i] = $this->arrayList[$i - 1];
                echo('a');
            }
            $this->arrayList[$index] = $element;
        }
    }

    public function delete($index)
    {
        if ($index >= 0 && $index < ($size = count($this->arrayList)) && $this->isInteger($index))
            array_splice($this->arrayList, $index, 1);
    }

    public function get($index)
    {
        if ($index >= 0 && $index < ($size = count($this->arrayList)) && $this->isInteger($index))
            return $this->arrayList[$index];
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
}