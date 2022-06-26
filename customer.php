<?php
session_start();
include 'connect.php';
if (!isset($_SESSION['role']) || $_SESSION['role'] != "Customer") {
    header("Location: index.php");
}
$id = $_SESSION['id'];
$sql = "SELECT * FROM customer WHERE acc_id = '$id'";
$query = mysqli_query($conn, $sql);
$sqli = mysqli_fetch_assoc($query);
$cust_id = $sqli['id'];
$name = $sqli['name'];
$phone = $sqli['phone'];
$balance = $sqli['balance'];
$profile = $sqli['photo'];
$sql1 = "SELECT * FROM `accounts` WHERE id = $id";
$query1 = mysqli_query($conn, $sql1);
$sqli1 = mysqli_fetch_assoc($query1);
$username = $sqli1['username'];
if (isset($_POST['submitLoans'])) {
    $amount = $_POST['title'];
    $disc = $_POST['desc'];

    $filename = $_FILES["uploadfile"]["name"];
    $filename = date('Y-m-d H:i:s').$filename;
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;
    if (!empty($amount) && is_numeric($amount)) {
        $iquery = "INSERT INTO `loan_requstes`(`cust_id`, `amount`, `description`, `photo`) VALUES ('$cust_id','$amount', '$disc', '$filename')";
        $insert = mysqli_query($conn, $iquery);
        if($insert){
        $msg = "Succeesfully Requested";
        if (move_uploaded_file($tempname, $folder)) {
            $msg = "Succeesfully Requested";
        } else {
            $msg = "error in uploading image";
        }
        }else{
            $msg = "Something went wrong";
        }
    } else {
        $msg = "Something error ";
    }
}
if (isset($_POST['submitPayLoans'])) {
    $amount = $_POST['title'];
    if (!empty($amount) && is_numeric($amount)) {
        $iquery = "INSERT INTO `loan_repay`(`cust_id`, `amount`) VALUES ('$cust_id','$amount')";
        $insert = mysqli_query($conn, $iquery);
        if($insert){
        $msg = "Succeesfully Requested";
        }else{
            $msg = "Something went wrong";
        }
    } else {
        $msg = "Something error ";
    }
}
if (isset($_POST['submitFeedback'])) {
    $feedback = $_POST['feedback'];
    if (!empty($feedback)) {
        $iquery = "INSERT INTO `feedback`(`cust_id`,  `sender_name`, `message`) VALUES ('$cust_id', '$name', '$feedback')";
        $insert = mysqli_query($conn, $iquery) or die(mysqli_error($conn));
        $msg = "Succeesfully Sended";
    } else {
        $msg = "Something error ";
    }
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "Delete from loan_requstes where id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Cancled Successfully')</script>";
        echo "<script>window.location.replace('customer.php?cancleRequest')</script>";
    }else{
        echo "<script>alert('Error')</script>";
    }
}
if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $filename = $_FILES["uploadfile"]["name"];
    $filename = date('Y-m-d H:i:s').$filename;
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;
    if (!empty($username)  && !empty($phone)  && !is_numeric($name)) {
            $iquery1 = "UPDATE `accounts` SET `username` = '$username' WHERE `id` = '$id'";
            if (mysqli_query($conn, $iquery1)) {
                $sql3 = "SELECT * FROM `accounts` WHERE `username` = '$username'";
                $query = mysqli_query($conn, $sql3);
                $row = mysqli_fetch_array($query);
                $acc_id = $row['id'];
                $sql4 = "UPDATE `customer` SET `name` = '$name', `phone` = '$phone', `photo` = '$filename' WHERE `id` = '$cust_id'";
                if (mysqli_query($conn, $sql4)) {
                    echo "<script>alert('Succeesfully Updated')</script>";
                    echo "<script>window.location.replace('customer.php')</script>";
                    $msg = "Succeesfully Updated";
                    if (move_uploaded_file($tempname, $folder)) {
                        $msg = "Succeesfully Updated";
                    } else {
                        $msg = "error in uploading image";
                    }

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
      <?php include 'inc/side.php'; ?>
        <?php
            if (
                isset($_GET['myProfile']) || isset($_GET['records']) || isset($_GET['request']) || isset($_GET['sendloanRequest']) || isset($_GET['cancleRequest']) || isset($_GET['registerRepayMoney']) 
                || isset($_GET['viewBalance']) || isset($_GET['payLoan']) || isset($_GET['SendFeedback']) || isset($_GET['viewLoanResponse']) 
            ) {
                if (isset($_GET['myProfile'])) {
                    include './view/customer/update-profile.php';
                }
                if (isset($_GET['sendloanRequest'])) {
                    include './view/customer/send-loan-request.php';
                }
                if (isset($_GET['cancleRequest'])) {
                    include './view/customer/cancleRequest.php';
                }
                if (isset($_GET['registerRepayMoney'])) {
                    include './view/customer/registerRepayMoney.php';
                }
                if (isset($_GET['payLoan'])) {
                    include './view/customer/payLoan.php';
                }
                if (isset($_GET['SendFeedback'])) {
                    include './view/customer/SendFeedback.php';
                }
                if (isset($_GET['viewLoanResponse'])) {
                    include './view/customer/viewLoanResponse.php';
                }
            } else {
                include './inc/cust_boby.php';
            }
            ?>
    </div>
 <?php include 'inc/js.php';?>
</body>

</html>