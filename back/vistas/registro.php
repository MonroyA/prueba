<form class="formulario" method="post">
    <h1>Regístrate</h1>
    <div class="contenedor">
        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="text" placeholder="Usuario" name="registroUsuario">
        </div>
        <div class="input-contenedor">
            <i class="fas fa-envelope icon"></i>
            <input type="text" placeholder="Correo electrónico" name="registroCorreo">
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
                            // window.location = "../index.php?pagina=ingreso";
                        }

                    </script>';
                echo '<div class="alert alert-success">El usuario ha sido registrado</div>'; 
            }
        ?>
        <input type="submit" value="Regístrate" class="button">
        <input type="submit" value="Regístrate con Gmail" class="button2">
        <input type="submit" value="Regístrate con Facebook" class="button3">
        <p>¿Ya tienes cuenta? <a class="link" href="../index.php?pagina=ingreso">Iniciar sesión</a></p>
    </div>


</form>
