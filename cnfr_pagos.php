<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021

require_once "controllers/cnfr_pagos.php";
$op =  isset($_GET['op']) ? intval($_GET['op']) : 0;
$hab_id =  isset($_GET['hab_id']) ? intval($_GET['hab_id']) : 0;
$comp_id =  isset($_GET['comp_id']) ? intval($_GET['comp_id']) : 0;

$ConfirmarPagosController = new ConfirmarPagosController();



switch ($op) {
  case 1:
    $ConfirmarPagosController->aceptar($hab_id,$comp_id);
    break;
  case 2:
    $ConfirmarPagosController->rechazar($hab_id,$comp_id);
    break;
  default:
    $ConfirmarPagosController->inicio();
    break;
}


?>
