<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021
include "models/db.php";

class MisReservaController {

	public $inicio;

	public function __construct() {
	}

	public function inicio($id){

    $db = new DB();
    $consulta = "SELECT id, id_usuario, nombre, tipo, status  FROM habitaciones  WHERE status != '0' AND id_usuario='".$id."' ";
    $sentencia = $db->getConexion()->prepare($consulta);

    if($sentencia->execute()){
      if($sentencia->rowCount() == 0){
        $disponibles = null;
				$reservaciones = null;
      }else{
        $reservaciones = $sentencia->fetchAll();
      }
    }
    include "views/mis_rsvs.php";
	}



}

?>
