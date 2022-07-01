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
    } else {
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

                        <h3 class="card-title">Send Loan Request</h3>
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
                    <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <div class="form-group">
                                        <label for="inputName">Kebele Id Number</label>
                                        <input type="text" name="kebeleId" id="inputName" class="form-control" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-6">
                                            <div class="form-group">
                                                <label for="inputName">Living Adress</label>
                                                <input type="text" name="lsubCity" id="inputName" class="form-control" placeholder="Sub city">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <div class="form-group">
                                                <label for="inputName">_</label>
                                                <input type="text" name="lworeda" id="inputName" class="form-control" placeholder="woreda">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <div class="form-group">
                                                <label for="inputName">_</label>
                                                <input type="text" name="lkebele" id="inputName" class="form-control" placeholder="kebele">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <div class="form-group">
                                                <label for="inputName">_</label>
                                                <input type="text" name="lhouseNo" id="inputName" class="form-control" placeholder="House Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-6">
                                            <div class="form-group">
                                                <label for="inputName">Job Address</label>
                                                <input type="text" name="jsubCity" id="inputName" class="form-control" placeholder="Sub city">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <div class="form-group">
                                                <label for="inputName">_</label>
                                                <input type="text" name="jworeda" id="inputName" class="form-control" placeholder="woreda">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <div class="form-group">
                                                <label for="inputName">_</label>
                                                <input type="text" name="jkebele" id="inputName" class="form-control" placeholder="kebele">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <div class="form-group">
                                                <label for="inputName">_</label>
                                                <input type="text" name="jhouseNo" id="inputName" class="form-control" placeholder="House Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <div class="form-group">
                                                <label for="inputName">_</label>
                                                <input type="text" name="jPhoneNo" id="inputName" class="form-control" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <div class="form-group">
                                                <label for="inputName">_</label>
                                                <input type="text" name="postNo" id="inputName" class="form-control" placeholder="Post Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-6">
                                            <div class="form-group">
                                                <label for="inputName">Education Level</label>
                                                <input type="text" id="inputName" name="edu" class="form-control" placeholder="Education Level">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <div class="form-group">
                                                <label for="inputName">Job Position</label>
                                                <input type="text" id="inputName" name="job" class="form-control" placeholder="Job Position">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <div class="form-group">
                                                <label for="inputName">Salary</label>
                                                <input type="text" id="inputName" name="salary" class="form-control" placeholder="Salary">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="row">
                                        <div class="col-lg-6 col-6">
                                            <div class="form-group">
                                                <label for="inputStatus">Maritial Status</label>
                                                <select id="maritial" name="maritial" class="custom-select" required>
                                                    <option value="NULL" disabled="">Select one</option>
                                                    <option value="Maried">Maried</option>
                                                    <option value="Unmaried">Unmaried</option>
                                                    <option value="Divorced">Divorced</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <div class="form-group">
                                                <label for="inputName">Number of Family Members</label>
                                                <input type="text" name="family" id="inputName" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-6">
                                            <div class="form-group">
                                                <label for="inputStatus">Living House Status</label>
                                                <select id="house" name="house" class="custom-select" required>
                                                    <option  value="NULL" disabled="">Select one</option>
                                                    <option value="Tenant">Tenant</option>
                                                    <option value="Private">Private</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <div class="form-group">
                                                <label for="inputName">Number Of Rooms</label>
                                                <input type="text" name="room" id="inputName" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName">Creadit Round</label>
                                        <input type="text" name="round" id="inputName" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Amount</label>
                                        <input type="text" name="title" id="title" class="form-control" placeholder="Amount in Birr">
                                    </div>

                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Another Description</label>
                                        <textarea class="form-control" name="desc" id="desc" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Gurante Image e.i Home</label>
                                        <input class="form-control" type="file" name="uploadfile" value="" />
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-body">
                            <button type="submit" name="submitLoans" id="submitNews" class="btn btn-info">Request</button>
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