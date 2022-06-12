<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link text-center" href="#"><img src="dist/img/Osu.jpeg" alt="AdminLTE Logo" class="img-circle" width="40%"></a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="accountant.php" class="d-block">Accountant</a>
            </div>
            <div class="info">
                <a href="accountant.php" class="d-block">Home</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="accountant.php" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="accountant.php?updateProfile" class="nav-link <?php if (isset($_GET['updateProfile'])) {
                                                    echo 'active';
                                                } ?>">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            My Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="accountant.php?notification" class="nav-link <?php if (isset($_GET['notification'])) {
                                                    echo 'active';
                                                } ?>">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>
                            Notifications
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="accountant.php?viewCustomer" class="nav-link <?php if (isset($_GET['viewCustomer'])) {
                                                    echo 'active';
                                                } ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            View Customers
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="accountant.php?registerIssueMoney" class="nav-link <?php if (isset($_GET['registerIssueMoney'])) {
                                                    echo 'active';
                                                } ?>">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>
                            Register Issue Money
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="accountant.php?registerRepayMoney" class="nav-link <?php if (isset($_GET['registerRepayMoney'])) {
                                                    echo 'active';
                                                } ?>">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>
                            Register Repay Money
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="accountant.php?sendReport" class="nav-link <?php if (isset($_GET['sendReport'])) {
                                                    echo 'active';
                                                } ?>">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Send Report
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>

    <!-- /.sidebar -->
</aside>