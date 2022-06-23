<?php
if (isset($_POST['btn_reg'])) {
    if (isset($_POST['rules'])) {
        $rules = $_POST['rules'];
        echo "$rules";
    } else {
        //xử lý lỗi
        echo "bạn chưa đọc và đồng ý điều khoản";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xác nhận điều khoản</title>
</head>

<body>
    <h1>Đồng ý điều khoản</h1>
    <form action="" method="POST">
        <p style="width: 400px; height: 200px; overflow-y: scroll;"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi impedit ut quo, officia excepturi natus eaque id. Eos sequi ducimus non debitis repellendus quia laborum molestiae inventore nulla quisquam? Aperiam, vitae! Eum ipsa, odit fugit, omnis quibusdam vero nihil odio eius praesentium alias nisi ea illum vitae provident quisquam ex laboriosam quae eos magni voluptatibus? Sit similique ea ullam tempora alias, commodi quis nam suscipit, quia eligendi at aliquam corrupti. Saepe mollitia distinctio quod explicabo molestias cumque nostrum quas quam minima totam, dolor, ullam eligendi nulla repudiandae aut possimus sapiente! Magnam neque rerum vero sequi voluptas omnis doloribus quia rem.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam quod amet aspernatur repellat, dolor exercitationem cumque sint officiis commodi tenetur hic, facilis voluptatum minima perspiciatis quas deserunt inventore natus tempore molestias! Porro sint aliquam nam explicabo illo officiis veniam atque!

        </p>
        <input type="checkbox" name="rules" value="yes" id="rules">
        <label for="rules"> Đồng ý</label>
        <input type="submit" name="btn_reg" value="register">
    </form>
</body>

</html>