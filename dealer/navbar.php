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
                        <img src="../<?php if ($srow['photo']==""){echo "img/profile.jpg"; } else {echo $srow['photo'];} ?>" width="18px" height="18px"> <?php echo $user; ?>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
						<li><a href="#"><i class="fa fa-ticket fa-fw"></i> &#8369; <?php echo number_format($srow['credit'],2); ?></a></li>
						<li class="divider"></li>
                        <li><a href="profile.php"><i class="fa fa-user fa-fw"></i> My Profile</a></li>
                        <li class="divider"></li>
						<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span> My Account</a></li>
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
                            <img src="../img/logo.png" height="50px" width="220px">
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="home.php"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-barcode fa-fw"></i> Product List<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
							<?php
								$pcat=mysqli_query($con,"select * from prod_category");
								while($pcatrow=mysqli_fetch_array($pcat)){
									?>
									<li>
                                    <a href="plist.php?id=<?php echo $pcatrow['categoryid']; ?>"><?php echo $pcatrow['catname']; ?></a>
									</li>
									<?php
								}
							?>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="reserve.php"><i class="fa fa-shopping-cart fa-fw"></i> Reservation</a>
                        </li>
                        <li>
                            <a href="history.php"><i class="fa fa-history fa-fw"></i> Reservation History</a>
                        </li>
						<li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>