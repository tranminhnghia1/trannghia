<?php
// tính tổng các số chắn từ 0>n;
$t=0;
$n=10;
for($i=0;$i<=$n;$i++){
    if($i%2==0){
        $t += $i;
    }
} echo "kết quả: {$t}";