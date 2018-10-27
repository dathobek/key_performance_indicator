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
                        <h1 class="page-header">Liquidations
						<span class="pull-right">
							<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addliquidation"><i class="fa fa-plus-circle"></i> Add Liquidation</button>
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
                                <th>Description</th>
								<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php
								$lq=mysqli_query($con,"select * from liquidation order by l_description asc");
								while($lqrow=mysqli_fetch_array($lq)){
									$lid=$lqrow['liquidationid'];
								?>
								<tr>
									<td><?php echo ucwords($lqrow['l_description']); ?></td>
									<td><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editliq_<?php echo $lid; ?>"><i class="fa fa-edit"></i> Edit</button>
										<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delliq_<?php echo $lid; ?>"><i class="fa fa-trash"></i> Delete</button>
										<?php include('liqui_button.php'); ?>
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
	<?php include ('liqui_modal.php'); ?>
	
</body>
</html>