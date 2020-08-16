<?php 
include_once('db/connection.php');
include_once('includes/header_start.php'); 


// //____________________________________________ROW 1 VALUES_________________________________________________________________//

// $clients = mysqli_query($conn,"SELECT COALESCE(COUNT(*),0) FROM users WHERE is_deleted = 0 AND role_id = 2;");
// $service_providers = mysqli_query($conn,"SELECT COALESCE(COUNT(*),0) FROM users WHERE is_deleted = 0 AND role_id = 3;");
// $pending_requests = mysqli_query($conn,"SELECT COALESCE(COUNT(*),0) FROM request WHERE status = 0;");
// $completed_requests = mysqli_query($conn,"SELECT COALESCE(COUNT(*),0) FROM request WHERE status = 3;");

// //____________________________________________ROW 2 VALUES_________________________________________________________________//

// $all_rquestss = mysqli_query($conn,"SELECT COALESCE(COUNT(*),0) FROM request;");
// $declined_requestss = mysqli_query($conn,"SELECT COALESCE(COUNT(*),0) FROM request WHERE status = 2;");
// $completed_requestss = mysqli_query($conn,"SELECT COALESCE(COUNT(*),0) FROM request WHERE status = 1;");


?>

            <!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">

<?php include_once('includes/header_end.php'); ?>

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Dashboard</h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>
                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <!-- ==================
                         PAGE CONTENT START
                         ================== -->

                    <div class="page-content-wrapper">

                        <div class="header-bg"> 
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 mb-4 pt-5">
                                       <h1 class="page-title"><center>Statistics</center></h1>
                                    </div>
                                </div>
                            </div>
                        </div>










                        <!-- <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-xl-3">
                                    <div class="card text-center m-b-30">
                                        <div class="mb-2 card-body text-muted">
                                            <h3 class="text-info"><?php while($client=mysqli_fetch_array($clients)){ echo $client[0]; }?></h3>
                                            No. Of Clients
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="card text-center m-b-30">
                                        <div class="mb-2 card-body text-muted">
                                            <h3 class="text-purple"><?php while($service_prov=mysqli_fetch_array($service_providers)){ echo $service_prov[0]; }?></h3>
                                            No. Of Service Providers
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="card text-center m-b-30">
                                        <div class="mb-2 card-body text-muted">
                                            <h3 class="text-primary"><?php while($pending_req=mysqli_fetch_array($pending_requests)){ echo $pending_req[0]; }?></h3>
                                            No. Of Pending Requests
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="card text-center m-b-30">
                                        <div class="mb-2 card-body text-muted">
                                            <h3 class="text-danger"><?php while($completed_req=mysqli_fetch_array($completed_requests)){ echo $completed_req[0]; }?></h3>
                                            No. Of Completed Requests
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0"><?php while($all_re=mysqli_fetch_array($all_rquestss)){ echo $all_re[0]; }?></h5>
                                                    <p class="text-muted font-14">All Requests</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0"><?php while($declined_re=mysqli_fetch_array($declined_requestss)){ echo $declined_re[0]; }?></h5>
                                                    <p class="text-muted font-14">Declined Requests</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0"><?php while($completed_re=mysqli_fetch_array($completed_requestss)){ echo $completed_re[0]; }?></h5>
                                                    <p class="text-muted font-14">Accepted Requests</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                         </div> -->





                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

<?php include_once('includes/footer_start.php'); ?>

        <!--Morris Chart-->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/pages/dashboard.js"></script>
                <!--Morris Chart-->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/pages/morris.init.js"></script> 


<?php include_once('includes/footer_end.php'); ?>