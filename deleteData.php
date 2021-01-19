<?php

include 'conn.php';

$id = $_POST['my_id'];
$conn->query("delete from mytable where my_id='.$id.'");


?>