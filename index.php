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
	<style>
		body {
			display: flex;
			height: 100vh;
			margin: 0;
			align-items: center;
			justify-content: center;
			padding: 0 50px;
			font-family: -apple-system, BlinkMacSystemFont, sans-serif;
		}

		video {
			max-width: calc(50% - 100px);
			margin: 0 50px;
			box-sizing: border-box;
			border-radius: 2px;
			padding: 0;
			box-shadow: rgba(156, 172, 172, 0.2) 0px 2px 2px, rgba(156, 172, 172, 0.2) 0px 4px 4px, rgba(156, 172, 172, 0.2) 0px 8px 8px, rgba(156, 172, 172, 0.2) 0px 16px 16px, rgba(156, 172, 172, 0.2) 0px 32px 32px, rgba(156, 172, 172, 0.2) 0px 64px 64px;
		}

		.copy {
			position: fixed;
			top: 10px;
			left: 50%;
			transform: translateX(-50%);
			font-size: 16px;
			color: rgba(0, 0, 0, 0.5);
		}

		.info {
			position: fixed;
			top: 30px;
			left: 50%;
			transform: translateX(-50%);
			font-size: 16px;
			color: rgba(0, 0, 0, 0.5);
		}
	</style>
</head>

<body>

	<div class="header">
		<h2>Home Page</h2>
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