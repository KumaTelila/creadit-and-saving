<?php
session_start();
include 'connect.php';
if (!isset($_SESSION['role']) || $_SESSION['role'] != "Admin") {
    header("Location: index.php");
}
$sql = "Select * from accounts";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $is_m = 0;
    $is_a = 0;
    $is_c = 0;
    $is_cu = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $is_manager = $row['is_manager'];
        $is_admin = $row['is_admin'];
        $is_accountant = $row['is_accountant'];
        $is_customer = $row['is_customer'];
        if ($is_manager == 1) {
            $is_m++;
        }
        if ($is_admin == 1) {
            $is_a++;
        }
        if ($is_accountant == 1) {
            $is_c++;
        }
        if ($is_customer == 1) {
            $is_cu++;
        }
    }
}
function addToEmploye(){
    include 'connect.php';
    $username = $_POST['username'];
    $sql1 = "Select * from accounts where username = '$username'";
                $result1 = mysqli_query($conn, $sql1);
                $row = mysqli_fetch_assoc($result1);
                $acc_id = $row['id'];
                $is_manager = $row['is_manager'];
                $is_admin = $row['is_admin'];
                $is_accountant = $row['is_accountant'];
                $role = null;
                if($is_manager == 1){
                    $role = 'manager';
                }
                if($is_admin == 1){
                    $role = 'admin';
                }
                if($is_accountant == 1){
                    $role = 'accountant';
                }
                $iquery1 = "INSERT INTO `employer`(`acc_id`, `role`) VALUES ('$acc_id','$role')";
                $insert1 = mysqli_query($conn, $iquery1) or die(mysqli_error($conn));
}
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $usertype = $_POST['user_type'];
    if (!empty($username) && !empty($password) && !is_numeric($username)) {
        $selectu = mysqli_query($conn, "SELECT * FROM accounts WHERE username = '$username'") or die("echo 'could not connect to table';");
        $duchk = mysqli_num_rows($selectu);
        if ($duchk != 0) {
            $msg = "username already exist please try another";
        } else {
            if ($usertype == 'manager') {
                $iquery = "INSERT INTO accounts (username, password, is_manager) VALUES ('$username','$password', TRUE)";
                $insert = mysqli_query($conn, $iquery) or die(mysqli_error($conn));
                addToEmploye();
                $msg = "Succeesfully Registered";
            } else if ($usertype == 'accountant') {
                $iquery = "INSERT INTO accounts (username, password, is_accountant) VALUES ('$username','$password', TRUE)";
                $insert = mysqli_query($conn, $iquery) or die(mysqli_error($conn));
                addToEmploye();
                $msg = "Succeesfully Registered";
            } else if ($usertype == 'admin') {
                $iquery = "INSERT INTO accounts (username, password, is_admin) VALUES ('$username','$password', TRUE)";
                $insert = mysqli_query($conn, $iquery) or die(mysqli_error($conn));
                addToEmploye();
                $msg = "Succeesfully Registered";
            } else {
                $msg = "Something Wrong";
            }
        }
    } else {
        $msg = "please insert correct value";
    }
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "Delete from accounts where id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Deleted Successfully')</script>";
        echo "<script>window.location.replace('admin.php?userList')</script>";
    }
}
if (isset($_GET['feedback_id'])) {
    $id = $_GET['feedback_id'];
    $sql = "Delete from feedback where id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Deleted Successfully')</script>";
        echo "<script>window.location.replace('admin.php?viewFeedback')</script>";
    }else{
        echo "<script>alert('Error')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'inc/header.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include 'inc/nav.php'; ?>
        <?php include 'inc/admin_side.php'; ?>
        <?php
        if (
            isset($_GET['createAccount']) || isset($_GET['userList']) || isset($_GET['backupDatabase']) || isset($_GET['viewFeedback'])
        ) {
            if (isset($_GET['createAccount'])) {
                include './view/admin/create-account.php';
            }
            if (isset($_GET['userList'])) {
                include './view/admin/user-list.php';
            }
            if (isset($_GET['backupDatabase'])) {
                include './view/admin/backup-database.php';
            }
            if (isset($_GET['viewFeedback'])) {
                include './view/admin/view-feedback.php';
            }
        } else {
            include './inc/admin_body.php';
        }
        ?>
    </div>
    <?php include 'inc/js.php'; ?>
</body>

</html>