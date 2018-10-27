<br>
<table width="100%" class="table table-striped table-bordered table-hover" id="DeclineTable">
    <thead>
        <tr>
            <th>Dealer Name</th>
            <th>Total Cost</th>
			<th>Reserve Date</th>
			<th>Date Declined</th>
			<th>Action</th>
			<th>Status</th>
        </tr>
    </thead>
    <tbody>
		<?php
			$rq=mysqli_query($con,"select * from reservation left join dealer on dealer.userid=reservation.userid where res_status='3' order by action_date desc");
			while($rqrow=mysqli_fetch_array($rq)){
				$rid=$rqrow['reserveid'];
			?>
			<tr>
				<td><?php echo ucwords($rqrow['lastname']); ?>, <?php echo ucwords($rqrow['firstname']); ?> <?php echo ucwords($rqrow['middle_i']); ?>.</td>
				<td>&#8369; <?php echo number_format($rqrow['total_cost'],2); ?></td>
				<td><?php echo date("M d, Y - h:i A", strtotime($rqrow['reserve_date'])); ?></td>
				<td><?php echo date("M d, Y - h:i A", strtotime($rqrow['action_date'])); ?></td>
				<td><a href="#reserve_detail<?php echo $rid; ?>" data-toggle="modal" class="btn btn-info btn-sm"><i class="fa fa-search"></i> View</a>
					<?php include ('r_modal.php'); ?>
				</td>
				<td>
				<?php
					if($rqrow['res_status']==1){
						echo "Pending";
					}
					elseif($rqrow['res_status']==2){
						echo "Confirmed";
					}
					elseif($rqrow['res_status']==3){
						echo "Declined";
					}
					else{
						echo "Expired";
					}
				?>
				</td>
			</tr>
			<?php
			}
		?>
    </tbody>
</table>
<!-- /.table-responsive -->