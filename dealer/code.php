<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php
	$code=$_GET['code'];
?>
<body>
    <div class="container-fluid">
		<br>
            <div class="container-fluid">
				<div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-10">
						<table>
							<tr>
								<td rowspan="3" style="width:60px;"><img src="../img/ps_logo.png" width="50px" height="50px"></td>
								<td><span style="font-size:20px;">Personal Collections</span></td>
							</tr>
						</table>
					</div>				
				</div>
				</div>
				<br>
				<div class="row">
                <div class="col-lg-12">
                    <span style="font-size:15px;">CLAIM CODE:</span><span style="font-size:30px;"><?php echo $code; ?></span>					
				</div>
				</div><br>
				<div class="row">
				<div class="col-lg-2 noprint">
						<button class="btn btn-success " onclick="window.print()"><span class="glyphicon glyphicon-print"></span> Print</button>
						<a href="history.php" class="btn btn-primary"><i class="fa fa-check"></i> OK</a>
				</div>
				</div>				
				<br>
			</div>
	</div>
	<br>
	
	<?php include('scripts.php'); ?>
	<?php include ('modal.php'); ?>
	
</body>
</html>