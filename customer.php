<?php
session_start(); 
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
                || isset($_GET['viewBalance']) || isset($_GET['transferMoney'])
            ) {
                if (isset($_GET['myProfile'])) {
                    include './view/customer/customer-profile.php';
                }
                if (isset($_GET['records'])) {
                    include './view/customer/records.php';
                }
                if (isset($_GET['request'])) {
                    include './view/customer/request.php';
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
                if (isset($_GET['viewBalance'])) {
                    include './view/customer/viewBalance.php';
                }
                if (isset($_GET['transferMoney'])) {
                    include './view/customer/transfer-money.php';
                }
            } else {
                include './inc/cust_boby.php';
            }
            ?>
    </div>
 <?php include 'inc/js.php';?>
</body>

</html>