<?php
session_start();


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