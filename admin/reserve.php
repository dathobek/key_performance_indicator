<?php include('session.php'); ?>
<?php include('header.php'); ?>

<body>

    <div id="wrapper">
		<?php include('navbar.php'); ?>
		<br><br>
		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Reservations</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<div class="row">
                <div class="col-lg-12">
				<?php
					$rq=mysqli_query($con,"select * from reservation where res_status='1'");
					$rnum=mysqli_num_rows($rq);
				?>
                <div class="tabpanel">
					<ul class="nav nav-tabs">
					<li class="active"><a href="#pending">Pending <span class="label label-default"><?php echo $rnum; ?></span></a></li>
					<li><a href="#confirmed">Confirmed</a></li>
					<li><a href="#declined">Declined</a></li>
					<li><a href="#expired">Expired</a></li>
					</ul>
					<div class="tab-content">
						<div id="pending" class="tab-pane fade in active">
							<?php include('pending.php'); ?>
						</div>
						<div id="confirmed" class="tab-pane fade in">
							<?php include('confirmed.php'); ?>
						</div>
						<div id="declined" class="tab-pane fade in">
							<?php include('declined.php'); ?>
						</div>
						<div id="expired" class="tab-pane fade in">
							<?php include('expired.php'); ?>
						</div>
					</div>
				</div>
				
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>
            <!-- /.container-fluid -->
        </div>
	</div>
	
	<?php include('scripts.php'); ?>
	
	<script>
	$(document).ready(function(){
		$(".nav-tabs a").click(function(){
			$(this).tab('show');
		});
	});
	</script>
	
	<script>
		$(document).ready(function() {
		$('#PendingTable').dataTable( {
			"bLengthChange":true,
			"bInfo":true,
			"bSort":true,
			"bFilter":true
		} );
		} );
	</script>
	
	<script>
		$(document).ready(function() {
		$('#ConfirmTable').dataTable( {
			"bLengthChange":true,
			"bInfo":true,
			"bSort":true,
			"bFilter":true
		} );
		} );
	</script>
	
	<script>
		$(document).ready(function() {
		$('#DeclineTable').dataTable( {
			"bLengthChange":true,
			"bInfo":true,
			"bSort":true,
			"bFilter":true
		} );
		} );
	</script>
	
	<script>
		$(document).ready(function() {
		$('#ExpiredTable').dataTable( {
			"bLengthChange":true,
			"bInfo":true,
			"bSort":true,
			"bFilter":true
		} );
		} );
	</script>
	
	<?php include ('modal.php'); ?>
	
</body>
</html>