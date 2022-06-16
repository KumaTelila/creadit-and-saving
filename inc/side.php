<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link text-center" href="customer.php"><img src="dist/img/rsz_logo.png" alt="AdminLTE Logo" class="img-circle" width="40%"></a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <p class="text-info nav-link">Metemamen Micro Finance institution</p>
                </li>
                <li class="nav-item">
                    <a href="customer.php?myProfile" class="nav-link <?php if (isset($_GET['myProfile'])) {
                                                                            echo 'active';
                                                                        } ?>">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                           Update Profile 
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="customer.php?request" class="nav-link <?php if (isset($_GET['request'])) {
                                                                        echo 'active';
                                                                    } ?>">
                        <i class="nav-icon fas fa-question-circle"></i>
                        <p>
                            Requstes
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="customer.php?sendloanRequest" class="nav-link <?php if (isset($_GET['sendloanRequest'])) {
                                                                                        echo 'active';
                                                                                    } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Send Loan Request</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="customer.php?cancleRequest" class="nav-link <?php if (isset($_GET['cancleRequest'])) {
                                                                                        echo 'active';
                                                                                    } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cancel Loan Request</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="customer.php?viewLoanResponse" class="nav-link <?php if (isset($_GET['viewLoanResponse'])) {
                                                                                        echo 'active';
                                                                                    } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Loan Response</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="customer.php?SendFeedback" class="nav-link <?php if (isset($_GET['SendFeedback'])) {
                                                                            echo 'active';
                                                                        } ?>">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>
                            Send Feedback
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="customer.php?payLoan" class="nav-link  <?php if (isset($_GET['payLoan'])) {
                                                                                echo 'active';
                                                                            } ?>">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>
                            Pay Loan
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>

    <!-- /.sidebar -->
</aside>