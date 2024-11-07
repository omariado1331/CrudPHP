<?php
require_once "../models/persona.model.php";
//Accede a el metodo mostrarDatos(), para obtener todos los datos de la tabla personas
echo json_encode(Persona::mostrarDatos());