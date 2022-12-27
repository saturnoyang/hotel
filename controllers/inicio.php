<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021


class InicioController {

	public $inicio;

	public function __construct() {
	}

	public function iniciar(){
		include "views/inicio.php";
	}
}

?>
