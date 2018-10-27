<!-- Edit Credit -->
    <div class="modal fade" id="edit_credit<?php echo $eid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Update Credit Limit</h4>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<div class="panel panel-green">
					<?php
						$emp=mysqli_query($con,"select * from employee where employeeid='$eid'");
						$empr=mysqli_fetch_array($emp);
					?>
                    <div class="panel-heading">
						Dealer Name: <?php echo ucwords($empr['firstname']); ?> <?php echo ucwords($empr['lastname']); ?> 
					</div>
					<div class="panel-body">
                    <form role="form" method="POST" action="update_credit.php<?php echo '?id='.$eid; ?>">
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Available Credit:</span>
                            <input type="text" style="width:350px;" class="form-control" value="<?php echo $empr['credit_limit']; ?>" name="credit">
                        </div>
					</div>
					</div>
                </div>                 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
					</form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->