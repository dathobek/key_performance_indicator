<?php include('session.php'); ?>
<?php include('header.php'); ?>

<body>
<div id="wrapper">
	<div class="container-fluid">
		<br>
		<center><h4><strong>Employee List</strong></h4></center>
		<div class="noprint">
		<a href="admin_emp.php" class="btn btn-primary btn-sm printbutton"><i class="fa fa-arrow-left"></i> Back</a>
		<a onclick="window.print()" class="btn btn-success btn-sm"><i class="fa fa-print"></i> Print</a>
		</div>
        <br>
		<table width="100%" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
					<th>Employee Name</th>
					<th>Username</th>
					<th>Position</th>
                    <th>Photo</th>
					<th>Hired Date</th>
				</tr>
            </thead>
            <tbody>
				<?php
					$eq=mysqli_query($con,"select * from employee left join emp_position on emp_position.positionid=employee.positionid order by lastname asc");
					while($eqrow=mysqli_fetch_array($eq)){
						$eid=$eqrow['employeeid'];
						?>
						<tr>
							<td><?php echo ucwords($eqrow['lastname']); ?>, <?php echo ucwords($eqrow['firstname']); ?> <?php echo ucwords($eqrow['middlename']); ?></td>
							<td><?php echo $eqrow['username']; ?></td>
							<td><?php echo $eqrow['p_description']; ?></td>
							<td><img src="../<?php if($eqrow['photo']==""){echo "/img/profile.jpg";}else{echo $eqrow['photo'];} ?>" height="30px;" width="30px;"></td>
							<td><?php echo date("M d, Y", strtotime($eqrow['member_date'])); ?></td>
						</tr>
						<?php
						}
				?>
            </tbody>
        </table>
	</div>
</div>
</body>
</html>