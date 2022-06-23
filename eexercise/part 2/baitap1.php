<?php
$list_user=array(
    1=>array(
        'id'=1,
        'fullname'='tran minh nghia',
        'age'=20
    ),
    2=>array(
        'id'=2,
        'fullname'='tran minh huy',
        'age'=22
    ),
)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>danh sách thành viên</h1>
    <?php echo $list_user?>
</body>
</html>