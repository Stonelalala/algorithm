<?php

function insertSort(array $arr){
    if(count($arr) <= 1){
        return $arr;
    }
    $length = count($arr);
    for($i = 1; $i < $length; $i++){
        $temp = $arr[$i];
        for($j = $i - 1; $j >= 0; $j--){
            if($temp >= $arr[$j]){
                if($j+1 == $i){
                    break;
                }else{
                    $arr[$j+1] = $temp;
                    break;
                }
            }else{
                $arr[$j + 1] = $arr[$j];
                if($j == 0){
                    $arr[0] = $temp;
                }
            }
        }
    }
    return $arr;
}
$arr = array(23,15,43,25,54,2,6,82,11,5,21,32,65,2,6,5,3);
print_r(insertSort($arr));