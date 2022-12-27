<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021


/*

echo $_COOKIE["staff_usr"];
echo $_COOKIE["staff_psswd"];
echo $_COOKIE["visit_usr"];
echo $_COOKIE["visit_psswd"];

*/
$op =  isset($_GET['op']) ? intval($_GET['op']) : 0;

require_once "controllers/reg_visitante.php";

$RegVisitanteController = new RegVisitanteController();


switch ($op) {
  case 1:
    if($_POST['passwd1'] == $_POST['passwd2']){
      $RegVisitanteController->GuardarVisitante($_POST['nombres'], $_POST['apellido_pa'], $_POST['apellido_ma'],
                               $_POST['correo'],$_POST['passwd1']);

    }
    break;
  default:

    $RegVisitanteController->RegVisitante();
    break;
}


?>
