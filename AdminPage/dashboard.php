<?php 
include "header.php";
// $user = $_SESSION['user_loggedin'];
// echo "<img class='img-fluid' src='User_Images/".$user['user_img']."' >"; 

// echo $user['user_img'];
// ?>
<div class="tile">
    <h4 class="pl-3">Dashboard</h4>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center dashboard_page">
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="card bg-success text-white card-shadow">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4  d-flex align-items-center justify-content-center px-0 card-b-r">
                            <i class="dashboard-icon fas fa-mountain text-white"></i>
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                            <div class="card-body">
                                <h5 class="text-center">Tourists</h5>
                                <p class="text-center card-count mb-0">5000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="card bg-info text-white card-shadow">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4  d-flex align-items-center justify-content-center px-0 card-b-r">
                            <i class="dashboard-icon fas fa-users text-white"></i>
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                            <div class="card-body">
                                <h5 class="text-center">Users</h5>
                                <p class="text-center card-count mb-0">5000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="card bg-warning text-white card-shadow">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4  d-flex align-items-center justify-content-center px-0 card-b-r">
                            <i class="dashboard-icon fas fa-info text-white"></i>
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                            <div class="card-body">
                                <h5 class="text-center">About HMT</h5>
                                <p class="text-center card-count mb-0">5000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="card bg-danger text-white card-shadow">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4  d-flex align-items-center justify-content-center px-0 card-b-r">
                            <i class="dashboard-icon fas fa-book-reader text-white"></i>
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                            <div class="card-body">
                                <h5 class="text-center">Authors</h5>
                                <p class="text-center card-count mb-0">5000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-12">
        <canvas id="myChart" style="width:100%;max-width:800px"></canvas>
        </div>
    </div>
</div>

<?php
include "includes/scripts.php";
?>
<?php
include "footer.php";?>