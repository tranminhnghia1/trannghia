<?php
//kt số nguyên chẵn hàm in ra dòng
// check_even(10);
// function check_even($n){
//     if($n %2 ==0){
//         echo "{$n} là số chắn";
//     }
//     else{
//         echo "{$n} là số lẻ";
//     }
// };
//kt số nguyên chẵn hàm trả về
function check_even($n){
    if($n %2 ==0){
        return true;
    }
    return false;
}
if (check_even(9))
    echo "đây là số chắn";
else{
    echo "đây là số lẻ";
}
