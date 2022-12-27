<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021

require_once "controllers/ing_visitante.php";

$op =  isset($_GET['op']) ? intval($_GET['op']) : 0;
$recordar = isset($_POST['recordar']) ? $_POST['recordar'] : "F";
$email = isset($_COOKIE["visit_usr"]) ? $_COOKIE["visit_usr"]  : "";
$clave = isset($_COOKIE["visit_passwd"]) ? $_COOKIE["visit_passwd"] : "";
$visit_recordar = isset($_COOKIE["visit_recordar"]) ? $_COOKIE["visit_recordar"] : "F";

$IngVisitanteController = new IngVisitanteController();

switch ($op) {
  case 1:
    if($recordar == "T"){
      setcookie("visit_usr",$_POST['email']);
      setcookie("visit_passwd",$_POST['clave']);
      setcookie("visit_recordar","T");
    }else{
      setcookie("visit_usr","");
      setcookie("visit_passwd","");
      setcookie("visit_recordar","");
    }
    $IngVisitanteController->loginVisitante($_POST['email'],$_POST['clave']);
    break;
  default:
    $IngVisitanteController->IngVisitante($email, $clave, $visit_recordar);
    break;
}






?>
