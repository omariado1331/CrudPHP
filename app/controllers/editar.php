<?php
require_once "../models/persona.model.php";
//Envía el id de la persona, para obtener sus datos de la base de datos
echo json_encode(Persona::obtenerDatosId($_POST['id']));