<?php
    require_once  'model/user.php';
	require_once  'model/video.php';
    session_start();
	$id=$_SESSION['id'];
	$user = Users::selectForId($id);
	$video = Video::selectVideo($id);
	if ($user) {
		return $user;
	} else {
		if (session_destroy()){
			header('Location: index.php');
		}
	}
?>