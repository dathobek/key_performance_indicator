<?php
include('session.php');
 
 $myarray = json_decode($_GET["myarray"], true);
 
	print_r($myarray);

 foreach($myarray as $data):
 
 mysqli_query($con,"insert into reserve_detail (productid, reserve_qty) values ($data[product], $data[qty])");
 endforeach;
?>