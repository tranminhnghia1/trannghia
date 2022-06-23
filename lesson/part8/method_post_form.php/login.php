<?php
echo"<pre>";
print_r($_POST);

$username = $_POST['username'];
$password = $_POST['password'];

echo "{$username}-{$password}";

