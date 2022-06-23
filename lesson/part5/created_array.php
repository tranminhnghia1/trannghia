<?php
//tạo mảng rỗng
$error = array(); 
$error['username']="bạn ko được để trống";
echo "<pre>";
print_r ($error);
echo "</pre>";
//tạo mảng mặc định
$list_odd = array(1, 3, 5);
echo "<pre>";
print_r ($list_odd);
echo "</pre>";

//tạo mảng xác định
$list_user = array('id' => 1, 'fullname' => 'trần minh nghĩa', 'email' => 'nghia101022@gmail.com');
echo "<pre>";
print_r ($list_user);
echo "</pre>";