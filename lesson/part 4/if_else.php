<?php
$mark=10;
if(($mark >=0)&&($mark <= 10)){
    if($mark < 4){
        echo "yếu";
    }elseif($mark < 6.5){
        echo "trung bình";
    }elseif($mark < 8.5){
        echo "khá";
    }else{
        echo "giỏi";
    }
}else{
    echo "phải nhập thang điểm từ 0 đến 10";
}