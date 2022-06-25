<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <section class="content">
            <section class="content pb-1 ">
                <div class="container-fluid">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Approved Requests</h3>
                        </div>
                        <div id="table_stud_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="table_stud" class="table table-bordered table-striped dataTable no-footer" style="margin-top: 10px;" role="grid" aria-describedby="table_stud_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 107.188px;">No</th>
                                            <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 307.188px;">Customer Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 307.188px;">Amount</th>
                                            <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 307.188px;">Phone Number</th>
                                            <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 144.201px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        function viewLoans()
                                        {
                                            include './connect.php';
                                            $sql =  "select *from loan_repay";
                                            $result = mysqli_query($conn, $sql);
                                            $no = 0;
                                            while ($rows = mysqli_fetch_assoc($result)) {
                                                $no++;
                                                $id = $rows['id'];
                                                $cust_id = $rows['cust_id'];
                                                $amount = $rows['amount'];
                                                $sql1 = "SELECT * FROM `customer` WHERE `id` = $cust_id";
                                                $result1 = mysqli_query($conn, $sql1);
                                                $row1 = mysqli_fetch_assoc($result1);
                                                $cust_name = $row1['name'];
                                                $cust_phone = $row1['phone'];
                                                $is_registered = $rows['is_registered'];
                                                if($is_registered==1){
                                                    continue;
                                                }else{
                                                    echo '<tr>';
                                                    echo '<td>' . $no . '</td>';
                                                    echo '<td>' . $cust_name . '</td>';
                                                    echo '<td>' . $amount . '</td>';
                                                    echo '<td>' . $cust_phone . '</td>';
                                                    echo '<td>';
                                                    echo '<a href="accountant.php?repay_id=' . $id . '" class="btn btn-info">Register</a>';
                                                    echo '</td>';
                                                    echo '</tr>';
                                                }
        
                                            }
                                        }
                                        viewLoans();
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    </div>
                  
                </div>
            </section>
        </section>
    </section>
    <!-- /.content -->
</div>