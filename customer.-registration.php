<html lang="en">
<?php include 'inc/header.php'; ?>

<body class="register-page" style="min-height: 511.703px;">
    <div class="register-box">
        <div class="register-logo">
            <a href="#"><b>MMC</b></a>
        </div>
        <div class="card">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Register Here</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Full name">
                  </div>
                  <div class="form-group">
                  <label for="exampleSelectRounded0">Gender</label>
                  <select class="custom-select rounded-0" id="exampleSelectRounded0">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                  </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="customFile">Profile Picture</label>

                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Register</button>
                </div>
              </form>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
    <?php include 'inc/js.php'; ?>


</body>

</html>