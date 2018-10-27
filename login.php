<?php
    include('conn.php');
	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		function check_input($data){
			$data=trim($data);
			$data=stripslashes($data);
			$data=htmlspecialchars($data);
			return $data;
		}
		$username = check_input($_POST['username']);
		$fpassword = md5(check_input($_POST['password']));
		if (!preg_match("/^[a-zA-Z0-9_]*$/",$username)){
			?>
				<script>
					window.alert('Username should not contain space and special characters. Only underscore(_) is allowed!');
					window.location.href='login_form.php';
				</script>
			<?php
		}
		else{
			$fusername=$username;
			$lquery=mysqli_query($con,"select * from `user` where username='$fusername' && password='$fpassword'");
			$lrow=mysqli_fetch_array($lquery);
			$lnum=mysqli_num_rows($lquery);
			if ($lnum == 0 ){
				header('location:log_fail.php');
			}
			else{
				if($lrow['access_level']=="1")
				{
				$_SESSION['id']=$lrow['userid'];
				mysqli_query($con,"insert into userlog (userid,login)values('".$lrow['userid']."',NOW())")or die(mysqli_error($con));
				$_SESSION['userlog']=mysqli_insert_id($con);
				?>
					<script>
						window.alert('Welcome Admin!');
						window.location.href='admin/home.php';
					</script>
				<?php
				}
				elseif($lrow['access_level']=="2")
				{
				$_SESSION['id']=$lrow['userid'];
				mysqli_query($con,"insert into userlog (userid,login)values('".$lrow['userid']."',NOW())")or die(mysql_error());
				$_SESSION['userlog']=mysqli_insert_id($con);
				?>
					<script>
						window.alert('Welcome Staff!');
						window.location.href='staff/home.php';
					</script>
				<?php
				}
				elseif($lrow['access_level']=="3")
				{
				$_SESSION['id']=$lrow['userid'];
				mysqli_query($con,"insert into userlog (userid,login)values('".$lrow['userid']."',NOW())")or die(mysql_error());
				$_SESSION['userlog']=mysqli_insert_id($con);
				?>
					<script>
						window.alert('Welcome Stock in-charge!');
						window.location.href='warehouse/home.php';
					</script>
				<?php
				}
				else{
				$_SESSION['id']=$lrow['userid'];
				mysqli_query($con,"insert into userlog (userid,login)values('".$lrow['userid']."',NOW())")or die(mysql_error());
				$_SESSION['userlog']=mysqli_insert_id($con);
				?>
					<script>
						window.alert('Welcome Dealer!');
						window.location.href='dealer/home.php';
					</script>
				<?php
				}
			}
		}
	}
?>
