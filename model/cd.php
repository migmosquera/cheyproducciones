<?php
require_once 'conexion/conexion.php';
class Cd {
	private $id;
	private $name;
	private $caratula;
	private $date_cd;
	private $autor;
	const TABLA = 'cd';

	public function getId() {
		return $this -> id;
	}

	public function getName() {
		return $this -> name;
	}

	public function setName($name) {
		$this -> name = $name;
	}
	
	public function getCaratula() {
		return $this -> caratula;
	}

	public function setCaratula($caratula) {
		$this -> caratula = $caratula;
	}
	
	public function getDateCd() {
		return $this -> date_cd;
	}

	public function setDateCd($date_cd) {
		$this -> date_cd = $date_cd;
	}
	
	public function getAutor() {
		return $this -> autor;
	}

	public function setAutor($autor) {
		$this -> autor = $autor;
	}
	
	public function __construct($name, $caratula, $date_cd, $autor, $id = null) {
		$this -> id = $id;
		$this -> name = $name;
		$this -> caratula = $caratula;
		$this -> date_cd = $date_cd;
		$this -> autor = $autor;
	}

	public static function registerCD($name,$caratula,$autor)
	{
		$conectar = new Conectar();
		$date_cd = date('Y-m-d'.' h:i:s');
		$create = 1;
		$query = $conectar -> prepare('INSERT INTO ' . self::TABLA . ' (name,caratula,date_cd,autor,create) VALUES (:name, :caratula, :date_cd, :autor, :create)');
		$query -> bindParam(':name', $name);
		$query -> bindParam(':caratula', $caratula);
		$query -> bindParam(':date_cd', $date_cd);
		$query -> bindParam(':autor', $autor);
		$query -> bindParam(':create', $create);
		$query -> execute();
		$conectar = null;	
	}
	
	public static function allCd()
	{
		$conectar = new Conectar();
		$query = $conectar -> prepare('SELECT * FROM ' . self::TABLA . ' ORDER BY date_cd' );
		$query -> execute();
		$data = $query -> fetchAll();
		return $data;
		$conectar = null;
	}
	
}
?>