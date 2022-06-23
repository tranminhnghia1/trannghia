<?php
//xóa mảng 
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
unset($list_user[2]);
echo "<pre>";
print_r ($list_user);
echo "</pre>";
//xóa pt mảng
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
unset($list_user[2]['email']);
echo "<pre>";
print_r ($list_user);
echo "</pre>";