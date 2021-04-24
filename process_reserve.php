<?php
require_once "connection.php";
$id = $_POST['id'];
$name = $_POST['name'];
$query = "UPDATE tbl_seat SET name='$name', is_reserved=1 WHERE id=$id";
mysqli_query($con, $query);
mysqli_close($con);
header("Location: /");
 ?>
