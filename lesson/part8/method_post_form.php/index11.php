<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
    }
}

// Show_array($_SERVER);
//kiểm tra  submit form chưa
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
    <title>truyền dữ liệu forrm pt post</title>
</head>

<body>
    <form action="" method="POST">
        name: <input type="text" name="username"><br>
        password: <input type="password" name="password"> <br>
        <input type="submit" name="btn_login" value="login">
    </form>
</body>

</html>