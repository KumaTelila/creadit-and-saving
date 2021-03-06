<?php
function checkApprove()
{
    include 'connect.php';
    $id = $_SESSION['customer'];
    $sql = "select *from loan_requstes where cust_id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($row['is_approved'] == 1) {
            return true;
        } else {
            return false;
        } 
        }else {
         return true;
    } 
}
?>

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <section class="content pb-1 ">
            <div class="container-fluid">
                <?php //checkApprove(); 
                ?>
                <div class="card card-primary">
                    <div class="card-header">

                        <h3 class="card-title">Pay Loan</h3>
                        <?php if (isset($msg) && $msg != "Succeesfully Requested") : ?>
                            <div class="alert alert-danger">
                                <h5> <i class="icon fas fa-ban"></i> <?php echo $msg; ?></h5>
                            </div>
                        <?php elseif (isset($msg) && $msg == "Succeesfully Requested") : ?>
                            <div class="alert alert-success">
                                <h5> <i class="icon fas fa-check"></i> <?php echo $msg; ?></h5>
                            </div>
                        <?php endif ?>
                    </div>
                    <form class="form-horizontal" method="POST" action="">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Amount</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Amount in Birr">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-body">
                            <button type="submit" name="submitPayLoans" id="submitPayLoans" class="btn btn-info">Pay</button>
                            <button type="submit" class="btn btn-default float-right">Cancel</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
            </div>
        </section>
    </section>
    <!-- /.content -->
</div>