<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021
include "models/db.php";

class CheckinController {

	public $inicio;

	public function __construct() {
	}

	public function inicio(){

    $db = new DB();
    $consulta = "SELECT habitaciones.nombre, habitaciones.tipo,habitaciones.id AS hab_id, ".
										"habitaciones.status, visitantes.nombres,visitantes.apellido_pa,visitantes.apellido_ma, ".
										"visitantes.correo, visitantes.id AS vis_id ".
								"FROM habitaciones, visitantes ".
								"WHERE habitaciones.id_usuario = visitantes.id AND habitaciones.status = 3 ";

    $sentencia = $db->getConexion()->prepare($consulta);

    if($sentencia->execute()){
      if($sentencia->rowCount() == 0){
        $PagosPendientes = null;
      }else{
        $PagosPendientes = $sentencia->fetchAll();
      }
    }
    include "views/ing_checkin.php";
	}

	public function ingresar($hab_id){

		$db = new DB();

		$consulta = "UPDATE habitaciones SET status = '4' WHERE id = '".$hab_id."' LIMIT 1";

		$sentencia = $db->getConexion()->prepare($consulta);

		if($sentencia->execute()){
			if($sentencia->rowCount() == 0){
				$disponibles = null;
			}else{
				echo "Actualizada tabla de habitaciones<br>Bienvenido\n";
			}
		}

	}



}

?>
