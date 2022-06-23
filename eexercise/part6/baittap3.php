<?php
//hiện thì danh sách bài viết lên hmtl

$list_post = array(
    1 => array(
        'id' => 1,
        'post_title' => "Lương Thùy Linh 'bắn' tiếng Anh như gió tại họp báo Miss Grand, không hổ danh là nàng Hậu 7.5 IELTS!",
        'post_content' => "Khả năng tiếng Anh luôn là một dấu chấm hỏi lớn mà khán giả dành cho Hoa hậu, đặc biệt là những 'gương mặt vàng' được gửi gắm để tham dự các cuộc thi sắc đẹp quốc tế. Bên cạnh việc chuẩn bị về trang phục, phụ kiện, rèn luyện sức khỏe thể chất,... thì việc trau dồi tiếng Anh cũng là một khâu vô cùng quan trọng, thậm chí có tính chất quyết định trong quá trình tham gia các cuộc thi ở tầm cỡ thế giới.",
        
    ),
    2 => array(
        'id' => 2,
        'post_title' => "Lương Thùy Linh 'bắn' tiếng Anh như gió tại họp báo Miss Grand, không hổ danh là nàng Hậu 7.5 IELTS!",
        'post_content' => "Khả năng tiếng Anh luôn là một dấu chấm hỏi lớn mà khán giả dành cho Hoa hậu, đặc biệt là những 'gương mặt vàng' được gửi gắm để tham dự các cuộc thi sắc đẹp quốc tế. Bên cạnh việc chuẩn bị về trang phục, phụ kiện, rèn luyện sức khỏe thể chất,... thì việc trau dồi tiếng Anh cũng là một khâu vô cùng quan trọng, thậm chí có tính chất quyết định trong quá trình tham gia các cuộc thi ở tầm cỡ thế giới.",
       
    ),
);

function get_post_by_id($id){
    global $list_post;
    if (array_key_exists($id, $list_post))
        return $list_post[$id];
    // foreach($list_post as $key => $item){
    //     if($key == $id)
    //         return $list_post[$id];
    return false;
};
$item = get_post_by_id(1);
echo "<pre>";
print_r($item);