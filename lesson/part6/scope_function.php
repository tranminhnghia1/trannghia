<?php
//cục bộ
// function sum($a, $b){
//     $t = $a+$b;
//     return $t;
// }
// $t = sum(4, 5);
// echo $t;
//toàn cục
$a = 5;
$b =7;
function sum(){
    global $a, $b;
    return $a + $b;
}
echo sum();