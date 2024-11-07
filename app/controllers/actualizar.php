<?php
require_once "../models/persona.model.php"; 

//En un array obtenemos los datos actualizados
$arrayName = array('nombre' => $_POST['nombre'], 
'email' => $_POST['email'], 
'edad' => $_POST['edad'],
'id' => $_POST['id']);
//Dentro de un array envía los datos actualizados para modificarlos en la base de datos
echo json_encode(Persona::actualizarDato($arrayName));
