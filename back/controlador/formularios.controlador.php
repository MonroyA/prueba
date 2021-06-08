<?php

class ControladorFormularios{
    // CREAR REGISTRO 
    static public function ctrRegistro(){
        if (isset($_POST["registroUsuario"])) {
            $tabla = "login";
            $datos = array('usuario' =>$_POST["registroUsuario"],
            'correo' =>$_POST["registroCorreo"],
            'password' =>$_POST["registroPassword"]);
            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
            return $respuesta;
        }
    }
}