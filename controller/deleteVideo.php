<?php
    if(isset($_POST['idVideoData'])){
    	require_once '../conexion/conexion.php';
		$conectar = new Conectar();
    	$id_video = $_POST['idVideoData'];
		echo $id_video;
		$query = $conectar -> prepare('SELECT * FROM video WHERE id = :id');
		$query -> bindParam(':id', $id_video);
		$query -> execute();
		$data = $query -> fetch();
		if ($data) {
			$delete = $conectar -> prepare('DELETE FROM video WHERE id = :id');
			$delete -> bindParam(':id', $id_video);
			$delete -> execute();
			unlink('/opt/lampp/htdocs'.$data['url_video']);
			echo "<meta http-equiv='refresh' content='0'>";
			echo "El video se ha sido borrada";
		} else {
			echo "No se ah eliminado la imagen";
		}	
	}
?>