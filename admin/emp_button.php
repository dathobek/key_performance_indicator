<!-- Edit Employee -->
    <div class="modal fade" id="update<?php echo $eid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Employee</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="edit_employee.php<?php echo '?id='.$eid; ?>" enctype="multipart/form-data">
						<div class="container-fluid">
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Firstname:</span>
                            <input type="text" style="width:275px; text-transform:capitalize;" class="form-control" name="firstname" value="<?php echo $eqrow['firstname']; ?>">
							
							<span style="width:120px;" class="input-group-addon">Middle I.:</span>
                            <input type="text" style="width:275px; text-transform:capitalize;" class="form-control" name="middle" maxlength="1" value="<?php echo $eqrow['middle_i']; ?>">
                        </div>
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Lastname:</span>
                            <input type="text" style="width:275px; text-transform:capitalize;" class="form-control" name="lastname" value="<?php echo $eqrow['lastname']; ?>">
							
							<span style="width:120px;" class="input-group-addon">Gender:</span>
                            <select style="width:275px;" class="form-control" name="gender">
								<option value="<?php echo $eqrow['gender']; ?>"><?php echo $eqrow['gender']; ?></option>
								<?php
									if ($eqrow['gender']=="Male"){
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
                            <input type="text" style="width:670px; text-transform:capitalize;" class="form-control" name="address" value="<?php echo $eqrow['address']; ?>">
                        </div>
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Contact Info:</span>
                            <input type="text" style="width:275px;" class="form-control" name="contact" value="<?php echo $eqrow['contact_info']; ?>">
							
							<span style="width:120px;" class="input-group-addon">Birthdate:</span>
                            <input type="date" style="width:275px;" class="form-control" name="birthdate" value="<?php echo $eqrow['birthdate']; ?>">
                        </div>
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Position:</span>
                            <select style="width:275px;" class="form-control" name="position" >
							<option value="<?php echo $eqrow['positionid']; ?>"><?php echo $eqrow['p_description']; ?></option>
								<?php
									$p=mysqli_query($con,"select * from emp_position");
									while($posrow=mysqli_fetch_array($p)){
										?>
											<option value="<?php echo $posrow['positionid']; ?>"><?php echo $posrow['p_description']; ?></option>
										<?php
									}
								?>
							</select>
							
							<span style="width:120px;" class="input-group-addon">Hired Date:</span>
                            <input type="date" style="width:275px;" class="form-control" name="hiredate" value="<?php echo $eqrow['hire_date']; ?>">
                        </div>
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Photo:</span>
                            <input type="file" style="width:670px;" class="form-control" name="image">
                        </div>
						<div style="height:10px;"></div>
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

<!-- Delete Employee -->
    <div class="modal fade" id="delemp_<?php echo $eid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Employee</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$emp=mysqli_query($con,"select * from employee where userid='$eid'");
						$empr=mysqli_fetch_array($emp);
					?>
					<h5><center>Employee Name: <strong><?php echo ucwords($empr['lastname']); ?>, <?php echo ucwords($empr['firstname']); ?> <?php echo ucwords($empr['middle_i']); ?></strong></center></h5> 
                    <form role="form" method="POST" action="deleteemployee.php<?php echo '?id='.$eid; ?>">
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

<!-- Employee Details -->
    <div class="modal fade" id="details_<?php echo $eid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><center>Employee Details</center></h4>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form>
					<?php
						$emq=mysqli_query($con,"select * from employee left join `user` on user.userid=employee.userid left join emp_position on emp_position.positionid=employee.positionid where employee.userid='$eid'");
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
                            <span style="width:120px;" class="input-group-addon">Position:</span>
                            <span style="width:500px;" class="form-control"><?php echo $erow['p_description']; ?></span>
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Hire Date:</span>
                            <span style="width:500px;" class="form-control"><?php echo date("M d, Y", strtotime($erow['hire_date'])); ?></span>
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

