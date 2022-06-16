<div class="content-wrapper" >
    <section class="content pb-1 ">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header bg-info">
                    <h3 class="card-title"><span class="fas fa-edit pr-1"></span>Edit Person</h3>
                    <?php if (isset($msg) && $msg != "Succeesfully Updated") : ?>
                    <div class="alert alert-danger">
                        <h5> <i class="icon fas fa-ban"></i> <?php echo $msg; ?></h5>
                    </div>
                <?php elseif (isset($msg) && $msg == "Succeesfully Updated") : ?>
                    <div class="alert alert-success">
                        <h5> <i class="icon fas fa-check"></i> <?php echo $msg; ?></h5>
                    </div>
                <?php endif ?>
                </div>
                <div class="card-body row">
                    <div class="col-md-8 col-lg-8 col-sm-12 offset-md-2 offset-lg-2">
                        <p></p>
                        <form action="" method="POST">
                        <div class="row ml-3 mr-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Full name" value="<?php echo $name ?>">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="username" value="<?php echo $username ?>">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" value="<?php echo $phone ?>">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" value="<?php echo $email ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label>Profile Picture </label>
                                <input type="file" name="profile">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="update" id="update" class="btn btn-primary">Update</button>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>