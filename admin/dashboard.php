<?php
session_start();
if (isset($_SESSION['status'])== 'logged in') {
    include "include/header.php";
    include "include/navbar.php";
    include "include/sidebar.php";
    include "include/db_connection.php";
    ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">My Profile</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            </ol>
            <div class="row">
                <div class="col-12 col-md-5 col-lg-2 mt-2">
                    <div class="card bg-primary text-white">
                        <div class="card-body"><span class="h5">Home</span>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="home.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-2 mt-2">
                    <div class="card bg-warning text-white">
                        <div class="card-body"><span class="h5">About us</span>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="about.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-2 mt-2 ">
                    <div class="card bg-success text-white">
                        <div class="card-body"><span class="h5">Qualities</span>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="qualities">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-2 mt-2">
                    <div class="card bg-danger text-white">
                        <div class="card-body"><span class="h5">portfolio</span>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="portfolio.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-2 mt-2">
                    <div class="card bg-info text-white">
                        <div class="card-body"><span class="h5">Portfolio Sites</span>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="portfolio_sites">View
                                Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-2 mt-2">
                    <div class="card bg-warning text-white">
                        <div class="card-body"><span class="h5">Info</span>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="info.php">View
                                Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2020</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>

<?php
include "include/footer.php";

} else {
    header("location:login.php");
    exit();
}
?>