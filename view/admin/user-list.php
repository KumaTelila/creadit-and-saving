<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <section class="content">
            <section class="content pb-1 ">
                <div class="container-fluid">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Users List</h3>
                        </div>
                    </div>
                    <div id="table_stud_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="table_stud" class="table table-bordered table-striped dataTable no-footer" style="margin-top: 10px;" role="grid" aria-describedby="table_stud_info">
                                    <thead>
                                        <tr role="row">
                                            <th style="width: 122.5521px;" class="sorting_asc" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending">No.</th>
                                            <th style="width: 122.5521px;" class="sorting_asc" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending">Id</th>

                                            <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 397.691px;">Username</th>
                                            <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 407.188px;">User Type</th>
                                            <th class="sorting" tabindex="0" aria-controls="table_stud" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 244.201px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        function view()
                                        {
                                            global $conn;
                                            $admin_id = $_SESSION['admin_id'];
                                            $query = "SELECT * FROM accounts";
                                            $res = mysqli_query($conn, $query);
                                            $i = 1;
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                $id = $row['id'];
                                                if ($id == $admin_id) {
                                                    continue;
                                                }
                                                $username = $row['username'];
                                                if ($row['is_manager'] == '1') {
                                                    $user_type = 'Manager';
                                                } elseif ($row['is_accountant'] == '1') {
                                                    $user_type = 'Accountant';
                                                } elseif ($row['is_admin'] == '1') {
                                                    $user_type = 'Admin';
                                                } else {
                                                    continue;
                                                }
                                                echo "<tr>";
                                                echo "<td>$i</td>";
                                                echo "<td>$id</td>";
                                                echo "<td>$username</td>";
                                                echo "<td>$user_type</td>";
                                                echo "<td><a href='create-account.php?id=$id' class='btn btn-danger'>Delete</a></td>";
                                                echo "</tr>";
                                                $i++;
                                            }
                                        }
                                        view();
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