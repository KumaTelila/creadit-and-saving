<?php 
session_start();
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
        <?php include 'inc/manager_side.php'; ?>
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
                                    <h3 class="card-title">Employers</h3>
                                </div>
                            </div>
                            <div id="table_stud_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="table_stud" class="table table-bordered table-striped dataTable no-footer" style="margin-top: 10px;" role="grid" aria-describedby="table_stud_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending" style="width: 307.188px;">Full Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 437.691px;">Account Number</th>
                                                    <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 207.188px;">Tottal Money Have</th>
                                                    <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 244.201px;">Phone Number</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include './connect.php';
                                                $sql =  "select *from accounts";
                                                $result = mysqli_query($conn, $sql);
                                                ?>
                                                <?php
                                                while ($rows = mysqli_fetch_assoc($result)) {
                                                   
                                                    if ($rows['is_admin'] == '1') {
                                                        $type = "Admin";
                                                    } else if ($rows['is_manager'] == '1') {
                                                        $type = "Manager";
                                                    } else if ($rows['is_accountant'] == '1') {
                                                        $type = "Accountant";
                                                    } else if ($rows['is_commite'] == '1') {
                                                        $type = "Commite";
                                                    }
                                                ?>

                                                    <tr>
                                                        <td><?php echo $rows['id']; ?></td>
                                                        <td><?php echo $rows['username']; ?></td>
                                                        <td><?php echo $type; ?></td>
                                                        <td>
                                                            <a href="#">
                                                                <button class="btn btn-primary btn-xs modal_edit">
                                                                    <i class="fa fa-edit"></i>
                                                                </button>
                                                            </a>
                                                            <a href="functions/delete.php">
                                                                <button class="btn btn-danger btn-xs modal_edit" onclick="return confirm('Are You Sure You Went To Delete this User');">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
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