<?php
//duyệt mảng đa chiều
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


//duyệt
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
foreach($list_user as $item ){
    echo "<pre>";
    print_r ($item);
    echo "</pre>";
}


//duyệt mảng 1 chiều
$list_prime = array (2,3,5,7);
foreach($list_prime as $value){
    echo $value . "<br>";
}