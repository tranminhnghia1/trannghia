<?php
// tính tổng hàm có tham số tùy biến
function show_array($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
    }
}


sum_multi_number(2,5,7,8,7,6);
function sum_multi_number(){
    $list_args=func_get_args();
    $t = 0;
    foreach($list_args as $value){
        $t += $value;
    }
    show_array($list_args);
    echo $t;
}