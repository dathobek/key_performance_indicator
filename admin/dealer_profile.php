<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php $id=$_GET['id']; ?>
<body>

    <div id="wrapper">
		<?php include('navbar.php'); ?>
		<br><br>
		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dealer Profile
						<span class="pull-right">
							<a href="edit_dealer.php<?php echo '?id='.$id; ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a>
						</span>
						</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
				<div style="height:20px;"></div>
					<?php
						$e=mysqli_query($con,"select * from employee left join emp_position on emp_position.positionid=employee.positionid where employeeid='$id'");
						$er=mysqli_fetch_array($e);
					?>
				<div class="row">
					<div class="col-lg-3">
						<div>
							<?php
							if($er['photo'] == ""){
								?>
								<img src="../img/profile.jpg" width="200px" height="200px" class="thumbnail">
								<?php
							}
							else{
								?>
								<img src="../<?php echo $er['photo']; ?>" width="200px" height="200px" class="thumbnail">
								<?php
							}
							?>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Full Name:</span>
							<p style="width:480px;" class="form-control"><?php echo $er['firstname']; ?> <?php echo $er['middlename']; ?> <?php echo $er['lastname']; ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Username:</span>
							<p style="width:480px;" class="form-control"><?php echo $er['username']; ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Address:</span>
							<p style="width:480px;" class="form-control"><?php echo $er['address']; ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Contact Info:</span>
							<p style="width:480px;" class="form-control"><?php echo $er['contact_info']; ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Birthdate:</span>
							<p style="width:480px;" class="form-control"><?php echo date("M d, Y", strtotime($er['birthdate'])); ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Age:</span>
							<p style="width:480px;" class="form-control">
								<?php
									echo date_diff(date_create($er['birthdate']),date_create('today'))->y;
								?>
							</p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Gender:</span>
							<p style="width:480px;" class="form-control"><?php echo $er['gender']; ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Joined Date:</span>
							<p style="width:480px;" class="form-control"><?php echo date("M d, Y", strtotime($er['member_date'])); ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Credit Limit:</span>
							<p style="width:480px;" class="form-control">&#8369; <?php echo number_format($er['credit_limit'],2); ?></p>
						</div>
					</div>	
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
	</div>
	
	<?php include('scripts.php'); ?>
	<?php include ('modal.php'); ?>
	
</body>
</html>