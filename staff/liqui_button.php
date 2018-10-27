<!-- Delete Liquidation -->
    <div class="modal fade" id="delliq_<?php echo $lid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Liquidation</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$liq=mysqli_query($con,"select * from liquidation where liquidationid='$lid'");
						$liqr=mysqli_fetch_array($liq);
					?>
                    <form role="form" method="POST" action="deleteliquidation.php<?php echo '?id='.$lid; ?>">
                    <h5><center>Description: <strong><?php echo $liqr['l_description']; ?></strong></center></h5>
                </div>                 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
					</form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->

<!-- Edit Liquidation -->
    <div class="modal fade" id="editliq_<?php echo $lid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Liquidation</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<div style="height:10px;"></div>
					<?php
						$a=mysqli_query($con,"select * from liquidation where liquidationid='$lid'");
						$b=mysqli_fetch_array($a);
					?>
                    
                    <form role="form" method="POST" action="edit_liquidation.php<?php echo '?id='.$lid; ?>">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Description:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['l_description']); ?>" class="form-control" name="description" >
                        </div>   
					<div style="height:10px;"></div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
					</form>
                </div>
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->