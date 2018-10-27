<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php 
	$id=$_GET['id'];
?>

<body>

    <div id="wrapper">
		<?php include('navbar.php'); ?>
		<br><br>
		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dealer Sales History
						<span class="pull-right">
							<a href="dealer.php" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
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
								<th class="hidden"></th>
								<th>Date</th>
								<th>Total Amount</th>
								<th>Action</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$td=0;
								$tsales=0;
								$sh=mysqli_query($con,"select * from reservation where userid='$id' order by reserve_date desc");
								while($shrow=mysqli_fetch_array($sh)){
									?>
										<tr>
											<td class="hidden"></td>
											<td><?php echo date("M d, Y - h:i A", strtotime($shrow['reserve_date']));?></td>
											<td>
												&#8369;
												<?php 
													echo number_format($shrow['total_cost'],2);
												?>
											</td>
											<td>
												<a href="#full_detail<?php echo $shrow['reserveid']; ?>_<?php echo $id; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> View Full Details</a>
												<?php include ('modal_hist.php'); ?>
											</td>
											<td>
												<?php
													if ($shrow['res_status']==1){
														echo "Pending";
													}
													elseif ($shrow['res_status']==2){
														echo "Confirmed";
													}
													elseif ($shrow['res_status']==3){
														echo "Declined";
													}
													else{
														echo "Expired";
													}
												?>
											</td>
										</tr>
									<?php
								}
							?>
						</tbody>
                    </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>
            <!-- /.container-fluid -->
        </div>
	</div>
	
	<?php include('scripts.php'); ?>
	<?php include ('modal.php'); ?>
	
</body>
</html>