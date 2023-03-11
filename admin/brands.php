<?php
session_start();
if (isset($_SESSION['status']) == 'logged in') {
    include "include/header.php";
    include "include/navbar.php";
    include "include/sidebar.php";
    include "include/db_connection.php";
    ?>

<div id="layoutSidenav_content">
    <main>
        <form id="form" method="post" enctype="multipart/form-data">
            <div class="container-fluid">
                <h1 class="mt-4">Brand</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Brands</li>
                </ol>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card mb-4 order-list">
                            <div class="gold-members p-4">
                                <a href="#">
                                </a>

                                <!-- /row-->
                                <div class="row mt-3">
                                    <h1>Brands</h1>
                                </div>
                                <div class="row">



                                    <div class="col-md-">
                                        <label for="formFileSm" class="form-label">Brand Image</label>
                                        <input style='border:none' class="form-control form-control-lg" id="brand_img"
                                            name="brand_img" type="file" />

                                    </div>


                                </div>.
                                <div class="card mb-4 mr-5">

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-center text-nowrap" id="dataTable"
                                                width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Brands</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>

                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- <h2>About Us</h2> -->
                                <!-- /row-->


                                <!-- /row-->




                            </div>
                        </div>
                    </div>
                    <div class="text-right mb-4">
                        <button id="submit" type="submit" class="btn btn-success">
                            <i class="feather-send"></i> SAVE
                        </button>
                    </div>
                </div>
        </form>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2022</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>

<?php
include "include/footer.php";

} else {
    header("location:login.php");
    exit();
}
?>

<script>
$(document).ready(function() {
    show_brands();
});





$("#form").on('submit', (function(e) {
    e.preventDefault();
    let form = new FormData(this);
    form.append('action', 'brands');
    brands(form);
}));
</script>

<style>
#label {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 150%;
    cursor: pointer;
    width: 100px;
    height: 100px;
    border: solid 1px black;
    border-radius: 5px;
    object-fit: cover;
    margin: 0 auto;
}
</style>