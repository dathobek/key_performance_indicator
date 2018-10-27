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
                        <h1 class="page-header">Inventory Report
						<span class="pull-right">
							<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#m_inventory"><span class="glyphicon glyphicon-print"></span> Print</button>
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
								<th>Employee Name</th>
								<th>Position</th>
								<th>Product Name</th>
								<th>Action</th>
                            </tr>
                        </thead>
						<tbody>
							<?php
								$iq=mysqli_query($con,"select * from inventory left join employee on employee.userid=inventory.userid left join product on product.productid=inventory.productid left join `user` on user.userid=inventory.userid left join emp_position on emp_position.positionid=employee.positionid order by inv_date desc");
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
	<?php include ('inv_modal.php'); ?>
	
</body>
</html>