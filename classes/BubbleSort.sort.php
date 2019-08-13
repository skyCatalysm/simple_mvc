<?php
include "interface/StrategyInterface.php";

class BubbleSort extends SortStrategy implements StrategyInterface
{
    //used for sorting array
    public function sort($array)
    {
        do
        {
            $swapped = false;
            for( $i = 0, $c = count( $array ) - 1; $i < $c; $i++ )
            {
                if( $array[$i] > $array[$i + 1] )
                {
                    list( $array[$i + 1], $array[$i] ) =
                        array( $array[$i], $array[$i + 1] );
                    $swapped = true;
                }
            }
        }
        while( $swapped );
        return $array;
    }

}
