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
                        <h1 class="page-header">Product Claims
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
                                <th>Dealer Name</th>
								<th>Status</th>
								<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php
								$cq=mysqli_query($con,"select * from claim left join dealer_backup on dealer_backup.userid=claim.userid order by claimid desc");
								while($cqrow=mysqli_fetch_array($cq)){
								?>
								<tr>
									<td><?php echo ucwords($cqrow['lastname']); ?>, <?php echo ucwords($cqrow['firstname']); ?> <?php echo ucwords($cqrow['middle_i']); ?></td>
									<td>
									<?php 
										if ($cqrow['claim_status']==0){
											echo "Pending";
										}
										else{
											echo "Claimed";
										}
									?></td>
									<td>
									<a href="#details_<?php echo $cqrow['claimid']; ?>" data-toggle="modal" class="btn btn-info btn-sm"><i class="fa fa-search"></i> View Details</a>
									<?php
										if($cqrow['claim_status']==0){
											?>
											<a href="#confirm_<?php echo $cqrow['claimid']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Claimed</a>
											<?php
										}
									?>
									<?php include ('claim_modal.php'); ?>
									</td>
								</tr>
								<?php
								}
							?>
                        </tbody>
                    </table>
                          
				</div>
            </div>
            <!-- /.container-fluid -->
        </div>
	</div>
	
	<?php include('scripts.php'); ?>
	<?php include ('modal.php'); ?>
	
</body>
</html>