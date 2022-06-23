<?php
//tính tổng các số nghịch đảo chia hết cho 3
//t=1/3+1/6+...+1/n;
$n=9;
$t=0;
for($i=3;$i<=$n;$i++){
    if($i%3==0){
        $t+=1/$i;
    }
}
echo $t;