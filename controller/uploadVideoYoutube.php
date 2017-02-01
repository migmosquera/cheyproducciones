<?php
    $msjUploadVideo = '';
    if(isset($_POST['uploadVideoYoutube'])){
    	require_once 'model/user.php';
		require_once 'model/video.php';
		if (!empty($_POST['visible_video'])){
			$visible = 1 ;	
		}else{
			$visible = 0 ;
		}
		$user->setVisibleVideo($visible);
		$user->visibleVideo($visible);
		$url_video = $_POST['url'];
		$id_video = $_POST['id_video'];
		$video->setUrlVideo($url_video);
		$video->updateVideo($id_video, $url_video);
		$msjUploadVideo = 'El video se ha cargado de manera correcta';
    }
?>