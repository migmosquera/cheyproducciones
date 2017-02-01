<?php
   $msjVideoUploads = '';
    if(isset($_POST['uploadVideo'])){
    	require_once 'model/video.php';
    	$temp = tmpfile();
		$dir_subida = '/opt/lampp/htdocs/cheyproducion/upload/';
		$target_file = $dir_subida . basename($_FILES["fileToUploadVideo"]["name"]);
		$idUser = $_POST['id_user'];
		$nameVideo = $_POST['nameVideo'];
		$upload_video = 1;
		$name = $_FILES["fileToUploadVideo"]["name"];
		$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if ($fileType == 'mpg' or $fileType == 'avi' or $fileType == 'mp4' ){
			if (move_uploaded_file($_FILES['fileToUploadVideo']['tmp_name'], $target_file)) {
				$msjVideoUploads = "el video se ha subido";
				$video_url = '/cheyproducion/upload/'.basename($_FILES["fileToUploadVideo"]["name"]);
				$video_save = Video::registerVideo($video_url, $idUser, $upload_video, $nameVideo);
			} else {
				$msjVideoUploads = 'Error al subir el Video';
				echo $_FILES['fileToUpload']['error'];
			}
		}else{
			$msjVideoUploads = 'Error subir solo videos de formato mpg, avi, mp4';
		}
		
    }
?>