<?php
function is_username($username)
{
    $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($partten, $_POST['username'], $matchs))
        return false;
    return true;
}

function is_password($password)
{
    $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if (!preg_match($partten, $_POST['password'], $matchs))
        return false;
    return true;
}

function form_error($label_field){//nhãn của trường vd username
    global $error; //các mảng error bên ngoài sẽ đồng bộ với nhau
    if(!empty($error['$label_field'])) return "<p class ='error'> {$error['$label_field']}</p>";
} 

function set_value($label_field){
    global $$label_field; //2$ vì cái ngoài là cấu trúc để nó hiểu vd: username là $usrname
    if (!empty($$label_field)) return $$label_field;
}//1$ là tên, 2$ là giá trị của biến