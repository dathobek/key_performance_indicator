<?php include('session.php'); ?>
<?php include('header.php'); ?>

<body>

    <div id="wrapper">
		<?php include('navbar.php'); ?>
		<br><br>
		<div id="page-wrapper">
			<br><br>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
					<span style="font-size:15px;"><strong>Year: </strong></span>
					<select id="pyear" class="btn btn-default btn-sm" style="position:relative; top:-4px;">
					<option value="<?php 
							if(isset($_GET['year'])){
								$value=$_GET['year']; 
								echo $value;
							}
							else{
								echo date('Y');
							}
							?>">
							<?php 
							if(isset($_GET['year'])){
								$value=$_GET['year']; 
								echo $value;
							}
							else{
								echo date('Y');
							}
							?></option>
					<?php
						for($y=2015; $y<=2100; $y++){
							?>
								<option value="<?php echo $y ?>"><?php echo $y; ?></option>
							<?php
						}
					
					?>
					</select>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12" style="height:360px;">
						<canvas id="canvas" height="100px;"></canvas>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
					<span style="font-size:15px;"><strong>Month: <?php echo date('F'); ?>, <?php echo date('Y'); ?> </strong></span>
					</div>
				</div>
				<div style="height:10px;"></div>
				<?php $m=date('m'); ?>
				<div class="row">
					<div class="col-lg-3">
					<?php  
						$pm=mysqli_query($con,"select *, sum(sales_qty) as total_qty from sales_details 
						left join product_backup on product_backup.productid=sales_details.productid 
						left join sales on sales.salesid=sales_details.salesid 
						where month(sales.sales_date)='$m' group by sales_details.sales_detailsid 
						order by total_qty desc limit 1") or die(mysqli_error($con));
						$pmrow=mysqli_fetch_array($pm);
					?>
						<center><strong><span style="font-size:18px;">MONTHLY TOP SELLER</span></strong></center>
						<div style="height:10px;"></div>
						<img src="../<?php if($pmrow['img_src']==""){echo "img/noimage.jpg";}else{echo $pmrow['img_src'];} ?>" class="thumbnail" style="margin:auto; padding:auto;" height="120px" width="120px">
						<div style="height:10px;"></div>
						<table style="padding:auto; margin:auto;">
						<tbody>
						<tr>
							<td width="150px;"><strong><?php echo $pmrow['prod_name']; ?></strong></td>
							<td><span class="label label-default pull-right"><?php echo $pmrow['total_qty']; ?></span></td>
						</tr>
						</tbody>
						</table>
					</div>

					<div class="col-lg-3">
					<?php  
						$md=mysqli_query($con,"select *, sum(sales_total) as total_purchase from sales left join dealer_backup on dealer_backup.userid=sales.userid where month(sales_date)='$m' group by sales.userid order by total_purchase desc limit 1") or die(mysqli_error($con));
						$mdrow=mysqli_fetch_array($md);
					?>
						<center><strong><span style="font-size:18px;">MONTHLY TOP DEALER</span></strong></center>
						<div style="height:10px;"></div>
						<img src="../<?php if($mdrow['photo']==""){echo "img/noimage.jpg";}else{echo $mdrow['photo'];} ?>" class="thumbnail" style="margin:auto; padding:auto;" height="120px" width="120px">
						<div style="height:10px;"></div>
						<table style="padding:auto; margin:auto;">
						<tbody>
						<tr>
							<td width="140px;"><strong><?php echo ucwords($mdrow['firstname']); ?> <?php echo ucwords($mdrow['lastname']); ?></strong></td>
							<td><span class="label label-default pull-right"><?php echo number_format($mdrow['total_purchase'],2); ?></span></td>
						</tr>
						</tbody>
						</table>
					</div>
					
					<div class="col-lg-3">
					<?php  
						$p=mysqli_query($con,"select *, sum(sales_qty) as total_qty from sales_details left join product_backup on product_backup.productid=sales_details.productid group by sales_details.sales_detailsid order by total_qty desc limit 1") or die(mysqli_error($con));
						$prow=mysqli_fetch_array($p);
					?>
						<center><strong><span style="font-size:18px;">LIFETIME TOP SELLER</span></strong></center>
						<div style="height:10px;"></div>
						<img src="../<?php if($prow['img_src']==""){echo "img/noimage.jpg";}else{echo $prow['img_src'];} ?>" class="thumbnail" style="margin:auto; padding:auto;" height="120px" width="120px">
						<div style="height:10px;"></div>
						<table style="padding:auto; margin:auto;">
						<tbody>
						<tr>
							<td width="150px;"><strong><?php echo $prow['prod_name']; ?></strong></td>
							<td><span class="label label-default pull-right"><?php echo $prow['total_qty']; ?></span></td>
						</tr>
						</tbody>
						</table>
					</div>
					
					<div class="col-lg-3">
					<?php  
						$d=mysqli_query($con,"select *, sum(sales_total) as total_purchase from sales left join dealer_backup on dealer_backup.userid=sales.userid group by sales.userid order by total_purchase desc limit 1") or die(mysqli_error($con));
						$drow=mysqli_fetch_array($d);
					?>
						<center><strong><span style="font-size:18px;">LIFETIME TOP DEALER</span></strong></center>
						<div style="height:10px;"></div>
						<img src="../<?php if($drow['photo']==""){echo "img/noimage.jpg";}else{echo $drow['photo'];} ?>" class="thumbnail" style="margin:auto; padding:auto;" height="120px" width="120px">
						<div style="height:10px;"></div>
						<table style="padding:auto; margin:auto;">
						<tbody>
						<tr>
							<td width="140px;"><strong><?php echo ucwords($drow['firstname']); ?> <?php echo ucwords($drow['lastname']); ?></strong></td>
							<td><span class="label label-default pull-right"><?php echo number_format($drow['total_purchase'],2); ?></span></td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>
				<div style="height: 50px;"></div>
            </div>
            <!-- /.container-fluid -->
        </div>
	</div>
	<?php
		$year = date('Y');
			if(isset($_GET['year']))
				{
					$year=$_GET['year'];
				}
	?>
	<?php include('data.php'); ?>
	<?php include('scripts.php'); ?>
	<?php include('modal.php'); ?>
	<script>
		var color = Chart.helpers.color;
        var barChartData = {
            labels: [	"Jan",
						"Feb",
						"Mar",
						"Apr",
						"May",
						"Jun",
						"July",
						"Aug",
						"Sep",
						"Oct",
						"Nov",
						"Dec",
					],
            datasets: [{
                label: 'Fragrances',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                    "<?php echo $njan1; ?>",
                    "<?php echo $nfeb1; ?>",
                    "<?php echo $nmar1; ?>",
                    "<?php echo $napr1; ?>",
                    "<?php echo $nmay1; ?>",
                    "<?php echo $njun1; ?>",
                    "<?php echo $njul1; ?>",
                    "<?php echo $naug1; ?>",
                    "<?php echo $nsep1; ?>",
                    "<?php echo $noct1; ?>",
                    "<?php echo $nnov1; ?>",
                    "<?php echo $ndec1; ?>"
                ]},
				{
                label: 'Homecare',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                    "<?php echo $njan2; ?>",
                    "<?php echo $nfeb2; ?>",
                    "<?php echo $nmar2; ?>",
                    "<?php echo $napr2; ?>",
                    "<?php echo $nmay2; ?>",
                    "<?php echo $njun2; ?>",
                    "<?php echo $njul2; ?>",
                    "<?php echo $naug2; ?>",
                    "<?php echo $nsep2; ?>",
                    "<?php echo $noct2; ?>",
                    "<?php echo $nnov2; ?>",
                    "<?php echo $ndec2; ?>"
                ]},
				{
                label: 'Health',
                backgroundColor: color(window.chartColors.ornnge).alpha(0.5).rgbString(),
                borderColor: window.chartColors.orange,
                borderWidth: 1,
                data: [
                    "<?php echo $njan3; ?>",
                    "<?php echo $nfeb3; ?>",
                    "<?php echo $nmar3; ?>",
                    "<?php echo $napr3; ?>",
                    "<?php echo $nmay3; ?>",
                    "<?php echo $njun3; ?>",
                    "<?php echo $njul3; ?>",
                    "<?php echo $naug3; ?>",
                    "<?php echo $nsep3; ?>",
                    "<?php echo $noct3; ?>",
                    "<?php echo $nnov3; ?>",
                    "<?php echo $ndec3; ?>"
                ]},
				{
                label: 'Personal',
                backgroundColor: color(window.chartColors.yellow).alpha(0.5).rgbString(),
                borderColor: window.chartColors.yellow,
                borderWidth: 1,
                data: [
                    "<?php echo $njan4; ?>",
                    "<?php echo $nfeb4; ?>",
                    "<?php echo $nmar4; ?>",
                    "<?php echo $napr4; ?>",
                    "<?php echo $nmay4; ?>",
                    "<?php echo $njun4; ?>",
                    "<?php echo $njul4; ?>",
                    "<?php echo $naug4; ?>",
                    "<?php echo $nsep4; ?>",
                    "<?php echo $noct4; ?>",
                    "<?php echo $nnov4; ?>",
                    "<?php echo $ndec4; ?>"
                ]},
				{
                label: 'Baby',
                backgroundColor: color(window.chartColors.black).alpha(0.5).rgbString(),
                borderColor: window.chartColors.black,
                borderWidth: 1,
                data: [
                    "<?php echo $njan5; ?>",
                    "<?php echo $nfeb5; ?>",
                    "<?php echo $nmar5; ?>",
                    "<?php echo $napr5; ?>",
                    "<?php echo $nmay5; ?>",
                    "<?php echo $njun5; ?>",
                    "<?php echo $njul5; ?>",
                    "<?php echo $naug5; ?>",
                    "<?php echo $nsep5; ?>",
                    "<?php echo $noct5; ?>",
                    "<?php echo $nnov5; ?>",
                    "<?php echo $ndec5; ?>"
                ]},
				{
                label: 'Coffee',
                backgroundColor: color(window.chartColors.green).alpha(0.5).rgbString(),
                borderColor: window.chartColors.green,
                borderWidth: 1,
                data: [
                    "<?php echo $njan6; ?>",
                    "<?php echo $nfeb6; ?>",
                    "<?php echo $nmar6; ?>",
                    "<?php echo $napr6; ?>",
                    "<?php echo $nmay6; ?>",
                    "<?php echo $njun6; ?>",
                    "<?php echo $njul6; ?>",
                    "<?php echo $naug6; ?>",
                    "<?php echo $nsep6; ?>",
                    "<?php echo $noct6; ?>",
                    "<?php echo $nnov6; ?>",
                    "<?php echo $ndec6; ?>"
                ]}
				]

        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Product Sales Per Month'
                    }
                }
            });

        };
	
	</script>
	<script>
	$(document).ready(function(){
		$("#pyear").on('change', function(){
			var year=$(this).val();
				window.location = 'performance.php?year='+year;
			
		});

	});
	</script>
</body>
</html>