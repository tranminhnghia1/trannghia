<?php
if (isset($_POST['btn_add'])) {
    // echo "<pre>";
    // print_r($_POST);
    if(!empty($_POST['cat'])){
        //cách 1
        foreach($_POST['cat'] as $value){
            echo $value ."<br>";
        }
    }
    //cách 2
    $list_check = implode(',', $_POST['cat']);
    echo $list_check;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xác nhận điều khoản</title>
</head>

<body>
    <h1>Đồng ý điều khoản</h1>
    <form action="" method="POST">
        <input type="checkbox" name="cat[]" value="1" id="cat_1">
        <label for="cat_1"> Thể thao ý</label> <br> <br>

        <input type="checkbox" name="cat[]" value="2" id="cat_2">
        <label for="cat_2"> Xã hội</label> <br> <br>
        <input type="submit" name="btn_add" value="Thêm bài viết">
    </form>
</body>

</html>