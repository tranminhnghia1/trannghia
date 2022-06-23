<?php
//hàm trả về dữ liệu thông qua return
function sum($a, $b){
    $t = $a+$b;
    return $t;
}
$t = sum(4, 5);
echo $t;