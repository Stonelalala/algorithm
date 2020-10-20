<?php

function bubbleSort(array $arr){
    if(count($arr) <= 1){
        return $arr;
    }
    $length = count($arr);
    for($i = 0; $i < $length; $i++){
        for($j = 0; $j < $length - $i - 1; $j++){
            if($arr[$j] > $arr[$j + 1]){
                $temp = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
}
$arr = array(23,15,43,25,54,2,6,82,11,5,21,32,65);
print_r(bubbleSort($arr));