<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021
include "models/db.php";

class SubirComprobanteController {

	public $inicio;

	public function __construct() {
	}

	public function inicio($id){


		$hab = 0;
		$db = new DB();
    $consulta = "SELECT id, id_usuario, nombre, tipo, status  FROM habitaciones  WHERE status = '1' AND id_usuario='".$id."' ";
    $sentencia = $db->getConexion()->prepare($consulta);

    if($sentencia->execute()){
      if($sentencia->rowCount() == 0){
        $disponibles = null;
				$reservaciones = null;
      }else{
        $reservaciones = $sentencia->fetchAll();
      }
    }
    include "views/sbr_comp.php";
	}

	public function formulario($id,$hab){
		include "views/sbr_comp.php";
	}
	public function subir($id,$hab){
		$target_dir = "views/img/comprobantes/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$target_file = $target_dir . $id."-".$hab."_". time().".jpg";


		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		  if($check !== false) {
		    echo "El archivo es una imagen - " . $check["mime"] . ".<br>";
		    $uploadOk = 1;
		  } else {
		    echo "El archivo no es una imagen.";
		    $uploadOk = 0;
		  }
		}

		// Check if file already exists
		if (file_exists($target_file)) {
		  echo "Error: el archivo ya existe.";
		  $uploadOk = 0;
		}

		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
		  echo "El archivo es demasiado grande.";
		  $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		  echo "Solo se admiten imagenes: JPG, JPEG, PNG & GIF";
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		    echo "Se subio el archivo: ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). "<br>";
		  } else {
		    echo "Sorry, there was an error uploading your file.";
		  }
		}

		$db = new DB();
		$consulta = "INSERT INTO comprobantes (id, fecha, id_hab, id_vis, status, url_img) ".
									"VALUES (null,'".date( 'Y-m-d H:i:s' )."','".$hab."','".$id."','0','".$target_file."')";
		$sentencia = $db->getConexion()->prepare($consulta);

		if($sentencia->execute()){
			if($sentencia->rowCount() == 0){
				$disponibles = null;
			}else{
				echo "Se ha informado de su pago, debe esperar que este validado<br>";
			}
		}
		$consulta = "UPDATE habitaciones SET status = '2' WHERE id = '".$hab."' LIMIT 1";

		$sentencia = $db->getConexion()->prepare($consulta);

		if($sentencia->execute()){
			if($sentencia->rowCount() == 0){
				$disponibles = null;
			}else{
				echo "Por favor espere que nuestro personal valide su comprobante.";
			}
		}



	}


}

?>
