<?php
   $msjSondUpload = '';
    if(isset($_POST['uploadSong'])){
    	require_once 'model/song.php';
    	$temp = tmpfile();
		$dir_subida = '/opt/lampp/htdocs/cheyproducciones/upload/';
		$target_file = $dir_subida . basename($_FILES["fileToUpload"]["name"]);
		$idUser = $_POST['id_user'];
		$type_song = $_POST['tipo_song'] ;
		$artista = $_POST['artista'];
		$name = $_FILES["fileToUpload"]["name"];
		$id_cd = $_POST['name_cd'];
		$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if ($fileType == 'mp3'){
			if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
				$msjSondUpload = 'la cancion se a subido';
				$song_url = '/cheyproducciones/upload/'.basename($_FILES["fileToUpload"]["name"]);
				$song = Song::registerSong($name,$idUser,$song_url,$type_song,$artista,$id_cd);
			} else {
				$msjSondUpload = 'Error al subir la Cancion';
				echo $_FILES['fileToUpload']['error'];
			}
		}else{
			$msjSondUpload = 'Error subir solo canciones de formato mp3';
		}
		
    }
?>