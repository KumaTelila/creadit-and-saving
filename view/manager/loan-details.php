<?php
$id = $_GET['viewLoanDetails'];
$sql = "SELECT * FROM `loan_requstes` where id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$image = $row['photo'];
$cust_id = $row['cust_id'];
$ql1 = "SELECT * FROM `customer` where id = $cust_id";
$result1 = mysqli_query($conn, $ql1);
$row1 = mysqli_fetch_assoc($result1);
if (isset($_POST['approveLoan'])) {
    $sql = "UPDATE `loan_requstes` SET `is_approved` = 1 WHERE `id` = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Loan Approved')</script>";
        echo "<script>window.location.href='manager.php?respondLoan'</script>";
    } else {
        echo "<script>alert('Loan Not Approved')</script>";
        echo "<script>window.location.href='manager.php?viewLoanDetails=$id'</script>";
    }
}
if (isset($_POST['unApproveLoan'])) {
    $sql2 = "UPDATE `loan_requstes` SET `un_approved` = 1 WHERE `id` = $id";
    $result2 = mysqli_query($conn, $sql2);
    if ($result2) {
        echo "<script>alert('UnApproved Succesfully')</script>";
        echo "<script>window.location.href='manager.php?respondLoan'</script>";
    } else {
        echo "<script>alert(Error')</script>";
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
                <div class="row">
                <label class="input-group">gurante Image </label>
                    <div class="col-md-2 col-lg-4 col-sm-6"><img src="./image/<?php echo $image ?>" class="img-thumbnail" alt="Please update your profile" width="100%"></div>
                    <div class="col-md-5 col-lg-4 col-sm-6 ">
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
                        <label class="input-group">Description About Loan</label>
                        <p><?php echo $row['description'] ?></p>
                    </div>
                    <div class="col-md-5 col-lg-4 col-sm-6 ">
                        <label class="input-group">Livind Adress Subcity</label>
                        <p><?php echo $row['lsubCity'] ?></p>
                        <label class="input-group">Livind Adress Woreda</label>
                        <p><?php echo $row['lworeda'] ?></p>
                        <label class="input-group">Education Level</label>
                        <p><?php echo $row['edu'] ?></p>
                        <label class="input-group">Job Position</label>
                        <p><?php echo $row['job'] ?></p>
                        <label class="input-group">Salary</label>
                        <p><?php echo $row['salary'] ?></p>
                        <label class="input-group">Loan Round</label>
                        <p><?php echo $row['round'] ?></p>
                    </div>
                </div>
            </div>
            <div class="diplay-flex pr-5">
                <form method="POST">
                    <input type="submit" name="approveLoan" value="Approve" class="btn btn-primary float-left">
                    <input type="submit" name="unApproveLoan" value="Unapprove" class="btn btn-primary float-right">
                </form>
            </div>
    </section>
</div>