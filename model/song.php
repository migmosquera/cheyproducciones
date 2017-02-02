<?php
require_once 'conexion/conexion.php';
class Song {
	private $id;
	private $name;
	private $id_user;
	private $date_song;
        private $id_cd;
	private $url_song;
	private $tipo_song;
	private $artista;
        private $autoplay_song;
	const TABLA = 'song';

	public function getId() {
		return $this -> id;
	}

	public function getName() {
		return $this -> name;
	}

	public function setName($name) {
		$this -> name = $name;
	}
	
	public function getIdUser() {
		return $this -> id_user;
	}
	
	public function getDateSong() {
		return $this -> date_song;
	}

	public function setDateSong($date_song) {
		$this -> date_song = $date_song;
	}
        
        public function getIdCd() {
		return $this -> id_cd;
	}

	public function setIdCd($idCD) {
		$this -> id_cd = $idCD;
	}
        
        public function getUrlSong() {
		return $this -> url_song;
	}

	public function setUrlSong($urlSong) {
		$this -> url_song = $urlSong;
	}
	
	public function getTypeSong() {
		return $this -> tipo_song;
	}

	public function setTypeSong($tipo_song) {
		$this -> tipo_song = $tipo_song;
	}
	
	public function getArtista() {
		return $this -> artista;
	}

	public function setArtista($artista) {
		$this -> artista = $artista;
	}
        
        public function getAutoplaySong() {
		return $this -> autoplay_song;
	}

	public function setAutoplaySong($autoplaySong) {
		$this -> autoplay_song = $autoplaySong;
	}
        
       

	
	public function __construct($name, $id_user, $date_song, $idCd,$url_song, $tipo_song, $artista, $autoplaySong, $id = null) {
		$this -> id = $id;
		$this -> name = $name;
		$this -> id_user = $id_user;
		$this -> date_song = $date_song;
                $this -> id_cd = $idCd;
		$this -> url_song = $url_song;
		$this -> tipo_song = $tipo_song;
		$this -> artista = $artista;
                $this -> autoplay_song = $autoplaySong;
	}

	public static function registerSong($song,$idUser,$url_song,$tipo_song,$artista,$id_cd)
	{
		$conectar = new Conectar();
		$date_upload = date('Y-m-d'.' h:i:s');
		$query = $conectar -> prepare('INSERT INTO ' . self::TABLA . ' (name,id_user,date_song,id_cd,url_song,tipo_song,artista) VALUES (:song, :idUser, :dateSong, :id_cd , :url_song , :tipo_song , :artista)');
		$query -> bindParam(':song', $song);
		$query -> bindParam(':idUser', $idUser);
		$query -> bindParam(':dateSong', $date_upload);
		$query -> bindParam(':url_song', $url_song);
		$query -> bindParam(':tipo_song', $tipo_song);
		$query -> bindParam(':artista', $artista);
		$query -> bindParam(':id_cd', $id_cd);
		$query -> execute();
		$conectar = null;	
	}
	
	public static function allSong()
	{
		$conectar = new Conectar();
		$query = $conectar -> prepare('SELECT * FROM ' . self::TABLA . ' ORDER BY date_song DESC' );
		$query -> execute();
		$data = $query -> fetchAll();
		return $data;
		$conectar = null;
	}
	
	public static function paginationSong($limit,$total)
	{
		$conectar = new Conectar();
		$query = $conectar -> prepare('SELECT * FROM ' . self::TABLA . ' ORDER BY date_song DESC LIMIT ' .$limit. ' , ' .$total);
		$query -> execute();
		$data = $query -> fetchAll();
		return $data;
		$conectar = null;	
	}
	
	public static function searchSong($name){
		$conectar = new Conectar();
		$query = $conectar -> prepare('SELECT * FROM ' . self::TABLA . ' where name like '."'%$name%'");
		$query -> execute();
		$data = $query -> fetchAll();
		return $data;
		$conectar = null;	
	}
	
	public static function paginationSearchSong($name,$limit,$total){
		$conectar = new Conectar();
		$query = $conectar -> prepare('SELECT * FROM ' . self::TABLA . ' where name like '."'%$name%'".' ORDER BY date_song DESC LIMIT ' .$limit. ' , ' .$total );
		$query -> execute();
		$data = $query -> fetchAll();
		return $data;
		$conectar = null;	
	}
	
}
?>