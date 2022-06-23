<?php
    $list_prime = array (2,3,5,7);
    $list_user = array(
        1000=> array (
            'id' => 1000, 
            'fullname' => 'trần minh nghĩa', 
            'email' => 'nghia101022@gmail.com'
        ),
        2002 => array (
            'id' => 2002, 
            'fullname' => 'trần minh huy', 
            'email' => 'huy@gmail.com'
        )
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xuất dữ liệu</title>
</head>
<body>
    //xuất só nguyên TỐ
    <table border = "1">
        <thead>
            <tr>
                <td align="center", width = 50>STT</td>
                <td align="center", width = 200>SỐ NGUYÊN TỐ</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $temp = 0;
                foreach($list_prime as $item){
                    $temp++;
                
                    ?>
                <tr>
                    <td align="center"><?php echo $temp; ?></td>
                    <td align="center"><?php echo $item; ?></td>
                </tr>
                <?php
                }
            ?>
        </tbody>
    </table>

    <p>xuất dữ liệu người dùng</p>
    <?php if(!empty($list_user)){ ?>
        <table border = "1">
            <thead>
                <tr>
                    <td align="center", width = 50>STT</td>
                    <td align="center", width = 50>ID</td>
                    <td width = 200>HỌ VÀ TÊN</td>
                    <td width = 200>GMAIL</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $temp = 0;
                    foreach($list_user as $user){
                        $temp++;
        
                    ?>
                    <tr>
                        <td align="center"><?php echo $temp; ?></td>
                        <td align="center"><?php echo $user['id']; ?></td>
                        <td><?php echo $user['fullname']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    <?php }else{
        ?>
    <p>không tồn tại dữ liệu</p>
    <?php
    } ?>
    
</body>
</html>