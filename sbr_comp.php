<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021

require_once "controllers/sbr_comp.php";

$id =  isset($_GET['id']) ? intval($_GET['id']) : 0;
$op =  isset($_GET['op']) ? intval($_GET['op']) : 0;
$hab =  isset($_GET['hab']) ? intval($_GET['hab']) : 0;

$SubirComprobanteController = new SubirComprobanteController();

switch ($op) {
  case 2:
    $SubirComprobanteController->formulario($id,$hab);
    break;
  case 3:
    $SubirComprobanteController->subir($id,$hab);
    break;
  default:
    $SubirComprobanteController->inicio($id);
    break;
}


?>
