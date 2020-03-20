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
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
</head>

<body onload="run();">
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
	<div id="chatBox" class="modal">
		<div class="modal-content">
			<div class="modal-header" align="center">
				<span class="close">&times;</span>
				<h2>Text Chat Area</h2>
			</div>
			<div class="modal-body" align="center">
				<iframe id="chatModal" src="https://tlk.io/" frameborder="0" width="400" height="500" ></iframe>
			</div>
			<div class="modal-footer" align="center">
				<h3>Powered by &copy sghosh1403</h3>
			</div>
		</div>
	</div>
	<div class="fab" id="chatOpen"></div>
	<script src="../js/chat.js"></script>

</body>
	
</html>