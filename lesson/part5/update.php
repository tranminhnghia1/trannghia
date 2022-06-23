<?php

//tạo mảng xác định
$list_user = array(
    'id' => 1, 
    'fullname' => 'nguyễn văn nghĩa', 
    'email' => 'nghia101022@gmail.com'
);

echo "<pre>";
print_r ($list_user);
echo "</pre>";

//cập nhật lại thông tin
$list_user['fullname'] = 'trần minh nghĩa';
echo "<pre>";
print_r ($list_user);
echo "</pre>";
