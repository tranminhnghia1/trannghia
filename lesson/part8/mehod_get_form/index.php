<?php
//lấy dứ liệu qua pt get
$mod=$_GET['mod'];
$act=$_GET['act'];
$id=$_GET['id'];
echo "{$mod}-{$act}-{$id}";


function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
    }
}


//kiểm tra  submit form chưa
//pt gét thì dùng isset coi nó tồn tại hay chưa, khác với pt post là request
if (isset($_GET['btn_search'])) {
    Show_array($_GET);
    $q = $_GET['q'];
    echo $q;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tìm kiếm</title>
</head>

<body>
    <h1>tìm kiếm</h1>
    <a href="?mod=product&act=detail&id=2002">sản phẩm</a>
    <form action="" method="GET">
        tìm kiếm <input type="text" name="q">
        <input type="submit" name="btn_search" value="search">
    </form>
</body>
</html>