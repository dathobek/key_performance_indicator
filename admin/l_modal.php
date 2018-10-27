<!-- Monthly Sales Report -->
    <div class="modal fade" id="lmonthly" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Set up Print</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<form method="POST" action="view_liqui.php">
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">From:</span>
							<input type="date" style="width:350px;" class="form-control" name="liqui_from" required>
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">To:</span>
							<input type="date" style="width:350px;" class="form-control" name="liqui_to" required>
						</div>                
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-angle-double-right"></i> Proceed</button>
					</form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->

<!-- Add Liquidation -->
    <div class="modal fade" id="l_report" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Liquidation</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="addliqui_report.php">
						<div class="container-fluid">
						<div style="height:10px"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Employee:</span>
                            <select style="width:350px;" class="form-control" name="l_employee">
								<?php
									$aq=mysqli_query($con,"select * from employee order by lastname asc");
									while($aqrow=mysqli_fetch_array($aq)){
										?>
											<option value="<?php echo $aqrow['userid'];?>"><?php echo ucwords($aqrow['lastname']); ?> <?php echo ucwords($aqrow['firstname']); ?>, <?php echo ucwords($aqrow['middle_i']); ?></option>
										<?php
									}
								?>
							</select>
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Liquidation:</span>
                            <select style="width:350px;" class="form-control" name="liquidation">
								<?php
									$liq=mysqli_query($con,"select * from liquidation order by l_description asc");
									while($liqrow=mysqli_fetch_array($liq)){
										?>
											<option value="<?php echo $liqrow['liquidationid']; ?>"><?php echo ucwords($liqrow['l_description']); ?></option>
										<?php
									}
								?>
							</select>
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Amount:</span>
                            <input type="text" style="width:350px;" class="form-control" name="l_amount">	
                        </div>
						</div>
                </div>                 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					</form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->