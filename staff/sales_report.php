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
                        <h1 class="page-header">Sales Report
						<span class="pull-right">
							<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#monthly"><span class="glyphicon glyphicon-print"></span> Print</button>
						</span>
						</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<div class="row">
                <div class="col-lg-12">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="SalesTable">
                        <thead>
                            <tr>
								<th class="hidden"></th>
								<th>Date</th>
                                <th>Dealer Name</th>
								<th>Sales Amount</th>
								<th>Action</th>
                            </tr>
                        </thead>
						<tbody>
							<?php
								$sq=mysqli_query($con,"select * from sales left join dealer_backup on dealer_backup.userid=sales.userid order by sales_date desc");
								while($sqrow=mysqli_fetch_array($sq)){
									$sid=$sqrow['salesid'];
								?>
								<tr>
									<td class="hidden"></td>
									<td><?php echo date("M d, Y - h:i A", strtotime($sqrow['sales_date'])); ?></td>
									<td><?php echo ucwords($sqrow['lastname']); ?>, <?php echo ucwords($sqrow['firstname']); ?> <?php echo ucwords($sqrow['middle_i']); ?></td>
									<td>&#8369; <?php echo number_format($sqrow['sales_total'],2); ?></td>
									<td><a href="#sales_details<?php echo $sid; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><i class="fa fa-list-alt"></i> View Full Details</a>
									<?php include('sales_info.php'); ?>
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
	<?php include ('sales_modal.php'); ?>
	
	<script>
		$(document).ready(function() {
		$('#SalesTable').dataTable( {
			"bLengthChange":true,
			"bInfo":true,
			"bSort":true,
			"bFilter":true
		} );
		} );
	</script>
	
</body>
</html>