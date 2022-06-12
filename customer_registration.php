<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $gender  = $_POST['gender'];
    $profile = $_POST['profile'];
    if (!empty($username) && !empty($password) && !empty($profile) && !empty($phone) && is_numeric($phone) && !is_numeric($username)  && !is_numeric($name)) {
        $selectu = mysqli_query($conn, "SELECT * FROM `accounts` WHERE `username` = '$username'");
        $duchk = mysqli_num_rows($selectu);
        if ($duchk != 0) {
            $msg = "username already exist please try another";
        } else {
            $iquery1 = "INSERT INTO accounts (username,	password,  is_customer) VALUES (  '$username','$password', TRUE)";
            if (mysqli_query($conn, $iquery1)) {
                $sql3 = "SELECT * FROM `accounts` WHERE `username` = '$username'";
                $query = mysqli_query($conn, $sql3);
                $row = mysqli_fetch_array($query);
                $acc_id = $row['id'];
                $acc_number = $acc_id + 1000;
                $sql4 = "INSERT INTO `customer`(`acc_id`, `name`, `gender`, `phone`, `acc_number`,  `photo`) 
                VALUES ('$acc_id','$name','$gender',' $phone', '$acc_number','photo')";
                if (mysqli_query($conn, $sql4)) {
                    echo "<script>alert('Succeesfully Registered')</script>";
                    echo "<script>window.open('login.php')</script>";
                    $msg = "Succeesfully Registered";

                } else {
                    $msg = "Error  " . mysqli_error($conn);
                }
            } else {
                $msg = "something went wrong";
            }
        }
    } else {
        $msg = "please insert correct value";
    }
}
?>
<html lang="en">
<?php include 'inc/header.php'; ?>

<body class="register-page">
    <div class="register-box" style="width: 460px">
        <div class="register-logo">
            <a href="#"><b>MMC</b></a>
        </div>
        <div class="card">
            <div class="card card-primary">
                <?php if (isset($msg) && $msg != "Succeesfully Registered") : ?>
                    <div class="alert alert-danger">
                        <h5> <i class="icon fas fa-ban"></i> <?php echo $msg; ?></h5>
                    </div>
                <?php elseif (isset($msg) && $msg == "Succeesfully Registered") : ?>
                    <div class="alert alert-success">
                        <h5> <i class="icon fas fa-check"></i> <?php echo $msg; ?></h5>
                    </div>
                <?php endif ?>
                <div class="card-header">
                    <h3 class="card-title">Register Here</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST">
                    <div class="row ml-3 mr-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Full name">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectRounded0">Gender</label>
                                <select class="custom-select rounded-0" name="gender" id="gender">
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="username">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Profile Picture </label>
                                <input type="file" name="profile">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="submit" id="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
    <?php include 'inc/js.php'; ?>

</body>

</html>