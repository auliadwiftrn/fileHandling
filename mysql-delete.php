<?php

include "mysql-connect.php";

$id = $_GET['id'];

$sql = "DELETE FROM bukutelepon WHERE id = '$id'";

$res = mysqli_query($link, $sql);

mysqli_close($link);

header('location: mysql-select.php');
exit;