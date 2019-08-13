<?php
include "interface/StrategyInterface.php";

class QuickSort extends SortStrategy implements StrategyInterface
{
    //used for sorting array
    public function sort($array)
    {
        if (count($array) == 0)
            return array();

        $pivot_element = $array[0];
        $left_element = $right_element = array();

        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] <$pivot_element)
                $left_element[] = $array[$i];
            else
                $right_element[] = $array[$i];
        }
        return array_merge($this->sort($left_element), array($pivot_element), $this->sort($right_element));
    }
}
