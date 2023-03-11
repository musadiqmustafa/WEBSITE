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
        <form id="form" method="post" enctype="multipart/form-data">
            <div class="container-fluid">
                <h1 class="mt-4">Info</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Info</li>
                </ol>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card mb-4 order-list">
                            <div class="gold-members p-4">
                                <a href="#">
                                </a>
                               
                                <!-- /row-->
                                <div class="row mt-3">
                                    <h1>Info</h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input id="contact" name="contact" type="text" class="form-control"
                                                placeholder="Number">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        
                                        <div class="form-group">
                                            <label>Uk Contact Number</label>
                                            <input id="uk_contact" name="uk_contact" type="text" class="form-control"
                                                placeholder="Number">
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input id="facebook" name="facebook" type="text"
                                                class="form-control" placeholder="facebook">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <input id="instagram" name="instagram" type="text"
                                                class="form-control" placeholder="Instagram">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>twitter</label>
                                            <input id="twitter" name="twitter" type="text"
                                                class="form-control" placeholder="twitter">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Linkedin</label>
                                            <input id="linkedin" name="linkedin" type="text"
                                                class="form-control" placeholder="Linkedin">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Footer Description</label>
                                            <textarea id="footer_desc" name="footer_desc" type="text"
                                                class="form-control" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input id="address" name="address" type="text"
                                                class="form-control" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input id="email" name="email" type="text" class="form-control"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>UK's Address</label>
                                            <input id="uk_address" name="uk_address" type="text"
                                                class="form-control" placeholder="UK's Address">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label for="formFileSm" class="form-label">Logo Image</label>
                                        <input style='border:none' class="form-control form-control-lg" id="logo_img" name="logo_img" type="file" />
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
    show_info();
});





$("#form").on('submit', (function(e) {
    e.preventDefault();
    let form = new FormData(this);
    form.append('action', 'info');
    info(form);
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