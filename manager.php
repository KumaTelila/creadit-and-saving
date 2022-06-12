<?php
session_start();
include 'connect.php';
if (isset($_POST['submitNews'])) {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    if (!empty($title) && !empty($desc)) {
        $iquery = "INSERT INTO news (title, description, man_id) VALUES ('$title','$desc', 19)";
        $insert = mysqli_query($conn, $iquery) or die(mysqli_error($conn));
        $msg = "Succeesfully Posted";
    } else {
        $msg = "Something error ";
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
           isset($_GET['respondLoan']) || isset($_GET['postNews']) || isset($_GET['viewReport'])
        ) {
            if(isset($_GET['updateProfile'])){
                include './view/manager/update-profile.php';
            }
            if(isset($_GET['viewEmployee'])){
                include './view/manager/view-employee.php';
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