<?php
require_once "../models/persona.model.php";
//Guarda en un array los datos de la persona
$arrayName = array('nombre' => $_POST['nombre'], 'email' => $_POST['email'], 'edad' => $_POST['edad']);
//envía los datos para guardar en la base de datos
echo json_encode(Persona::guardarDatos($arrayName));