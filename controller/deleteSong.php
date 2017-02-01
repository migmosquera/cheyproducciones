<?php
    if(isset($_POST['idSongData'])){
    	require_once '../conexion/conexion.php';
		$conectar = new Conectar();
    	$id_song = $_POST['idSongData'];
		echo $id_song;
		$query = $conectar -> prepare('SELECT * FROM song WHERE id = :id');
		$query -> bindParam(':id', $id_song);
		$query -> execute();
		$data = $query -> fetch();
		if ($data) {
			$delete = $conectar -> prepare('DELETE FROM song WHERE id = :id');
			$delete -> bindParam(':id', $id_song);
			$delete -> execute();
			unlink('/opt/lampp/htdocs/'.$data['url_song']);
			echo "<meta http-equiv='refresh' content='0'>";
			echo "La cancion ha sido borrada";
		} else {
			echo "No se ah eliminado la imagen";
		}	
	}
?>