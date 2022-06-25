<?php
$conn = mysqli_connect('localhost', 'root', '', 'creadit');
if($conn->connect_error){
   $msg = die("Connection failed: " . $conn->connect_error);
}