<?php
//giải pt bậc 2
$a=1;
$b=-3;
$c=2;
if($a!=0){
    $delta=$b*$b-4*$a*$c;
    if($delta < 0)
        echo "vô nghiệm";
    elseif($delta == 0){
            $x=-$b / (2*$a);
            echo "pt có nghiệm kép: x={$x}";
    }else{
        $x1=(-$b+sqrt($delta))/2*$a;
        $x2=(-$b-sqrt($delta))/2*$a;
        echo "pt có 2 nghiệm: x1={$x1}, x2={$x2}";
    }
    
}else{
    echo "ko phải pt bậc 2";
}
