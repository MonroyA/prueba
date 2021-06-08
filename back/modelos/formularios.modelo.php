<?php
require_once "conexion.php";

class ModeloFormularios{
    // CREAR REGISTRO
    static public function mdlRegistro($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(usuario, correo, password) VALUES 
        (:usuario, :correo, :password)");

        $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        }else {
            print_r(Conexion::conectar()->errorInfo());
        }
    }
}