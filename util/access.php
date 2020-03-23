<?php
    if (isset($_POST['code'])) {
        $url='http://localhost/WebRTC-Experiment/app/videochat/videochat.php#';
        $code=$_POST['code'];
        header('location: http://localhost/WebRTC-Experiment/app/videochat/videochat.php#'.$code);
    }
?>