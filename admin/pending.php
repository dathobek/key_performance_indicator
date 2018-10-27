<br>
<table width="100%" class="table table-striped table-bordered table-hover" id="PendingTable">
    <thead>
        <tr>
            <th>Dealer Name</th>
            <th>Total Cost</th>
			<th>Reserve Date</th>
			<th>Expire Date</th>
			<th>Action</th>
        </tr>
    </thead>
    <tbody>
		<?php
			$rq=mysqli_query($con,"select * from reservation left join dealer on dealer.userid=reservation.userid where res_status='1' order by reserve_date desc");
			while($rqrow=mysqli_fetch_array($rq)){
				$rid=$rqrow['reserveid'];
			?>
			<tr>
				<td><?php echo ucwords($rqrow['lastname']); ?>, <?php echo ucwords($rqrow['firstname']); ?> <?php echo ucwords($rqrow['middle_i']); ?></td>
				<td>&#8369; <?php echo number_format($rqrow['total_cost'],2); ?></td>
				<td><?php echo date("M d, Y - h:i A", strtotime($rqrow['reserve_date'])); ?></td>
				<td>
					<?php
						date_default_timezone_set("Asia/Singapore");
						$date=date('M d, Y - h:i A');
						$expiry=date("M d, Y - h:i A", strtotime("+3 days", strtotime($rqrow['reserve_date']))); 
						
						if ($date>=$expiry){
							$query1=mysqli_query($con,"select * from reserve_detail where reserveid='$rid'");
							while($row1=mysqli_fetch_array($query1)){
								$pq1=mysqli_query($con,"select * from product where productid='".$row1['productid']."'");
								$pqrow1=mysqli_fetch_array($pq1);
		
								$newqty=$pqrow1['p_quantity']+$row1['reserve_qty'];
		
								mysqli_query($con,"update product set p_quantity='$newqty' where productid='".$row1['productid']."'");
								mysqli_query($con,"update product_backup set p_quantity='$newqty' where productid='".$row1['productid']."'");
							}
							mysqli_query($con,"update reservation set res_status='4' where reserveid='$rid'");
							
							$up_credit=$rqrow['total_cost']+$rqrow['credit'];
							mysqli_query($con,"update dealer set credit='$up_credit' where userid='".$rqrow['userid']."'");
							mysqli_query($con,"update dealer_backup set credit='$up_credit' where userid='".$rqrow['userid']."'");
						}
						else{
							echo $expiry;
						}
					?>
				</td>
				<td><a href="#reserve_detail<?php echo $rid; ?>" data-toggle="modal" class="btn btn-info btn-sm"><i class="fa fa-search"></i> View</a>
					<a href="#confirm_<?php echo $rid; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Confirm</a>
					<a href="#decline_<?php echo $rid; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Decline</a>
					<?php include('res_button.php'); ?>
					<?php include ('r_modal.php'); ?>
				</td>
			</tr>
			<?php
			}
		?>
    </tbody>
</table>
<!-- /.table-responsive -->