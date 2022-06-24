<?php
require 'lib/validation.php'; //gọi file khác
if(isset($_POST['btn_login'])){
    $error = array(); //phất cờ
    if(empty($_POST['username'])){
        //hạ cờ
        $error['username'] = "không được để trống tên đăng nhập";
    }else{
        if(!(strlen($_POST['username']) >=6 && strlen($_POST['username']) <= 32)){
            $error['username'] = "username yêu cầu nhập từ 6 đến 32 ký tự";
        }else{
            if(!is_username($_POST['username'])){ //rút gọn 
                $error['username'] = "username chỉ đc phép sử dụng ký tự, chứ số, dấu chấm, dấu gạch dưới và từ 6 đến 32 ký tự";
            }else{
                $username = $_POST['username'];
                echo $username;
            }
        }
    }



    if(empty($_POST['password'])){
        //hạ cờ
        $error['password'] = "không được để trống mật khẩu";
    }else{
        if(!(strlen($_POST['password']) >=6 && strlen($_POST['password']) <=32)){
            $error['password'] = "password yêu cầu nhập từ 6 đến 32 ký tự";
        }else{
            if(!is_password($_POST['password'])){
                $error['password'] = "password chỉ đc phép sử dụng ký tự hoa, chứ số, dấu chấm, ký tự đặc biệt, dấu gạch dưới và từ 6 đến 32 ký tự";
            }else{
                $password = $_POST['password'];
                echo $password;
            }
        }
        $password = $_POST['password'];
    }

    //kết luận
    if(empty($error)){
        //xử lý khgoong có lỗi
        echo "Username: {$username} <br> Password: {$password}";
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
        <input type="text" name="username" id="username">
        <p class="error"><?php if(!empty($error['username'])) echo $error['username'] ?></p>
        <label for="password">Mật khẩu</label><br>
        <input type="password" name="password" id="password">
        <p class="error"><?php if(!empty($error['password'])) echo $error['password'] ?></p>
        <input type="submit" name="btn_login" value="login">
    </form>
</body>
</html>