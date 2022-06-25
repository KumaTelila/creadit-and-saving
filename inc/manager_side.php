<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Brand Logo -->
    <a class="brand-link text-center" href="#"><img src="dist/img/rsz_logo.png" alt="AdminLTE Logo" class="img-circle" width="40%"></a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><h2>Manager Page</h2></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                    <a href="manager.php" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="manager.php?updateProfile" class="nav-link <?php if (isset($_GET['updateProfile'])) {
                                                                                    echo 'active';
                                                                                } ?>">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Update Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="manager.php?viewEmployee" class="nav-link <?php if (isset($_GET['viewEmployee'])) {
                                                                                    echo 'active';
                                                                                } ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            View Employes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="manager.php?viewCustomer" class="nav-link <?php if (isset($_GET['viewCustomer'])) {
                                                                                    echo 'active';
                                                                                } ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            View Customers
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="manager.php?respondLoan" class="nav-link <?php if (isset($_GET['respondLoan'])) {
                                                                                    echo 'active';
                                                                                } ?>">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>
                            Respond Loan Requests
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="manager.php?postNews" class="nav-link <?php if (isset($_GET['postNews'])) {
                                                                                    echo 'active';
                                                                                } ?>">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>
                            Post News
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="manager.php?viewReport" class="nav-link <?php if (isset($_GET['viewReport'])) {
                                                                                    echo 'active';
                                                                                } ?>">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            View Report
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="manager.php?viewFeedback" class="nav-link <?php if (isset($_GET['viewFeedback'])) {
                                                                                    echo 'active';
                                                                                } ?>">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            View Feedback
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>

    <!-- /.sidebar -->
</aside>