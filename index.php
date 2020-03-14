<?php
session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>
<!DOCTYPE html>

<head>
	<title>Home</title>
	<script type='text/javascript' src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/dash.css">
</head>

<body>

	<div class="header">
		<h2>Dashboard</h2>
	</div>
	
	<!-- logged in user information -->
	<div class="info">
		<?php if (isset($_SESSION['username'])) : ?>
			Welcome <strong><?php echo $_SESSION['username']; ?>, 
				<a href="index.php?logout='1'" style="color: red;">logout?</a>
		<?php endif ?>
	</div>
	<div class="copy">Send your URL to a friend to start a video call</div>
	<video id="localVideo" autoplay muted></video>
	<video id="remoteVideo" autoplay></video>
	<script src="js/script.js"></script>

</body>

</html>