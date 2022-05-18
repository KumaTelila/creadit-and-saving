<?php
session_start();
include 'connect.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $usertype = $_POST['user_type'];

    // $selectu = mysqli_query($conn, "SELECT * FROM student WHERE uname = '$uname'") or die("echo 'could not connect to table';");
    // $duchk = mysqli_num_rows($selectu);
    if ($usertype == 'manager') {
        $iquery = "INSERT INTO accounts (username, password, is_manager) VALUES ('$username','$password', TRUE)";
    } else if ($usertype == 'commite') {
        $iquery = "INSERT INTO accounts (username, password,is_commite) VALUES ('$username','$password', TRUE)";
    } else if ($usertype == 'accountant') {
        $iquery = "INSERT INTO accounts (username, password, is_accountant) VALUES ('$username','$password', TRUE)";
    }
    $insert = mysqli_query($conn, $iquery) or die(mysqli_error($conn));
    if ($insert) {
        header('location: create-account.php');
        $msg = "Successfully Created";
    }else{
        $msg ="Something wrong";
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
                                </div>
                                <!-- /.card-header -->
                                <?php if (isset($msg)) : ?>
                                    <div class="alert alert-danger">
                                        <h5> <i class="icon fas fa-ban"></i> <?php echo $msg; ?></h5>
                                    </div>
                                <?php endif ?>

                                <!-- form start -->
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
                                                    <option value="commite">Commite</option>
                                                    <option value="accountant">Accountant</option>
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
                                                    <th style="width: 22.5521px;" class="sorting_asc" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending">No.</th>
                                                    <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 297.691px;">Username</th>
                                                    <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 207.188px;">User Type</th>
                                                    <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 244.201px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">1</td>
                                                    <td style="text-transform: capitalize;">kxkx</td>
                                                    <td class="text-success">manager</td>
                                                    <td>
                                                        <a href="class.php?id=1002">
                                                            <button class="btn btn-primary btn-xs modal_edit">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                        </a>
                                                        <a href="class.php?delete=1002">
                                                            <button class="btn btn-danger btn-xs modal_edit" onclick="return confirm('Are You Sure You Went To Delete A/oromo');">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </a>
                                                        <a href="class.php?view=1002">
                                                            <button class="btn btn-info btn-xs modal_edit">
                                                                <i class="fa fa-eye"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1">2</td>
                                                    <td style="text-transform: capitalize;">kxkx</td>
                                                    <td class="text-success">manager</td>
                                                    <td>
                                                        <a href="class.php?id=1001">
                                                            <button class="btn btn-primary btn-xs modal_edit">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                        </a>
                                                        <a href="class.php?delete=1001">
                                                            <button class="btn btn-danger btn-xs modal_edit" onclick="return confirm('Are You Sure You Went To Delete A/Oromo Class');">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </a>
                                                        <a href="class.php?view=1001">
                                                            <button class="btn btn-info btn-xs modal_edit">
                                                                <i class="fa fa-eye"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">3</td>
                                                    <td style="text-transform: capitalize;">kxkx</td>
                                                    <td class="text-success">manager</td>
                                                    <td>
                                                        <a href="class.php?id=1000">
                                                            <button class="btn btn-primary btn-xs modal_edit">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                        </a>
                                                        <a href="class.php?delete=1000">
                                                            <button class="btn btn-danger btn-xs modal_edit" onclick="return confirm('Are You Sure You Went To Delete Amharic Class');">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </a>
                                                        <a href="class.php?view=1000">
                                                            <button class="btn btn-info btn-xs modal_edit">
                                                                <i class="fa fa-eye"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
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