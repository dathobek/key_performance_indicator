<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php
	$liqui_from=$_POST['liqui_from'];
	$liqui_to=$_POST['liqui_to'];
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
						<a href="liquidation_report.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
					</div>					
				</div>
				</div>
				<br>
				<div class="row">
                <div class="col-lg-12">
                    <span style="font-size:13px;">LIQUIDATION REPORT</span><br>
					<span style="font-size:13px;"><?php echo date("F d, Y", strtotime($liqui_from)); ?> to <?php echo date("F d, Y", strtotime($liqui_to)); ?></span>				
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
							<th>Liquidation</th>
							<th>Amount</th>
						</thead>
						<tbody>
							<?php
								$lq=mysqli_query($con,"select * from liqui_report left join liquidation on liquidation.liquidationid=liqui_report.liquidationid left join employee on employee.userid=liqui_report.userid order by liqui_date desc");
								while($lqrow=mysqli_fetch_array($lq)){
									?>
									<tr>
										<td><?php echo date("M d, Y - h:i A", strtotime($lqrow['liqui_date'])); ?></td>
										<td><?php echo ucwords($lqrow['lastname']); ?>, <?php echo ucwords($lqrow['firstname']); ?> <?php echo ucwords($lqrow['middle_i']); ?></td>
										<td><?php echo ucwords($lqrow['l_description']); ?></td>
										<td>&#8369; <?php echo number_format($lqrow['amount'],2); ?></td>
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