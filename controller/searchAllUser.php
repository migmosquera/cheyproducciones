<?php
    require_once  'model/user.php';
	require_once  'model/video.php';
	$user = Users::selectForId(1);
	$video = Video::selectVideo(1);
?>