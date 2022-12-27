<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021

require_once "controllers/hab_tour.php";
$op =  isset($_GET['op']) ? intval($_GET['op']) : 0;
$id =  isset($_GET['id']) ? intval($_GET['id']) : 0;



$HabTourController = new HabTourController();
$HabTourController->iniciar($op,$id);


?>
