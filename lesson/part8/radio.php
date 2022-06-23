<?php
    if(isset($_POST['btn_reg'])){
        $show_gender = array(
            'male' =>'Nam',
            'female' =>'Nữ'
        );

        echo "<pre>";
        print_r($_POST);

        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
            echo $show_gender[$gender];
        }else{
            echo "bạn chưa chọn giới tính";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radio</title>
</head>
<body>
    <h1>đăng ký</h1>
    <form action="" method="POST">
        <input type="radio" name="gender" value="male" id="male">
        <label for="male">Nam</label><br>
        <input type="radio" name="gender" value="female" id="female">
        <label for="female">nữ</label><br><br>
        <input type="submit" name="btn_reg" value="register">
    </form>
</body>
</html>