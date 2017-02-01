<?php
require_once 'conexion/conexion.php';
class Video {
	private $id;
	private $url_video;
	private $date_video;
	private $id_user;
	private $upload;
	private $name;
	const TABLA = 'video';

	public function getId() {
		return $this -> id;
	}

	public function getUrlVideo() {
		return $this -> url_video;
	}

	public function setUrlVideo($url_video) {
		$this -> url_video = $url_video;
	}
	
	public function getDateVideo() {
		return $this -> date_video;
	}
	
	public function setDateVideo($date_video) {
		$this -> date_video = $date_video;
	}
	
	public function getUpload() {
		return $this -> upload;
	}
	
	public function setUpload($upload) {
		$this -> upload = $upload;
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
	
	public function __construct($url_video, $date_video, $id_user, $upload, $name, $id = null) {
		$this -> id = $id;
		$this -> url_video = $url_video;
		$this -> date_video = $date_video;
		$this -> upload = $upload;
		$this -> name = $name;
		$this -> id_user = $id_user;
	}

	public static function registerVideo($video,$idUser,$upload,$name)
	{
		$conectar = new Conectar();
		$date_upload = date('Y-m-d'.' h:i:s');
		$query = $conectar -> prepare('INSERT INTO ' . self::TABLA . ' (url_video,date_video,id_user,upload_video,name) VALUES(:url_video, :date_video, :id_user, :upload, :name)');
		$query -> bindParam(':url_video', $video);
		$query -> bindParam(':date_video', $date_upload);
		$query -> bindParam(':id_user', $idUser);
		$query -> bindParam(':upload', $upload);
		$query -> bindParam(':name', $name);
		$query -> execute();
		$conectar = null;	
		return TRUE;
	}
	
	public static function updateVideo($id_video,$url_video)
	{
		$conectar = new Conectar();
		$date_video = date('Y-m-d'.' h:i:s');
		$query = $conectar -> prepare('UPDATE ' . self::TABLA . ' SET url_video = :url_video, date_video = :date_video WHERE id = :id');
		$query -> bindParam(':id', $id_video);
		$query -> bindParam(':url_video', $url_video);
		$query -> bindParam(':date_video', $date_video);
		$query -> execute();
		$conectar = null;	
		return TRUE;
	}
	
	public static function selectVideo($id)
	{
		$conectar = new Conectar();
		$query = $conectar -> prepare('SELECT * FROM ' . self::TABLA . ' WHERE id_user = :id');
		$query -> bindParam(':id', $id);
		$query -> execute();
		$data = $query -> fetch();
		if ($data) {
			return new self($data['url_video'], $data['date_video'], $data['id_user'], $data['upload_video'], $data['name'], $id);
		} else {
			return FALSE;
		}

		$conectar = null;
	}
	
	public static function showAllVideo()
	{
		$id = 1 ;
		$conectar = new Conectar();
		$query = $conectar -> prepare('SELECT * FROM ' . self::TABLA . ' WHERE upload_video = :id ORDER BY date_video DESC');
		$query -> bindParam(':id', $id);
		$query -> execute();
		$data = $query -> fetchAll();
		return $data;
		$conectar = null;
	}
	public static function paginationVideo($limit,$total)
	{
		$id = 1 ;
		$conectar = new Conectar();
		$query = $conectar -> prepare('SELECT * FROM ' . self::TABLA . ' WHERE upload_video = :id ORDER BY upload_video DESC LIMIT ' .$limit. ' , ' .$total);
		$query -> bindParam(':id', $id);
		$query -> execute();
		$data = $query -> fetchAll();
		return $data;
		$conectar = null;	
	}

	public static function paginationSearchVideo($name,$limit,$total){
		$conectar = new Conectar();
		$query = $conectar -> prepare('SELECT * FROM ' . self::TABLA . ' where name like '."'%$name%'".' ORDER BY date_video DESC LIMIT ' .$limit. ' , ' .$total );
		$query -> execute();
		$data = $query -> fetchAll();
		return $data;
		$conectar = null;	
	}
	
	public static function searchVideo($name){
		$conectar = new Conectar();
		$query = $conectar -> prepare('SELECT * FROM ' . self::TABLA . ' where name like '."'%$name%'");
		$query -> execute();
		$data = $query -> fetchAll();
		return $data;
		$conectar = null;	
	}

}
?>