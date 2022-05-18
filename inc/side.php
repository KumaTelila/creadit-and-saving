<?php
 if(! isset($_SESSION['customer_id'])){
    header('location: index.php');
 }
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a class="brand-link text-center" href="#"><img src="dist/img/Osu.jpeg" alt="AdminLTE Logo" class="img-circle" width="40%"></a>

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
                            <a href="costumer-profile.php" class="nav-link">
                                <i class="nav-icon fas fa-user-alt"></i>
                                <p>
                                    My Profile
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="records.php" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    Records
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-question-circle"></i>
                                <p>
                                    Requstes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="send-loan-request.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Send Loan Request</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cancel Loan Request</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="customer.php" class="nav-link">
                                <i class="nav-icon fas fa-dollar-sign"></i>
                                <p>
                                    View Balance
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="transfer-money.php" class="nav-link">
                                <i class="nav-icon fas fa-dollar-sign"></i>
                                <p>
                                    Transfer Money
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>

            <!-- /.sidebar -->
        </aside>