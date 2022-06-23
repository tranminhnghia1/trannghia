<?php
if(isset($_POST['btn_add'])){
    if(empty($_POST['detail'])){
        echo "vui lòng nhập văn bản";
    }
    else{
        $detail = $_POST['detail'];
        echo $detail;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm bài viết</title>
</head>
<body>
    <h1>Thêm bài viết</h1>
    <form action="" method="POST">
        <textarea name="detail" id="" cols="30" rows="10"></textarea> <br>
        <input type="submit" name="btn_add" value="Thêm bài viết">
    </form>
</body>
</html>