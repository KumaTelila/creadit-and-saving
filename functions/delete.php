<?php


function deleteAccount($id){
    include '../connect.php';
    $sql1 = "delete from accounts where id = '$id'";
    $result1 = mysqli_query($a, $sql1);
    if($result1){
        header('location: ../create-account.php');
}

}
