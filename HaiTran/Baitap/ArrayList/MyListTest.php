<?php

include_once "MyList.php";

class MyListTest extends MyList
{
    public static function main()
    {
        self::add(1);
        self::add(2,1);
        var_dump(self::objectElements);
    }
}