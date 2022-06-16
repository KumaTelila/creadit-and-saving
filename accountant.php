<?php
session_start();
include './connect.php';
if (!isset($_SESSION['role']) || $_SESSION['role'] != "Accountant") {
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
if (isset($_POST['submitReport'])) {
    $report_type = $_POST['title'];
    $report = $_POST['desc'];
    if (!empty($report_type) && !empty($report)) {
        $iquery = "INSERT INTO `report`(`acc_id`, `report_type`, `reporter_name`, `report`) VALUES ('$id', '$report_type', '$name', '$report')";
        $insert = mysqli_query($conn, $iquery) or die(mysqli_error($conn));
        $msg = "Succeesfully Reported";
    } else {
        $msg = "Something error ";
    }
}
// $sql = "SELECT * FROM `employer` WHERE `acc_id` = '$_SESSION[accountant]'";
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);
// if($row['name']=="" && $row['phone']==""  && $row['gender']=="" && $row['email']==""){
//     echo "<script>alert('Please Fill All Information ')</script>";
//     echo "<script>window.location.replace('accountant_registration.php')</script>";
// }
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "UPDATE `loan_requstes` SET `is_registered`='1' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $sql1 = "SELECT * FROM `loan_requstes` WHERE id= $id";
    $result1 = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($result1);
    $amount = $row['amount'];
    $cust_id = $row['cust_id'];
    $sql2 = "UPDATE `customer` SET  `balance`=`balance`-$amount WHERE id = $cust_id";
    $result2 = mysqli_query($conn, $sql2);
    if ($result && $result2) {
        echo "<script>alert('Registered Successfully')</script>";
        echo "<script>window.location.replace('accountant.php?registerIssueMoney')</script>";
    }else{
        echo "<script>alert('Not Registered Successfully')</script>";
        echo "<script>window.location.replace('accountant.php?registerIssueMoney')</script>";
    }
}
if (isset($_GET['repay_id'])) {
    $id = $_GET['repay_id'];
    $sql = "UPDATE `loan_repay` SET `is_registered`='1' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $sql1 = "SELECT * FROM `loan_repay` WHERE id= $id";
    $result1 = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($result1);
    $amount = $row['amount'];
    $cust_id = $row['cust_id'];
    $sql2 = "UPDATE `customer` SET  `balance`=`balance`+$amount WHERE id = $cust_id";
    $result2 = mysqli_query($conn, $sql2);
    if ($result && $result2) {
        echo "<script>alert('Registered Successfully')</script>";
        echo "<script>window.location.replace('accountant.php?registerRepayMoney')</script>";
    }else{
        echo "<script>alert('Not Registered Successfully')</script>";
        echo "<script>window.location.replace('accountant.php?registerRepayMoney')</script>";
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
                    echo "<script>window.location.replace('accountant.php')</script>";
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
        <?php include 'inc/acc_side.php'; ?>
        <?php
    if (
           isset($_GET['updateProfile']) || isset($_GET['notification']) || isset($_GET['viewCustomer']) || 
           isset($_GET['registerIssueMoney']) || isset($_GET['registerRepayMoney']) || isset($_GET['sendReport'])
        ) {
            if(isset($_GET['updateProfile'])){
                include './view/accountant/update-profile.php';
            }
            if(isset($_GET['notification'])){
                include './view/accountant/notification.php';
            }
            if(isset($_GET['viewCustomer'])){
                include './view/accountant/view-customer.php';
            }
            if(isset($_GET['registerIssueMoney'])){
                include './view/accountant/register-issue-money.php';
            }
            if(isset($_GET['registerRepayMoney'])){
                include './view/accountant/register-repay-money.php';
            }
            if(isset($_GET['sendReport'])){
                include './view/accountant/send-report.php';
            }
        } else {
            include './inc/acc_body.php';
        }
        ?>
    </div>
    <?php include 'inc/js.php'; ?>

</body>

</html>