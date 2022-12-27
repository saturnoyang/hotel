<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021

require_once "controllers/reservas.php";

$id =  isset($_GET['id']) ? intval($_GET['id']) : 0;
$op =  isset($_GET['op']) ? intval($_GET['op']) : 0;
$reservar = isset($_GET['rsrv']) ? intval($_GET['rsrv']) : 0;


$ReservaController = new ReservaController();
if($reservar == 0){
  $ReservaController->inicio($id);
}else{
  $ReservaController->GuardarReserva($op,$id);
}



?>
