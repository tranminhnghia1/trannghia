<?php
//tính tổng chuỗi
//t=1/2+3/4+..+(2n+1)/(2n+2)
$t=0;
$n=2;
for($i=1;$i<=$n;$i++){
    if($i%1==0){
        $t+=(2*$i)+1/(2*$i+2);
    }
}
echo $t;