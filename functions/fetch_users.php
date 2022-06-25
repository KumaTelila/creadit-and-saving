<?php 
include './connect.php';
$sql =  "select *from accounts";
$result = mysqli_query($conn, $sql);
