<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021


include "models/db.php";

class RegStaffController {

	public function __construct() {
	}

	public function RegStaff(){
		include "views/reg_staff.php";
	}


  public function GuardarStaff( $nombres, $apellido_pa, $apellido_ma, $depto, $correo, $passwd ){

    $db = new DB();
    $consulta = "SELECT correo FROM personal WHERE correo='$correo'";
    $sentencia = $db->getConexion()->prepare($consulta);
		$mensaje = "";
		$imagen = "";
		$vinculo = "";
		$boton = "";
		$boton_msg = "";


    if($sentencia->execute()){
      if($sentencia->rowCount() == 0){

        $consulta = "INSERT INTO personal (id, nombres, apellido_pa, apellido_ma, depto, correo, clave) ".
                    "VALUES (null, '$nombres','$apellido_pa','$apellido_ma',$depto,'$correo','$passwd');";

        $sentencia = $db->getConexion()->prepare($consulta);

        if($sentencia->execute()){
									$imagen = "views/img/gracias.jpg";
									$mensaje = "Se guardo un nuevo integrante del staff";
									$vinculo = "index.php";
									$boton = "btn btn-lg btn-primary";
									$boton_msg = "Continuar";
        }else{
                  echo "Error: no se realizo";
                  echo "\nPDO::errorInfo():\n";
                  print_r($db->errorInfo());

        }
      }else{
				$imagen = "views/img/error.jpg";
				$mensaje = "Este integrante ya existe en la BBDD";
				$vinculo = "javascript:window.history.back()";
				$boton = "btn btn-lg btn-danger";
				$boton_msg = "Volver!";
    }

  }
	include "views/mensajes.php";





	}
}

?>
