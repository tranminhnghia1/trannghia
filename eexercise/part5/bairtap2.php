<?php
//tạo mảng lưu trữ bài viết
$list_post_cat = array(
    1 => array(
        'cat_id' => 1,
        'cat_title' => 'xã hội'
    ),
    2 => array(
        'cat_id' => 2,
        'cat_title' => 'thể thao'
    ),
);
echo "<pre>";
print_r ($list_post_cat);
echo "</pre>";

$list_post = array(
    1 => array(
        'id' => 1,
        'post_title' => "danh sách bài viết 1",
        'post_content' => "chi tiết bài viết",
        'cat_id' => 1
    ),
    2 => array(
        'id' => 2,
        'post_title' => "danh sách bài viết 2",
        'post_content' => "chi tiết bài viết",
        'cat_id' => 2
    ),
);
echo "<pre>";
print_r ($list_post);
echo "</pre>";