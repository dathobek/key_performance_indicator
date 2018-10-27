<!-- Add Inventory -->
    <div class="modal fade" id="addinv_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
			<?php
				$a=mysqli_query($con,"select * from product where productid='$pid'");
				$b=mysqli_fetch_array($a);
			?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Product Name: <?php echo $b['prod_name'] ?></h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="add_inv.php<?php echo '?id='.$pid; ?>" enctype="multipart/form-data">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Quantity:</span>
                            <input type="text" style="width:350px;" class="form-control" name="pquantity">
                        </div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					</form>
                </div>
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->




