<?php
require_once 'conexion/conexion.php';
class Users {
	private $id;
	private $name;
	private $email;
	private $phone;
	private $username;
	private $password;
	private $visible_video;
	private $url_instagram;
	private $url_facebook;
	private $url_youtube;
	const TABLA = 'user';

	public function getId() {
		return $this -> id;
	}

	public function getName() {
		return $this -> name;
	}

	public function setName($name) {
		$this -> name = $name;
	}

	public function getEmail() {
		return $this -> email;
	}

	public function setEmail($email) {
		$this -> email = $email;
	}
	
	public function getPhone() {
		return $this -> phone;
	}

	public function setPhone($phone) {
		$this -> phone = $phone;
	}
	
	public function getUsername() {
		return $this -> username;
	}

	public function setUsername($username) {
		$this -> username = $username;
	}
		
	public function getPassword() {
		return $this -> password;
	}

	public function setPassword($password) {
		$this -> password = $password;
	}
	
	public function getVisibleVideo() {
		return $this -> visible_video;
	}

	public function setVisibleVideo($visible_video) {
		$this -> visible_video = $visible_video;
	}
	
	public function getUrlInstagram() {
		return $this -> url_instagram;
	}

	public function setUrlInstagram($url_instagram) {
		$this -> url_instagram = $url_instagram;
	}
	
	public function getUrlFacebook() {
		return $this -> url_facebook;
	}

	public function setUrlFacebook($url_facebook) {
		$this -> url_facebook = $url_facebook;
	}
	
	public function getUrlYoutube() {
		return $this -> url_youtube;
	}

	public function setUrlYoutube($url_youtube) {
		$this -> url_youtube = $url_youtube;
	}


	public function __construct($name, $email, $phone, $username, $password, $visible_video, $url_instagram, $url_facebook, $url_youtube, $id = null) {
		$this -> name = $name;
		$this -> email = $email;
		$this -> phone = $phone;
		$this -> username = $username;
		$this -> password = $password;
		$this -> visible_video = $visible_video;
		$this -> url_instagram = $url_instagram;
		$this -> url_facebook = $url_facebook;
		$this -> url_youtube = $url_youtube;
		$this -> id = $id;
	}

	public static function loginUser($username, $pass) {
		$conectar = new Conectar();
		$query = $conectar -> prepare('SELECT * FROM ' . self::TABLA . ' WHERE username = :username AND password = md5(:pass)');
		$query -> bindParam(':username', $username);
		$query -> bindParam(':pass', $pass);
		$query -> execute();
		$data = $query -> fetch();
		if ($data) {
			return new self($data['name'], $data['email'], $data['phone'], $data['username'], $data['password'], $data['visible_video'], $data['url_instagram'], $data['url_facebook'], $data['url_youtube'] ,$data['iduser']);
		} else {
			return FALSE;
		}
		$conectar = null;

	}

	public static function update($name, $email, $phone, $url_instagram, $url_facebook, $url_youtube, $id) {
		$conectar = new Conectar();
		$query = $conectar -> prepare('UPDATE ' . self::TABLA . ' SET name = :name, email = :email, phone = :phone, url_instagram = :url_instagram, url_facebook = :url_facebook, url_youtube = :url_youtube WHERE iduser = :id');
		$query -> bindParam(':name', $name);
		$query -> bindParam(':email', $email);
		$query -> bindParam(':phone', $phone);
		$query -> bindParam(':url_instagram', $url_instagram);
		$query -> bindParam(':url_facebook', $url_facebook);
		$query -> bindParam(':url_youtube', $url_youtube);
		$query -> bindParam(':id', $id);
		$query -> execute();
		$conectar = null;

	}
	
	public static function visibleVideo($visible_video) {
		$conectar = new Conectar();
		$query = $conectar -> prepare('UPDATE ' . self::TABLA . ' SET visible_video = :visible_video');
		$query -> bindParam(':visible_video', $visible_video);
		$query -> execute();
		$conectar = null;

	}
	
	public static function selectForId($id) {
		$conectar = new Conectar();
		$query = $conectar -> prepare('SELECT * FROM ' . self::TABLA . ' WHERE iduser = :id');
		$query -> bindParam(':id', $id);
		$query -> execute();
		$data = $query -> fetch();
		if ($data) {
			return new self($data['name'], $data['email'], $data['phone'], $data['username'], $data['password'], $data['visible_video'], $data['url_instagram'], $data['url_facebook'], $data['url_youtube'] ,$id);
		} else {
			return FALSE;
		}
		$conectar = null;
	}

}
?>