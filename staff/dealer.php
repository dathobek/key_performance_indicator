<?php include('session.php'); ?>
<?php include('header.php'); ?>

<body>

    <div id="wrapper">
		<?php include('navbar.php'); ?>
		<br><br>
		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dealer List
						<span class="pull-right">
							<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#adddealer"><i class="fa fa-plus-circle"></i> Add Dealer</button>
							<a href="view_dealer.php" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-print"></span> Print</a>
						</span>
						</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<div class="row">
                <div class="col-lg-12">
                   <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Dealer Name</th>
								<th>Username</th>
								<th>Password</th>
								<th>Credit</th>
                                <th>Photo</th>
								<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php
								$dq=mysqli_query($con,"select * from dealer left join `user` on user.userid=dealer.userid order by lastname asc");
								while($dqrow=mysqli_fetch_array($dq)){
									$did=$dqrow['userid'];
								?>
								<tr>
									<td><?php echo ucwords($dqrow['lastname']); ?>, <?php echo ucwords($dqrow['firstname']); ?> <?php echo ucwords($dqrow['middle_i']); ?></td>
									<td><?php echo $dqrow['username']; ?></td>
									<td>
										<?php
											$pass=mysqli_query($con,"select * from `password` where mdfive='".$dqrow['password']."'");
											$passrow=mysqli_fetch_array($pass);
												
											echo $passrow['original'];
										?>
									</td>
									<td>
										<a href="#credit_<?php echo $did; ?>" data-toggle="modal"><i class="fa fa-pencil"></i> &#8369; <?php echo number_format($dqrow['credit'],2); ?></a>
										<?php include('credit_button.php'); ?>
									</td>
									<td><?php echo $dqrow['recruiter']; ?></td>
									<td><img src="../<?php if($dqrow['photo']==""){echo "/img/profile.jpg";}else{echo $dqrow['photo'];} ?>" height="30px;" width="30px;"></td>
									<td><a href="#details_<?php echo $did; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><i class="fa fa-user"></i> Full Details</a>
										<a href="#update<?php echo $did; ?>" data-toggle="modal" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a>
										<a href="sales_history.php?id=<?php echo $did; ?>" class="btn btn-info btn-sm"><i class="fa fa-search"></i> Sales History</a>
										<?php include('deal_button.php'); ?>
									</td>
								</tr>
								<?php
								}
							?>
                        </tbody>
                    </table>
					<!-- /.table-responsive -->     
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>
            <!-- /.container-fluid -->
        </div>
	</div>
	
	<?php include('scripts.php'); ?>
	<?php include ('modal.php'); ?>
	<?php include ('dealer_modal.php'); ?>
	
	
</body>
</html>
</html>
</html>