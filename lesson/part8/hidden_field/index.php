<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
    }
}

if (isset($_POST['btn_login'])) {
    $info_user = array(
        'username' => 'nghia',
        'password' => 'nghia123'
    );
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "ko duoc để trống tên đăng nhập";
    }else{
        $username=$_POST['username'];
    };

    if (empty($_POST['password'])) {
        $error['password'] = "ko duoc để trống tên đăng nhập";
    }else{
        $password=$_POST['password'];
    };

    $username=$_POST['username'];
    $password=$_POST['password'];

    if(empty($error)){//nhập dữ liệu
        if(($username==$info_user['username'])&&$password==$info_user['password']){
            $redirect_to=$_POST['redirect_to'];
            header("location: {$redirect_to}");
        }else{
            $error['login']="tên đăng nhập hoặc mật khẩu không chính xác";
        }
    }

    if(!empty($error)){
        Show_array($error);
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hidden</title>
</head>

<body>
    <form action="card.php" method="POST">
        <label for="username">Tên đăng nhập</label><br>
        <input type="text" name="username"><br>
        <label for="password">Mật khẩu</label><br>
        <input type="password" name="password"> <br>
        <input type="hidden" name="redirect_to" value="home.php">
        <input type="submit" name="btn_login" value="login">
    </form>
</body>

</html>