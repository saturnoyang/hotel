<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021


class DB {
	private $conex;

	function __construct() {
		try {
			$this->conex = new PDO('mysql:host=localhost;dbname=hotel_bosque', 'root', '');
		}
		catch (PDOException $e){
			$this->conex = null;
		}
	}

	function getConexion() {
		return $this->conex;
	}

}

?>
