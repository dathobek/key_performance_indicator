<!-- Add Liquidation -->
    <div class="modal fade" id="addliquidation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Liquidation</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="addliquidation.php">
						<div class="container-fluid">
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Description:</span>
                            <input type="text" style="width:350px; text-transform:capitalize;" class="form-control" name="desc">
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