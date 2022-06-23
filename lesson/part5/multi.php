<?php
//tạo mảng xác định
$list_user = array(
    1 => array (
        'id' => 1, 
        'fullname' => 'trần minh nghĩa', 
        'email' => 'nghia101022@gmail.com'
    ),
    2 => array (
        'id' => 2, 
        'fullname' => 'trần minh huy', 
        'email' => 'huy@gmail.com'
    )
);
echo "<pre>";
print_r ($list_user);
echo "</pre>";
// thêm 1 mảng
$list_user[3] = array(
   
        'id' => 3, 
        'fullname' => 'lê thị huyền', 
        'email' => 'huyền@gmail.com'
);

echo "<pre>";
print_r ($list_user);
echo "</pre>";

//lấy pt
$info = $list_user[3];
echo "<pre>";
print_r ($info);
echo "</pre>";