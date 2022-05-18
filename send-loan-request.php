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
                                <h3 class="card-title"><span class="fas fa-check pr-1"></span>Loan Request</h3>
                            </div>
                            <form>
                                <div class="card-body">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Amount</span>
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Request</button>
                                </div>
                            </form>
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