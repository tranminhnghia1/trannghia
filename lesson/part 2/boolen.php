<?php
//kiểu điều khiển
$a=10;
if($a%2==0){
    echo  "{$a} là số chẵn";
}
//kiểu mảng
function checkEven($a){
    if($a%2==0){
        return true;
    }
    return false;
}
$echo =checkEven(4);