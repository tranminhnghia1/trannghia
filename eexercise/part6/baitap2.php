<?php
//ktr số nguyenen tố
function check_prime($n){
    for($i=2;$i<=sqrt($n); $i++){
        if($n%$i==0)
            return false;
    }return true;
};
function total_prime($n){
    $t = 0;
    for($i=2;$i<=$n; $i++){
        if(check_prime($i)){
            $t += $i;
        }
    }
    return $t;
}
echo total_prime(5);