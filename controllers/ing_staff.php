<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021


include "models/db.php";

class IngresoStaffController {

	public function __construct() {
	}

	public function IngStaff($email, $clave, $recordar){
		include "views/ing_staff.php";
	}

	public function loginStaff( $correo, $clave ){
		$db = new DB();
		$consulta = "SELECT id, nombres, apellido_pa, apellido_ma, depto, correo, clave  FROM personal WHERE correo='$correo' AND clave='$clave'";
		$sentencia = $db->getConexion()->prepare($consulta);

		if($sentencia->execute()){
			if($sentencia->rowCount() == 0){
				echo "Clave incorrecta"."<br>\n";
			}else{
				$rs = $sentencia->fetchAll();
				$nombre_completo = $rs[0]['nombres'] .  "<br>"  . $rs[0]['apellido_pa'] . " " . $rs[0]['apellido_ma'];
				$departamento = $rs[0]['depto'];

				switch ($departamento) {
					case 1: // Gerencia
						include "views\dash_gerencia.php";
						break;
					case 2: // Recepcion
						include "views\dash_recepcion.php";
						break;
					case 3: // Servicio Habitaciones
						include "views\dash_servhab.php";
						break;
				}
			}
		}

	}

}

?>
