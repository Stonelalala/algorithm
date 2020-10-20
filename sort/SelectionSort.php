<?php
/**
 * 复杂度O(n2)
 * 选择排序 - 交换排序
 */
function selectionSort(array $arr){
    if(count($arr) <= 1){
        return $arr;
    }
    $length = count($arr);
    for($i = 0; $i < $length; $i++){
        for($j = $i + 1; $j < $length; $j++){
            if($arr[$j] < $arr[$i]){
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
        print_r($arr);
    }
    return $arr;
}
$arr = array(23,15,43,25,54,2,6,82,11,5,21,32,65,2);
print_r(selectionSort($arr));