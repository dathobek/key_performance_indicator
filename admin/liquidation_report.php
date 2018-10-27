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
                        <h1 class="page-header">Liquidation Report
						<span class="pull-right">
							<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#l_report"><i class="fa fa-plus-circle"></i> Add Report</button> 
							<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#lmonthly"><span class="glyphicon glyphicon-print"></span> Print</button>
						</span>
						</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<div class="row">
                <div class="col-lg-12">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="liquiTable">
                        <thead>
                            <tr>
								<th>Date</th>
                                <th>Employee Name</th> 
								<th>Liquidation</th>
								<th>Amount</th>
                            </tr>
                        </thead>
						<tbody>
							<?php
								$lq=mysqli_query($con,"select * from liqui_report left join liquidation_backup on liquidation_backup.liquidationid=liqui_report.liquidationid left join employee_backup on employee_backup.userid=liqui_report.userid order by liqui_date desc");
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
	<?php include ('l_modal.php'); ?>
	
	<script type="text/javascript">
	jQuery(document).ready( function($){
	var materialTable = $('#liquiTable').dataTable( {
		"bPaginate":true,
		"bLengthChange":true,
		"bFilter":true,
		"bInfo":true,
		"bSort":false
	} );
	});
	</script>
	
</body>
</html>