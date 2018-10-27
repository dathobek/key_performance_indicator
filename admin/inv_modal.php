<!-- Monthly Sales Report -->
    <div class="modal fade" id="m_inventory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Set up Print</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<form method="POST" action="view_inventory.php">
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">From:</span>
							<input type="date" style="width:350px;" class="form-control" name="inv_from" required>
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">To:</span>
							<input type="date" style="width:350px;" class="form-control" name="inv_to" required>
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