<!-- Decline Reserve -->
    <div class="modal fade" id="decline_<?php echo $rid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Decline Reservation</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$res=mysqli_query($con,"select * from reservation left join dealer on dealer.userid=reservation.userid where reserveid='$rid'");
					$rrow=mysqli_fetch_array($res);
				?>
				<form method="POST" action="decline_res.php<?php echo '?id='.$rid; ?>">
				<div class="container-fluid">
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Dealer Name:</span>
						<span style="width:350px;" class="form-control"><?php echo ucwords($rrow['firstname']); ?> <?php echo ucwords($rrow['middle_i']); ?>. <?php echo ucwords($rrow['lastname']); ?></span>
					</div><br><br>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Total Cost:</span>
						<span style="width:350px;" class="form-control">&#8369; <?php echo number_format($rrow['total_cost'],2); ?></span>
					</div>
                </div>                 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Decline</button>
					</form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->

<!-- Confirm Reserve -->
    <div class="modal fade" id="confirm_<?php echo $rid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Confirm Reservation</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$res=mysqli_query($con,"select * from reservation left join dealer on dealer.userid=reservation.userid where reserveid='$rid'");
					$rrow=mysqli_fetch_array($res);
				?>
				<form method="POST" action="confirm_res.php<?php echo '?id='.$rid; ?>">
				<div class="container-fluid">
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Claim Code:</span>
						<input type="text" style="width:350px;" name="claim_code" class="form-control">
					</div>
                </div>                 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Confirm</button>
					</form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->