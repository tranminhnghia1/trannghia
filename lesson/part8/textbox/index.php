<?php
//lấy dữ liệu ra màn hình textbox và password
if($_SERVER['REQUEST_METHOD']=="POST"){
    $username= $_POST['username'];
    $password= $_POST['password'];
    echo "{$username}-{$password}";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>truyền dữ liệu forrm pt post</title>
</head>

<body>
    <form action="" method="POST">
        <label for="username">Tên đăng nhập</label><br>
        <input type="text" name="username"><br>
        <label for="password">Mật khẩu</label><br>
        <input type="password" name="password"> <br>
        <input type="submit" name="btn_login" value="login">
    </form>
</body>

</html>