<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021

require_once "controllers/ing_checkin.php";
$op =  isset($_GET['op']) ? intval($_GET['op']) : 0;
$hab_id =  isset($_GET['hab_id']) ? intval($_GET['hab_id']) : 0;
$comp_id =  isset($_GET['comp_id']) ? intval($_GET['comp_id']) : 0;

$CheckinController = new CheckinController();



switch ($op) {
  case 1:
    $CheckinController->ingresar($hab_id);
    break;

  default:
    $CheckinController->inicio();
    break;
}


?>
