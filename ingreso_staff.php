<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021


require_once "controllers/ing_staff.php";

$op =  isset($_GET['op']) ? intval($_GET['op']) : 0;
$recordar = isset($_POST['recordar']) ? $_POST['recordar'] : "F";
$email = isset($_COOKIE["usr"]) ? $_COOKIE["usr"]  : "";
$clave = isset($_COOKIE["passwd"]) ? $_COOKIE["passwd"] : "";
$staff_recordar = isset($_COOKIE["staff_recordar"]) ? $_COOKIE["staff_recordar"] : "F";

$IngStaffController = new IngresoStaffController();

switch ($op) {
  case 1:
    if($recordar == "T"){
      setcookie("usr",$_POST['email']);
      setcookie("passwd",$_POST['clave']);
      setcookie("staff_recordar","T");
    }else{
      setcookie("usr","");
      setcookie("passwd","");
      setcookie("staff_recordar","");
    }
    $IngStaffController->loginStaff($_POST['email'],$_POST['clave']);
    break;
  default:
    $IngStaffController->IngStaff($email, $clave, $staff_recordar);
    break;
}



?>
