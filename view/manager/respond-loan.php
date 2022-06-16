<div class="content-wrapper ">
    <div class="content pt">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Loan Requestes</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 400px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Amount Requested</th>
                                        <th>Total Balance Customer Have</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    function loanRequests()
                                    {
                                        include './connect.php';
                                        $sql = "SELECT * FROM `loan_requstes`";
                                        $result = mysqli_query($conn, $sql);
                                        $i = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            if ($row['is_approved'] == 0) {
                                                $id = $row['id'];
                                                $cust_id = $row['cust_id'];
                                                $amount = $row['amount'];
                                                $sql1 = "SELECT * FROM `customer` WHERE id =$cust_id";
                                                $result1 = mysqli_query($conn, $sql1);
                                                $row1 = mysqli_fetch_assoc($result1);
                                                $name = $row1['name'];
                                                $phone = $row1['phone'];
                                                $balance = $row1['balance'];
                                                $birr = "Birr";
                                                echo " 
                                                    <tr>
                                                    <td>" . $i++ . "</td>
                                                    <td>" . $name . "</td>
                                                    <td>" . $phone . "</td>
                                                    <td>" . $amount .  " $birr</td>
                                                    <td>" . $balance . " $birr</td>
                                                    <td> <a href='manager.php?viewLoanDetails=" . $id . "' class='btn btn-primary btn-sm'>view detail</a></td>    
                                                    </tr>";
                                            }
                                        }
                                    }
                                    loanRequests();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>

</div>