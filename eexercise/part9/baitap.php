<?php

use function PHPSTORM_META\elementType;
//1.xây dựng dữ liệu
//2.validation
/*2.1. tạo hamf is_phoner_number
2.1. xử lý submit

*/
//3.xuất dữ liệu
require 'lib/validation.php';
if (isset($_POST['btn_login'])) {
    $error = array(); //phất cờ
    if (empty($_POST['fullname'])) {
        //hạ cờ
        $error['fullname'] = "không được để trống họ và tên";
    } else {
        $fullname = $_POST['fullname'];
    }

    if (empty($_POST['username'])) {
        //hạ cờ
        $error['username'] = "không được để trống username";
    }else {
        if(!(strlen($_POST['username']) >=6 && strlen($_POST['username']) <= 32)){
            $error['username'] = "tên đăng nhập yêu cầu từ 6 đến 32 ký tự";
        }else{
            if (!is_username('username'))
                $error['username'] = "tên đăng nhập yêu cầu chữ cái hoa, chữ số, dấu gạch dưới và 6 đến 32kys tự";
            else{
                $username = $_POST['username'];
                
            }
            
        }
       
    }

    if (empty($_POST['password'])) {
        //hạ cờ
        $error['password'] = "không được để trống password";
    } else {
        if(!(strlen($_POST['password']) >=6 && strlen($_POST['username']) <= 32)){
            $error['password'] = "tên đăng nhập yêu cầu từ 6 đến 32 ký tự";
        }else{
            if (!is_password('password'))
                $error['password'] = "tên đăng nhập yêu cầu chữ cái hoa, chữ số, dấu gạch dưới, ký tự đặc biệt và 6 đến 32kys tự";
            else{
                $password = md5($_POST['password']); //mã hóa mk
                
            }
            
        }
        
    }

    if (empty($_POST['phone'])) {
        //hạ cờ
        $error['phone'] = "không được để trống phone";
    }else {
        if (!is_phone_number('phone'))
            $error['phone'] = "số điện thoại không đúng";
        else{
            $phone = $_POST['phone'];
                
        }
            
    }


     //kết luận
    if(empty($error)){
        //không có lỗi
        echo "Họ và tên: {$fullname} <br> Tên Đăng nhập: {$username} <br>  Mật khẩu: {$password} <br> Số điện thoại: {$phone}";
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>đăng ký</title>
</head>

<body>
    <style>
        p{
            color: red;
        }
    </style>
    <h1>ĐĂng ký</h1>
    <form action="" method="POST">
        <label for="fullname">Họ và tên</label><br>
        <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname'); ?>"><br>
        <?php echo form_error('fullname') ?>

        <label for="username">Tên đăng nhập</label><br>
        <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>"><br>
        <?php echo form_error('username') ?>


        <label for="password">Mật khẩu</label><br>
        <input type="password" name="password" id="password"><br>
        <?php echo form_error('password') ?>


        <label for="phone">Số điện thoại</label><br>
        <input type="text" name="phone" id="phone" value="<?php echo set_value('phone'); ?>"><br>
        <?php echo form_error('phone') ?>


        <input type="submit" name="btn_login" value="ĐĂng Ký">
    </form>
</body>

</html>