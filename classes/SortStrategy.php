<?php


class SortStrategy
{

    public function sort($array){
        sort($array);
        return $array;
    }

    //used for transforming the string to array
    public function stringToArray($string){
        $array = str_split($string);
        return $array;
    }

    //the main function to be used to get the output of sorting a string
    public function sortedString($string){
        $array = $this->stringToArray($string);
        $sortedArray = $this->sort($array);
        $string = implode($sortedArray);
        return $string;
    }

}