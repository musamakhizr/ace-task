<?php
$arr = ["aaa","b","b","b"];
function swap(&$var1,&$var2){
    $var1 = $var2;
    return $var1;
}
$arr_result = [];
for($i=0;$i<count($arr);$i++){
    $arr_result[$i+1] = $arr;
    if($i<count($arr)-1)
    {
        $temp = $arr[$i];
        swap($arr[$i],$arr[$i+1]);
        swap($arr[$i+1],$temp);
    }
}
echo("</br>".json_encode($arr_result));