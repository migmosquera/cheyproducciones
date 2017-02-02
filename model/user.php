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
        private $activate_modal;
        private $text_modal;
        private $img_modal;
        private $start_date;
        private $expire_date;
        private $title_modal;
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
        
        public function getActivateModal() {
		return $this -> activate_modal;
	}

	public function setActivateModal($activate_modal) {
		$this -> activate_modal = $activate_modal;
	}
        
        public function getTextModal() {
		return $this -> text_modal;
	}

	public function setTextModal($text_modal) {
		$this -> text_modal = $text_modal;
	}
        
        public function getImgModal() {
		return $this -> img_modal;
	}

	public function setImgModal($img_modal) {
		$this -> img_modal = $img_modal;
	}
        
        public function getStarDate() {
		return $this -> start_date;
	}

	public function setStarDate($star_date) {
		$this -> start_date = $star_date;
	}
        
        public function getExpireDate() {
		return $this -> expire_date;
	}

	public function setExpireDate($expire_date) {
		$this -> expire_date = $expire_date;
	}
        
        public function getTitleModal() {
		return $this -> title_modal;
	}
        
        public function setTitleModal($title_modal) {
		$this -> title_modal = $title_modal;
	}


	public function __construct($name, $email, $phone, $username, $password, $visible_video, $url_instagram, $url_facebook, $url_youtube, $activate_modal, $text_modal, $img_modal, $start_date, $expire_date, $title_modal, $id = null) {
		$this -> name = $name;
		$this -> email = $email;
		$this -> phone = $phone;
		$this -> username = $username;
		$this -> password = $password;
		$this -> visible_video = $visible_video;
		$this -> url_instagram = $url_instagram;
		$this -> url_facebook = $url_facebook;
		$this -> url_youtube = $url_youtube;
                $this -> activate_modal = $activate_modal;
                $this -> text_modal = $text_modal;
                $this -> img_modal = $img_modal;
                $this -> start_date = $start_date;
                $this -> expire_date = $expire_date;
                $this -> title_modal = $title_modal;
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
			return new self($data['name'], $data['email'], $data['phone'], $data['username'], $data['password'], $data['visible_video'], $data['url_instagram'], $data['url_facebook'], $data['url_youtube'], $data['activate_modal'] , $data['text_modal'] , $data['img_modal'] , $data['start_date'] , $data['expire_date'] , $data['title_modal'] ,$data['iduser']);
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
			return new self($data['name'], $data['email'], $data['phone'], $data['username'], $data['password'], $data['visible_video'], $data['url_instagram'], $data['url_facebook'], $data['url_youtube'], $data['activate_modal'] , $data['text_modal'] , $data['img_modal'] , $data['start_date'] , $data['expire_date'] , $data['title_modal'] ,$id);
		} else {
			return FALSE;
		}
		$conectar = null;
	}
        
        public static function createModal($id,$activate_modal,$title_modal,$text_modal,$url_modal) {
		$conectar = new Conectar();
                $date_start = date('Y-m-d'.' h:i:s');
		$query = $conectar -> prepare('UPDATE ' . self::TABLA . ' SET activate_modal = :activate_modal, text_modal = :text_modal, img_modal = :url_modal, start_date = :date_start, title_modal = :title_modal WHERE iduser = :id');
		$query -> bindParam(':id', $id);
                $query -> bindParam(':activate_modal', $activate_modal);
                $query -> bindParam(':title_modal', $title_modal);
                $query -> bindParam(':text_modal', $text_modal);
                $query -> bindParam(':url_modal', $url_modal);
                $query -> bindParam(':date_start', $date_start);
		$query -> execute();
		$conectar = null;
	}

}
?>