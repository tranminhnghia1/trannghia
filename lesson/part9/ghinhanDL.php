<?php
require 'lib/validation.php';
if(isset($_POST['btn_login'])){
    $error = array(); //phất cờ
    if(empty($_POST['username'])){
        //hạ cờ
        $error['username'] = "không được để trống tên đăng nhập";
    }else{
        $username = $_POST['username'];
    }

    if(empty($_POST['password'])){
        //hạ cờ
        $error['password'] = "không được để trống mật khẩu";
    }else{
        $password = $_POST['password'];
    }

    if(empty($_POST['gender'])){
        //hạ cờ
        $error['gender'] = "Vui lòng chọn giới tính";
    }else{
        $gender = $_POST['gender'];
    }

    //kết luận
    if(empty($error)){
        //xử lý khgoong có lỗi
        echo "Username: {$username} <br> Password: {$password}". "<br>";
         
        echo "Gender: {$gender}";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        xử lý dữ liệu rỗng
    </title>
</head>
<body>
    <style>
        p.error{
            color: red;
        }
    </style>
    <h1> xử lý dữ liệu rỗng</h1>
    <form action="" method="POST">
        <label for="username">Tên đăng nhập</label><br>
        <input type="text" name="username" id="username" value=" <?Php echo set_value('username') ?>">
        <p class="error"><?php if(!empty($error['username'])) echo $error['username'] ?></p>
        <label for="password">Mật khẩu</label><br>
        <input type="password" name="password" id="password">
        <p class="error"><?php if(!empty($error['password'])) echo $error['password'] ?></p><br>
        

        <label for="gender">Giới Tính</label><br>
        <select name="gender" id="gender">
            <option value="">--chọn--</option>
            <option <?php if(!empty($gender) && $gender == 'male') echo "selected='selected'" ?> value="male">Nam</option>
            <option <?php if(!empty($gender) && $gender == 'female') echo "selected='selected'" ?> value="female">Nữ</option>
        </select><br>
        <p class="error"><?php if(!empty($error['gender'])) echo $error['gender'] ?></p><br><br>
        <input type="submit" name="btn_login" value="login">
    </form>
</body>
</html>