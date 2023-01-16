<?php
//indices
function sum_arr($arr,$sum_value){
    $arr_indices  = [];
    for($i = 0; $i < count($arr); $i++){
        for($j = 1; $j < count($arr); $j++){
            if( ($arr[$i] + $arr[$j]) == $sum_value){
                array_push($arr_indices, $i);
                array_push($arr_indices, $j);
            }
        }
    }
    return $arr_indices;
}
$arr1 = [2,7,11,15];
$sum1 = 9;
echo json_encode(sum_arr($arr1,$sum1));
$arr2 = [3,2,4];
$sum2 = 7;
echo json_encode(sum_arr($arr2,$sum2));
