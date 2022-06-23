<?php
//hiện thì danh sách bài viết lên hmtl
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


$list_post = array(
    1 => array(
        'id' => 1,
        'post_title' => "Lương Thùy Linh 'bắn' tiếng Anh như gió tại họp báo Miss Grand, không hổ danh là nàng Hậu 7.5 IELTS!",
        'post_content' => "Khả năng tiếng Anh luôn là một dấu chấm hỏi lớn mà khán giả dành cho Hoa hậu, đặc biệt là những 'gương mặt vàng' được gửi gắm để tham dự các cuộc thi sắc đẹp quốc tế. Bên cạnh việc chuẩn bị về trang phục, phụ kiện, rèn luyện sức khỏe thể chất,... thì việc trau dồi tiếng Anh cũng là một khâu vô cùng quan trọng, thậm chí có tính chất quyết định trong quá trình tham gia các cuộc thi ở tầm cỡ thế giới.",
        'cat_id' => 1
    ),
    2 => array(
        'id' => 2,
        'post_title' => "Lương Thùy Linh 'bắn' tiếng Anh như gió tại họp báo Miss Grand, không hổ danh là nàng Hậu 7.5 IELTS!",
        'post_content' => "Khả năng tiếng Anh luôn là một dấu chấm hỏi lớn mà khán giả dành cho Hoa hậu, đặc biệt là những 'gương mặt vàng' được gửi gắm để tham dự các cuộc thi sắc đẹp quốc tế. Bên cạnh việc chuẩn bị về trang phục, phụ kiện, rèn luyện sức khỏe thể chất,... thì việc trau dồi tiếng Anh cũng là một khâu vô cùng quan trọng, thậm chí có tính chất quyết định trong quá trình tham gia các cuộc thi ở tầm cỡ thế giới.",
        'cat_id' => 2
    ),
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>danh sách bài viết</title>
</head>

<body>
    <h1>danh sách bài viết</h1>
    <ul>
        <?php
        if (!empty($list_post)) {
            foreach ($list_post as $item) {
        ?>
                <li>
                    <a href=""><?php echo $item['post_title'] ?></a>
                    <p><?php echo $item['post_content'] ?></p>
                </li>
               
        <?php
            }
        }
        ?>
    </ul>
</body>

</html>