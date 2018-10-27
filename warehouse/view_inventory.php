<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php
	$inv_from=$_POST['inv_from'];
	$inv_to=$_POST['inv_to'];
?>

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
						<a href="inventory.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
					</div>					
				</div>
				</div>
				<br>
				<div class="row">
                <div class="col-lg-12">
                    <span style="font-size:13px;">INVENTORY REPORT</span><br>
					<span style="font-size:13px;"><?php echo date("F d, Y", strtotime($inv_from)); ?> to <?php echo date("F d, Y", strtotime($inv_to)); ?></span>				
				</div>
				</div>
				<br>
				<div class="row">
                <div class="col-lg-12">
                    <table width="100%" class="table table-bordered" style="font-size:13px;">
						<thead>
							<th class="hidden"></th>
                            <th>Date</th>
							<th>Employee Name</th>
							<th>Position</th>
							<th>Product Name</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php
								$iq=mysqli_query($con,"select * from inventory left join employee_backup on employee_backup.userid=inventory.userid left join product_backup on product_backup.productid=inventory.productid left join `user_backup` on user_backup.userid=inventory.userid left join emp_position on emp_position.positionid=employee_backup.positionid order by inv_date desc");
								while($iqrow=mysqli_fetch_array($iq)){
								?>
								<tr>
									<td class="hidden"></td>
									<td><?php echo date("M d, Y - h:i A", strtotime($iqrow['inv_date'])); ?></td>
									<td>
									<?php
									if ($iqrow['access_level']==1){
										echo "Admin";
									}
									else{
										?>
											<?php echo ucwords($iqrow['lastname']); ?>, <?php echo ucwords($iqrow['firstname']); ?> <?php echo ucwords($iqrow['middle_i']); ?>
										<?php
									}
									?>
									</td>
									<td>
										<?php
											if ($iqrow['access_level']==1){
												echo "Admin";
											}
											else{
												echo ucwords($iqrow['p_description']);
											}
										?>
									</td>
									<td><?php echo ucwords($iqrow['prod_name']); ?></td>
									<td><?php echo $iqrow['action']; ?></td>
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