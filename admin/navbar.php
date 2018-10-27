<!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Personal Collection</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
				<li class="dropdown">
                   <a><i class="fa fa-clock-o fa-fw"></i> <?php include('time.php'); ?></a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<span class="glyphicon glyphicon-lock"></span> <?php echo $user; ?>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
						<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span>  My Account</a></li>
						<li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <img src="../img/logo.png" height="50px" width="220px">
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="home.php"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="performance.php"><i class="fa fa-bar-chart-o fa-fw"></i> Performance</a>
                        </li>
						<?php
							$rq=mysqli_query($con,"select * from reservation where res_status='1'");
							$rnum=mysqli_num_rows($rq);
						?>
						<li>
                            <a href="reserve.php"><i class="fa fa-book fa-fw"></i> Reservations <span class="label label-default"><?php echo $rnum; ?></span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Master Files<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Users <span class="fa arrow"></span></a>
									<ul class="nav nav-third-level">
                                        <li>
                                            <a href="employee.php">Employee</a>
                                        </li>
                                        <li>
                                            <a href="dealer.php">Dealer</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="product.php">Products</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Reports<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="sales_report.php">Sales Report</a>
                                </li>
								<li>
                                    <a href="inventory_report.php">Inventory Report</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class="fa fa-th-list fa-fw"></i> System Logs<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="userlog.php">User Logs</a>
                                </li>
                                <li>
                                    <a href="actlog.php">Activity Logs</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>