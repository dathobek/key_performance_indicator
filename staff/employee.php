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
                        <h1 class="page-header">Employee List
						<span class="pull-right">
							<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addemployee"><i class="fa fa-plus-circle"></i> Add Employee</button>
							<a href="view_employee.php" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-print"></span> Print</a>
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
                                <th>Employee Name</th>
								<th>Username</th>
								<th>Position</th>
                                <th>Photo</th>
								<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php
								$eq=mysqli_query($con,"select * from employee left join emp_position on emp_position.positionid=employee.positionid left join `user` on user.userid=employee.userid order by lastname asc");
								while($eqrow=mysqli_fetch_array($eq)){
									$eid=$eqrow['userid'];
									?>
										<tr>
											<td><?php echo ucwords($eqrow['lastname']); ?>, <?php echo ucwords($eqrow['firstname']); ?> <?php echo ucwords($eqrow['middle_i']); ?>.</td>
											<td><?php echo $eqrow['username']; ?></td>
											<td><?php echo $eqrow['p_description']; ?></td>
											<td><img src="../<?php if($eqrow['photo']==""){echo "/img/profile.jpg";}else{echo $eqrow['photo'];} ?>" height="30px;" width="30px;"></td>
											<td><a href="#details_<?php echo $eid; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><i class="fa fa-user"></i> Full Details</a>
												<a href="#update<?php echo $eid; ?>" data-toggle="modal" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a>
												<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delemp_<?php echo $eid; ?>"><i class="fa fa-trash"></i> Delete</button>
												<?php include('emp_button.php'); ?>
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
	<?php include ('admin_modal.php'); ?>
	
	
</body>
</html>