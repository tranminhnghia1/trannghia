<?php
//lấy dứ liệu qua pt get
$mod=$_GET['mod'];
$act=$_GET['act'];
$id=$_GET['id'];
echo "{$mod}-{$act}-{$id}";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tạo url</title>
</head>
<body>
    <h1>tạo url</h1>
    <a href="?mod=product&act=detail&id=1268">sản phẩm</a>
</body>
</html>