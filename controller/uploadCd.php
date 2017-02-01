<?php
   	$msjCdUploads = '';
    if(isset($_POST['uploadCd'])){
    	require_once 'model/cd.php';
    	$temp = tmpfile();
		$dir_subida = '/opt/lampp/htdocs/cheyproducion/upload/';
		$target_file = $dir_subida . basename($_FILES["fileToUploadCd"]["name"]);
		$idUser = $_POST['id_user'];
		$nameCd = $_POST['nameCD'];
		$autor = $_POST['autor'];
		$name = $_FILES["fileToUploadCd"]["name"];
		$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if ($fileType == 'jpg' or $fileType == 'png' ){
			if (move_uploaded_file($_FILES['fileToUploadCd']['tmp_name'], $target_file)) {
				$msjCdUploads = "el CD se ha subido";
				$cd_url = '/cheyproducion/upload/'.basename($_FILES["fileToUploadCd"]["name"]);
				$cd_save = Cd::registerCD($nameCd, $cd_url, $autor);
			} else {
				$msjCdUploads = 'Error al subir el Video';
				echo $_FILES['fileToUploadCd']['error'];
			}
		}else{
			$msjCdUploads = 'Error subir solo videos de formato mpg, avi, mp4';
		}
		
    }
?>