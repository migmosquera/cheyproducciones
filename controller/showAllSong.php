<?php
   	include_once 'model/song.php';
	$cant_song = 10;
	$pagina="";
	
	if(isset($_GET['pag'])){
		$pagina = (int)$_GET['pag'];
	}
	
	if(isset($_POST['searchSong'])){
    	
		$name = $_POST['nameSong'];
		
		$song_total = Song::searchSong($name);
		$columns = count($song_total);
		$pagination = ceil($columns/$cant_song);
		$url = $_SERVER['HTTP_HOST']. ':' .$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
		
		if ($pagina == 1 || $pagina==""){
			$inicio= 0;
			$pagina = 1;
		} else{
			$inicio = ($pagina - 1) * $cant_song;
		}
		$offset = $pagina*$cant_song;
		$pagination = ceil($columns/$cant_song);
		$song=Song::paginationSearchSong($name,$inicio,$cant_song);
	}
	else{
		$song_total = Song::allSong();
		$columns = count($song_total);
		$pagination = ceil($columns/$cant_song);
		$url = $_SERVER['HTTP_HOST']. ':' .$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
		
		if ($pagina == 1 || $pagina==""){
			$inicio= 0;
			$pagina = 1;
		} else{
			$inicio = ($pagina - 1) * $cant_song;
		}
		$offset = $pagina*$cant_song;
		$pagination = ceil($columns/$cant_song);
		$song=Song::paginationSong($inicio,$cant_song);
	}
?>