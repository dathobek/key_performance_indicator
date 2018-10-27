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
                        <h1 class="page-header">My Profile
						<span class="pull-right">
							<a href="#edit_profile" data-toggle="modal" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a>
						</span>
						</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
				<div style="height:20px;"></div>
					<?php
						$e=mysqli_query($con,"select * from dealer left join `user` on user.userid=dealer.userid where dealer.userid='".$_SESSION['id']."'");
						$er=mysqli_fetch_array($e);
					?>
             
				<div class="row">
					<div class="col-lg-3">
						<div>
							<img src="../<?php if($er['photo']==""){echo "/img/profile.jpg";}else{echo $er['photo'];} ?>" height="220px;" width="220px;" class="thumbnail">
						</div>
					</div>
					<div class="col-lg-9">
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Full Name:</span>
							<p style="width:550px;" class="form-control"><?php echo ucwords($er['lastname']); ?>, <?php echo ucwords($er['firstname']); ?> <?php echo ucwords($er['middle_i']); ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Username:</span>
							<p style="width:550px;" class="form-control"><?php echo $er['username']; ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Address:</span>
							<p style="width:550px;" class="form-control"><?php echo ucwords($er['address']); ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Contact Info:</span>
							<p style="width:550px;" class="form-control"><?php echo $er['contact_info']; ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Birthdate:</span>
							<p style="width:550px;" class="form-control"><?php echo date("M d, Y", strtotime($er['birthdate'])); ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Age:</span>
							<p style="width:550px;" class="form-control">
							<?php
								echo date_diff(date_create($er['birthdate']),date_create('today'))->y;
							?>
							</p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Gender:</span>
							<p style="width:550px;" class="form-control"><?php echo $er['gender']; ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Joined Date:</span>
							<p style="width:550px;" class="form-control"><?php echo date("M d, Y", strtotime($er['join_date'])); ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Credit:</span>
							<p style="width:550px;" class="form-control">&#8369; <?php echo number_format($er['credit'],2); ?></p>
						</div>
						<div class="form-group input-group">
							<span style="width:110px;" class="input-group-addon">Recruiter:</span>
							<p style="width:550px;" class="form-control"><?php echo ucwords($er['recruiter']); ?></p>
						</div>
					</div>
				</div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
	</div>
	
	<?php include('scripts.php'); ?>
	<?php include ('modal.php'); ?>
	
</body>
</html>