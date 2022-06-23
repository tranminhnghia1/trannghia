<?php
if(isset($_POST['btn_submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "{$username}-{$password}";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lấy dữ liệu forrm đăng nhập</title>
</head>
<body>
    <h1>đăng nhập
    </h1>
    <form action="" method="POST">
        <label for="username">username</label><br>
        <input type="text" name="username" id="username"><br><br>
        <label for="password">password</label><br>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" name="btn_submit" value="Đăng nhập"><br>
    </form>
</body>
</html>