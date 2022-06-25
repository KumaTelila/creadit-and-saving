<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">
                <section class="content">
                    <section class="content pb-1 ">
                        <div class="container-fluid">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Create Account</h3>
                                    <?php if (isset($msg) && $msg != "Succeesfully Registered") : ?>
                                        <div class="alert alert-danger">
                                            <h5> <i class="icon fas fa-ban"></i> <?php echo $msg; ?></h5>
                                        </div>
                                    <?php elseif (isset($msg) && $msg == "Succeesfully Registered") : ?>
                                        <div class="alert alert-success">
                                            <h5> <i class="icon fas fa-check"></i> <?php echo $msg; ?></h5>
                                        </div>
                                        <?php elseif (isset($msg) && $msg == "Deleted Successfully") : ?>
                                        <div class="alert alert-success">
                                            <h5> <i class="icon fas fa-check"></i> <?php echo $msg; ?></h5>
                                        </div>
                                    <?php endif ?>
                                </div>
                                <form class="form-horizontal" method="POST" action="">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="username" id="username" class="form-control" id="inputEmail3" placeholder="Username" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="password" id="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="custom-select" class="col-sm-2 col-form-label">User type</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="user_type" id="user_type">
                                                    <option value="manager">Manager</option>
                                                    <option value="accountant">Accountant</option>
                                                    <option value="admin">Admin</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-body">
                                        <button type="submit" name="submit" id="submit" class="btn btn-info">Create Account</button>
                                        <button type="submit" class="btn btn-default float-right">Cancel</button>
                                    </div>
                                    <!-- /.card-footer -->
                                </form>
                            </div>
                        </div>
                    </section>
                </section>
            </section>
            <!-- /.content -->
        </div>