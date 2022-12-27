<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021


include "models/db.php";

class IngVisitanteController {

	public function __construct() {
	}

	public function IngVisitante($email, $clave, $recordar){
		include "views/ing_visitante.php";
	}

	public function loginVisitante($correo, $clave){

		$db = new DB();
		$consulta = "SELECT id, nombres, apellido_pa, apellido_ma, correo, clave FROM visitantes WHERE correo='$correo' AND clave='$clave'";
		$sentencia = $db->getConexion()->prepare($consulta);

		if($sentencia->execute()){
			if($sentencia->rowCount() == 0){
				echo "Clave incorrecta"."<br>\n";
			}else{
				$rs = $sentencia->fetchAll();
				$nombre_completo = $rs[0]['nombres'] . "<br>" . $rs[0]['apellido_pa'] . " " . $rs[0]['apellido_ma'];
				$id_visitante = $rs[0]['id'];
				include "views/dash_visitante.php";

			}
		}



	}

}

?>
