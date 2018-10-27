<!-- Edit Inventory -->
    <div class="modal fade" id="edit_inv<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Quantity</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($con,"select * from product where productid='$pid'");
						$b=mysqli_fetch_array($a);
					?>
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_quantity.php<?php echo '?id='.$pid; ?>" enctype="multipart/form-data">
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Product name:</span>
                            <span style="width:400px;" class="form-control" name="pqty"><?php echo ucwords($b['prod_name']); ?></span>
                        </div>
						<div style="height:10px;"></div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Quantity:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['p_quantity']; ?>" class="form-control" name="pqty">
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