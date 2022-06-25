<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <section class="content">
            <section class="content pb-1 ">
                <div class="container-fluid">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Reports</h3>
                        </div>
                    </div>
                    <div id="table_stud_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="table_stud" class="table table-bordered table-striped dataTable no-footer" style="margin-top: 10px;" role="grid" aria-describedby="table_stud_info">
                                    <thead>
                                        <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 107.188px;">No</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending" style="width: 207.188px;">reporter Name</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending" style="width: 207.188px;">report Type</th>
                                            <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 537.691px;">Report</th>
                                            <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 207.188px;">Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 244.201px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        function viewReport()
                                        {
                                            include './connect.php';
                                            $sql =  "select *from report";
                                            $result = mysqli_query($conn, $sql);
                                            $no = 0;
                                            while ($rows = mysqli_fetch_assoc($result)) {
                                            $no++;
                                                $sender_name = $rows['reporter_name'];
                                                $report_type = $rows['report_type'];
                                                $message = $rows['report'];
                                                $date = $rows['date'];
                                                $r_id = $rows['id'];
                                                echo "<tr>";
                                                echo "<td>$no</td>";
                                                echo "<td>$sender_name</td>";
                                                echo "<td>$report_type</td>";
                                                echo "<td>$message</td>";
                                                echo "<td>$date</td>";
                                                echo "<td><a href='manager.php?r_id=$r_id' class='btn btn-danger'>Delete</a></td>";
                                                echo "</tr>";
                                            }
                                        }
                                        viewReport();
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </section>
    </section>
    <!-- /.content -->
</div>
