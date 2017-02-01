<?php
	include_once 'model/video.php';
	$cant_video = 9;
	$numero_pagina="";
	
	if(isset($_GET['pag_video'])){
		$numero_pagina = (int)$_GET['pag_video'];
	}
	
	if(isset($_POST['searchVideo'])){
    	
		$name_video = $_POST['nameVideo'];
		echo $name_video . "<br>";
		$video_total = Video::searchVideo($name_video);
		$columns_video = count($video_total);
		$pagination_video = ceil($columns_video/$cant_video);
		$url = $_SERVER['HTTP_HOST']. ':' .$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
		
		if ($numero_pagina == 1 || $numero_pagina==""){
			$inicio= 0;
			$numero_pagina = 1;
		} else{
			$inicio = ($numero_pagina - 1) * $cant_video;
		}
		$offset_video = $numero_pagina*$cant_video;
		$pagination_video = ceil($columns_video/$cant_video);
		$video_upload=Video::paginationSearchVideo($name_video, $inicio, $cant_video);
	}
	else{
		$video_total = Video::showAllVideo();
		$columns_video = count($song_total);
		$pagination_video = ceil($columns_video/$cant_video);
		$url = $_SERVER['HTTP_HOST']. ':' .$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
		
		if ($numero_pagina == 1 || $numero_pagina==""){
			$inicio= 0;
			$numero_pagina = 1;
		} else{
			$inicio = ($numero_pagina - 1) * $cant_video;
		}
		$offset_video = $numero_pagina*$cant_video;
		$pagination_video = ceil($columns_video/$cant_video);
		$video_upload=Video::paginationVideo($inicio,$cant_video);
	}
?>