<?php
include('db/connection.php');
include_once('includes/header_start.php');


$requests = mysqli_query($conn,"SELECT request.id,request.service_provider_id,request.client_id,request.to_date,request.request_type, users.name AS client_name, services.service_name, request.description, request.address, request.rating, request.amount, request.request_time, request.request_date, request.time_consumed FROM request INNER JOIN users ON request.client_id = users.id INNER JOIN services ON request.service_id = services.id WHERE request.status = 2 ORDER BY request.id DESC");
$counter = 0;

include_once('includes/header_end.php');
?>


        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />


                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Active Posts</h3>
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

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">View All Active Posts</h4>
            
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                        			    <th>Sr#</th>
													    <th>Name</th>
                                                        <th>Date</th>
                                                        <th>Time</th>
													    <th>Description</th>
                                                    </tr>
                                                </thead>
            
            
                                                <tbody>
                                        			<?php while($row = mysqli_fetch_array($requests)){ $counter++  ?>
														<tr>
														    <td><?php echo $counter; ?></td>
                                                            <td><?php echo htmlentities ($row['client_name']);?></td>
															<td><?php echo htmlentities ($row['address']);?></td>
                                                            <td><?php $service_provider_name = mysqli_query($conn,"SELECT users.name FROM users WHERE id = ".$row['service_provider_id'].""); 
																		$row2 = mysqli_fetch_assoc($service_provider_name);
																		echo $row2['name']; ?></td>
                                                            <td><?php echo htmlentities ($row['service_name']);?></td>
                                                            <td><?php if($row['request_type'] == 1){
																			echo "Hourly";
																		}else{
																			echo "Monthly";
																		}
															?></td>
                                                            <td><?php if($row['request_type'] == 1){
																			echo htmlentities ($row['request_date']);
																		}else{
																			echo ($row['request_date']." to ".$row['to_date']);
																		}?></td>
                                                            <td><?php echo htmlentities ($row['request_time']);?></td>
														    <td><?php echo htmlentities ($row['description']);?></td>
													    </tr>
												    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
                            
                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

<?php include_once('includes/footer_start.php'); ?>

        <!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>

<?php include_once('includes/footer_end.php'); ?>