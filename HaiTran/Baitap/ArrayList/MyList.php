<?php


class MyList
{
    public $size;
    const DEFAULT_CAPACITY = 10;
    public $objectElements = [];
    public $capacity;

    public function __construct($capacity = self::DEFAULT_CAPACITY)
    {
        $this->size = 0;
        $this->capacity = $capacity;
    }

    public function add($element, $index = NULL)
    {
        if ($index === NULL)
            $index = $this->size;
        if ($index < 0 || !is_integer($index))
            return false;
        elseif ($index > $this->size - 1) {
            if ($index > self::DEFAULT_CAPACITY) {
                $this->ensureCapacity(self::DEFAULT_CAPACITY);
            }
            $this->objectElements[$index] = $element;
        } else {
            for ($i = $this->size; $i > $index; $i--) {
                $this->objectElements[$i] = $this->objectElements[$i - 1];
            }
            $this->objectElements[$index] = $element;
        }
        $this->size++;
        return true;
    }

    public function remove($index)
    {
        array_splice($this->objectElements, $index, 1);
        $this->size--;
    }

    public function size()
    {
        return $this->size;
    }

    public function cloneList()
    {
        $cloneList = new MyList();
        $cloneList = $this;
        return $cloneList;
    }

    public function contains($element)
    {
        for ($i = 0; $i < $this->size; $i++)
            if ($this->objectElements[$i] === $element)
                return true;
        return false;
    }

    public function indexOf($element)
    {
        for ($i = 0; $i < $this->size; $i++)
            if ($this->objectElements === $element)
                return $i;
        return false;
    }

    public function ensureCapacity($minCapacity)
    {
        $this->capacity += $minCapacity;
    }

    public function get($index)
    {
        return $this->objectElements[$index];
    }

    public function clear()
    {
        $this->objectElements = [];
    }
}