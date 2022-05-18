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
      <?php include 'inc/side.php'; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <section class="content pb-1 ">
                    <div class="container-fluid">
                        <div>
                            <div class="card card-primary">
                                <div class="card-header bg-info">

                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="row">
                                            <div class="col-md-2 col-lg-2 col-sm-12"><img src="dist/img/avatar.png" class="img-thumbnail" alt="Cinque Terre" width="100%"></div>
                                            <div class="col-md-5 col-lg-5 col-sm-12">
                                                <p><strong class="label-colen">Full Name: </strong>Kuma Telila Bacha</p>
                                                <p><strong class="label-colen">Account Number: </strong>10000000000000
                                                </p>
                                                <p><strong class="label-colen">Phone Number: </strong>099999999999</p>
                                                <p><strong class="label-colen">Address: </strong>Batu</p>
                                            </div>
                                            <div class="col-md-5 col-lg-5 col-sm-12">
                                                <p><strong class="label-colen">Credit: </strong>100000</p>
                                                <p><strong class="label-colen">Saving: </strong>10000000</p>
                                                <p><strong class="label-colen">Total: </strong>10000000</p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
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
 <?php include 'inc/js.php';?>
</body>

</html>