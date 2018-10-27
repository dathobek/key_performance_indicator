<?php include('session.php'); ?>
<?php include('header.php'); ?>

<body>
    <div class="container-fluid">
		<br>
            <div class="container-fluid">
				<div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-10">
						<table>
							<tr>
								<td rowspan="3" style="width:60px;"><img src="../img/ps_logo.png" width="50px" height="50px"></td>
								<td><span style="font-size:20px;">Personal Collections</span></td>
							</tr>
						</table>
					</div>
					<div class="col-lg-2 pull-right noprint">
						<button class="btn btn-success " onclick="window.print()"><span class="glyphicon glyphicon-print"></span> Print</button>
						<a href="dealer.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
					</div>					
				</div>
				</div>
				<br>
				<div class="row">
                <div class="col-lg-12">
                    <span style="font-size:13px;">DEALER LIST</span><br>				
				</div>
				</div>
				<br>
				<div class="row">
                <div class="col-lg-12">
                    <table width="100%" class="table table-bordered" style="font-size:13px;">
						<thead>
							<th>Dealer Name</th>
							<th>Username</th>
							<th>Address</th>
							<th>Contact Info</th>
							<th>Birthday</th>
							<th>Gender</th>
							<th>Hired Date</th>
							<th>Recruiter</th>
						</thead>
						<tbody>
							<?php
								$eq=mysqli_query($con,"select * from dealer left join `user` on user.userid=dealer.userid order by lastname asc");
								while($eqrow=mysqli_fetch_array($eq)){
								$eid=$eqrow['userid'];
								?>
								<tr>
									<td><?php echo ucwords($eqrow['lastname']); ?>, <?php echo ucwords($eqrow['firstname']); ?> <?php echo ucwords($eqrow['middle_i']); ?></td>
									<td><?php echo $eqrow['username']; ?></td>
									<td><?php echo $eqrow['address']; ?></td>
									<td><?php echo $eqrow['contact_info']; ?></td>
									<td><?php echo date("M d, Y", strtotime($eqrow['birthdate'])); ?></td>
									<td><?php echo $eqrow['gender']; ?></td>
									<td><?php echo date("M d, Y", strtotime($eqrow['join_date'])); ?></td>
									<td><?php echo ucwords($eqrow['recruiter']); ?></td>
								</tr>
								<?php
								}
							?>
						</tbody>
					</table>					
				</div>
				</div>
           
			</div>
	</div>
	<br>
	
	<?php include('scripts.php'); ?>
	<?php include ('modal.php'); ?>
	
</body>
</html>