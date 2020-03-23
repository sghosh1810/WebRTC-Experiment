<?php
session_set_cookie_params(0);
session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: http://localhost/WebRTC-Experiment/login.php');
}
if (!isset($_SESSION['type'])) {
	$_SESSION['msg'] = "You must have admin previlages to open this page!";
	header('location: http://localhost/WebRTC-Experiment/app/splash.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: http://localhost/WebRTC-Experiment/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="static/img/logo.ico"/>
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/css/animated.css">
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <script>
      function colorChanger() {
        $('body, nav').toggleClass('dark');
        $(this).toggleClass('switchbtn');
      }
    </script>
</head>
<body onload="colorChanger()">
    <div id="body-animated"></div>
    <br>
    <br>
    <div id="switchBtn">
        <input id="switch" name="ch" type="checkbox"/>
        <label for="switch"></label>
    </div>
    <br>
    <br>
    <br>
    <center><img src="static/img/logo.png" style="width: 200px; height: 200px;"></center>
    <div id="title">
        <h1><span>chatify</span></h1>
        <h2 class="fading">.cloud</h2>
    </div>
    <center>
        <div id="buttons">
            <p>
                <a style="font-size:16px;color:#999;" class="btn btn-default btn-lg" href="#" >VIDEO CHAT</a>
				<a style="font-size:16px;color:#999;" class="btn btn-default btn-lg" href="#" >SCREEN SHARE</a>
				<a style="font-size:16px;color:#999;" class="btn btn-default btn-lg" href="#" >WHITEBOARD</a>
				<a style="font-size:16px;color:#999;" class="btn btn-default btn-lg" href="admin.php?logout='1'" >LOGOUT</a>
            </p>
        </div>
    </center>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="static/js/index.js"></script>
    <!--<script src="static/js/pasta.js"></script>-->
    <script src="static/js/title.js"></script>
</body>
</html>
