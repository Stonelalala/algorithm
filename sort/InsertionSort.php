<?php
/**
 * 复杂度O(n2)
 * 插入排序
 * @param array $arr
 * @return array
 */
function insertSort(array $arr){
    if(count($arr) <= 1){
        return $arr;
    }
    $length = count($arr);
    for($i = 1; $i < $length; $i++){
        $temp = $arr[$i];
        $j = $i - 1;
        for(; $j >= 0; $j--){
            if($arr[$j] > $temp){
                $arr[$j + 1] = $arr[$j];//数据移动
            }else{
                break;
            }
        }
        $arr[$j + 1] = $temp;//插入数据
    }
    return $arr;
}
$arr = array(23,15,43,25,54,2,6,82,11,5,21,32,65,2,6,5,3);
print_r(insertSort($arr));