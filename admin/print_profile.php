<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php $id=$_GET['id']; ?>

<body>
<div id="wrapper">
	<div class="container-fluid">
		<center><h3><strong>Personal Collections</strong></h3></center>
		<br>
		<center><h4><strong>Employee Profile</strong></h4></center>
		<br>
		<div class="noprint p_buttons">
		<a href="admin_emp.php" class="btn btn-primary btn-sm printbutton"><i class="fa fa-arrow-left"></i> Back</a>
		<a onclick="window.print()" class="btn btn-success btn-sm"><i class="fa fa-print"></i> Print</a>
		</div>
        <br>
			<div class="p_profile">
					<?php
						$e=mysqli_query($con,"select * from employee left join emp_position on emp_position.positionid=employee.positionid where employeeid='$id'");
						$er=mysqli_fetch_array($e);
					?>
				<div class="row">
					<div class="col-lg-3 print_img">
						<div>
							<?php
							if($er['photo'] == ""){
								?>
								<img src="../img/profile.jpg" width="180px" height="180px" class="thumbnail">
								<?php
							}
							else{
								?>
								<img src="../<?php echo $er['photo']; ?>" width="180px" height="180px" class="thumbnail">
								<?php
							}
							?>
						</div>
					</div>
					<div class="col-lg-9 print_details">
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Full Name:</span>
							<p style="width:350px;" class="form-control"><?php echo $er['firstname']; ?> <?php echo $er['middlename']; ?> <?php echo $er['lastname']; ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Username:</span>
							<p style="width:350px;" class="form-control"><?php echo $er['username']; ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Address:</span>
							<p style="width:350px;" class="form-control"><?php echo $er['address']; ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Contact Info:</span>
							<p style="width:350px;" class="form-control"><?php echo $er['contact_info']; ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Birthdate:</span>
							<p style="width:350px;" class="form-control"><?php echo date("M d, Y", strtotime($er['birthdate'])); ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Age:</span>
							<p style="width:350px;" class="form-control">
								<?php
									echo date_diff(date_create($er['birthdate']),date_create('today'))->y;
								?>
							</p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Gender:</span>
							<p style="width:350px;" class="form-control"><?php echo $er['gender']; ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Position:</span>
							<p style="width:350px;" class="form-control"><?php echo $er['p_description']; ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Hired Date:</span>
							<p style="width:350px;" class="form-control"><?php echo date("M d, Y", strtotime($er['member_date'])); ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Access Level:</span>
							<p style="width:350px;" class="form-control">
								<?php 
									if ($er['access_level']==1){
										echo "Admin";
									} 
									elseif ($er['access_level']==2){
										echo "Staff";
									}
									elseif ($er['access_level']==3){
										echo "Stock in-charge";
									}
									else{
										echo "Dealer";
									}
								?>
							</p>
						</div>
					</div>	
                </div>
			</div>
		</div>
	
</div>
</body>
</html>