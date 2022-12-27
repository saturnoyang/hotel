<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021


include "models/db.php";

class RegVisitanteController {



	public function __construct() {
	}

	public function RegVisitante(){
		include "views/reg_visitante.php";
	}

	public function GuardarVisitante( $nombres, $apellido_pa, $apellido_ma, $correo, $passwd ){

		$db = new DB();
		$consulta = "SELECT correo FROM visitantes WHERE correo='$correo'";
		$sentencia = $db->getConexion()->prepare($consulta);
		$mensaje = "";
		$imagen = "";
		$vinculo = "";
		$boton = "";
		$boton_msg = "";

		if($sentencia->execute()){
			if($sentencia->rowCount() == 0){

				$consulta = "INSERT INTO visitantes (id, nombres, apellido_pa, apellido_ma, correo, clave) ".
										"VALUES (null, '$nombres','$apellido_pa','$apellido_ma','$correo','$passwd');";

				$sentencia = $db->getConexion()->prepare($consulta);

				if($sentencia->execute()){
									$imagen = "views/img/gracias.jpg";
									$mensaje = "Se guardo un nuevo Visitante, Bienvenido!!!";
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
				$mensaje = "Este visitante ya existe en la BBDD";
				$vinculo = "javascript:window.history.back()";
				$boton = "btn btn-lg btn-danger";
				$boton_msg = "Volver!";
		}
	}
	include "views/mensajes.php";
}



}

?>
