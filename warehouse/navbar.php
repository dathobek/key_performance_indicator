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
						<?php
							$cqy=mysqli_query($con,"select * from claim where claim_status='0'");
							$cqynum=mysqli_num_rows($cqy);
						?>
                            <a href="claim.php"><i class="fa fa-bell fa-fw"></i> Product Claims <span class="label label-default"><?php echo $cqynum; ?></span></a>
                        </li>
                        <li>
                            <a href="product.php"><i class="fa fa-barcode fa-fw"></i> Products & Inventory</a>
                        </li>
						<li>
                            <a href="inventory.php"><i class="fa fa-file fa-fw"></i> Inventory Report</a>
                        </li>
						<li>
							<a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
						</li>
       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>