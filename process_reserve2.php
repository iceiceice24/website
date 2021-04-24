<?php
require_once "connection2.php";
$id2 = $_POST['id2'];
$name2 = $_POST['name2'];
$query2= "UPDATE tbl_seat2 SET name2='$name2', is_reserved2=1 WHERE id2=$id2";
mysqli_query($con2, $query2);
mysqli_close($con2);
header("Location: /");
 ?>
