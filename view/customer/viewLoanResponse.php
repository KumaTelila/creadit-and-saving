<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <section class="content">
            <section class="content pb-1 ">
                <div class="container-fluid">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Your Requests</h3>
                        </div>
                        <div class="card-body table-responsive p-0" style="height: 400px;">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="table_stud" class="table table-bordered table-striped dataTable no-footer" style="margin-top: 10px;" role="grid" aria-describedby="table_stud_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 107.188px;">No</th>
                                            <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 807.188px;">Amount</th>
                                            <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 244.201px;">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        function viewLoans()
                                        {
                                            include './connect.php';
                                            $sql =  "select *from loan_requstes";
                                            $result = mysqli_query($conn, $sql);
                                            $no = 0;
                                            while ($rows = mysqli_fetch_assoc($result)) {
                                                $no++;
                                                $id = $rows['id'];
                                                $amount = $rows['amount'];
                                                $is_approved = $rows['is_approved'];
                                                if($is_approved==1){
                                                    $status = "Approved";
                                                }else{
                                                    $status = "Pending";
                                                }
                                                    echo '<tr>';
                                                    echo '<td>' . $no . '</td>';
                                                    echo '<td>' . $amount . '</td>';
                                                    echo '<td class="btn btn-info"> ' . $status . '</td>';
                                                    echo '</tr>';
                                               
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