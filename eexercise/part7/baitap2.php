<?php
//xuất 1 mảng số nguyên chẵn trong 1 mảng số nguyên
$list_number = array(2,3,4,5,6,7);
$list_even = array();
if(!empty($list_number)&& is_array($list_number)){
    foreach($list_number as $num){
        if($num % 2 ==0)
            $list_even[] = $num;
    }
    echo "<pre>";
    print_r($list_even);
}