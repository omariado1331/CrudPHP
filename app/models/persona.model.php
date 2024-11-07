<?php
require_once "../config/connection.php";    
class Persona extends Connection{

    //Conecta con la base de datos y obtiene todos los registros de la tabla para mostrarlos
    public static function mostrarDatos(){
        try {
            $sql = "SELECT * FROM persona";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    } 

    //Conecta con la base de datos para obtener los datos de una persona, como parámetro se recibe el id
    public static function obtenerDatosId($id){
        try {
            $sql = "SELECT * FROM persona WHERE id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
     
    //Conecta con la base de datos para guardar un registro en la tabla, recibimos una data con los datos de la persona
    public static function guardarDatos($data){
        try {
            $sql = "INSERT INTO persona (nombre, email, edad) VALUES (:nombre, :email, :edad)";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':nombre', $data['nombre']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':edad', $data['edad']);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    //Conectamos con la base de datos para editar un registro, como parametro recibimos una data que contiene los datos actualizados
    public static function actualizarDato($data){
        try {
            $sql = "UPDATE persona SET nombre = :nombre, email = :email, edad = :edad WHERE id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':nombre', $data['nombre']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':edad', $data['edad']);
            $stmt->bindParam(':id', $data['id']); 
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    //Conecta con la base de datos y elimina el registro, se pasan como parámetro el id
    public static function eliminarDato($id){
        try {
            $sql = "DELETE FROM persona WHERE id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam('id', $id); 
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>