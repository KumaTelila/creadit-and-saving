<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <section class="content">
            <section class="content pb-1 ">
                <div class="container-fluid">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Post News</h3>
                            <?php if (isset($msg) && $msg != "Succeesfully Posted") : ?>
                                <div class="alert alert-danger">
                                    <h5> <i class="icon fas fa-ban"></i> <?php echo $msg; ?></h5>
                                </div>
                            <?php elseif (isset($msg) && $msg == "Succeesfully Posted") : ?>
                                <div class="alert alert-success">
                                    <h5> <i class="icon fas fa-check"></i> <?php echo $msg; ?></h5>
                                </div>
                            <?php endif ?>
                        </div>
                        <form class="form-horizontal" method="POST" action="">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                                </div>
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="desc" id="desc" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-body">
                                <button type="submit" name="submitNews" id="submitNews" class="btn btn-info">Post</button>
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