<?php include_once('includes/header_start.php'); ?>

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
                                    <div class="col-sm-12 text-center mt-4">
                                        <h5>Users Registered Per Month</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-4 pt-5">
                                        <div id="morris-bar-example" class="dash-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-xl-3">
                                    <div class="card text-center m-b-30">
                                        <div class="mb-2 card-body text-muted">
                                            <h3 class="text-info">15,852</h3>
                                            Total Users
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="card text-center m-b-30">
                                        <div class="mb-2 card-body text-muted">
                                            <h3 class="text-purple">4</h3>
                                            Today's Posts
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="card text-center m-b-30">
                                        <div class="mb-2 card-body text-muted">
                                            <h3 class="text-primary">289</h3>
                                            Pinned Posts
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="card text-center m-b-30">
                                        <div class="mb-2 card-body text-muted">
                                            <h3 class="text-danger">20</h3>
                                            Unassigned Users
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
            
                            <div class="row">
                                <!-- <div class="col-xl-2"></div> -->
                                <div class="col-xl-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Users and Roles</h4>
                                            <div class="row m-t-20">
                                                <div class="col-6 text-right">
                                                    <h5 class="">430</h5>
                                                    <p class="text-muted font-14">Cook</p>
                                                </div>
                                                <div class="col-6 text-left">
                                                    <h5 class="">250</h5>
                                                    <p class="text-muted font-14">Driver</p>
                                                </div>
                                            </div>
                                            <div id="morris-donut-example" class="dash-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-xl-2"></div> -->
            
                                <div class="col-xl-8">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Posts Per Month</h4>
            
                                            <div class="row text-center m-t-20">
                                                <div class="col-6">
                                                    <h5 class="">56241</h5>
                                                    <p class="text-muted font-14">Total Likes</p>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="">23651</h5>
                                                    <p class="text-muted font-14">Total Comments</p>
                                                </div>
                                            </div>
            
                                            <div id="morris-area-example" class="dash-chart"></div>
                                        </div>
                                    </div>
                                </div>
            
                            </div>
                            <!-- end row -->
            
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 m-b-30 header-title">Recently Added Users</h4>
            
                                            <div class="table-responsive">
                                                <table class="table m-t-20 mb-0 table-vertical">
            
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            Herbert C. Patton
                                                        </td>
                                                        <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i>No Role Assigned</td>
                                                        <td>
                                                            123456789
                                                            <p class="m-0 text-muted font-14">Phone</p>
                                                        </td>
                                                        <td>
                                                            5/08/2020
                                                            <p class="m-0 text-muted font-14">Joined On</p>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Assign Role</button>
                                                        </td>
                                                    </tr>
            
                                                    <tr>
                                                        <td>
                                                            Mathias N. Klausen
                                                        </td>
                                                        <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i>No Role Assigned</td>
                                                        <td>
                                                            123456789
                                                            <p class="m-0 text-muted font-14">Phone</p>
                                                        </td>
                                                        <td>
                                                            10/08/2020
                                                            <p class="m-0 text-muted font-14">Joined On</p>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Assign Role</button>
                                                        </td>
                                                    </tr>
            
                                                    <tr>
                                                        <td>
                                                            Nikolaj S. Henriksen
                                                        </td>
                                                        <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i>No Role Assigned</td>
                                                        <td>
                                                            123456789
                                                            <p class="m-0 text-muted font-14">Phone</p>
                                                        </td>
                                                        <td>
                                                            8/08/2020
                                                            <p class="m-0 text-muted font-14">Joined On</p>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Assign Role</button>
                                                        </td>
                                                    </tr>
            
                                                    <tr>
                                                        <td>
                                                            Lasse C. Overgaard
                                                        </td>
                                                        <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i>No Role Assigned</td>
                                                        <td>
                                                            123456789
                                                            <p class="m-0 text-muted font-14">Phone</p>
                                                        </td>
                                                        <td>
                                                            7/08/2020
                                                            <p class="m-0 text-muted font-14">Joined On</p>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Assign Role</button>
                                                        </td>
                                                    </tr>
            
                                                    <tr>
                                                        <td>
                                                            Kasper S. Jessen
                                                        </td>
                                                        <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i>No Role Assigned</td>
                                                        <td>
                                                            123456789
                                                            <p class="m-0 text-muted font-14">Phone</p>
                                                        </td>
                                                        <td>
                                                            1/08/2020
                                                            <p class="m-0 text-muted font-14">Joined On</p>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect">Assign Role</button>
                                                        </td>
                                                    </tr>
            
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <!-- <div class="col-xl-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 m-b-15 header-title">Recent Activity Feed</h4>
            
                                            <ol class="activity-feed mb-0">
                                                <li class="feed-item">
                                                    <span class="date">Today 02:00</span>
                                                    <span class="activity-text">Joeph created a post</span>
                                                </li>
            
                                                <li class="feed-item">
                                                    <span class="date">Today 02:00</span>
                                                    <span class="activity-text">You created a post</span>
                                                </li>
                                                <li class="feed-item">
                                                    <span class="date">Today 02:00</span>
                                                    <span class="activity-text">Michael liked your post</span>
                                                </li>
                                                <li class="feed-item">
                                                    <span class="date">Today 02:00</span>
                                                    <span class="activity-text">You Assigned John as Cook</span>
                                                </li>
                                                <li class="feed-item">
                                                    <span class="date">Today 02:00</span>
                                                    <span class="activity-text">Richard registered account</span>
                                                </li>
                                                <li class="feed-item">
                                                    <span class="date">Today 02:00</span>
                                                    <span class="activity-text">Smith created a post</span>
                                                </li>
                                                <li class="feed-item pb-1">
                                                    <span class="activity-text">
                                                        <a href="" class="text-primary">More Activities</a>
                                                    </span>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div> -->
            
            
                            </div>
                            <!-- end row -->
            
                         </div>
            

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

<?php include_once('includes/footer_start.php'); ?>

        <!--Morris Chart-->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script>
            !function ($) {
                "use strict";

                var Dashboard = function () {
                };
                    //creates Bar chart
                    Dashboard.prototype.createBarChart = function (element, data, xkey, ykeys, labels, lineColors) {
                        Morris.Bar({
                            element: element,
                            data: data,
                            xkey: xkey,
                            ykeys: ykeys,
                            labels: labels,
                            gridLineColor: 'rgba(255,255,255,0.1)',
                            gridTextColor: '#98a6ad',
                            barSizeRatio: 0.2,
                            resize: true,
                            hideHover: 'auto',
                            barColors: lineColors
                        });
                    },

                    //creates area chart
                    Dashboard.prototype.createAreaChart = function (element, pointSize, lineWidth, data, xkey, ykeys, labels, lineColors) {
                        Morris.Area({
                            element: element,
                            pointSize: 0,
                            lineWidth: 0,
                            data: data,
                            xkey: xkey,
                            ykeys: ykeys,
                            labels: labels,
                            resize: true,
                            gridLineColor: '#eee',
                            hideHover: 'auto',
                            lineColors: lineColors,
                            fillOpacity: .6,
                            behaveLikeLine: true
                        });
                    },

                    //creates Donut chart
                    Dashboard.prototype.createDonutChart = function (element, data, colors) {
                        Morris.Donut({
                            element: element,
                            data: data,
                            resize: true,
                            colors: colors,
                        });
                    },

                    Dashboard.prototype.init = function () {

                        //creating bar chart
                        var $barData = [
                            {y: 'Jan 2020', a: 75},
                            {y: 'Feb 2020', a: 100},
                            {y: 'Mar 2020', a: 90},
                            {y: 'Apr 2020', a: 75},
                            {y: 'May 2020', a: 50},
                            {y: 'Jun 2020', a: 75},
                            {y: 'Jul 2020', a: 100},
                            {y: 'Aug 2020', a: 90}
                        ];
                        this.createBarChart('morris-bar-example', $barData, 'y', ['a'], ['Users'], ['#4bbbce']);

                        //creating area chart
                        var $areaData = [
                            {y: '2007', a: 120},
                            {y: '2008', a: 150},
                            {y: '2009', a: 60},
                            {y: '2010', a: 180},
                            {y: '2011', a: 90},
                            {y: '2012', a: 75},
                            {y: '2013', a: 30}
                        ];
                        this.createAreaChart('morris-area-example', 0, 0, $areaData, 'y', ['a'], ['Posts'], ['#4bbbce']);

                        //creating donut chart
                        var $donutData = [
                            {label: "Driver", value: 250},
                            {label: "Cook", value: 430}
                        ];
                        this.createDonutChart('morris-donut-example', $donutData, ['#f0f1f4', '#2f8ee0', '#4bbbce']);

                      
                    },
                    $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard
            }(window.jQuery),

            function ($) {
                "use strict";
                $.Dashboard.init();
            }(window.jQuery);
        </script>

<?php include_once('includes/footer_end.php'); ?>