<!DOCTYPE html>
<html lang="en">

<?php include 'inc/header.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
     <?php include 'inc/nav.php'; ?>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
      <?php include 'inc/side.php'; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <section class="content pb-1 ">
                    <div class="container-fluid">
                        <div class="card card-primary">
                            <div class="card-header bg-info">
                                <h3 class="card-title"><span class="fas fa-newspaper pr-1"></span>Transaction</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Saving</th>
                                                <th>Credit</th>
                                                <th>Request</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01/01/20000</td>
                                                <td>10000</td>
                                                <td>yes</td>
                                                <td>No</td>
                                                <td>No</td>
                                                <td>Accepted</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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