<?php
session_start();
include 'connect.php';
$msg = "";
if (isset($_POST['submit'])) {
    $username = $_POST['user_name'];
    $password = md5($_POST['password']);
    if (!empty($username) && !empty($password)) {
       if(login($username, $password)){
        if ($_SESSION['role'] == "Customer") {
            header("Location: customer.php");
        } else if ($_SESSION['role'] == "Accountant") {
            header("Location: accountant.php");
        } else if ($_SESSION['role'] == "Manager") {
            header("Location: manager.php");
        } else if ($_SESSION['role'] == "Admin") {
            header("Location: admin.php");
        }
       }else{
              $msg = "Invalid Username or Password" ;
       }
    } else {
        $msg = "Please insert valid information" ;
    }
}

function login($username, $password)
{
    include 'connect.php';
    $sql = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $accid = $row['id'];
        $accname = $row['username'];
        if ($row['is_manager'] == 1) {
            $role = "Manager";
        } elseif ($row['is_admin'] == 1) {
            $role = "Admin";
        }elseif ($row['is_accountant'] == 1) {
            $role = "Accountant";
        } 
        else {
            $role = "Customer";
        }
        $_SESSION['id'] = $accid;
        $_SESSION['username'] = $accname;
        $_SESSION['role'] = $role;
        // 
        // if ($_SESSION['role'] == "pharmacy") {
        //     if ($is_approved) {
        //         $sql2 = "SELECT * FROM pharmacy_info WHERE acc_id= $accid";
        //         $row = mysqli_fetch_array(mysqli_query($this->connect(), $sql2));
        //         $pharmacy_id = $row['id'];
        //         $pharmacy_name = $row['Pharmacy_Name'];
        //         $_SESSION['pharmacy_id'] = $pharmacy_id;
        //         $_session['pharacy_name'] = $pharmacy_name;
        //     }
        // }
        return true;
    }
    return false;
}


// $conn->close();
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
                    <?php if (isset($msg) && $msg !== "") : ?>
                        <div class="alert alert-danger">
                            <h5> <i class="icon fas fa-ban"></i> <?php echo $msg; ?></h5>
                        </div>
                    <?php endif ?>
                    <form method="POST" action="">
                        <div class="input-group mb-3"><input id="user_name" name="user_name" type="text" class="form-control" placeholder="Username" value="" required>
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                            </div>
                        </div>
                        <div class="input-group mb-3"><input class="form-control" placeholder="Password" id="password" name="password" type="password" value="" required>
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-lock"></span></div>
                            </div>
                        </div>
                        <div class="form-group text-left"><button type="submit" name="submit" id="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt mr-2"></i>Login</button></div>
                    </form>
                    <p class="mt-4 text-left"><a href="#">Forgot Password ?</a></p>
                    <p class="mt-4 text-left"><a href="customer_registration.php">Register As New Member</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php include 'inc/js.php'; ?>
</body>


</html>