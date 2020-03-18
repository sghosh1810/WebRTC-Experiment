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

<head>
	<title>Home</title>
	<script type='text/javascript' src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
	<script src="../js/util.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="../css/dash.css">
</head>

<body>

	<div class="header">
		<h2>Dashboard</h2>
	</div>
	
	<!-- logged in user information -->
	<div class="info">
		<?php if (isset($_SESSION['username'])) : ?>
			Welcome <strong><?php echo $_SESSION['username']; ?>, 
				<a href="videochat.php?logout='1'" style="color: red;">logout?</a>
		<?php endif ?>
	</div>
	
	<div class="copy">
		Click on the button to copy access code
		<button onclick="textCopy()">Copy code</button>
	</div>

	<video id="localVideo" autoplay muted></video>
	<video id="remoteVideo" autoplay></video>
	<script src="../js/script.js"></script>
	<!--
		TODO:
		#1 Check for iframe stat
		#2 Conds STEP-1 edit iframe css -> css/dash.css
		#3 fetch data to fill tawk api
		#4 extends STEP-3 alt -> shift to white label
		#5 populate tawk json
	    -------------------ask arnab sys update--------------
	-->
		

	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
	var Tawk_API=Tawk_API||{};
		Tawk_API.visitor = {
		name : 'demo name',
		email : 'demo@demo.com'
	};
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/593a32884374a471e7c522c5/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->
</body>

</html>