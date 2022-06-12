<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <section class="content">
            <section class="content pb-1 ">
                <div class="container-fluid">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Customers</h3>
                        </div>
                    </div>
                    <div id="table_stud_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="table_stud" class="table table-bordered table-striped dataTable no-footer" style="margin-top: 10px;" role="grid" aria-describedby="table_stud_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending" style="width: 27.188px;">No.</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending" style="width: 407.188px;">Full Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 37.188px;">Gender</th>
                                            <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 437.691px;">Account Number</th>
                                            <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 244.201px;">Phone Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include './connect.php';
                                        $sql =  "select *from users";
                                        $result = mysqli_query($conn, $sql);
                                        $no = 0;
                                        ?>
                                        <?php
                                        while ($rows = mysqli_fetch_assoc($result)) {
                                            if ($rows['role'] !== 'customer') {
                                                continue;
                                            }
                                            $no++;
                                        ?>

                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $rows['name']; ?></td>
                                                <td><?php echo $rows['gender']; ?></td>
                                                <td><?php echo $rows['acc_number']; ?></td>
                                                <td><?php echo "0" . $rows['phone']; ?></td>
                                            </tr>
                                        <?php
                                        }
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