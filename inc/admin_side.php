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
    <a class="brand-link text-center" href="#"><img src="dist/img/Osu.jpeg" alt="AdminLTE Logo" class="img-circle" width="40%"></a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block"><?php echo $row['username'] ?></a>
            </div>
            <div class="info">
                <a href="admin.php" class="d-block">Home</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="create-account.php" class="nav-link">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Manage Account
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Manage Database
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Backup Database</p>
                            </a>
                        </li>


                    </ul>
                </li>
                <li class="nav-item">
                    <a href="view-feedback.php" class="nav-link">
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