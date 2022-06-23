<?php
if(isset($_POST['pay'])){
    if(empty($_POST['pay'])){
        //náo lỗi
        echo "bạn cần chọn hình thức thanh toán";
    }else{
        $pay=$_POST['pay'];
        echo $pay;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
</head>
<body>
    <h1>đặt hàng</h1>
    <form action="" method="POST">
    <label for="">Hình thức thanh toán</label><br>
        <select name="pay" id="">
            
            <option value="">--chọn--</option><br>
            <option value="cod">Thanh toán tại nhà</option>
            <option value="banking">Thanh toán qua thẻ tín dụng</option>
            <input type="submit" name="btn_order" value="Đặt Hàng">
        </select>
    </form>
</body>
</html>