<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021

require_once "controllers/salida_vist.php";
$op =  isset($_GET['op']) ? intval($_GET['op']) : 0;
$hab_id =  isset($_GET['hab_id']) ? intval($_GET['hab_id']) : 0;

$SalidaVisitanteController = new SalidaVisitanteController();

switch ($op) {
  case 1:
    $SalidaVisitanteController->salir($hab_id);
    break;

  default:
    $SalidaVisitanteController->inicio();
    break;
}


?>
