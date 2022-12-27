<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021
include "models/db.php";

class ReservaController {

	public $inicio;

	public function __construct() {
	}

	public function inicio($id){

    $db = new DB();
    $consulta = "SELECT count(*) as disponibles FROM habitaciones  WHERE status = '0' AND tipo='1' ";
    $sentencia = $db->getConexion()->prepare($consulta);

    if($sentencia->execute()){
      if($sentencia->rowCount() == 0){
        $disponibles = null;
      }else{
        $disponibles = $sentencia->fetchAll();
      }
    }
    $sencilla_count = $disponibles[0]['disponibles'];

    $consulta = "SELECT count(*) as disponibles FROM habitaciones  WHERE status = '0' AND tipo='2' ";
    $sentencia = $db->getConexion()->prepare($consulta);

    if($sentencia->execute()){
      if($sentencia->rowCount() == 0){
        $disponibles = null;
      }else{
        $disponibles = $sentencia->fetchAll();
      }
    }
    $doble_count = $disponibles[0]['disponibles'];

    $consulta = "SELECT count(*) as disponibles FROM habitaciones  WHERE status = '0' AND tipo='3' ";
    $sentencia = $db->getConexion()->prepare($consulta);

    if($sentencia->execute()){
      if($sentencia->rowCount() == 0){
        $disponibles = null;
      }else{
        $disponibles = $sentencia->fetchAll();
      }
    }
    $triple_count = $disponibles[0]['disponibles'];
    $tipo = 0 ;
    include "views/reservas.php";
	}

  public function GuardarReserva($tipo,$visitante){

    $db = new DB();
    $consulta = "SELECT id, id_usuario, nombre, tipo, status FROM habitaciones ".
                  "WHERE status = '0' AND tipo='$tipo' AND id_usuario = '0' LIMIT 1 ";
    $sentencia = $db->getConexion()->prepare($consulta);

    if($sentencia->execute()){
      if($sentencia->rowCount() == 0){
        $disponibles = null;
      }else{
        $disponibles = $sentencia->fetchAll();
      }
    }
    $id_habitacion = $disponibles[0]['id'];
    $nombre_hab = $disponibles[0]['nombre'];

    $consulta = "UPDATE habitaciones SET status = '1', id_usuario ='".$visitante."' ".
                    "WHERE id='".$id_habitacion."' LIMIT 1";
    $sentencia = $db->getConexion()->prepare($consulta);

    if($sentencia->execute()){
        if($sentencia->rowCount() == 0){
          $disponibles = null;
        }
    }
    include "views/reservas.php";
  }

}

?>
