<?php
session_start();
include 'connect.php';
if (!isset($_SESSION['role']) || $_SESSION['role'] != "Manager") {
    header("Location: index.php");
}
$id = $_SESSION['id'];
$sql5= "SELECT * FROM `employer` WHERE acc_id = $id";
$query5 = mysqli_query($conn, $sql5);
$sqli5 = mysqli_fetch_assoc($query5);
$emp_id = $sqli5['id'];
$name = $sqli5['name'];
$phone = $sqli5['phone'];
$email = $sqli5['email'];
$sql6 = "SELECT * FROM `accounts` WHERE id = $id";
$query6 = mysqli_query($conn, $sql6);
$sqli6 = mysqli_fetch_assoc($query6);
$username = $sqli6['username'];
if (isset($_POST['submitNews'])) {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    if (!empty($title) && !empty($desc)) {
        $iquery = "INSERT INTO news (title, description, man_id) VALUES ('$title','$desc', $id)";
        $insert = mysqli_query($conn, $iquery) or die(mysqli_error($conn));
        $msg = "Succeesfully Posted";
    } else {
        $msg = "Something error ";
    }
}
if (isset($_GET['feedback_id'])) {
    $id = $_GET['feedback_id'];
    $sql = "Delete from feedback where id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Deleted Successfully')</script>";
        echo "<script>window.location.replace('manager.php?viewFeedback')</script>";
    }else{
        echo "<script>alert('Error')</script>";
    }
}
if (isset($_GET['r_id'])) {
    $id = $_GET['r_id'];
    $sql = "Delete from report where id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Deleted Successfully')</script>";
        echo "<script>window.location.replace('manager.php?viewReport')</script>";
    }else{
        echo "<script>alert('Error')</script>";
    }
}
if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $profile = $_POST['profile'];
    if (!empty($username) && !empty($password) && !empty($phone)  && !is_numeric($name)) {
            $iquery1 = "UPDATE `accounts` SET `username` = '$username', `password` = '$password' WHERE `id` = '$id'";
            if (mysqli_query($conn, $iquery1)) {
                $sql3 = "SELECT * FROM `accounts` WHERE `username` = '$username'";
                $query = mysqli_query($conn, $sql3);
                $row = mysqli_fetch_array($query);
                $acc_id = $row['id'];
                $sql4 = "UPDATE `employer` SET `name` = '$name', `phone` = '$phone', `photo` = 'photo' WHERE `id` = '$emp_id'";
                if (mysqli_query($conn, $sql4)) {
                    echo "<script>alert('Succeesfully Updated')</script>";
                    echo "<script>window.location.replace('manager.php')</script>";
                    $msg = "Succeesfully Updated";

                } else {
                    $msg = "Error  " . mysqli_error($conn);
                }
            } else {
                $msg = "something went wrong";
            }
        
    } else {
        $msg = "please insert correct value";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'inc/header.php'; ?>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
     <?php include 'inc/nav.php'; ?>
      <?php include 'inc/manager_side.php'; ?>
      <?php
    if (
           isset($_GET['viewFeedback']) || isset($_GET['updateProfile']) || isset($_GET['viewEmployee']) || isset($_GET['viewCustomer']) || 
           isset($_GET['respondLoan']) || isset($_GET['postNews']) || isset($_GET['viewReport']) || isset($_GET['viewLoanDetails'])
        ) {
            if(isset($_GET['updateProfile'])){
                include './view/manager/update-profile.php';
            }
            if(isset($_GET['viewEmployee'])){
                include './view/manager/view-employee.php';
            }
            if(isset($_GET['viewLoanDetails'])){
                include './view/manager/loan-details.php';
            }
            if(isset($_GET['viewCustomer'])){
                include './view/manager/view-customer.php';
            }
            if(isset($_GET['respondLoan'])){
                include './view/manager/respond-loan.php';
            }
            if(isset($_GET['postNews'])){
                include './view/manager/post-news.php';
            }
            if(isset($_GET['viewReport'])){
                include './view/manager/view-report.php';
            }
            if(isset($_GET['viewFeedback'])){
                include './view/manager/view-feedback.php';
            }
        } else {
            include './inc/manager-body.php';
        }
        ?>
    </div>
 <?php include 'inc/js.php'; ?>

</body>

</html>