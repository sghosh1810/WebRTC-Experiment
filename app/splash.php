<?php
session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
<script>
    function redirect(){
        alert('http://localhost/WebRTC-Experiment/app/videochat.php#'+document.getElementById("code").value);
        window.location.href='http://localhost/WebRTC-Experiment/app/videochat.php#'+document.getElementById("code").value;
        
    }
</script>
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			 	<form class="login100-form validate-form" method="post" action="../util/access.php">
					<span class="login100-form-title p-b-43">
						Enter your access code
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid Access Code is required">
						<input class="input100" type="text" name="code" id="code">
						<span class="focus-input100"></span>
						<span class="label-input100">Access Code</span>
					</div>
					
					

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" name="login_user">
							Join
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or Logout <a href="videochat.php?logout='1'">Here</a>
						</span>
					</div>

				</form>

				<div class="login100-more" style="background-image: url('../images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="../js/main.js"></script>

</body>
</html>