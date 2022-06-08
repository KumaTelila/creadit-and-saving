<?php
session_start();
include 'connect.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $usertype = $_POST['user_type'];

    // $selectu = mysqli_query($conn, "SELECT * FROM student WHERE uname = '$uname'") or die("echo 'could not connect to table';");
    // $duchk = mysqli_num_rows($selectu);
    if (!empty($username) && !empty($password) && !is_numeric($username)) {
        $selectu = mysqli_query($conn, "SELECT * FROM accounts WHERE username = '$username'") or die("echo 'could not connect to table';");
        $duchk = mysqli_num_rows($selectu);
        if ($duchk != 0) {
            $msg = "username already exist please try another";
        } else {
            if ($usertype == 'manager') {
                $iquery = "INSERT INTO accounts (username, password, is_manager) VALUES ('$username','$password', TRUE)";
                $insert = mysqli_query($conn, $iquery) or die(mysqli_error($conn));
                $msg = "Succeesfully Registered";
            } else if ($usertype == 'accountant') {
                $iquery = "INSERT INTO accounts (username, password, is_accountant) VALUES ('$username','$password', TRUE)";
                $insert = mysqli_query($conn, $iquery) or die(mysqli_error($conn));
                $msg = "Succeesfully Registered";
            } else if ($usertype == 'admin') {
                $iquery = "INSERT INTO accounts (username, password, is_admin) VALUES ('$username','$password', TRUE)";
                $insert = mysqli_query($conn, $iquery) or die(mysqli_error($conn));
                $msg = "Succeesfully Registered";
            } else {
                $msg = "Something Wrong";
            }
        }
    } else {
        $msg = "please insert correct value";
    }
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "Delete from accounts where id = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Deleted Successfully')</script>";
        echo "<script>window.location.replace('create-account.php')</script>";
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
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <?php include 'inc/admin_side.php'; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">
                <section class="content">
                    <section class="content pb-1 ">
                        <div class="container-fluid">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Create Account</h3>
                                    <?php if (isset($msg) && $msg != "Succeesfully Registered") : ?>
                                        <div class="alert alert-danger">
                                            <h5> <i class="icon fas fa-ban"></i> <?php echo $msg; ?></h5>
                                        </div>
                                    <?php elseif (isset($msg) && $msg == "Succeesfully Registered") : ?>
                                        <div class="alert alert-success">
                                            <h5> <i class="icon fas fa-check"></i> <?php echo $msg; ?></h5>
                                        </div>
                                        <?php elseif (isset($msg) && $msg == "Deleted Successfully") : ?>
                                        <div class="alert alert-success">
                                            <h5> <i class="icon fas fa-check"></i> <?php echo $msg; ?></h5>
                                        </div>
                                    <?php endif ?>
                                </div>
                                <form class="form-horizontal" method="POST" action="">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="username" id="username" class="form-control" id="inputEmail3" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="password" id="password" class="form-control" id="inputPassword3" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="custom-select" class="col-sm-2 col-form-label">User type</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="user_type" id="user_type">
                                                    <option value="manager">Manager</option>
                                                    <option value="accountant">Accountant</option>
                                                    <option value="admin">Admin</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-body">
                                        <button type="submit" name="submit" id="submit" class="btn btn-info">Create Account</button>
                                        <button type="submit" class="btn btn-default float-right">Cancel</button>
                                    </div>
                                    <!-- /.card-footer -->
                                </form>
                            </div>
                            <div id="table_stud_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="table_stud" class="table table-bordered table-striped dataTable no-footer" style="margin-top: 10px;" role="grid" aria-describedby="table_stud_info">
                                            <thead>
                                                <tr role="row">
                                                    <th style="width: 122.5521px;" class="sorting_asc" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending">No.</th>
                                                    <th style="width: 122.5521px;" class="sorting_asc" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending">Id</th>

                                                    <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 397.691px;">Username</th>
                                                    <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 407.188px;">User Type</th>
                                                    <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 244.201px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                              
                                                function view(){
                                                    global $conn;
                                                     $admin_id=$_SESSION['admin_id'];
                                                    $query = "SELECT * FROM accounts";
                                                    $res = mysqli_query($conn, $query);
                                                    $i = 1;
                                                    while ($row = mysqli_fetch_assoc($res)) {
                                                        $id = $row['id'];
                                                        if($id==$admin_id){
                                                            continue;
                                                        }
                                                        $username = $row['username'];
                                                        if($row['is_manager'] == '1'){
                                                            $user_type = 'Manager';
                                                        }elseif($row['is_accountant'] == '1'){
                                                            $user_type = 'Accountant';
                                                        }elseif($row['is_admin'] == '1'){
                                                            $user_type = 'Admin';
                                                        }else{
                                                            continue;
                                                        }
                                                        echo "<tr>";
                                                        echo "<td>$i</td>";
                                                        echo "<td>$id</td>";
                                                        echo "<td>$username</td>";
                                                        echo "<td>$user_type</td>";
                                                        echo "<td><a href='#' class='btn btn-info'>Edit</a> <a href='create-account.php?id=$id' class='btn btn-danger'>Delete</a></td>";
                                                        echo "</tr>";
                                                        $i++;
                                                    }
                                                }
                                                view();
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </section>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <?php include 'inc/js.php'; ?>
</body>

</html>