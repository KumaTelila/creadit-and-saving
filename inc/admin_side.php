<?php
if (!isset($_SESSION['admin_id'])) {
    header('location: index.php');
}
include 'connect.php';
$admin_id = $_SESSION['admin_id'];
$sql = "SELECT * FROM accounts WHERE id = '$admin_id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Brand Logo -->
    <a class="brand-link text-center" href="admin.php"><img src="dist/img/Osu.jpeg" alt="AdminLTE Logo" class="img-circle" width="40%"></a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <h2><a href="admin.php" class="d-block pl-3">Admin Page</a></h2>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Manage Account
                        </p>
                    </a>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="admin.php?createAccount" class="nav-link <?php if (isset($_GET['createAccount'])) {
                                                                                    echo 'active';
                                                                                } ?>">
                                <i class="fas fa-tasks"></i>
                                <p>Create Account</p>
                            </a>
                        </li>
                    </ul>
                    </a>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="admin.php?userList" class="nav-link <?php if (isset($_GET['userList'])) {
                                                                                    echo 'active';
                                                                                } ?>">
                                <i class="fas fa-tasks"></i>
                                <p>User List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Manage Database
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item pl-3">
                            <a href="admin.php?backupDatabase" class="nav-link <?php if (isset($_GET['backupDatabase'])) {
                                                                                    echo 'active';
                                                                                } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Backup Database</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="admin.php?viewFeedback" class="nav-link <?php if (isset($_GET['viewFeedback'])) {
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