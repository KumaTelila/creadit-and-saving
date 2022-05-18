<?php
//error_reporting(0);
include 'connect.php';
session_start();
$msg = "";
if (isset($_POST['submit'])) {

    $username = $_POST['user_name'];
    $password = md5($_POST['password']);
    if (!empty($username) && !empty($password) && !is_numeric($username)) {
        $sql = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'";
        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) > 0) {
            $sqli = mysqli_fetch_assoc($query);
            $id = $sqli['id'];
            if ($sqli['is_manager'] === '1') {
                $_SESSION['manager_id'] = $id;
                header('location: manager.php');
            } else if ($sqli['is_admin'] === '1') {
                $_SESSION['admin_id'] = $id;
                header('location: admin.php');
            } else if ($sqli['is_accountant'] === '1') {
                $_SESSION['accountant_id'] = $id;
                header('location: accountant.php');
            } else if ($sqli['is_customer'] === '1') {
                $_SESSION['customer_id'] = $id;
                header('location: customer.php');
            }
        } else {
            $msg = "Username or Password Incorect";
        }
    } else {
        $msg = "Please insert valid information";
    }
}

$conn->close();
?>
<html>
<?php include 'inc/header.php'; ?>

<body class="login-page" id="body" data-new-gr-c-s-check-loaded="14.1060.0" data-gr-ext-installed="" style="min-height: 402.469px;">
    <div id="root">
        <div class="login-box text-center">
            <div class="login-logo"><a href="#"><b>MMC</b></a></div>
            <div class="card mb-4">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Login Here</p>
                    <?php if (isset($msg) && $msg !=="") : ?>
                        <div class="alert alert-danger">
                            <h5> <i class="icon fas fa-ban"></i> <?php echo $msg; ?></h5>
                        </div>
                    <?php endif ?>
                    <form method="POST" action="">
                        <div class="input-group mb-3"><input id="user_name" name="user_name" type="text" class="form-control" placeholder="Username" value="">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                            </div>
                        </div>
                        <div class="input-group mb-3"><input class="form-control" placeholder="Password" id="password" name="password" type="password" value="">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-lock"></span></div>
                            </div>
                        </div>
                        <div class="form-group text-left"><button type="submit" name="submit" id="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt mr-2"></i>Login</button></div>
                    </form>
                    <p class="mt-4 text-left"><a href="/forgot_password">Forgot Password ?</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php include 'inc/js.php'; ?>
</body>


</html>