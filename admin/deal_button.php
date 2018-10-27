<!-- Edit Dealer -->
    <div class="modal fade" id="update<?php echo $did; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Dealer</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="edit_dealer.php<?php echo '?id='.$did; ?>" enctype="multipart/form-data">
						<div class="container-fluid">
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Firstname:</span>
                            <input type="text" style="width:275px; text-transform:capitalize;" class="form-control" name="firstname" value="<?php echo ucwords($dqrow['firstname']); ?>">
							
							<span style="width:120px;" class="input-group-addon">Middle I.:</span>
                            <input type="text" style="width:275px; text-transform:capitalize;" class="form-control" name="middle" maxlength="1" value="<?php echo ucwords($dqrow['middle_i']); ?>">
                        </div>
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Lastname:</span>
                            <input type="text" style="width:275px; text-transform:capitalize;" class="form-control" name="lastname" value="<?php echo ucwords($dqrow['lastname']); ?>">
							
							<span style="width:120px;" class="input-group-addon">Gender:</span>
                            <select style="width:275px;" class="form-control" name="gender">
								<option value="<?php echo $dqrow['gender']; ?>"><?php echo $dqrow['gender']; ?></option>
								<?php
									if ($dqrow['gender']=="Male"){
										?>
											<option value="Female">Female</option>
										<?php
									}
									else{
										?>
											<option value="Male">Male</option>
										<?php
									}
								?>
							</select>
                        </div>
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Address:</span>
                            <input type="text" style="width:670px; text-transform:capitalize;" class="form-control" name="address" value="<?php echo ucwords($dqrow['address']); ?>">
                        </div>
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Contact Info:</span>
                            <input type="text" style="width:670px;" class="form-control" name="contact" value="<?php echo $dqrow['contact_info']; ?>">
                        </div>
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Birthdate:</span>
                            <input type="date" style="width:275px;" class="form-control" name="birthdate" value="<?php echo $dqrow['birthdate']; ?>">
							
							<span style="width:120px;" class="input-group-addon">Joined Date:</span>
                            <input type="date" style="width:275px;" class="form-control" name="joindate" value="<?php echo $dqrow['join_date']; ?>">
                        </div>
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Recruiter:</span>
                            <select style="width:670px;" class="form-control" name="recruiter">
								<option value="<?php echo ucwords($dqrow['recruiter']); ?>"><?php echo ucwords($dqrow['recruiter']); ?></option>
								<option>None</option>
								<?php
									$uq=mysqli_query($con,"select * from dealer where userid!='$did'");
									while($uqrow=mysqli_fetch_array($uq)){
										?>
											<option><?php echo ucwords($uqrow['firstname']); ?> <?php echo ucwords($uqrow['middle_i']); ?>. <?php echo ucwords($uqrow['lastname']); ?></option>
										<?php
									}
								?>
							</select>
                        </div>
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Photo:</span>
                            <input type="file" style="width:670px;" class="form-control" name="image">
                        </div>
						</div>
				</div>                
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
					</form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->

<!-- Delete Dealer -->
    <div class="modal fade" id="delemp_<?php echo $did; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Dealer</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$emp=mysqli_query($con,"select * from dealer where userid='$did'");
						$empr=mysqli_fetch_array($emp);
					?>
					<h5><center>Dealer Name: <strong><?php echo ucwords($empr['lastname']); ?>, <?php echo ucwords($empr['firstname']); ?> <?php echo ucwords($empr['middle_i']); ?></strong></center></h5> 
                    <form role="form" method="POST" action="deletedealer.php<?php echo '?id='.$did; ?>">
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

 <!-- Dealer Details -->
    <div class="modal fade" id="details_<?php echo $did; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><center>Dealer Details</center></h4>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form>
					<?php
						$emq=mysqli_query($con,"select * from dealer left join `user` on user.userid=dealer.userid where dealer.userid='$did'");
						$erow=mysqli_fetch_array($emq);
					?>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<img src="../<?php if($erow['photo']==""){echo "/img/profile.jpg";}else{echo $erow['photo'];} ?>" height="200px;" width="200px;" class="thumbnail">
						</div>
						<div class="col-lg-9">
						
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Name:</span>
                            <span style="width:500px;" class="form-control"><?php echo ucwords($erow['lastname']); ?>, <?php echo ucwords($erow['firstname']); ?> <?php echo ucwords($erow['middle_i']); ?></span>
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Username:</span>
                            <span style="width:500px;" class="form-control"><?php echo $erow['username']; ?></span>
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Address:</span>
                            <span style="width:500px;" class="form-control"><?php echo ucwords($erow['address']); ?></span>
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Contact Info:</span>
                            <span style="width:500px;" class="form-control"><?php echo $erow['contact_info']; ?></span>
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Birthdate:</span>
                            <span style="width:500px;" class="form-control"><?php echo date("M d, Y", strtotime($erow['birthdate'])); ?></span>
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Age:</span>
                            <span style="width:500px;" class="form-control"><?php echo date_diff(date_create($erow['birthdate']),date_create('today'))->y; ?></span>
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Gender:</span>
                            <span style="width:500px;" class="form-control"><?php echo $erow['gender']; ?></span>
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Join Date:</span>
                            <span style="width:500px;" class="form-control"><?php echo date("M d, Y", strtotime($erow['join_date'])); ?></span>
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Credit:</span>
                            <span style="width:500px;" class="form-control">&#8369; <?php echo number_format($erow['credit'],2); ?></span>
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Recruiter:</span>
                            <span style="width:500px;" class="form-control"><?php echo $erow['recruiter']; ?></span>
                        </div>
						<div style="height:20px;"></div>
						</div>
					</div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					</form>
                </div>
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->

