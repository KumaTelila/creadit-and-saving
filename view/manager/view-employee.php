<div class="content-wrapper mt-2">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <section class="content">
            <section class="content pb-1 ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Employers</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0" style="height: 400px;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending" style="width: 27.188px;">No.</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending" style="width: 307.188px;">Full Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 437.691px;">Gender</th>
                                                <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 207.188px;">Role</th>
                                                <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 244.201px;">Phone Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include './connect.php';
                                            $sql =  "SELECT * FROM `employer` ";
                                            $result = mysqli_query($conn, $sql);
                                            $no = 0;
                                            ?>
                                            <?php
                                            while ($rows = mysqli_fetch_assoc($result)) {
                                                if ($rows['name'] == null) {
                                                    continue;
                                                }
                                                $no++;
                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $rows['name']; ?></td>
                                                    <td><?php echo $rows['gender']; ?></td>
                                                    <td><?php echo $rows['role']; ?></td>
                                                    <td><?php echo $rows['phone']; ?></td>
                                                </tr>
                                            <?php
                                            }
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
            </section>
        </section>
    </section>
    <!-- /.content -->
</div>