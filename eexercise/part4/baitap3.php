<?php
$t=0;
$n=1;
for($i=1;$i<=$n;$i++){
    if($i%1==0){
        $t+=$i/($i+1);
    }
}
echo $t;