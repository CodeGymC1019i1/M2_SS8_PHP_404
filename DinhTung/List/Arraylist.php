<?php


class Arraylist
{
    public $arrayList;

    public function ArrayList($arr = ""){
        if(is_array($arr) == true){
            $this->arrayList = $arr;
        }else{
            $this->arrayList = array();
        }
    }

    public function add ($obj){
        array_push($this->arrayList,$obj);
    }

    public function get($index){
        if ($this->isInteger($index) && $index < ($size = count($this->arrayList))&&$index >=0){
            return $this->arrayList[$index];
        }
    }

    public function isInteger($toCheck){
        return preg_match("/[0-9]+$/",$toCheck);
    }
}