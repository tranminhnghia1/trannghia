<?php
//tạo mảng xác định
$list_user = array(
    'id' => 1, 
    'fullname' => 'trần minh nghĩa', 
    'email' => 'nghia101022@gmail.com'
);
//lưu trừ thêm số điệnt hoại
$list_user['phone'] = '0978706405';
echo "<pre>";
print_r ($list_user);
echo "</pre>";

//tạo mảng mặc định
$list_odd = array(1, 3, 5);
//thêm pt mặc định
$list_odd[]=11;
echo "<pre>";
print_r ($list_odd);
echo "</pre>";