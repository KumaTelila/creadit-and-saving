<?php
function numberLoanRequest(){
    include './connect.php';
    $sql = "SELECT * FROM `loan_requstes`";
    $result = mysqli_query($conn, $sql);
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['is_approved'] == 0) {
            $i++;
        }
    }
    return $i;
}
function numberReports(){
    include './connect.php';
    $sql = "SELECT * FROM `report`";
    $result = mysqli_query($conn, $sql);
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
    }
    return $i;
}
function numberCustomer(){
    include './connect.php';
    $sql = "SELECT * FROM `customer`";
    $result = mysqli_query($conn, $sql);
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
    }
    return $i;
}
function numberEmployer(){
    include './connect.php';
    $sql = "SELECT * FROM `employer`";
    $result = mysqli_query($conn, $sql);
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
    }
    return $i;
}
?>


<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard </h1>
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
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i
                                        class="fas fa-dollar-sign"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Loans Requestes</span>
                                    <span class="info-box-number">
                                        <?php echo numberLoanRequest(); ?>
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1"><i
                                        class="fas fa-money-bill"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Reports</span>
                                    <span class="info-box-number"><?php  echo numberReports() ?> </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix hidden-md-up"></div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Customers</span>
                                    <span class="info-box-number"><?php  echo numberCustomer() ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Employers</span>
                                    <span class="info-box-number"><?php  echo numberEmployer() ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>