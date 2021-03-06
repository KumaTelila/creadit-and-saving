<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="drop.css">

    <title>Finance Business - About Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <ul class="left-info">
                        <li><a href="#"><i class="fa fa-clock-o"></i>Mon-Fri 02:30-10:00</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>091-180-0760</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="right-icons">
                        <li><a href="#"><i class="fa "></i></a></li>
                        <li><a href="#"><i class="fa "></i></a></li>
                        <li><a href="#"><i class="fa "></i></a></li>
                        <li><a href="#"><i class="fa "></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- <a class="navbar-brand" href="index.php">
            <img src="/dist/img/logo.jpeg" alt="Logo">
          </a> -->
                <a class="brand-link text-center " href="index.php"><img src="../dist/img/rsz_logo.png" alt="Logo" class="img-circle" width="50%"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="../index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="about.html">About Us</a>
                        </li>
                        <div class="dropdown">
                            <li class="nav-item" id="service"> </li>
                            <a class="nav-link" href="#">Our Services</a>
                            <div class="dropdown-content">
                                <ul>
                                    <ul>
                                        <li><a class="" href="Compulsory Saving.html">Compulsory Saving</a></li>
                                        <li><a class="" href="Voluntary Saving.html">Voluntary Saving</a></li>
                                        <li><a class="" href="Special saving.html">Special saving</a></li>
                                        <li><a class="" href="Fixed Term Deposits.html">Fixed Term Deposits</a></li>
                                    </ul>
                                    </li>
                                    <ul>
                                        <li><a class="" href="Micro Business Loan.html">Micro Business Loan</a></li>
                                        <li><a class="" href="Agricultural Loan.html">Agricultural Loan</a></li>
                                        <li><a class="" href="Small Business Loan.html">Small Business Loan</a></li>
                                        <li><a class="" href="WEDP Loan.html">WEDP Loan</a></li>
                                        <li><a class="" href="General Loan.html">General Loan</a></li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <li class="nav-item ">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../customer_registration.php">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>news</h1>
                </div>
            </div>
        </div>
    </div>
    <?php
    function news()
    {
        include '../connect.php';
        $sql = "SELECT * FROM news";
        $result = mysqli_query($conn, $sql);
        echo "<div class= 'row mt-10'>";
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='col-md-6 pt-10'>";
                echo "<div class='card'>";
                echo "<img class='product-image' src='../dist/img/logo1.png' alt='Card image cap' style='
            margin-top: 10px;
            width: 50%;
        '>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $row['title'] . "</h5>";
                echo "<p class='card-text'>" . $row['description'] . "</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        }
        echo "</div>";
    }
    news();
    ?>

    </div>
    <!-- Footer Starts Here -->
    </footer>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; 2014 micro-finace

                        - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">OSU
                            Student</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>

</body>

</html>