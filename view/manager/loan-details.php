<?php
$id = $_GET['viewLoanDetails']; 
$sql = "SELECT * FROM `loan_requstes` where id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$cust_id = $row['cust_id'];
$ql1 = "SELECT * FROM `customer` where id = $cust_id";
$result1 = mysqli_query($conn, $ql1);
$row1 = mysqli_fetch_assoc($result1);
if(isset($_POST['approveLoan'])){
    $sql = "UPDATE `loan_requstes` SET `is_approved` = 1 WHERE `id` = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Loan Approved')</script>";
        echo "<script>window.location.href='manager.php?respondLoan'</script>";
    }else{
        echo "<script>alert('Loan Not Approved')</script>";
        echo "<script>window.location.href='manager.php?viewLoanDetails=$id'</script>";
    }
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Loan Details</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-body pl-5">
                    <label class="input-group">Customer Name</label>
                    <p><?php echo $row1['name'] ?></p>
                    <label class="input-group">Customer Current Balance</label>
                    <p><?php echo $row1['balance'] ?></p>
                    <label class="input-group">Phone Number</label>
                    <p><?php echo $row1['phone'] ?></p>
                    <label class="input-group">Amount Requested</label>
                    <p><?php echo $row['amount'] ?></p>
                    <label class="input-group">Date Requested</label>
                    <p><?php echo $row['date'] ?></p>
                </div>
            </div>
            <div class="diplay-flex pr-5">
                <form method="POST">
                    <input type="submit" name="approveLoan" value="Approve" class="btn btn-primary float-right">
                </form>
            </div>
        </section>
</div>