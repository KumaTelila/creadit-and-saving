<?php
session_start();
include 'connect.php';
$sql = "Select * from accounts";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  $is_m = 0;
  $is_a = 0;
  $is_c = 0;
  $is_cu = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $is_manager = $row['is_manager'];
        $is_admin = $row['is_admin'];
        $is_accountant = $row['is_accountant'];
        $is_customer = $row['is_customer'];
        if($is_manager == 1){
            $is_m ++;
        }
        if($is_admin == 1){
            $is_a ++;
        }
        if($is_accountant == 1){
            $is_c ++;
        }
        if($is_customer == 1){
            $is_cu ++;
        }
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
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3><?php echo $is_cu ?></h3>

                  <p>Customers</p>
                </div>
                <div class="icon">
                  <i class="fas fa-user-cog"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3><?php echo $is_c?><sup style="font-size: 20px"></sup></h3>

                  <p>Accountant</p>
                </div>
                <div class="icon">
                  <i class="fas fa-user-cog"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <!-- ./col -->
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3><?php echo $is_m?></h3>

                  <p>Managers</p>
                </div>
                <div class="icon">
                  <i class="fas fa-user-cog"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
        </div>
        <!--/. container-fluid -->
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