<?php 

include "conn.php";

$name = $_POST['my_name'];
$no =  $_POST['my_no'];

$conn->query("insert into mytable(my_name,my_no) values('".$name."','".$no."')");




?>




