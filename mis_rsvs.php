<?php
// Proyecto (Sistema de reservas para hotel) MVC
// Ricardo Sanchez.
// 2021

require_once "controllers/mis_rsvs.php";

$id =  isset($_GET['id']) ? intval($_GET['id']) : 0;

$MisReservaController = new MisReservaController();

$MisReservaController->inicio($id);




?>
