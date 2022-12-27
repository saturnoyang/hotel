<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021
include "models/db.php";

class ConfirmarPagosController {

	public $inicio;

	public function __construct() {
	}

	public function inicio(){

    $db = new DB();
    $consulta = "SELECT comprobantes.fecha, visitantes.nombres, visitantes.apellido_pa, visitantes.apellido_ma, ".
												"comprobantes.status, comprobantes.url_img, habitaciones.nombre AS HABITACION, ".
												"comprobantes.id AS cmp_id, habitaciones.id AS hab_id ".
								"FROM visitantes, comprobantes, habitaciones ".
								"WHERE visitantes.id = comprobantes.id_vis ".
									"AND habitaciones.id = comprobantes.id_hab AND comprobantes.status = '0'";

    $sentencia = $db->getConexion()->prepare($consulta);

    if($sentencia->execute()){
      if($sentencia->rowCount() == 0){
        $PagosPendientes = null;
      }else{
        $PagosPendientes = $sentencia->fetchAll();
      }
    }
    include "views/cnfr_pagos.php";
	}

	public function aceptar($hab_id,$comp_id){

		$db = new DB();
		$consulta = "UPDATE comprobantes SET status = '1' WHERE id = '".$comp_id."' LIMIT 1";

		$sentencia = $db->getConexion()->prepare($consulta);

		if($sentencia->execute()){
			if($sentencia->rowCount() == 0){
				$disponibles = null;
			}else{
				echo "Actualizada tabla de comprobantes<br>\n";
			}
		}
		$consulta = "UPDATE habitaciones SET status = '3' WHERE id = '".$hab_id."' LIMIT 1";

		$sentencia = $db->getConexion()->prepare($consulta);

		if($sentencia->execute()){
			if($sentencia->rowCount() == 0){
				$disponibles = null;
			}else{
				echo "Actualizada tabla de habitaciones<br>\n";
			}
		}

	}
	public function rechazar($hab_id,$comp_id){
		$db = new DB();
		$consulta = "UPDATE comprobantes SET status = '2' WHERE id = '".$comp_id."' LIMIT 1";

		$sentencia = $db->getConexion()->prepare($consulta);

		if($sentencia->execute()){
			if($sentencia->rowCount() == 0){
				$disponibles = null;
			}else{
				echo "Actualizada tabla de comprobantes<br>\n";
			}
		}
		$consulta = "UPDATE habitaciones SET status = '1' WHERE id = '".$hab_id."' LIMIT 1";

		$sentencia = $db->getConexion()->prepare($consulta);

		if($sentencia->execute()){
			if($sentencia->rowCount() == 0){
				$disponibles = null;
			}else{
				echo "Actualizada tabla de habitaciones<br>\n";
			}
		}




	}



}

?>
