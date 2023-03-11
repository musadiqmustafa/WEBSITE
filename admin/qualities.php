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
                <h1 class="mt-4">Qualities</h1>
                <div class="row">
                    <div class="col-md-8">
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Qualities</li>
                        </ol>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-primary float-right mr-5" data-toggle="modal" data-target="#add_home">
                            Add Qualities
                    </div>
                </div>
                <div class="card mb-4 mr-5">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center text-nowrap" id="dataTable" width="100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Qualities</th>
                                       
                                        <th>Action</th>

                                       
                                    </tr>
                                </thead>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

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

    <div class="modal fade" id="add_home" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Qualities</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <div class="card card-outline-secondary">
                        <div class="card-header d-flex justify-content-center">
                            <img src="img/notification.svg" style="height:250px;">
                        </div>
                        <div class="card-body">
                            <form method="post" id="form" name="form" enctype="multipart/form-data">
                                <div class="row my-3">
                                    <div class="my-2 col-12 form-floating ">
                                        <label class="ms-2" for="a_title">Qualities</label>
                                        <input type="text" class="form-control" id="qualities" name="qualities" placeholder="Enter Title">
                                    </div>
                                   
                                    
                                </div>
                               

                           
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="submit"name="submit" type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
            </form>
        </div>
    </div>


<?php
    include "include/footer.php";
} else {
    header("Location: index.php");
    exit();
} ?>
<script>
   $(document).ready(function() {
    show_qualities();
    });
    $("#form").on('submit', (function(e) {
        console.log("hello");
    e.preventDefault();
    let form = new FormData(this);
    form.append('action', 'qualities');
    qualities(form);
}));
</script>

<style>
    .tooltip-inner {
        max-width: 750px;
        font-size: 15px;
        background-color: #FAF9F6 !important;
        color: #000000 !important;
        border: 0.5px solid #000000 !important;
    }
</style>