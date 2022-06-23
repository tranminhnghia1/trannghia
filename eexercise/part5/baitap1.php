<?php
//tạo mảng lưu trữ các số lẻ từ 3 đên 150
$list_odd = array();
for($i=3; $i <=150; $i++){
    if($i% 2 != 0){
        $list_odd[] = $i;
    }
}
echo "<pre>";
print_r ($list_odd);
echo "</pre>";
