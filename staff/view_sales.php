<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php
	$sales_from=$_POST['sales_from'];
	$sales_to=$_POST['sales_to'];
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
						<a href="sales_report.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
					</div>					
				</div>
				</div>
				<br>
				<div class="row">
                <div class="col-lg-12">
                    <span style="font-size:13px;">SALES REPORT</span><br>
					<span style="font-size:13px;"><?php echo date("F d, Y", strtotime($sales_from)); ?> to <?php echo date("F d, Y", strtotime($sales_to)); ?></span>				
				</div>
				</div>
				<br>
				<div class="row">
                <div class="col-lg-12">
                    <table width="100%" class="table table-bordered" style="font-size:13px;">
						<thead>
							<th class="hidden"></th>
							<th>Date</th>
                            <th>Dealer Name</th>
							<th>Sales Amount</th>
						</thead>
						<tbody>
							<?php
								$salesq=mysqli_query($con,"select * from sales left join dealer_backup on dealer_backup.userid=sales.userid where sales_date between '$sales_from' and '$sales_to'");
								while($salesrow=mysqli_fetch_array($salesq)){
									?>
									<tr>
										<td class="hidden"></td>
										<td><?php echo date("M d, Y - h:i A", strtotime($salesrow['sales_date'])); ?></td>
										<td><?php echo ucwords($salesrow['lastname']); ?>, <?php echo ucwords($salesrow['firstname']); ?> <?php echo ucwords($salesrow['middle_i']); ?></td>
										<td>&#8369; <?php echo number_format($salesrow['sales_total'],2); ?></td>
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