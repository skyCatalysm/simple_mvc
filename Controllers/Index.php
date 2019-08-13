<?php


class Index extends Controller {
    public static function CreateView($viewName)
    {
        if( isset($_POST['string'])&&isset($_POST['sortType'])&&($_POST['string']!="")){

            if ($_POST['sortType']==="BubbleSort"){
                $sortType = new BubbleSort();
            }elseif ($_POST['sortType']==="QuickSort") {
                $sortType = new QuickSort();
            }else{
                return;
            }
            $string = $_POST['string'];
            $sortName = $_POST['sortType'];
            echo "Sort Strategy used: ".$sortName;
            echo "<br>Before: ".$string;
            echo "<br>After: ".$sortType->sortedString($string);

        }
        parent::CreateView($viewName);
    }
}