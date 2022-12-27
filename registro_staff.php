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

require_once "controllers/reg_staff.php";
$RegStaffController = new RegStaffController();

switch ($op) {
  case 1:
    if($_POST['passwd1'] == $_POST['passwd2']){
      $RegStaffController->GuardarStaff($_POST['nombres'], $_POST['apellido_pa'], $_POST['apellido_ma'],
                              $_POST['depto'], $_POST['correo'],$_POST['passwd1']);

    }
    break;
  default:
    $RegStaffController->RegStaff();
    break;
}


?>
