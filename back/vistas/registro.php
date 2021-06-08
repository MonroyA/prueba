<form class="formulario" method="post">
    <h1>Registrate</h1>
    <div class="contenedor">
        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="text" placeholder="Usuario" name="registroUsuario">
        </div>
        <div class="input-contenedor">
            <i class="fas fa-envelope icon"></i>
            <input type="text" placeholder="Correo Electronico" name="registroCorreo">
        </div>
        <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" placeholder="Contraseña" name="registroPassword">
        </div>

        <?php 
            $registro = ControladorFormularios::ctrRegistro();
            if ($registro=="ok") {
                echo '<script>
                        if(window.history.replaceState){
                            window.history.replaceState(null ,null , window.location.href);
                        }
                    </script>';
                echo '<div class="alert alert-success">El usuario ha sido registrado</div>'; 
            }
        ?>
        <input type="submit" value="Registrate" class="button">
        <p>¿Ya tienes cuenta? <a class="link" href="index.html">Iniciar Sesion</a></p>
    </div>


</form>
