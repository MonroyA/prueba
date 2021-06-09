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

    // INGRESO
    public function ctrIngreso(){
        if (isset($_POST["ingresoUsuario"])) {
            # code...
            $tabla = "login";
            $item =  "usuario";
            $valor = $_POST["ingresoUsuario"];
            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
            // print_r($respuesta);
            if ($respuesta["usuario"] == $_POST["ingresoUsuario"] && $respuesta["password"] == $_POST["ingresoPassword"]) {
                $_SESSION["validarIngreso"] = "ok";
                echo "ingreso exitoso";
                echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null ,null , window.location.href);
                }
                window.location = "../index.php?pagina=dentro";

            </script>';
            }else{
                echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null ,null , window.location.href);
                }

            </script>';
        echo '<div class="alert alert-success">Error al ingresar</div>'; 

            }
        }
    }
}