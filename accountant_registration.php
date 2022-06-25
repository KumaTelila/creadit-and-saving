<?php
session_start();
include 'connect.php';
$id = $_SESSION['admin_id'];
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $gender  = $_POST['gender'];
    $profile = $_POST['profile'];
    if (!empty($email) && !empty($profile) && !empty($phone) && is_numeric($phone)  && !is_numeric($name)) {
        $selectu = mysqli_query($conn, "SELECT * FROM `employer` WHERE `email` = '$email'");
        $duchk = mysqli_num_rows($selectu);
        if ($duchk != 0) {
            $msg = "email already exist please try another";
        } else {
            $iquery1 = "UPDATE `employer` SET `name`='$name',`gender`='$gender',`phone`='$phone',`email`='$email',`photo`='$profile' WHERE `acc_id`= $id";
            if (mysqli_query($conn, $iquery1)) {
                echo "<script>alert('Succeesfully Registered')</script>";
                echo "<script>window.location.replace('accountant.php')</script>";
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
                    <h3 class="card-title">Please Fill All Information To get Access</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST">
                    <div class="row ml-3 mr-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Full name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectRounded0">Gender</label>
                                <select class="custom-select rounded-0" name="gender" id="gender">
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
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