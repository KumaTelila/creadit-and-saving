<!DOCTYPE html>
<?php 
session_start();
?>
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
                                <h3 class="card-title"><i class="fas fa-user mr-1"></i> User Profile</h3>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="pill"
                                            href="#personal">Personal</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="pill"
                                            href="#contact_address">Contact Address</a></li>
                                </ul>
                                <div class="tab-content pt-1">
                                    <div id="personal" class="tab-pane active">
                                        <div class="card no-shadow mb-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-md-3"><img
                                                            src="dist/img/avatar.png"
                                                            alt="User-profile" width="100%"
                                                            class="img-size-60 img-thumbnail"></div>
                                                    <div class="col-12 col-md-4">
                                                        <p><strong class="label-colen">First Name: </strong>Kuma</p>
                                                        <p><strong class="label-colen">Father Name: </strong>Telila</p>
                                                        <p><strong class="label-colen">Grand Father Name: </strong>Bacha
                                                        </p>
                                                        <p><strong class="label-colen">Gender: </strong>Male</p>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer"><a href="#">Edit</a></div>
                                        </div>
                                    </div>
                                    <div id="contact_address" class="tab-pane fade">
                                        <div class="card no-shadow mb-0">
                                            <div class="card-body">
                                                <p><strong class="label-colen">Country: </strong>ET</p>
                                                <p><strong class="label-colen">Street Address: </strong></p>
                                                <p><strong class="label-colen">Home Telephone: </strong></p>
                                                <p><strong class="label-colen">Mobile: </strong>0965582658</p>
                                                <p><strong class="label-colen">Work Telephone: </strong></p>
                                                <p><strong class="label-colen">Email: </strong>kumatelila26@gmail.com
                                                </p>
                                                <p><strong class="label-colen">Zone: </strong></p>
                                                <p><strong class="label-colen">Woreda: </strong></p>
                                                <p><strong class="label-colen">Kebele: </strong></p>
                                            </div>
                                            <div class="card-footer"><a
                                                    href="#">Edit</a></div>
                                        </div>
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
<?php include 'inc/js.php'; ?>
</body>

</html>