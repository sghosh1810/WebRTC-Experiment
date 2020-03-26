<?php
session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: http://localhost/WebRTC-Experiment/login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: http://localhost/WebRTC-Experiment/login.php");
}
if (!isset($_SESSION['type'])) {
	echo '<script type="text/javascript">
        buttonToggle();
        </script>'; 
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WebRTC Video Conferencing</title>

        <script>
            if(!location.hash.replace('#', '').length) {
                location.href = location.href.split('#')[0] + '#' + (Math.random() * 100).toString().replace('.', '');
                location.reload();
            }
        </script>
        <link rel="stylesheet" href="http://localhost/WebRTC-Experiment/css/getMediaElement.css">
        <link rel="stylesheet" href="http://localhost/WebRTC-Experiment/css/textchat.css">
        <link rel="stylesheet" href="http://localhost/WebRTC-Experiment/css/dash.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        

        <!-- script used to stylize video element -->
        <script src="http://localhost/WebRTC-Experiment/js/getMediaElement.min.js"> </script>
        <script src="https://www.webrtc-experiment.com/socket.io.js"> </script>
        <script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
        <script src="https://www.webrtc-experiment.com/IceServersHandler.js"></script>
        <script src="https://www.webrtc-experiment.com/CodecsHandler.js"></script>
        <script src="https://www.webrtc-experiment.com/RTCPeerConnection-v1.5.js"> </script>
        <script src="https://www.webrtc-experiment.com/video-conferencing/conference.js"> </script>
    </head>

    <body onload="run();">
        <article>
            <!-- just copy this <section> and next script -->
            <section class="make-center">
                <div>
                <label><input type="checkbox" id="record-entire-conference"> Record Entire Conference In The Browser?</label>
                <span id="recording-status" style="display: none;"></span>
                <button id="btn-stop-recording" style="display: none;">Stop Recording</button>
                <br><br>

                <input type="text" id="conference-name" value="abcdef" autocorrect=off autocapitalize=off size=20>
                <button id="setup-new-room">Auto Open Or Join Room</button>
                </div>
                <table style="width: 100%;" id="rooms-list"></table>
                <div id="videos-container" style="margin: 20px 0;"></div>

                <div id="room-urls" style="text-align: center;display: none;background: #F1EDED;margin: 15px -10px;border: 1px solid rgb(189, 189, 189);border-left: 0;border-right: 0;"></div>
            </section>

            <div id="chatBox" class="modal">
                <div class="modal-content">
                    <div class="modal-header" align="center">
                        <span class="close">&times;</span>
                        <h2>Text Chat Area</h2>
                    </div>
                    <div class="modal-body" align="center">
                        <iframe id="chatModal" src="https://chatify.cloud/" frameborder="0" width="400" height="500" ></iframe>
                    </div>
                    <div class="modal-footer" align="center">
                        <h3>Powered by &copy sghosh1403</h3>
                    </div>
                </div>
            </div>
            <div class="fab" id="chatOpen"></div>
            <script src="http://localhost/WebRTC-Experiment/js/signal.js"></script>
            <script src="http://localhost/WebRTC-Experiment/js/chat.js"></script>
            <script src="http://localhost/WebRTC-Experiment/js/util.js"></script>
        </article>
    </body>
</html>