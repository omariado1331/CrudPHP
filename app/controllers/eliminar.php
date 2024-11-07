<?php
require_once "../models/persona.model.php";
//envía el id de la persona, para eliminar su registro de la base de datos
echo json_encode(Persona::eliminarDato($_POST['id']));