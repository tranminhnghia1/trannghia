<?php
//hiển thị mảng danh mục theo đa cấp
$list_post_cat = array(
    0 => array(
        'id' => 0,
        'cat_title' => "Giáo dục",
        'level' => "0"
    ),
    1 => array(
        'id' => 1,
        'cat_title' => "khuyến học",
        'level' => "1"
    ),
    2 => array(
        'id' => 2,
        'cat_title' => "du học",
        'level' => "1"
    ),
    3 => array(
        'id' => 3,
        'cat_title' => "thể thao",
        'level' => "0"
    ),
    4 => array(
        'id' => 4,
        'cat_title' => "châu úc",
        'level' => "1"
    ),
    5 => array(
        'id' => 5,
        'cat_title' => "châu á",
        'level' => "1"
    ),
    6 => array(
        'id' => 6,
        'cat_title' => "việt nam",
        'level' => "2"
    )
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> library mảng</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <td>STT</td>
                <td>Danh mục</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($list_post_cat)) {
                $temp = 0;
                foreach ($list_post_cat as $item) {
                    $temp++;
            ?>
                    <tr>
                        <td><?php echo $temp; ?></td>
                        <td><?php echo str_repeat('---', $item['level']).$item['cat_title']; ?></td>
                    </tr>
            <?php
                }
            };
            ?>

        </tbody>
    </table>
</body>

</html>