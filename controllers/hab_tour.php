<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021

include "models/db.php";

class HabTourController {

	public $inicio;

	public function __construct() {
	}

	public function iniciar($op,$id){


		$db = new DB();
		$consulta = "SELECT id, tipo, url_img FROM imghabitacion  WHERE tipo='$op' ";
		$sentencia = $db->getConexion()->prepare($consulta);

		if($sentencia->execute()){
			if($sentencia->rowCount() == 0){
				$fotos = null;
			}else{
				$fotos = $sentencia->fetchAll();
			}
		}


		switch ($op) {
			case 1:
				$titulo = "Habitación Sencilla";
				$mensaje = "La habitacion sencilla esta equipada para recibir una pareja o un ".
									"grupo pequeño, tiene las comodidades necesarias para que pueda ".
									"disfrutar su visita.";
				break;
			case 2:
				$titulo = "Habitación Doble";
				$mensaje = "Pensada para grupos un poco mas grandes hasta 2 personas, ".
										"con todas las comodidades necesarias para que pueda disfrutar su visita. ";
				break;
			case 3:
				$titulo = "Habitación Triple";
				$mensaje = "Pensada para grupos de 3 o 4 personas, con todas las comodidades necesarias ".
										"para que pueda disfrutar su visita.";
				break;
			default:
				$titulo = "no disponible";
				$mensaje = "...no disponible...";
				break;
		}
		include "views/hab_tour.php";



	}
}

?>
