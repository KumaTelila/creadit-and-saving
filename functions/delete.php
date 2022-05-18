<?php
require '../connect.php';
$sql = "select *from accounts";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_assoc($result);
$id =  $rows['id'];
$sql1 = "delete from accounts where id = '$id'";
$result1 = mysqli_query($conn, $sql1);
if($result1){
    header('location: ../create-account.php');
}
