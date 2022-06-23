<?php
//tính tổng số trang
$totals_rows = 101;
$num_per_page = 25;
$num_page = ceil($totals_rows / $num_per_page);
echo $num_page;