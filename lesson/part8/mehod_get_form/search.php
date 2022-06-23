<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
    }
}

 Show_array($_GET);
$q=$_GET['q'];
echo $q;
?>