<?php

include 'conn.php';

$id = $_POST['my_id'];
$name = $_POST['my_name'];
$no = $_POST['my_no'];

$conn->query("update mytable set my_name='".$name."', my_no = '.$no.' where my_id='.$id' ");



?>
